<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\blog_likeModel;
use App\Models\CommentBlogModel;
use App\Models\postModel;
use Illuminate\Http\Request;

class ApiBlog extends Controller
{
    public function index(){
        $newBlog = postModel::join('person', 'person.id_per', '=', 'blog.id_cus')->limit(4)->get();
        foreach($newBlog as $blog){
            $feellike = blog_likeModel::where('id_blog', $blog -> id_blog)->where('likes', 1)->count();
            $feeldislike = blog_likeModel::where('id_blog',  $blog -> id_blog)->where('dislike', 1)->count();
            $blog->setAttribute('feellike', $feellike);
            $blog->setAttribute('feeldislike', $feeldislike);   

        }
    
        return response($newBlog);
    }
    public function getAllBlog(){
        $newBlog = postModel::join('person', 'person.id_per', '=', 'blog.id_cus')->get();
        foreach($newBlog as $blog){
            $feellike = blog_likeModel::where('id_blog', $blog -> id_blog)->where('likes', 1)->count();
            $feeldislike = blog_likeModel::where('id_blog',  $blog -> id_blog)->where('dislike', 1)->count();
            $blog->setAttribute('feellike', $feellike);
            $blog->setAttribute('feeldislike', $feeldislike);   

        }
        return response($newBlog);
    }
    public function getCommentBlog(Request $request){
        $comment = CommentBlogModel::join('person', 'person.id_per', '=', 'comment_blog.id_cus')->where('id_blog', $request->id)->orderBy('id_com', 'desc')->get();
        return response($comment);

        
    }
}
