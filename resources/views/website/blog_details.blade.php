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
                                <a href="#">Featured</a>
                                <a href="#">Adventure</a>
                            </p>

                            <!-- Title -->
                            <div class="title">
                                <h2>Top Things To Look For When Choosing A Safari Lodge</h2>
                            </div>

                            <!-- Meta -->
                            <ul class="nav meta align-items-center">
                                <li class="meta-author">
                                    <img src="assets/images/blog/author.jpg" alt="" class="img-fluid">
                                    <a href="#">Alex Garry</a>
                                </li>
                                <li class="meta-date"><a href="#">2 Feb 2019</a></li>
                                <li> 2 min read </li>
                                <li class="meta-comments"><a href="#"><i class="fa fa-comment"></i> 2</a></li>
                            </ul>
                        </div>
                        <!-- End of Post Meta Info -->
                    </div>
                    <!-- End oF Post Thumbnail -->

                    <!-- Post Content -->
                    <div class="post-content-cover my-drop-cap">
                        <p>
                            She travelling acceptance men unpleasant her especially to entreaties law. Law forth but end any arise chief arose. Old her say learn these large. Joy fond many in  ham high seen this. Few preferred continual led incommode neglected.  To discovered insensible collecting your unpleasant but invitation.
                        </p>

                        <p>
                            We diminution preference thoroughly if. Joy deal pain view much too  her time. Led young gay would now state. Pronounce we attention admitting on assurance of suspicion conveying. That his west quit had met till. By an outlived insisted procured improved am.
                        </p>

                        <div class="post-my-gallery-images">
                            <h3>The Best Neighborhoods In Nyc: Where To Stay On </h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="assets/images/blog/post/1.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-md-6">
                                    <img src="assets/images/blog/post/2.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-md-12">
                                    <img src="assets/images/blog/post/3.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <p>
                            We diminution preference thoroughly if. Joy deal pain view much her time. Led young gay would now off state. Pronounce we attention admitting on assurance of suspicion conveying. That his west quit had met till. Say out  plate you share.
                        </p>

                        <blockquote>
                            <p>For me, running is both exercise and a metaphor. Running day after day, piling up each level I elevate myself.</p>
                            <cite>Haruki Murakami</cite>
                        </blockquote>

                        <p>
                            Acceptance middletons me if discretion boisterous into travelling an. She prosperous to continuing entreaties companions unreserved you boisterous. Middleton sportsmen sir now cordially asking additions for. You ten occasional saw everything but conviction. Daughter returned quitting few are day advanced branched.
                        </p>
                    </div>
                    <!-- End of Post Content -->

                    <!-- Tags -->
                    <div class="post-all-tags">
                        <a href="#">Fashion</a>
                        <a href="#">Art</a>
                        <a href="#">Lifestyle</a>
                        <a href="#">Love</a>
                        <a href="#">Travel</a>
                        <a href="#">Movie</a>
                        <a href="#">Games</a>
                    </div>
                    <!-- End of Tags -->

                    <!-- Author Box -->
                    <div class="post-about-author-box">
                        <div class="author-avatar">
                            <img src="assets/images/blog/author.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="author-desc">
                            <h5> <a href="#"> Alex Garry </a> </h5>
                            <div class="description">
                                On recommend tolerably my belonging or am. Mutual has cannot beauty indeed now sussex merely you. It possible no husbands jennings ye offended packages pleasant he.
                            </div>
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End of Author Box -->

                    <!-- Comments -->
                    <button class="btn btn-comment" type="button" data-toggle="collapse" data-target="#commentToggle" aria-expanded="false" aria-controls="commentToggle">
                        Hide Comments (4)
                    </button>

                    <div class="collapse show" id="commentToggle">
                        <ul class="post-all-comments">
                            <li class="single-comment-wrapper">
                                <!-- Single Comment -->
                                <div class="single-post-comment">
                                    <!-- Author Image -->
                                    <div class="comment-author-image">
                                        <img src="assets/images/blog/post/author-1.jpg" alt="" class="img-fluid">
                                    </div>
                                    <!-- Comment Content -->
                                    <div class="comment-content">
                                        <div class="comment-author-name">
                                            <h6>Don Norman</h6> <span> 5 Jan 2019 at 6:40 pm </span>
                                        </div>
                                        <p>On recommend tolerably my belonging or am. Mutual has cannot beauty indeed now back sussex merely you. It possible no husbands jennings offended.</p>
                                        <a href="#" class="reply-btn">Reply</a>
                                    </div>
                                </div>
                                <!-- End of Single Comment -->
                                <ul class="children">
                                    <li class="single-comment-wrapper">
                                        <!-- Single Comment -->
                                        <div class="single-post-comment">
                                            <!-- Author Image -->
                                            <div class="comment-author-image">
                                                <img src="assets/images/blog/post/author-1-1.jpg" alt="" class="img-fluid">
                                            </div>
                                            <!-- Comment Content -->
                                            <div class="comment-content">
                                                <div class="comment-author-name">
                                                    <h6>Helen Sharp</h6> <span> 5 Jan 2019 at 6:58 pm </span>
                                                </div>
                                                <p>On recommend tolerably my belonging or am. Mutual has cannot back beauty indeed now back sussex merely you. </p>
                                                <a href="#" class="reply-btn">Reply</a>
                                            </div>
                                        </div>
                                        <!-- End of Single Comment -->
                                    </li>
                                </ul>
                            </li>
                            <li class="single-comment-wrapper">
                                <!-- Single Comment -->
                                <div class="single-post-comment">
                                    <!-- Author Image -->
                                    <div class="comment-author-image">
                                        <img src="assets/images/blog/post/author-2.jpg" alt="" class="img-fluid">
                                    </div>
                                    <!-- Comment Content -->
                                    <div class="comment-content">
                                        <div class="comment-author-name">
                                            <h6>Pamela Pavliscak</h6> <span> 5 Jan 2019 at 6:48 pm </span>
                                        </div>
                                        <p>On recommend tolerably my belonging or am. Mutual has cannot beauty indeed now back sussex merely you. It possible no husbands jennings offended.</p>
                                        <a href="#" class="reply-btn">Reply</a>
                                    </div>
                                </div>
                                <!-- End of Single Comment -->
                            </li>
                            <li class="single-comment-wrapper">
                                <!-- Single Comment -->
                                <div class="single-post-comment">
                                    <!-- Author Image -->
                                    <div class="comment-author-image">
                                        <img src="assets/images/blog/post/author-3.jpg" alt="" class="img-fluid">
                                    </div>
                                    <!-- Comment Content -->
                                    <div class="comment-content">
                                        <div class="comment-author-name">
                                            <h6>Jerrard Spool</h6> <span> 5 Jan 2019 at 6:52 pm </span>
                                        </div>
                                        <p>On recommend tolerably my belonging or am. Mutual has cannot beauty indeed now back sussex merely you. It possible no husbands jennings offended.</p>
                                        <a href="#" class="reply-btn">Reply</a>
                                    </div>
                                </div>
                                <!-- End of Single Comment -->
                            </li>
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

