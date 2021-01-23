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
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <!-- Trending Posts-->
            <section class="pt-120 pb-10">
                <div class="container">
                    <!-- Section Title -->
                    <div class="section-title text-center">
                        <h2>Trending Post</h2>
                    </div>
                    <!-- Section Title -->
                    <!-- Post -->
                    @foreach($posts as $post)
                    <div class="post-default post-has-no-thumb">
                        <div class="post-data">
                            <!-- Category -->
                            <div class="cats">
                                @foreach($post->categories as $postCat)
                                <a href="category-result.html">{{$postCat->name}}
                                </a>
                                @endforeach
                            </div>
                            <!-- Title -->
                            <div class="title">
                                <h2><a href="blog-details.html">{{ $post->title}}</a></h2>
                            </div>
                            <!-- Post Meta -->
                            <ul class="nav meta align-items-center">
                                <li class="meta-author">
                                    <img src="assets/images/blog/author.jpg" alt="" class="img-fluid">
                                    <a href="#">{{$post->user->name}}</a>
                                </li>
                                <li class="meta-date"><a href="#">{{$post->updated_at}}</a></li>
                                <li class="meta-comments"><a href="#"><i class="fa fa-comment"></i> {{count($post->comments)}}</a></li>
                            </ul>
                            <!-- Post Desc -->
                            <div class="desc">
                                <p>{{ $post->body}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End of Post -->


                    <div class="align-center">{{$posts->links()}}</div>

                </div>
            </section>
            <!-- End of Trending Posts-->

            <!-- post with sidebar -->
            <div class="container pt-40 pb-90">
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
            </div>

            <!-- end of post with sidebar -->
        </div>
        <div class="col-lg-4" style="padding-top:13rem">
            @include('partial.home._sidebar')

        </div>
    </div>
</div>
@endsection
