<a href="{{route('detailPost',$id)}}">
    <div class="blog-block">
        <div class="blog-block-img">
            <img src="{{asset('layout/Img')}}/{{$img}}" alt="" />
        </div>
        <div class="blog-content">
            <div class="blog-title">
                <h4>
                  {{$title}}
                </h4>
            </div>
            <div class="blog-info">
                <p>{{$name}}</p>
                <p>{{$date}}</p>
            </div>
        </div>
    </div>
</a>