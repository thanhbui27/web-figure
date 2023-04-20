<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\postModel;
use App\Models\ImgBModel;
use App\Models\CommentBlogModel;
use App\Models\blog_likeModel;
use Carbon\Carbon;

class postController extends Controller
{
    public function index()
    {
        $listBlog = postModel::join('person', 'person.id_per', '=', 'blog.id_cus')->paginate(10);
        $newBlog = postModel::join('person', 'person.id_per', '=', 'blog.id_cus')->limit(5)->get();
        $img = ImgBModel::get();
        return view('blog')->with([
            'listBlog' => $listBlog,
            'newBlog' => $newBlog,
            'img' => $img
        ]);
    }
    public function create(Request $request)
    {
        $title = $request->blogTitle;
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $name = time() . '.' . $request->file('image')->extension();
        $request->file('image')->move(public_path('layout/Img'), $name);

        $content  = $request->postContent;
        $currentTime = Carbon::now('Asia/Ho_Chi_Minh');
        postModel::create([
            'id_cus' => session('id_cus'),
            'title' => $title,
            'img_bg' => $name,
            'dates' => $currentTime->toDateTimeString(),
            'content' => $content
        ]);
        return redirect('blog');
    }
    public function show(Request $request)
    {
        $detailPost = postModel::find($request->id);
        $newBlog = postModel::join('person', 'person.id_per', '=', 'blog.id_cus')->limit(5)->get();
        $comment = CommentBlogModel::join('person', 'person.id_per', '=', 'comment_blog.id_cus')->where('id_blog', $request->id)->orderBy('id_com', 'desc')->get();
        $feellike = blog_likeModel::where('id_blog', $request->id)->where('likes', 1)->count();
        $feeldislike = blog_likeModel::where('id_blog', $request->id)->where('dislike', 1)->count();
        $islike = blog_likeModel::where('id_cus', session('id_cus'))->where('id_blog', $request->id)->where('likes', 1)->first();
        $isDislike = blog_likeModel::where('id_cus', session('id_cus'))->where('id_blog', $request->id)->where('dislike', 1)->first();
        return view('detailPost')->with([
            'detailsPost' => $detailPost,
            'newBlog' => $newBlog,
            'comment' => $comment,
            'feellike' =>  $feellike,
            'feeldislike' => $feeldislike,
            'isLike' => $islike,
            'isDislike' => $isDislike
        ]);
    }
    public function createComment(Request $request)
    {
        $currentTime = Carbon::now('Asia/Ho_Chi_Minh');
        $id_blog = $request->id_blog;
        $content = $request->content;
        CommentBlogModel::create([
            'id_blog' => $id_blog,
            'id_cus' => session('id_cus'),
            'dates' => $currentTime->toDateTimeString(),
            'content' => $content
        ]);

        $comment = CommentBlogModel::join('person', 'person.id_per', '=', 'comment_blog.id_cus')->where('id_blog', $id_blog)->orderBy('id_com', 'desc')->get();
        return view('response.responseComment')->with(['productList' =>  $comment]);
    }

    public function feel(Request $request)
    {
        $action = $request->action;
        switch ($action) {
            case 'like':
                $id_blog = $request->id_blog;

                $updatelike = blog_likeModel::where('id_cus', session('id_cus'))->where('id_blog', $id_blog)->first();
                if (!$updatelike) {
                    blog_likeModel::create([
                        'id_blog' =>  $id_blog,
                        'id_cus' => session('id_cus'),
                    ]);
                }
                if ($updatelike->likes === 0) {
                    $updatelike->likes = 1;
                    $updatelike->save();
                }
                if ($updatelike->likes === 1 && $updatelike->dislike === 1) {
                    $updatelike->dislike = 0;
                    $updatelike->save();
                    $feellike = blog_likeModel::where('id_blog', $id_blog)->where('likes', 1)->count();
                    $feeldislike = blog_likeModel::where('id_blog', $id_blog)->where('dislike', 1)->count();
                    $arr = [
                        'like' => $feellike,
                        'dislike' => $feeldislike
                    ];
                    return $arr;
                } else {
                    $feellike = blog_likeModel::where('id_blog', $id_blog)->where('likes', 1)->count();
                    $feeldislike = blog_likeModel::where('id_blog', $id_blog)->where('dislike', 1)->count();
                    $arr = [
                        'like' => $feellike,
                        'dislike' => $feeldislike
                    ];
                    return $arr;
                }
                break;
            case 'dislike':
                $id_blog = $request->id_blog;
                $updateDislike = blog_likeModel::where('id_cus', session('id_cus'))->where('id_blog', $id_blog)->first();
                if (!$updateDislike) {
                    blog_likeModel::create([
                        'id_blog' =>  $id_blog,
                        'id_cus' => session('id_cus'),
                    ]);
                }
                if ($updateDislike->dislike === 0) {
                    $updateDislike->dislike = 1;
                    $updateDislike->save();
                }
                if ($updateDislike->likes === 1 && $updateDislike->dislike === 1) {
                    $updateDislike->likes = 0;
                    $updateDislike->save();
                    $feellike = blog_likeModel::where('id_blog', $id_blog)->where('likes', 1)->count();
                    $feeldislike = blog_likeModel::where('id_blog', $id_blog)->where('dislike', 1)->count();
                    $arr = [
                        'like' => $feellike,
                        'dislike' => $feeldislike
                    ];
                    return $arr;
                } else {
                    $feellike = blog_likeModel::where('id_blog', $id_blog)->where('likes', 1)->count();
                    $feeldislike = blog_likeModel::where('id_blog', $id_blog)->where('dislike', 1)->count();
                    $arr = [
                        'like' => $feellike,
                        'dislike' => $feeldislike
                    ];
                    return $arr;
                }
                break;
        }
    }
}
