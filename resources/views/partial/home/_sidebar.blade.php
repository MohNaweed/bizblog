<div class="my-sidebar">
    <!-- Author Widget -->
    <div class="widget widget-about">
        <!-- Widget Content -->
        <div class="widget-content">
            <!-- Author Image -->
            <div class="author-image">
                <img src="assets/images/blog/author.jpg" alt="" class="img-fluid">
            </div>
            <!-- Author Name -->
            <div class="author-name text-center">
                <a href="#"> Alex Garry </a>
            </div>
            <!-- Author Social Links -->
            <div class="author-social text-center">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
            </div>
            <!-- Author Text -->
            <div class="author-text text-center">
                In consequat, quam id sodales hendrerit, eros mi molestie leo, nec lacinia risus neque tristique augue. Proin tempus urna vel.
            </div>
        </div>
        <!-- End of Widget Content -->
    </div>
        <!-- End of Author Widget -->
    <!-- Categories Widget -->
    <div class="widget widget-about">
        <h3 class="text-center">Categories</h3>
        <hr>
        <!-- Widget Content -->
        <div class="widget-content">
            <ul class="list-group">
            @foreach($categories as $cat)
                <li class="list-group-item">
                    <a href="">{{$cat->name}}</a>
                </li>
            @endforeach
            </ul>
        </div>
    </div>
        <!-- End of Widget Content -->
    <!-- End of AuthorCategories Widget -->
    <!-- Ad Widget -->
    <div class="widget widget-ad">
        <!-- Widget Content -->
        <div class="widget-content">
            <a href="#">
                <img src="assets/images/sidebar/ad.jpg" alt="" class="img-fluid">
            </a>
        </div>
        <!-- End of Widget Content -->
    </div>
    <!-- End of Ad Widget -->

    <!-- Recent Post Widget -->
    <div class="widget widget-recent-post">
        <!-- Widget Title -->
        <h4 class="widget-title">
            Recent Post
        </h4>
        <!-- End of Widget Title -->

        <!-- Widget Content -->
        <div class="widget-content">
            @foreach($recentPosts as $rPost)
            <!-- Single Post -->
            <div class="wrp-cover">
                <!-- Post Thumbnail -->
                <div class="post-thumb">
                    <a href="blog-details.html">
                        <img src="assets/images/sidebar/rp-1.jpg" alt="" class="img-fluid">
                    </a>
                </div>
                <!-- Post Title -->
                <div class="post-title">
                    <a href="blog-details.html">{{$rPost->title}}</a>
                </div>
            </div>

            @endforeach

        </div>
        <!-- End of Widget Content -->
    </div>
    <!-- End of Recent Post Widget -->

    <!-- Most Commented Post Widget -->
    <div class="widget widget-most-commented-post">
        <!-- Widget Title -->
        <h4 class="widget-title">
            Most Commented Post
        </h4>
        <!-- End of Widget Title -->

        <!-- Widget Content -->
        <div class="widget-content">
            <!-- Post Carousel -->
            <div class="wmcp-cover owl-carousel" data-owl-mouse-drag="true" data-owl-dots="true" data-owl-margin="20">
                <!-- Carousel Item -->
                <div class="wmcp-item">
                    <!-- Single Post -->
                    <div class="wmc-post">
                        <a href="blog-details.html">
                            <img src="assets/images/sidebar/mcp-1.jpg" alt="" class="img-fluid">
                        </a>
                        <div class="wmc-post-title">
                            <h6> <a href="blog-details.html"> Understanding The Background Of Fashion </a></h6>
                        </div>
                    </div>
                    <!-- End of Single Post -->

                    <!-- Single Post -->
                    <div class="wmc-post">
                        <a href="blog-details.html">
                            <img src="assets/images/sidebar/mcp-2.jpg" alt="" class="img-fluid">
                        </a>
                        <div class="wmc-post-title">
                            <h6> <a href="blog-details.html">12-inch MacBook Refurb $830, Apple Watch Series</a> </h6>
                        </div>
                    </div>
                    <!-- End of Single Post -->
                </div>
                <!-- End of Carousel Item -->

                <!-- Carousel Item -->
                <div class="wmcp-item">
                    <!-- Single Post -->
                    <div class="wmc-post">
                        <a href="blog-details.html">
                            <img src="assets/images/sidebar/mcp-1.jpg" alt="" class="img-fluid">
                        </a>
                        <div class="wmc-post-title">
                            <h6> <a href="blog-details.html"> Understanding The Background Of Fashion </a></h6>
                        </div>
                    </div>
                    <!-- End of Single Post -->

                    <!-- Single Post -->
                    <div class="wmc-post">
                        <a href="blog-details.html">
                            <img src="assets/images/sidebar/mcp-2.jpg" alt="" class="img-fluid">
                        </a>
                        <div class="wmc-post-title">
                            <h6> <a href="blog-details.html">12-inch MacBook Refurb $830, Apple Watch Series</a> </h6>
                        </div>
                    </div>
                    <!-- End of Single Post -->
                </div>
                <!-- End of Carousel Item -->

                <!-- Carousel Item -->
                <div class="wmcp-item">
                    <!-- Single Post -->
                    <div class="wmc-post">
                        <a href="blog-details.html">
                            <img src="assets/images/sidebar/mcp-1.jpg" alt="" class="img-fluid">
                        </a>
                        <div class="wmc-post-title">
                            <h6> <a href="blog-details.html"> Understanding The Background Of Fashion </a></h6>
                        </div>
                    </div>
                    <!-- End of Single Post -->

                    <!-- Single Post -->
                    <div class="wmc-post">
                        <a href="blog-details.html">
                            <img src="assets/images/sidebar/mcp-2.jpg" alt="" class="img-fluid">
                        </a>
                        <div class="wmc-post-title">
                            <h6> <a href="blog-details.html">12-inch MacBook Refurb $830, Apple Watch Series</a> </h6>
                        </div>
                    </div>
                    <!-- End of Single Post -->
                </div>
                <!-- End of Carousel Item -->
            </div>
            <!-- End of Post Carousel -->

        </div>
        <!-- End of Widget Content -->
    </div>
    <!-- End of Most Commented Post Widget -->

    <!-- Tags Cloud Widget -->
    <div class="widget widget-tag-cloud">
        <!-- Widget Title -->
        <h4 class="widget-title">
            Tags
        </h4>
        <!-- End of Widget Title -->

        <!-- Widget Content -->
        <div class="widget-content tagcloud">
            <a href="#">Fashion</a>
            <a href="#">Art</a>
            <a href="#">Lifestyle</a>
            <a href="#">Love</a>
            <a href="#">Travel</a>
            <a href="#">Health</a>
            <a href="#">Education</a>
            <a href="#">Movie</a>
            <a href="#">Games</a>
            <a href="#">Sports</a>
        </div>
        <!-- End of Widget Content -->
    </div>
    <!-- End of Tags Cloud Widget -->


</div>


