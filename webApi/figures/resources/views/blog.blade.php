@extends('layouts.layout')
@section('title','blog')

@section('mains')
<div class="body">
        <div class="none"></div>
        <section class="blog-slide">
          <div class="blog-img">
            <img src="{{asset('layout/Img')}}/{{$img[0] -> imgSlideB}}" alt="" />
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
              <x-blog-new id="{{ $newBlogs['id_blog']}}" title="{{$newBlogs['title']}}" name="{{ $newBlogs['fullname']}}" date="{{ $newBlogs['dates']}}"  img="{{ $newBlogs['img_bg']}}"  />
              @endforeach
              @endif
              </div>
            </div>
            <div class="blog-row-right colums-8">
              <div class="title">
                <h2>Tin tức anime</h2>
              </div>
              <div class="blog-container">
              @if(isset($listBlog))
                @foreach($listBlog as $listBlogs)
              <x-blog-list id="{{ $listBlogs['id_blog']}}" title="{{ $listBlogs['title']}}" name="{{ $listBlogs['fullname']}}" date="{{ $listBlogs['dates']}}" details="{{ $listBlogs['content']}}"  img="{{ $listBlogs['img_bg']}}"  />
              @endforeach
              @endif
              </div>
              <div class="page-divide">
                {!! $listBlog->appends(request() -> all()) -> render() !!}
              </div>
            </div>
          </div>
        </session>
      </div>
@stop()