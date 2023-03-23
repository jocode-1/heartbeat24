@extends('layouts.app')

@section('title', "$post->meta_title")
@section('meta_description', "$post->meta_description")
@section('meta_keyword', "$post->meta_keyword")


@section('content')


    <!-- content-section
       ================================================== -->
    <section id="content-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-8">

                    <!-- single-post -->
                    <div class="single-post">
                        <h1>{!! $post->name !!}</h1>
                        <ul class="post-tags">
                            <li><i class="lnr lnr-user"></i>by {!! $post->user->name !!} </li>
                            {{-- <li><a href="#"><i class="lnr lnr-book"></i><span>20 comments</span></a></li> --}}
                            <li><i class="lnr lnr-date"></i>Posted On: {!! $post->created_at->format('d-m-y') !!}</li>
                        </ul>
                        <div class="share-post-box">
                            <ul class="share-box">
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i><span>Share on
                                            Facebook</span></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i><span>Share on
                                            Twitter</span></a></li>
                                <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                        <img src="upload/blog/lg2.jpg" alt="">
                        <div class="text-boxes">
                            <p>{!! $post->description !!}</p>
                            {{-- <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <h2>Duis aute irure dolor in reprehenderit in voluptate</h2>
                                    <p>
                                    Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante, mattis eget, gravida vitae, ultricies ac, leo. Integer leo pede, ornare a, lacinia eu, vulputate vel, nisl.
                                    </p> --}}
                        </div>
                    </div>
                    <!-- End single-post -->

                    <!-- Advertisement -->
                    <div class="advertisement">
                        <a href="#"><img src="upload/addsense/620x80grey.jpg" alt=""></a>
                    </div>
                    <!-- End Advertisement -->

                    <!-- Posts-block -->
                    {{-- <div class="posts-block featured-box">
                        <div class="title-section">
                            <h1>You Might also Like</h1>
                        </div>

                        <div class="owl-wrapper">
                            <div class="owl-carousel" data-num="3">

                                <div class="item">
                                    <div class="news-post standart-post">
                                        <div class="post-image">
                                            <a href="single-post-2.html">
                                                <img src="upload/blog/s24.jpg" alt="">
                                            </a>
                                            <a href="#" class="category category-fashion">fashion</a>
                                        </div>
                                        <h2><a href="single-post.html">Autumn wear ...</a></h2>
                                        <ul class="post-tags">
                                            <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                            <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="news-post standart-post">
                                        <div class="post-image">
                                            <a href="single-post-2.html">
                                                <img src="upload/blog/s25.jpg" alt="">
                                            </a>
                                            <a href="#" class="category category-world">world</a>
                                        </div>
                                        <h2><a href="single-post.html">Travelling is part of our life</a></h2>
                                        <ul class="post-tags">
                                            <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                            <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="news-post standart-post">
                                        <div class="post-image">
                                            <a href="single-post-2.html">
                                                <img src="upload/blog/s26.jpg" alt="">
                                            </a>
                                            <a href="#" class="category category-food">food</a>
                                        </div>
                                        <h2><a href="single-post.html">Traditional food</a></h2>
                                        <ul class="post-tags">
                                            <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                            <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="news-post standart-post">
                                        <div class="post-image">
                                            <a href="single-post-2.html">
                                                <img src="upload/blog/s27.jpg" alt="">
                                            </a>
                                            <a href="#" class="category">Politics</a>
                                        </div>
                                        <h2><a href="single-post.html">New alternatives are more productive</a></h2>
                                        <ul class="post-tags">
                                            <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                            <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="news-post standart-post">
                                        <div class="post-image">
                                            <a href="single-post-2.html">
                                                <img src="upload/blog/s28.jpg" alt="">
                                            </a>
                                            <a href="#" class="category category-travel">Travel</a>
                                        </div>
                                        <h2><a href="single-post.html">Visiting antic countries is John Doe hobby.</a></h2>
                                        <ul class="post-tags">
                                            <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                            <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div> --}}
                    <!-- End Posts-block -->

                    <!-- author-profile -->
                    <div class="author-profile">
                        <div class="author-box">
                            <img alt="" src="upload/users/avatar6.jpg">
                            <div class="author-content">
                                <h4>Helena Doe <a href="#">14 posts</a></h4>
                                <p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi
                                    ullamcorper vehicula. Integer adipiscing risus a sem. Nullam. </p>
                                <ul class="author-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End author-profile -->

                    <!-- comment area box -->
                    <div class="comment-area-box">
                        <div class="title-section">
                            <h1><span>5 Comments</span></h1>
                        </div>
                        <ul class="comment-tree">
                            <li>
                                <div class="comment-box">
                                    <img alt="" src="upload/users/avatar3.jpg">
                                    <div class="comment-content">
                                        <h4>Fiona Herrerez <a href="#"><i class="fa fa-comment-o"></i>Reply</a></h4>
                                        <span><i class="fa fa-clock-o"></i>27 Jann 2018 at 8:57 pm</span>
                                        <p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi
                                            ullamcorper vehicula. Integer adipiscing risus a sem. Nullam. </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="comment-box">
                                    <img alt="" src="upload/users/avatar1.jpg">
                                    <div class="comment-content">
                                        <h4>John Doe <a href="#"><i class="fa fa-comment-o"></i>Reply</a></h4>
                                        <span><i class="fa fa-clock-o"></i>27 Jann 2018 at 8:57 pm</span>
                                        <p>Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula.
                                            Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra
                                            malesuada. Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu. Ut
                                            scelerisque hendrerit tellus. Integer sagittis. </p>
                                    </div>
                                </div>
                                <ul class="depth">
                                    <li>
                                        <div class="comment-box">
                                            <img alt="" src="upload/users/avatar2.jpg">
                                            <div class="comment-content">
                                                <h4>John Doe <a href="#"><i class="fa fa-comment-o"></i>Reply</a>
                                                </h4>
                                                <span><i class="fa fa-clock-o"></i>27 Jann 2018 at 8:57 pm</span>
                                                <p>CNullam quis massa sit amet nibh viverra malesuada. Nunc sem lacus,
                                                    accumsan quis, faucibus non. </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <div class="comment-box">
                                    <img alt="" src="upload/users/avatar4.jpg">
                                    <div class="comment-content">
                                        <h4>John Doe <a href="#"><i class="fa fa-comment-o"></i>Reply</a></h4>
                                        <span><i class="fa fa-clock-o"></i>27 Jann 2018 at 8:57 pm</span>
                                        <p>Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula.
                                            Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra
                                            malesuada. Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu. Ut
                                            scelerisque hendrerit tellus. Integer sagittis. </p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="comment-box">
                                    <img alt="" src="upload/users/avatar5.jpg">
                                    <div class="comment-content">
                                        <h4>Maria Lilly <a href="#"><i class="fa fa-comment-o"></i>Reply</a></h4>
                                        <span><i class="fa fa-clock-o"></i>27 Jann 2018 at 8:57 pm</span>
                                        <p>Nullam quis massa sit amet nibh viverra malesuada. Nunc sem lacus, accumsan quis,
                                            faucibus non, congue vel. </p>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- End comment area box -->

                    <!-- contact form box -->
                    <div class="contact-form-box">
                        <div class="title-section">
                            <h1><span>Leave a Comment</span> <span class="email-not-published">Your email address will not
                                    be published.</span></h1>
                        </div>
                        <form id="comment-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name">Name*</label>
                                    <input id="name" name="name" type="text">
                                </div>
                                <div class="col-md-6">
                                    <label for="mail">E-mail*</label>
                                    <input id="mail" name="mail" type="text">
                                </div>
                            </div>
                            <label for="website">Website</label>
                            <input id="website" name="website" type="text">
                            <label for="comment">Comment*</label>
                            <textarea id="comment" name="comment"></textarea>
                            <button type="submit" id="submit-contact">
                                <i class="fa fa-comment"></i> Post Comment
                            </button>
                        </form>
                    </div>
                    <!-- End contact form box -->

                </div>

                <div class="col-lg-4 sidebar-sticky">

                    <!-- Sidebar -->
                    <div class="sidebar theiaStickySidebar">
                        <div class="search-widget widget">
                            <form>
                                <input type="search" placeholder="Search for..." />
                                <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="widget social-widget">
                            <h1>Stay Connected </h1>
                            <p>Do you want to be informed everytime with our latest news?</p>
                            <ul class="social-share">
                                <li>
                                    <a href="#" class="rss">
                                        <i class="fa fa-rss"></i>
                                        <span>345</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="facebook">
                                        <i class="fa fa-facebook"></i>
                                        <span>3,460</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter">
                                        <i class="fa fa-twitter"></i>
                                        <span>5,600</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="google">
                                        <i class="fa fa-google-plus"></i>
                                        <span>659</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget slider-widget">
                            <h1>Featured Posts</h1>
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img alt="" src="upload/blog/s14.jpg" />
                                        <div class="slider-caption">
                                            <a href="#" class="category category-tech">Tech</a>
                                            <h2><a href="single-post.html">Vue js new javascript Framework</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                                <li><a href="#"><i class="lnr lnr-book"></i><span>23
                                                            comments</span></a></li>
                                                <li><i class="lnr lnr-eye"></i>872 Views</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <img alt="" src="upload/blog/s13.jpg" />
                                        <div class="slider-caption">
                                            <a href="#" class="category category-fashion">Fashion</a>
                                            <h2><a href="single-post.html">Autumn wear ...</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                                <li><a href="#"><i class="lnr lnr-book"></i><span>23
                                                            comments</span></a></li>
                                                <li><i class="lnr lnr-eye"></i>872 Views</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <img alt="" src="upload/blog/s26.jpg" />
                                        <div class="slider-caption">
                                            <a href="#" class="category category-world">Business</a>
                                            <h2><a href="single-post.html">Business title news ...</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                                <li><a href="#"><i class="lnr lnr-book"></i><span>23
                                                            comments</span></a></li>
                                                <li><i class="lnr lnr-eye"></i>872 Views</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget news-widget">
                            <h1>Latest Post</h1>
                            <ul class="small-posts">
                                @foreach ($latest_posts as $item)
                                <li>
                                    <a href="single-post.html">
                                        <img src="{{ url('frontend/upload/blog/th1.jpg')}}" alt="">
                                    </a>
                                    <div class="post-cont">
                                        <h2><a href="{{ url('tutorial/'. $item->category->slug.'/' .$item->slug) }}">{{ $item->name }}</a></h2>
                                        <ul class="post-tags">
                                            <li><i class="lnr lnr-user"></i>by {!! $post->user->name !!} </li>
                                        </ul>
                                    </div>
                                </li>
                                    
                                @endforeach
                               
                            </ul>
                        </div>
                        {{-- <div class="widget news-widget">
                            <h1>Last news as list titles...</h1>
                            <ul class="list-news">
                                <li>
                                    <h2><a href="single-post.html">Technology Remote Jobs</a></h2>
                                </li>
                                <li>
                                    <h2><a href="single-post.html">United States celebrate</a></h2>
                                </li>
                                <li>
                                    <h2><a href="single-post.html">Fruits and Vegetables</a></h2>
                                </li>
                                <li>
                                    <h2><a href="single-post.html">New alternatives are more productive</a></h2>
                                </li>
                                <li>
                                    <h2><a href="single-post.html">Traditional food</a></h2>
                                </li>
                                <li>
                                    <h2><a href="single-post.html">Hapier Child</a></h2>
                                </li>
                            </ul>
                        </div> --}}

                        <div class="advertisement">
                            <a href="#"><img src="upload/addsense/300x250.jpg" alt=""></a>
                        </div>

                        <div class="widget tabs-widget">
                            <nav class="nav nav-tabs" id="myTab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-popular-tab" data-toggle="tab"
                                    href="#nav-popular" role="tab" aria-controls="nav-popular"
                                    aria-selected="true">Popular</a>
                                <a class="nav-item nav-link" id="nav-recent-tab" data-toggle="tab" href="#nav-recent"
                                    role="tab" aria-controls="nav-recent" aria-selected="false">Recent</a>
                                <a class="nav-item nav-link" id="nav-comments-tab" data-toggle="tab"
                                    href="#nav-comments" role="tab" aria-controls="nav-comments"
                                    aria-selected="false">Comments</a>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-popular" role="tabpanel"
                                    aria-labelledby="nav-popular-tab">
                                    <ul class="small-posts">
                                        <li>
                                            <a href="single-post.html">
                                                <img src="upload/blog/th5.jpg" alt="">
                                            </a>
                                            <div class="post-cont">
                                                <h2><a href="single-post.html">New alternatives are more productive</a>
                                                </h2>
                                                <ul class="post-tags">
                                                    <li><i class="lnr lnr-user"></i>by <a href="#">Author</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="single-post.html">
                                                <img src="upload/blog/th6.jpg" alt="">
                                            </a>
                                            <div class="post-cont">
                                                <h2><a href="single-post.html">Vue js new javascript Framework</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="lnr lnr-user"></i>by <a href="#">Besim Dauti</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="single-post.html">
                                                <img src="upload/blog/th7.jpg" alt="">
                                            </a>
                                            <div class="post-cont">
                                                <h2><a href="single-post.html">Eating traditional food is more healthy</a>
                                                </h2>
                                                <ul class="post-tags">
                                                    <li><i class="lnr lnr-user"></i>by <a href="#">Admin Mag</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="single-post.html">
                                                <img src="upload/blog/th8.jpg" alt="">
                                            </a>
                                            <div class="post-cont">
                                                <h2><a href="single-post.html">Visiting antic countries is John Doe
                                                        hobby.</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="lnr lnr-user"></i>by <a href="#">Helena Doe</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="nav-recent" role="tabpanel"
                                    aria-labelledby="nav-recent-tab">
                                    <ul class="small-posts">
                                        <li>
                                            <a href="single-post.html">
                                                <img src="upload/blog/th9.jpg" alt="">
                                            </a>
                                            <div class="post-cont">
                                                <h2><a href="single-post.html">New alternatives are more productive</a>
                                                </h2>
                                                <ul class="post-tags">
                                                    <li><i class="lnr lnr-user"></i>by <a href="#">Author</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="single-post.html">
                                                <img src="upload/blog/th10.jpg" alt="">
                                            </a>
                                            <div class="post-cont">
                                                <h2><a href="single-post.html">Vue js new javascript Framework</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="lnr lnr-user"></i>by <a href="#">Besim Dauti</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="single-post.html">
                                                <img src="upload/blog/th1.jpg" alt="">
                                            </a>
                                            <div class="post-cont">
                                                <h2><a href="single-post.html">Eating traditional food is more healthy</a>
                                                </h2>
                                                <ul class="post-tags">
                                                    <li><i class="lnr lnr-user"></i>by <a href="#">Admin Mag</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="single-post.html">
                                                <img src="upload/blog/th2.jpg" alt="">
                                            </a>
                                            <div class="post-cont">
                                                <h2><a href="single-post.html">Visiting antic countries is John Doe
                                                        hobby.</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="lnr lnr-user"></i>by <a href="#">Helena Doe</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="nav-comments" role="tabpanel"
                                    aria-labelledby="nav-comments-tab">
                                    <ul class="small-posts">
                                        <li>
                                            <a href="single-post.html">
                                                <img src="upload/blog/th3.jpg" alt="">
                                            </a>
                                            <div class="post-cont">
                                                <h2><a href="single-post.html">New alternatives are more productive</a>
                                                </h2>
                                                <ul class="post-tags">
                                                    <li><i class="lnr lnr-user"></i>by <a href="#">Author</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="single-post.html">
                                                <img src="upload/blog/th4.jpg" alt="">
                                            </a>
                                            <div class="post-cont">
                                                <h2><a href="single-post.html">Vue js new javascript Framework</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="lnr lnr-user"></i>by <a href="#">Besim Dauti</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="single-post.html">
                                                <img src="upload/blog/th5.jpg" alt="">
                                            </a>
                                            <div class="post-cont">
                                                <h2><a href="single-post.html">Eating traditional food is more healthy</a>
                                                </h2>
                                                <ul class="post-tags">
                                                    <li><i class="lnr lnr-user"></i>by <a href="#">Admin Mag</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="single-post.html">
                                                <img src="upload/blog/th6.jpg" alt="">
                                            </a>
                                            <div class="post-cont">
                                                <h2><a href="single-post.html">Visiting antic countries is John Doe
                                                        hobby.</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="lnr lnr-user"></i>by <a href="#">Helena Doe</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="widget tags-widget">
                            <h1>Tags</h1>
                            <ul class="tags-list">
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Sport</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">World</a></li>
                                <li><a href="#">Politic</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Tech</a></li>
                                <li><a href="#">Music</a></li>
                                <li><a href="#">Economy</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Photos</a></li>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Traditional</a></li>
                                <li><a href="#">New</a></li>
                                <li><a href="#">Future</a></li>
                                <li><a href="#">Culture</a></li>
                            </ul>
                        </div>

                    </div>

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
    <!-- End content section -->
@endsection
