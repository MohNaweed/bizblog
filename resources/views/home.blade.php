@extends('layouts.app')
@section('content')
    <!-- Banner -->
    <div class="banner-slider-cover d-flex align-items-center">
        <div class="container">
        <div class="banner-slider owl-carousel">
            <!-- Banner Slide -->
            <div class="banner-slide">
                <div class="row align-items-center">
                    <div class="col-md-6 order-2 order-md-1">
                        <!-- Banner Text -->
                        <div class="banner-slide-text">
                            <p class="category"><a href="#">Fashion</a></p>
                            <h1>Understanding The Background Of Fashion</h1>
                            <p class="desc">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo, quis tempor ligula. Quisque quis pharetra felis. Ut quis consequat orci, at consequat felis. Suspendisse auctor laoreet placerat. Nam et risus non lacus dignissim lacinia sit amet nec eros. </p>
                            <a href="blog-details.html" class="btn btn-primary">View More</a>
                        </div>
                        <!-- End of Banner Text -->
                    </div>
                    <div class="col-md-6 order-1 order-md-2">
                        <!-- Banner Image -->
                        <div class="banner-slide-image">
                            <img src="assets/images/banner/1.jpg" alt="" class="img-fluid">
                        </div>
                        <!-- End of Banner Image -->
                    </div>
                </div>
            </div>
            <!-- End of Banner Slide -->

            <!-- Banner Slide -->
            <div class="banner-slide">
                <div class="row align-items-center">
                    <div class="col-md-6 order-2 order-md-1">
                        <!-- Banner Text -->
                        <div class="banner-slide-text">
                            <p class="category"><a href="#">Fashion</a></p>
                            <h1>Feel The Love, And Things on My Mind</h1>
                            <p class="desc">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo, quis tempor ligula. Quisque quis pharetra felis. Ut quis consequat orci, at consequat felis. Suspendisse auctor laoreet placerat. Nam et risus non lacus dignissim lacinia sit amet nec eros. </p>
                            <a href="blog-details.html" class="btn btn-primary">View More</a>
                        </div>
                        <!-- End of Banner Text -->
                    </div>
                    <div class="col-md-6 order-1 order-md-2">
                        <!-- Banner Image -->
                        <div class="banner-slide-image">
                            <img src="assets/images/banner/2.jpg" alt="" class="img-fluid">
                        </div>
                        <!-- End of Banner Image -->
                    </div>
                </div>
            </div>
            <!-- End of Banner Slide -->

            <!-- Banner Slide -->
            <div class="banner-slide">
                <div class="row align-items-center">
                    <div class="col-md-6 order-2 order-md-1">
                        <!-- Banner Text -->
                        <div class="banner-slide-text">
                            <p class="category"><a href="#">Fashion</a></p>
                            <h1>Blaak Attack Earns Boels First 2019 Victory </h1>
                            <p class="desc">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo, quis tempor ligula. Quisque quis pharetra felis. Ut quis consequat orci, at consequat felis. Suspendisse auctor laoreet placerat. Nam et risus non lacus dignissim lacinia sit amet nec eros. </p>
                            <a href="blog-details.html" class="btn btn-primary">View More</a>
                        </div>
                        <!-- End of Banner Text -->
                    </div>
                    <div class="col-md-6 order-1 order-md-2">
                        <!-- Banner Image -->
                        <div class="banner-slide-image">
                            <img src="assets/images/banner/3.jpg" alt="" class="img-fluid">
                        </div>
                        <!-- End of Banner Image -->
                    </div>
                </div>
            </div>
            <!-- End of Banner Slide -->
        </div>

        <!-- Banner Dots Slider -->
        <div class="banner-slider-dots owl-carousel"></div>
        </div>
        <!-- End of Banner Dots Slider -->
    </div>
    <!-- End of Banner -->

    <!-- Trending Posts-->
    <section class="pt-120 pb-10">
        <div class="container">
            <!-- Section Title -->
            <div class="section-title text-center">
                <h2>Trending Post</h2>
            </div>
            <!-- Section Title -->

            <div class="row">
                <div class="col-lg-8 order-lg-1 offset-lg-1">
                    <!-- Post -->
                    @foreach($posts as $post)
                    <div class="post-default post-has-no-thumb">
                        <div class="post-data">
                            <!-- Category -->
                            <div class="cats"><a href="category-result.html">Fashion</a></div>
                            <!-- Title -->
                            <div class="title">
                                <h2><a href="blog-details.html">{{ $post->title}}</a></h2>
                            </div>
                            <!-- Post Meta -->
                            <ul class="nav meta align-items-center">
                                <li class="meta-author">
                                    <img src="assets/images/blog/author.jpg" alt="" class="img-fluid">
                                    <a href="#">Alex Garry</a>
                                </li>
                                <li class="meta-date"><a href="#">2 Feb 2019</a></li>
                                <li class="meta-comments"><a href="#"><i class="fa fa-comment"></i> 2</a></li>
                            </ul>
                            <!-- Post Desc -->
                            <div class="desc">
                              <p>{{ $post->body}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End of Post -->
                </div>
                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-header">Categories</div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($categories as $cat)
                            <li class="list-group-item">{{$cat->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Trending Posts-->

    <!-- post with sidebar -->
    <div class="container pt-40 pb-90">
        <div class="row">
            <div class="col-lg-8">
                <!-- Popular Post -->
                <section class="popular-post pb-10">
                    <!-- Section title -->
                    <div class="section-title">
                        <h2>Popular Posts</h2>
                    </div>
                    <!-- End of Section title -->

                    <div class="post-blog-list">
                        <!-- Post -->
                        <div class="post-default post-has-right-thumb">
                            <div class="d-flex flex-wrap">
                                <div class="post-thumb align-self-stretch order-md-2">
                                    <a href="blog-details.html">
                                    <div data-bg-img="assets/images/blog/1.jpg"></div>
                                    </a>
                                </div>
                                <div class="post-data order-md-1">
                                    <!-- Category -->
                                    <div class="cats"><a href="category-result.html">Love</a></div>
                                    <!-- Title -->
                                    <div class="title">
                                        <h2><a href="blog-details.html">A Funny Thing That Happens In Relationships</a></h2>
                                    </div>
                                    <!-- Post Meta -->
                                    <ul class="nav meta align-items-center">
                                        <li class="meta-author">
                                            <img src="assets/images/blog/author.jpg" alt="" class="img-fluid">
                                            <a href="#">Alex Garry</a>
                                        </li>
                                        <li class="meta-date"><a href="#">2 Feb 2019</a></li>
                                        <li class="meta-comments"><a href="#"><i class="fa fa-comment"></i> 2</a></li>
                                    </ul>
                                    <!-- Post Desc -->
                                    <div class="desc">
                                        <p>
                                            Integer at faucibus urna. Nullam condimentum leo id elit sagittis auctor. Curabitur elementum nunc...
                                        </p>
                                    </div>
                                    <!-- Read More Button -->
                                    <a href="blog-details.html" class="btn btn-primary">View More</a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Post -->

                        <!-- Post -->
                        <div class="post-default post-has-right-thumb">
                            <div class="d-flex flex-wrap">
                                <div class="post-thumb align-self-stretch order-md-2">
                                    <a href="blog-details.html">
                                    <div data-bg-img="assets/images/blog/2.jpg"></div>
                                    </a>
                                </div>
                                <div class="post-data order-md-1">
                                    <!-- Category -->
                                    <div class="cats"><a href="category-result.html">Fashion</a></div>
                                    <!-- Title -->
                                    <div class="title">
                                        <h2><a href="blog-details.html">The One Thing I Do When Fashion Come Over</a></h2>
                                    </div>
                                    <!-- Post Meta -->
                                    <ul class="nav meta align-items-center">
                                        <li class="meta-author">
                                            <img src="assets/images/blog/author.jpg" alt="" class="img-fluid">
                                            <a href="#">Alex Garry</a>
                                        </li>
                                        <li class="meta-date"><a href="#">2 Feb 2019</a></li>
                                        <li class="meta-comments"><a href="#"><i class="fa fa-comment"></i> 2</a></li>
                                    </ul>
                                    <!-- Post Desc -->
                                    <div class="desc">
                                        <p>
                                            Integer at faucibus urna. Nullam condimentum leo id elit sagittis auctor. Curabitur elementum nunc...
                                        </p>
                                    </div>
                                    <!-- Read More Button -->
                                    <a href="blog-details.html" class="btn btn-primary">View More</a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Post -->

                        <!-- Post -->
                        <div class="post-default post-has-right-thumb">
                            <div class="d-flex flex-wrap">
                                <div class="post-thumb align-self-stretch order-md-2">
                                    <a href="blog-details.html">
                                    <div data-bg-img="assets/images/blog/3.jpg"></div>
                                    </a>
                                </div>
                                <div class="post-data order-md-1">
                                    <!-- Category -->
                                    <div class="cats"><a href="category-result.html">Travel</a></div>
                                    <!-- Title -->
                                    <div class="title">
                                        <h2><a href="blog-details.html">Summer Adventure Essentials From Backcountry</a></h2>
                                    </div>
                                    <!-- Post Meta -->
                                    <ul class="nav meta align-items-center">
                                        <li class="meta-author">
                                            <img src="assets/images/blog/author.jpg" alt="" class="img-fluid">
                                            <a href="#">Alex Garry</a>
                                        </li>
                                        <li class="meta-date"><a href="#">2 Feb 2019</a></li>
                                        <li class="meta-comments"><a href="#"><i class="fa fa-comment"></i> 2</a></li>
                                    </ul>
                                    <!-- Post Desc -->
                                    <div class="desc">
                                        <p>
                                            Integer at faucibus urna. Nullam condimentum leo id elit sagittis auctor. Curabitur elementum nunc...
                                        </p>
                                    </div>
                                    <!-- Read More Button -->
                                    <a href="blog-details.html" class="btn btn-primary">View More</a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Post -->
                    </div>
                </section>
                <!-- End of Popular Post  -->

                <!-- Most Viewed Post -->
                <section class="pt-40 pb-10 most-viewed">
                    <!-- Section title -->
                    <div class="section-title">
                        <h2>Most Viewed</h2>
                    </div>
                    <!-- End of Section title -->
                    <div class="post-blog-list">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Post -->
                                <div class="post-default post-has-front-title">
                                    <div class="post-thumb">
                                        <a href="blog-details.html"> <img src="assets/images/blog/4.jpg" alt="" class="img-fluid"> </a>
                                    </div>
                                    <div class="post-data">
                                        <!-- Category -->
                                        <div class="cats"><a href="category-result.html">Adventure</a></div>
                                        <!-- Title -->
                                        <div class="title">
                                            <h2><a href="blog-details.html">Top Things To Look For When There choosing A Safari Lodge</a></h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Post -->
                            </div>

                            <div class="col-sm-6">
                                <!-- Post -->
                                <div class="post-default">
                                    <div class="post-thumb">
                                        <a href="blog-details.html"> <img src="assets/images/blog/small/1.jpg" alt="" class="img-fluid"> </a>
                                    </div>
                                    <div class="post-data">
                                        <!-- Category -->
                                        <div class="cats"><a href="category-result.html">Love</a></div>
                                        <!-- Title -->
                                        <div class="title">
                                            <h2><a href="blog-details.html">Blaak Attack Earns Boels First 2019 Victory </a></h2>
                                        </div>
                                        <!-- Post Desc -->
                                        <div class="desc">
                                            <p>
                                                Duis mauris augue, efficitur eu arcu sit amet, posuere dignissim neque. Aenean enim sem, pharetra et magna....
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Post -->
                            </div>

                            <div class="col-sm-6">
                                <!-- Post -->
                                <div class="post-default">
                                    <div class="post-thumb">
                                        <a href="blog-details.html"><img src="assets/images/blog/small/2.jpg" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="post-data">
                                        <!-- Category -->
                                        <div class="cats"><a href="category-result.html">Lifestyle</a></div>
                                        <!-- Title -->
                                        <div class="title">
                                            <h2><a href="blog-details.html">Great Britain's Winter Olympics athletes Rated & Slated </a></h2>
                                        </div>
                                        <!-- Post Desc -->
                                        <div class="desc">
                                            <p>
                                                Duis mauris augue, efficitur eu arcu sit amet, posuere dignissim neque. Aenean enim sem, pharetra et magna....
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Post -->
                            </div>

                            <div class="col-sm-6">
                                <!-- Post -->
                                <div class="post-default">
                                    <div class="post-thumb">
                                        <a href="blog-details.html"> <img src="assets/images/blog/small/3.jpg" alt="" class="img-fluid"> </a>
                                    </div>
                                    <div class="post-data">
                                        <!-- Category -->
                                        <div class="cats"><a href="category-result.html">Technology</a></div>
                                        <!-- Title -->
                                        <div class="title">
                                            <h2><a href="blog-details.html">12-inch MacBook Refurb $830, Apple Watch Series</a></h2>
                                        </div>
                                        <!-- Post Desc -->
                                        <div class="desc">
                                            <p>
                                                Duis mauris augue, efficitur eu arcu sit amet, posuere dignissim neque. Aenean enim sem, pharetra et magna....
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Post -->
                            </div>

                            <div class="col-sm-6">
                                <!-- Post -->
                                <div class="post-default">
                                    <div class="post-thumb">
                                        <a href="blog-details.html"> <img src="assets/images/blog/small/4.jpg" alt="" class="img-fluid"> </a>
                                    </div>
                                    <div class="post-data">
                                        <!-- Category -->
                                        <div class="cats"><a href="category-result.html">Food</a></div>
                                        <!-- Title -->
                                        <div class="title">
                                            <h2><a href="blog-details.html">This Apple Crisp Makes The Entire House Smell Dreamy</a></h2>
                                        </div>
                                        <!-- Post Desc -->
                                        <div class="desc">
                                            <p>
                                                Duis mauris augue, efficitur eu arcu sit amet, posuere dignissim neque. Aenean enim sem, pharetra et magna....
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Post -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End of Most Viewed Post -->

                <!-- 728 ad -->
                <div class="pt-40 pb-40 biz-ad">
                    <a href="#"><img src="assets/images/ad-728.png" alt="" class="img-fluid"></a>
                </div>
                <!-- End of 728 ad -->

                <!-- Video Post -->
                <section class="pt-40 pb-10 video-post">
                    <!-- Section title -->
                    <div class="section-title">
                        <h2>Video Post</h2>
                    </div>
                    <!-- End of Section title -->
                    <div class="post-blog-list">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Post -->
                                <div class="post-default post-has-video">
                                    <div class="post-thumb">
                                        <a href="blog-details.html">
                                            <div data-bg-img="assets/images/blog/6.jpg"></div>
                                        </a>
                                    </div>
                                    <div class="post-data">
                                        <!-- Category -->
                                        <div class="cats"><a href="category-result.html">Food</a></div>
                                        <!-- Title -->
                                        <div class="title">
                                            <h2><a href="blog-details.html">Five Important Facts Should Know About Recipe</a></h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Post -->
                            </div>

                            <div class="col-md-6">
                                <!-- Post -->
                                <div class="post-default post-has-video">
                                    <div class="post-thumb">
                                        <a href="blog-details.html">
                                            <div data-bg-img="assets/images/blog/8.jpg"></div>
                                        </a>
                                    </div>
                                    <div class="post-data">
                                        <!-- Category -->
                                        <div class="cats"><a href="category-result.html">Technology</a></div>
                                        <!-- Title -->
                                        <div class="title">
                                            <h2><a href="blog-details.html">Apple Admits To Macbook and Macbook Pro </a></h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Post -->
                            </div>

                            <div class="col-md-6">
                                <!-- Post -->
                                <div class="post-default post-has-video">
                                    <div class="post-thumb">
                                        <a href="blog-details.html">
                                            <div data-bg-img="assets/images/blog/10.jpg"></div>
                                        </a>
                                    </div>
                                    <div class="post-data">
                                        <!-- Category -->
                                        <div class="cats"><a href="category-result.html">Food</a></div>
                                        <!-- Title -->
                                        <div class="title">
                                            <h2><a href="blog-details.html">20-Minute Thai Coconut Chicken Soup</a></h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Post -->
                            </div>

                            <div class="col-md-6">
                                <!-- Post -->
                                <div class="post-default post-has-video">
                                    <div class="post-thumb">
                                        <a href="blog-details.html">
                                            <div data-bg-img="assets/images/blog/9.jpg"></div>
                                        </a>
                                    </div>
                                    <div class="post-data">
                                        <!-- Category -->
                                        <div class="cats"><a href="category-result.html">Technology</a></div>
                                        <!-- Title -->
                                        <div class="title">
                                            <h2><a href="blog-details.html">Feel The Love, And Things On My Mind</a></h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Post -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End of Video Post -->
            </div>
            <div class="col-lg-4">
                <div class="pt-88">
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

                        <!-- Featured Posts -->
                        <div class="widget widget-featured-post">
                            <!-- Widget Title -->
                            <h4 class="widget-title">
                                Featured Post
                            </h4>
                            <!-- End of Widget Title -->

                            <!-- Widget Content -->
                            <div class="widget-content">
                                <!-- Single Post -->
                                <div class="featured-post">
                                    <!-- Post Thumbnail -->
                                    <a href="blog-details.html">
                                        <img src="assets/images/sidebar/fp-1.jpg" alt="" class="img-fluid">
                                    </a>
                                    <!-- Post Title -->
                                    <div class="featured-post-title">
                                        <h6> <a href="blog-details.html">Guide To Experiencing The Magical Sabino Canyon In Tucson</a> </h6>
                                    </div>
                                </div>
                                <!-- End of Single Post -->

                                <!-- Single Post -->
                                <div class="featured-post">
                                    <!-- Post Thumbnail -->
                                    <a href="blog-details.html">
                                        <img src="assets/images/sidebar/fp-2.jpg" alt="" class="img-fluid">
                                    </a>
                                    <!-- Post Title -->
                                    <div class="featured-post-title">
                                        <h6><a href="blog-details.html">Inspired To Move: Celebrating Dance and Black History Month</a></h6>
                                    </div>
                                </div>
                                <!-- End of Single Post -->
                            </div>
                            <!-- End of Widget Content -->
                        </div>
                        <!-- End of Featured Posts -->

                        <!-- Select Category -->
                        <div class="widget widget-select-category">
                            <!-- Widget Content -->
                            <div class="widget-content">
                                <!-- Select -->
                                <select>
                                    <option selected>Choose category</option>
                                    <option value="1">Love</option>
                                    <option value="2">Fashion</option>
                                    <option value="3">Travel</option>
                                    <option value="4">Adventure</option>
                                    <option value="5">Sports</option>
                                    <option value="6">Food</option>
                                    <option value="7">Lifestyle</option>
                                    <option value="8">Technology</option>
                                </select>
                            </div>
                            <!-- End of Widget Content -->
                        </div>
                        <!-- End of Select Category -->

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

                        <!-- Instagram Widget -->
                        <div class="widget widget-instagram">
                            <!-- Widget Title -->
                            <h4 class="widget-title">
                                Instagram Post
                            </h4>
                            <!-- End of Widget Title -->

                            <!-- Widget Content -->
                            <div class="widget-content">
                                <ul class="insta-gallery">
                                    <li>
                                        <!-- Instagram Post Image -->
                                        <a href="#"><img src="assets/images/sidebar/instagram/1.jpg" alt="" class="img-fluid"></a>
                                    </li>
                                    <li>
                                        <!-- Instagram Post Image -->
                                        <a href="#"><img src="assets/images/sidebar/instagram/2.jpg" alt="" class="img-fluid"></a>
                                    </li>
                                    <li>
                                        <!-- Instagram Post Image -->
                                        <a href="#"><img src="assets/images/sidebar/instagram/3.jpg" alt="" class="img-fluid"></a>
                                    </li>
                                    <li>
                                        <!-- Instagram Post Image -->
                                        <a href="#"><img src="assets/images/sidebar/instagram/4.jpg" alt="" class="img-fluid"></a>
                                    </li>
                                    <li>
                                        <!-- Instagram Post Image -->
                                        <a href="#"><img src="assets/images/sidebar/instagram/5.jpg" alt="" class="img-fluid"></a>
                                    </li>
                                    <li>
                                        <!-- Instagram Post Image -->
                                        <a href="#"><img src="assets/images/sidebar/instagram/6.jpg" alt="" class="img-fluid"></a>
                                    </li>
                                </ul>
                                <!-- Instagram Follow Button -->
                                <a href="#" class="btn btn-block btn-instagram">
                                    <i class="fa fa-instagram"></i> Follow Me
                                </a>
                            </div>
                            <!-- End of Widget Content -->
                        </div>
                        <!-- End of Instagram Widget -->

                        <!-- Newsletter Widget -->
                        <div class="widget widget-newsletter">
                            <!-- Widget Title -->
                            <h4 class="widget-title">
                                Newsletter
                            </h4>
                            <!-- End of Widget Title -->

                            <!-- Widget Content -->
                            <div class="widget-content">
                                <!-- Newsletter Text -->
                                <p>Sign up and receive recent blog and article in your inbox every week.</p>
                                <!-- Newsletter Form -->
                                <div class="newsletter">
                                    <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&amp;id=f4e0e93d1d" method="post" novalidate>
                                        <input type="text" class="form-control" placeholder="Your Email">
                                        <button class="btn btn-block btn-default">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                            <!-- End of Widget Content -->
                        </div>
                        <!-- End of Newsletter Widget -->

                        <!-- Recent Post Widget -->
                        <div class="widget widget-recent-post">
                            <!-- Widget Title -->
                            <h4 class="widget-title">
                                Recent Post
                            </h4>
                            <!-- End of Widget Title -->

                            <!-- Widget Content -->
                            <div class="widget-content">
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
                                        <a href="blog-details.html">Apple Admits To Macbook and Macbook Pro</a>
                                    </div>
                                </div>

                                <!-- Single Post -->
                                <div class="wrp-cover">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumb">
                                        <a href="blog-details.html">
                                            <img src="assets/images/sidebar/rp-2.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <!-- Post Title -->
                                    <div class="post-title">
                                        <a href="blog-details.html"> Feel The Love, And Things On My Mind </a>
                                    </div>
                                </div>

                                <!-- Single Post -->
                                <div class="wrp-cover">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumb">
                                        <a href="blog-details.html">
                                            <img src="assets/images/sidebar/rp-3.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <!-- Post Title -->
                                    <div class="post-title">
                                        <a href="blog-details.html"> This Apple Crisp Makes The Entire House Smell Dreamy </a>
                                    </div>
                                </div>

                                <!-- Single Post -->
                                <div class="wrp-cover">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumb">
                                        <a href="blog-details.html">
                                            <img src="assets/images/sidebar/rp-4.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <!-- Post Title -->
                                    <div class="post-title">
                                        <a href="blog-details.html">20-Minute Thai Coconut Hot Chicken Soup</a>
                                    </div>
                                </div>
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
                </div>
            </div>
        </div>
    </div>
    <!-- end of post with sidebar -->


    <!-- Newsletter -->
    <section class="newsletter-cover">
        <!-- Overlay -->
        <div class="nl-bg-ol"></div>
        <div class="container">
            <div class="newsletter pt-80 pb-80">
            <!-- Section title -->
            <div class="section-title text-center">
                <h2>Subscribe Our Newsletter</h2>
            </div>
            <!-- End of Section title -->
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <!-- Newsletter Form -->
                        <form  action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&amp;id=f4e0e93d1d" method="post" novalidate>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter Your Email">
                                <div class="input-group-append">
                                    <button class="btn btn-default">Submit</button>
                                </div>
                            </div>
                            <p class="checkbox-cover d-flex justify-content-center">
                                <label> I've read and accept the <a href="#"> Privacy Policy </a>
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </p>
                        </form>
                        <!-- End of Newsletter Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Newsletter -->
@endsection
