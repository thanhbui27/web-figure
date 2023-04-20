@extends('layouts.layout')
@section('title','detail post')
@section('mains')
@if(isset($detailsPost))
<div class="body">
  <div class="none"></div>
  <section class="blog-slide">
    <div class="blog-img">
      <img src="{{asset('layout/Img/Violet-Evergarden-Wallpapersun-7.png')}}" alt="">
    </div>
    @if(session()->has('id'))
    <div class="post-blog">
      <a href="{{route('postBlog')}}"><i class="fas fa-plus"></i></a>
    </div>
    @endif
  </section>
  <session class="blog-box">
    <div class="blog-row">
      <div class="blog-row-left colums-4">
        <div class="title">
          <h4>Bài viết mới nhất</h4>
        </div>
        <div class="blog-container-left">
          @if(isset($newBlog))
          @foreach($newBlog as $newBlogs)
          <x-blog-new id="{{ $newBlogs['id_blog']}}" title="{{$newBlogs['title']}}" name="{{ $newBlogs['fullname']}}" date="{{ $newBlogs['dates']}}" img="{{ $newBlogs['img_bg']}}" />
          @endforeach
          @endif

        </div>
      </div>
      <div class="blog-row-right colums-8">
        <div class="title">
          <h2>Tin tức anime</h2>
        </div>
        <div class="blog-container">
          <div class="blog-box">
            <h1> {{$detailsPost['title']}} </h1>
            <span>{{$detailsPost['date']}}</span>
            <div class="details">
              {!! html_entity_decode($detailsPost['content']) !!}
            </div>
          </div>
          <div class="feel">
            <div class="CountlikePost like">
              <span class="countLike" data-blog="{{$detailsPost['id_blog']}}" data-like="{{$feellike === null ? 0 : $feellike }}">{{($feellike === null) ? 0 : $feellike }}</span> <i class="far fa-thumbs-up {{$isLike !== null ? 'hasLike' : ''}} likePost"></i>
            </div>
            <div class="CountdisLike dislike">
              <span class="countdisLike" data-blog="{{$detailsPost['id_blog']}}" data-dislike="{{$feeldislike === null ? 0 : $feeldislike }}">{{($feeldislike === null) ? 0 : $feeldislike }}</span> <i class="far fa-thumbs-down {{$isDislike !== null ? 'hasLike' : ''}} dislikePost"></i>
            </div>
          </div>

          <div class="comment">
            @if(!session() -> has('id'))
            <h3 style="color: aqua; width:100%">Vui lòng đăng nhập để bình luận</h3>
            @endif
            @if(session() -> has('id'))
            <div class="title-comment">
              <h3>Bình luận</h3>
            </div>
            <div class="cdk-comment">
              <div class="input-comment">
                <form action="{{route('CommentBlog')}}" method="get">
                  @csrf
                  <input type="hidden" id='id_blog' value="{{$detailsPost['id_blog']}}">
                  <textarea name="content" id="editor"></textarea>
                  <button>Bình luận</button>
                </form>
              </div>
              @endif
              <div class="show-comment">
                @foreach( $comment as $productLists)
                <input type="hidden" id="id_com" value="{{ $productLists['id_com'] }}">
                <div class="div-comment">
                  <div class="div-comment-img">
                    <img src="{{asset('layout/Img/gaixinh 600x600.png')}}" alt="">
                  </div>
                  <div class="commentContent">
                    <div class="title-comment">
                      <h4>{{$productLists['fullname']}}</h4>
                      <span>{{$productLists['dates']}}</span>
                    </div>
                    <div class="content">
                      {!! html_entity_decode($productLists['content']) !!}
                    </div>
                    <div class="adv-comment feel-comment">
                      <div class="like">
                        <span class="countLike">{{$productLists['like'] }}</span> <i class="far fa-thumbs-up likenek"></i>
                      </div>
                      <div class="dislike">
                        <span class="countdisLike">{{ $productLists['dislike'] }}</span> <i class="far fa-thumbs-down dislienek"></i>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </session>
</div>
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<script>
  CKEDITOR.replace('editor', {
    filebrowserUploadUrl: '{{asset("detailPost/layout/ckeditor/ck_upload.php")}}',
    filebrowserUploadMethod: 'form'
  });
</script>
@section('ajax')
<script src="{{asset('layout/Ajax/detailPost.js')}}"></script>
@stop()
@endif
@stop()