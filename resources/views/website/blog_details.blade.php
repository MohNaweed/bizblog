@extends('layouts.app')

@section('content')
    <!-- Page title -->
    <div class="page-title">
        <div class="container">
            <h2>Blog Details: Standard</h2>
            <ul class="nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Blogs</a></li>
                <li>Blog Details: Standard</li>
            </ul>
        </div>
    </div>
    <!-- End of Page title -->

    <div class="container pt-120">
        <div class="row">
            <div class="col-lg-8 pb-80">
                <div class="post-details-cover">
                    <!-- Post Thumbnail -->
                    <div class="post-thumb-cover">
                        <div class="post-thumb">
                            <img src="assets/images/blog/4.jpg" alt="" class="img-fluid">
                        </div>
                        <!-- Post Meta Info -->
                        <div class="post-meta-info">
                            <!-- Category -->
                            <p class="cats">
                                @foreach($post->categories as $cat)
                                <a href="#">{{$cat->name}}</a>
                                @endforeach
                            </p>

                            <!-- Title -->
                            <div class="title">
                                <h2>{{$post->title}}</h2>
                            </div>

                            <!-- Meta -->
                            <ul class="nav meta align-items-center">
                                <li class="meta-author">
                                    <img src="{{asset('assets/images/blog/author.jpg')}}" alt="" class="img-fluid">
                                    <a href="#">{{$post->user->name}}</a>
                                </li>
                                <li class="meta-date"><a href="#">{{$post->updated_at}}</a></li>
                                <li> 2 min read </li>
                                <li class="meta-comments"><a href="#"><i class="fa fa-comment"></i> {{count($post->comments)}}</a></li>
                            </ul>
                        </div>
                        <!-- End of Post Meta Info -->
                    </div>
                    <!-- End oF Post Thumbnail -->

                    <!-- Post Content -->
                    <div class="post-content-cover my-drop-cap">
                        <p>
                           {{$post->body}}
                        </p>
                    </div>
                    <!-- End of Post Content -->

                    <!-- Tags -->
                    <div class="post-all-tags">
                        @foreach($post->tags as $tag)
                            <a href="#">{{$tag->name}}</a>
                        @endforeach
                    </div>
                    <!-- End of Tags -->

                    <!-- Author Box -->
                    <div class="post-about-author-box">
                        <div class="author-avatar">
                            <img src="assets/images/blog/author.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="author-desc">
                            <h5> <a href="#">{{$post->user->name}}</a> </h5>
                            <div class="description">
                                {{$post->user->profile->bio}}
                            </div>
                            <div class="social-icons">
                                <a href="{{$post->user->profile->facebook}}"><i class="fa fa-facebook"></i></a>
                                <a href="{{$post->user->profile->twitter}}"><i class="fa fa-twitter"></i></a>

                            </div>
                        </div>
                    </div>
                    <!-- End of Author Box -->

                    <!-- Comments -->
                    <button class="btn btn-comment" type="button" data-toggle="collapse" data-target="#commentToggle" aria-expanded="false" aria-controls="commentToggle">
                        Hide Comments ({{count($post->comments)}})
                    </button>

                    <div class="collapse show" id="commentToggle">
                        <ul class="post-all-comments">
                            @if(count($post->comments) == 0)
                                <p>The post has not any comment</p>

                            @else
                                @foreach($post->comments as $comment)
                                <li class="single-comment-wrapper">
                                    <!-- Single Comment -->
                                    <div class="single-post-comment">
                                        <!-- Author Image -->
                                        <div class="comment-author-image">
                                            <img src="{{asset('assets/images/blog/post/author-1.jpg')}}" alt="" class="img-fluid">
                                        </div>
                                        <!-- Comment Content -->
                                        <div class="comment-content">
                                            <div class="comment-author-name">

                                                <h6>{{$comment->user["name"]}}</h6> <span>{{$comment->updated_at}} </span>
                                            </div>
                                            <p>{{$comment->desc}}</p>
                                        </div>
                                    </div>
                                    <!-- End of Single Comment -->
                                </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <!-- End of Comments -->

                    <!-- Comment Form -->
                    <div class="post-comment-form-cover">
                        <h3>Write your comment</h3>
                        <form class="comment-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control" placeholder="Write your comment"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary">Submit </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End of Comment Form -->
                </div>
            </div>
            <div class="col-lg-4 pb-90">
                @include('partial.home._sidebar')
            </div>
        </div>
    </div>

@endsection

