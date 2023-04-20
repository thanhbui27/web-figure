@foreach( $productList as $productLists)
                    <div class="div-comment">
                      <div class="div-comment-img">
                        <img src="{{asset('layout/Img/gaixinh 600x600.png')}}" alt="">
                      </div>
                      <div class="commentContent">
                        <div class="title-comment">
                          <h4>{{$productLists['fullname']}}</h4>
                          <span>{{$productLists['date']}}</span>
                        </div>
                        <div class="content">
                        {!! html_entity_decode($productLists['content']) !!}
                        </div>
                        <div class="adv-comment feel-comment">
                          <div class="like">
                            <span class="countLike">{{ $productLists['like'] }}</span> <i class="far fa-thumbs-up"></i>
                          </div>
                          <div class="dislike">
                            <span class="countdisLike">{{ $productLists['dislike'] }}</span> <i class="far fa-thumbs-down"></i>
                          </div>
                        </div>
                        </div>
                      </div>
@endforeach