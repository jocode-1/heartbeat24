@extends('layouts.app')

@section('title', "$category->meta_title")
@section('meta_description', "$category->meta_description")
@section('meta_keyword', "$category->meta_keyword")
    

@section('content')
    <section id="content-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">

                    <!-- Posts-block -->
                    <div class="posts-block standard-box">
                        <div class="title-section">
                            <h1>{{ $category->name }}</h1>
                        </div>

                        <div class="row">
                            @forelse ($post as $postitem)
                                <div class="col-lg-4 col-md-6">
                                    <div class="news-post standart-post">
                                        <div class="post-image">
                                            <a href="single-post-2.html">
                                                <img src="{{ url('frontend/upload/blog/s2.jpg') }}" alt="">
                                            </a>
                                            <a href="#" class="category category-tech">{{ $category->name }}</a>
                                        </div>
                                        <h2><a
                                                href="{{ url('tutorial/' . $category->slug . '/' . $postitem->slug) }}">{{ $postitem->name }}</a>
                                        </h2>
                                        <ul class="post-tags">
                                            <li><i class="lnr lnr-user"></i>by {{ $postitem->user->name }} </li>
                                            <li><i class="lnr lnr-eye"></i>Posted On
                                                {{ $postitem->created_at->format('d-m-y') }}</li>
                                        </ul>
                                        
                                    </div>
                                </div>
                            @empty
                        </div>


                        <div class="col-lg-4 col-md-6">
                            <div class="news-post standart-post">

                                <p>No Post Available</p>
                            </div>
                        </div>
                        @endforelse

                        <ul class="pagination-list">
                            {{ $post->links() }}
                        </ul>



                        {{-- <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="news-post standart-post">
                                            <div class="post-image">
                                                <a href="single-post-2.html">
                                                    <img src="upload/blog/s5.jpg" alt="">
                                                </a>
                                                <a href="#" class="category category-food">Food</a>
                                            </div>
                                            <h2><a href="single-post.html">Fruits and Vegetables</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                                <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                                <li><i class="lnr lnr-eye"></i>872 Views</li>
                                            </ul>
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="news-post standart-post">
                                            <div class="post-image">
                                                <a href="single-post-2.html">
                                                    <img src="upload/blog/s6.jpg" alt="">
                                                </a>
                                                <a href="#" class="category category-world">World</a>
                                            </div>
                                            <h2><a href="single-post.html">United States celebrate</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                                <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                                <li><i class="lnr lnr-eye"></i>872 Views</li>
                                            </ul>
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="news-post standart-post">
                                            <div class="post-image">
                                                <a href="single-post-2.html">
                                                    <img src="upload/blog/s8.jpg" alt="">
                                                </a>
                                                <a href="#" class="category category-tech">Tech</a>
                                            </div>
                                            <h2><a href="single-post.html">Technology Remote Jobs</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                                <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                                <li><i class="lnr lnr-eye"></i>872 Views</li>
                                            </ul>
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="news-post standart-post">
                                            <div class="post-image">
                                                <a href="single-post-2.html">
                                                    <img src="upload/blog/s23.jpg" alt="">
                                                </a>
                                                <a href="#" class="category category-travel">Travel</a>
                                            </div>
                                            <h2><a href="single-post.html">Travelling is part of our life</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                                <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                                <li><i class="lnr lnr-eye"></i>872 Views</li>
                                            </ul>
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="news-post standart-post">
                                            <div class="post-image">
                                                <a href="single-post-2.html">
                                                    <img src="upload/blog/s19.jpg" alt="">
                                                </a>
                                                <a href="#" class="category category-lifestyle">Politics</a>
                                            </div>
                                            <h2><a href="single-post.html">Protests against violence</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                                <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                                <li><i class="lnr lnr-eye"></i>872 Views</li>
                                            </ul>
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="news-post standart-post">
                                            <div class="post-image">
                                                <a href="single-post-2.html">
                                                    <img src="upload/blog/s24.jpg" alt="">
                                                </a>
                                                <a href="#" class="category category-travel">Travel</a>
                                            </div>
                                            <h2><a href="single-post.html">Travelling is part of our life</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                                <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                                <li><i class="lnr lnr-eye"></i>872 Views</li>
                                            </ul>
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur.</p>
                                        </div>
                                    </div>
                                </div> --}}



                    </div>
                    <!-- End Posts-block -->

                </div>

            </div>

            <!-- Advertisement -->
            <div class="advertisement">
                <a href="#"><img src="upload/addsense/620x80grey.jpg" alt=""></a>
            </div>
            <!-- End Advertisement -->

            <!-- more from news box -->
            <div class="more-from-news">
                <h1>Weekly Top News</h1>
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="single-post-2.html">
                                    <img src="upload/blog/s1.jpg" alt="">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="single-post-2.html">
                                    <img src="upload/blog/s3.jpg" alt="">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="single-post-2.html">
                                    <img src="upload/blog/s6.jpg" alt="">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="single-post-2.html">
                                    <img src="upload/blog/s8.jpg" alt="">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="single-post-2.html">
                                    <img src="upload/blog/s9.jpg" alt="">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="single-post-2.html">
                                    <img src="upload/blog/s10.jpg" alt="">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="single-post-2.html">
                                    <img src="upload/blog/s12.jpg" alt="">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="single-post-2.html">
                                    <img src="upload/blog/s15.jpg" alt="">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="single-post-2.html">
                                    <img src="upload/blog/s16.jpg" alt="">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="single-post-2.html">
                                    <img src="upload/blog/s18.jpg" alt="">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="single-post-2.html">
                                    <img src="upload/blog/s23.jpg" alt="">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="single-post-2.html">
                                    <img src="upload/blog/s24.jpg" alt="">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end more from news box -->
        </div>
    </section>
@endsection
