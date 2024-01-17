<x-layouts.main>

    <x-slot:title>
        show
    </x-slot:title>
    

    <x-page-start>
    POST - {{$post->id}}
    </x-page-start>


        <!-- Single Post Start-->
        {{-- <div class="single">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-content">
                            <div class="d-flex mb-2">
                                <a class="text-secondary text-uppercase font-weight-medium" href="{{ route('posts.edit', ['post'=>$post->id])}}">EDIT</a>
                                <span class="text-primary px-2">|</span>
                                <form action="{{ route('posts.destroy', ['post'=> $post->id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-secondary text-uppercase font-weight-medium" href="">DESTROY</button>
                                </form>
                                <span class="text-primary px-2">|</span>
                                <a class="text-secondary text-uppercase font-weight-medium" href="">{{ $post->created_at}}</a>
                            </div>
                            


                            <h1>{{$post->title}}</h1>
                            <img src="/img/single.jpg" />
                            <p>
                                {{$post->short_content}}
                            </p>
                        </div>
                        <div class="single-tags">
                            <a href="">National</a>
                            <a href="">International</a>
                            <a href="">Economics</a>
                            <a href="">Politics</a>
                            <a href="">Lifestyle</a>
                            <a href="">Technology</a>
                            <a href="">Trades</a>
                        </div>

                        <div class="single-comment">
                            <h2>  Comments</h2>
                            @foreach ($post->comments as $comment)
                                
                            
                            <ul class="comment-list">
                                <li class="comment-item">
                                    <div class="comment-body">
                                        <div class="comment-img">
                                            <img src="/img/user.jpg" />
                                        </div>
                                        <div class="comment-text">
                                            <h3><a href="">{{ $comment->user->name }}</a></h3>
                                            <span>{{ $comment->created_at}}</span>
                                            <p>
                                                {{ $comment->body}}
                                            </p>
                                            <a class="btn" href="">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                        <div class="comment-form">
                            <h2>Leave a comment</h2>
                            <form action="{{ route('comments.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="message">Message *</label>
                                    <textarea name="body" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <input type="hidden" name="post_id" value="{{ $post->id}}">
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn btn-custom">
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <div class="single-bio">
                                    <div class="single-bio-img">
                                        <img src="/img/user.jpg" />
                                    </div>
                                    <div class="single-bio-text">
                                        <h3><div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div></h3>
                                        <p>
                                            Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea dictumst.
                                        </p>

 --}}
         




    









<!-- section -->
<div class="section padding_layout_1 blog_grid">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-right">
        <div class="full">
          <div class="blog_section margin_bottom_0">
            <div class="blog_feature_img"> <img class="/img-responsive" src="/images/it_service/post-05.jpg" alt="#"> </div>
            <div class="blog_feature_cantant">
              <p class="blog_head">{{$post->title}}</p>
              <div class="post_info">
                <ul>
                  <li><i class="fa fa-user" aria-hidden="true"></i> Marketing</li>
                  <li><i class="fa fa-comment" aria-hidden="true"></i> {{ $post->comments()->count()}}</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> {{ $post->created_at}}</li>
                </ul>
              </div>
              <p>{{$post->body}}</p>
            </div>
            <div class="bottom_info margin_bottom_30_all">
              <div class="pull-right">
                <div class="shr">Share: </div>
                <div class="social_icon">
                  <ul>
                    <li class="fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="twi"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li class="pint"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="view_commant">
              <div class="row">

                <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                  <div class="full">
                    <div class="row">
                    @foreach ($post->comments as $comment)
                      <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <div class="full"> <img class="/img-responsive" style="max-width:100px" src="/images/it_service/client2.png" alt="#"> </div>
                      </div>
                      <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                        <div class="full command_cont margin_bottom_0">
                          <p class="comm_head">{{ $comment->user->name }}<span>{{ $comment->created_at}}</span><a class="rply" href="it_blog_detail.html">Reply</a></p>
                          <p>{{ $comment->body}}</p>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="post_commt_form">
              <h4>POST YOUR COMMENT</h4>
                <div class="form_section">
                  <form action="{{ route('comments.store')}}" method="POST">
                      @csrf
                      <div class="form-group">
                          <label for="message">Message *</label>
                          <textarea name="body" cols="30" rows="5" class="form-control"></textarea>
                      </div>
                      <input type="hidden" name="post_id" value="{{ $post->id}}">
                      <div class="center">
                        <button class="btn main_bt">SUBMIT NOW</button>
                      </div>
                  </form>
                </div>
            </div>


          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left">
        <div class="side_bar">
          <div class="side_bar_blog">
            <h4>SEARCH</h4>
            <div class="side_bar_search">
              <div class="input-group stylish-input-group">
                <input class="form-control" placeholder="Search" type="text">
                <span class="input-group-addon">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span> </div>
            </div>
          </div>




          <div class="side_bar_blog">
            <h4>ABOUT AUTHOR</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod tempor.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>

          <div class="d-flex mb-2">
            <a class="text-secondary text-uppercase font-weight-medium" href="{{ route('posts.edit', ['post'=>$post->id])}}">EDIT</a>
            <span class="text-primary px-2">|</span>
            <form action="{{ route('posts.destroy', ['post'=> $post->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-secondary text-uppercase font-weight-medium" href="">DESTROY</button>
            </form>
          </div>

          <div class="side_bar_blog">
            <h4>RECENT POST</h4>
            @foreach ($recent_posts as $post)
            <div class="recent_post">
              <ul>
                <li>
                  <p class="post_head"><a href="#">{{ $post->title}}</a></p>
                  <p class="post_date"><i class="fa fa-calendar" aria-hidden="true"></i>{{ $post->created_at}}</p>
                </li>
              </ul>
            </div>
            @endforeach
          </div>
          <div class="side_bar_blog">
            <h4>TAG</h4>
            <div class="tags">
              <ul>
                <li><a href="#">Bootstrap</a></li>
                <li><a href="#">HTML5</a></li>
                <li><a href="#">Wordpress</a></li>
                <li><a href="#">Bootstrap</a></li>
                <li><a href="#">HTML5</a></li>
              </ul>
            </div>
          </div>
          <div class="side_bar_blog">
            <h4>CATEGORIES</h4>
            <div class="categary">
              <ul>
                <li><a href="#"><i class="fa fa-caret-right"></i> June (12)</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i> January (12)</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i> March (12)</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i> November (12)</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i> December (12)</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->




    
    </x-layouts.main>    