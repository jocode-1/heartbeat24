<!-- Header
		    ================================================== -->
            <header class="clearfix">

                <div class="top-line">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-sm-9">
                                <ul class="info-list">
                                    <li>
                                        <span class="live-time"><i class="fa fa-calendar-o"></i>10 Jannuary 2017</span>
                                    </li>
                                    <li>
                                        <a href="about.html">About Us</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="forums.html">Forum</a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#loginModal">Login</a>
                                    </li>
                                </ul>
                            </div>	
                            <div class="col-md-4 col-sm-3">
                                <ul class="social-icons">
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>	
                        </div>
                    </div>
                </div>
    
                <div class="header-banner-place">
                    <div class="container">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{asset('frontend/images/logo.png')}}" alt="">
                            <p>Newspaper &amp; Editorial HTML5 Magazine</p>
                        </a>
    
                        <div class="advertisement">
                            <a href="#"><img src="upload/addsense/620x80.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
    
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
    
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home</a>
                                </li>
                                @php
                                    $category = App\Models\Category::where('navbar_status', '0')->where('status', '0')->get()
                                @endphp
                                @foreach ($category as $cateitem)
                                <li class="nav-item">
                                    <a class="nav-link fashion" href="{{ url('tutorial/'.$cateitem->slug) }}">{{ $cateitem->name }}</a>
                                  </li>
                                    
                                @endforeach
                                {{-- <li class="nav-item">
                                    <a class="nav-link features" href="#">Features <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="megamenu">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <h2 class="lay-one">Layouts</h2>
                                                <ul class="mega-list">
                                                    <li><a href="index.html">Home Default</a></li>
                                                    <li><a href="home2.html">Home 2</a></li>
                                                    <li><a href="home3.html">Home 3</a></li>
                                                    <li><a href="home4.html">Home 4</a></li>
                                                    <li><a href="home5.html">Home 5</a></li>
                                                    <li><a href="home6.html">Home 6</a></li>
                                                    <li><a href="home-boxed.html">Home Boxed</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <h2 class="lay-two">Category Layouts</h2>
                                                <ul class="mega-list">
                                                    <li><a href="category1.html">Cat 1 - Articles</a></li>
                                                    <li><a href="category2.html">Cat 2 - Grid 2 col</a></li>
                                                    <li><a href="category3.html">Cat 3 - Grid No Sidebar</a></li>
                                                    <li><a href="category4.html">Cat 4 - LeftSidebar</a></li>
                                                    <li><a href="category5.html">Cat 5 - Large Posts</a></li>
                                                    <li><a href="category6.html">Cat 6 - Text Posts</a></li>
                                                    <li><a href="category7.html">Cat 7 - Masonry 3 col</a></li>
                                                    <li><a href="category8.html">Cat 8 - Masonry 4 col</a></li>
                                                    <li><a href="category9.html">Cat 9 - Images Posts</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <h2 class="lay-three">Posts Layouts</h2>
                                                <ul class="mega-list">
                                                    <li><a href="single-post.html">SinglePost - Default</a></li>
                                                    <li><a href="single-post2.html">SinglePost - Slider </a></li>
                                                    <li><a href="single-post3.html">SinglePost - Audio </a></li>
                                                    <li><a href="single-post4.html">SinglePost - Video</a></li>
                                                    <li><a href="single-post5.html">SinglePost - LeftSidebar</a></li>
                                                    <li><a href="single-post6.html">SinglePost - Text</a></li>
                                                    <li><a href="single-post7.html">SinglePost - Mixed</a></li>
                                                    <li><a href="single-post8.html">SinglePost - FullWidth</a></li>
                                                    <li><a href="single-post9.html">SinglePost - Full Slider</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <h2 class="lay-four">Header Layouts</h2>
                                                <ul class="mega-list">
                                                    <li><a href="index.html">Header 1</a></li>
                                                    <li><a href="header2.html">Header 2</a></li>
                                                    <li><a href="header3.html">Header 3</a></li>
                                                    <li><a href="header4.html">Header 4</a></li>
                                                    <li><a href="header5.html">Header 5</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link world" href="#">World <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="mega-posts-menu">
                                        <div class="posts-line">
                                            <ul class="filter-list">
                                                <li><a href="#">All</a></li>
                                                <li><a href="#">Politic</a></li>
                                                <li><a href="#">Economy</a></li>
                                                <li><a href="#">Business</a></li>
                                                <li><a href="#">Culture</a></li>
                                            </ul>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="news-post standart-post">
                                                        <div class="post-image">
                                                            <a href="single-post-2.html">
                                                                <img src="upload/blog/s25.jpg" alt="">
                                                            </a>
                                                            <a href="#" class="category category-world">Politic</a>
                                                        </div>
                                                        <h2><a href="single-post.html">New alternatives are more</a></h2>
                                                        <ul class="post-tags">
                                                            <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                                            <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="news-post standart-post">
                                                        <div class="post-image">
                                                            <a href="single-post-2.html">
                                                                <img src="upload/blog/s15.jpg" alt="">
                                                            </a>
                                                            <a href="#" class="category category-world">Economy</a>
                                                        </div>
                                                        <h2><a href="single-post.html">New alternatives are more</a></h2>
                                                        <ul class="post-tags">
                                                            <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                                            <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="news-post standart-post">
                                                        <div class="post-image">
                                                            <a href="single-post-2.html">
                                                                <img src="upload/blog/s23.jpg" alt="">
                                                            </a>
                                                            <a href="#" class="category category-world">Culture</a>
                                                        </div>
                                                        <h2><a href="single-post.html">New alternatives are more</a></h2>
                                                        <ul class="post-tags">
                                                            <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                                            <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="news-post standart-post">
                                                        <div class="post-image">
                                                            <a href="single-post-2.html">
                                                                <img src="upload/blog/s28.jpg" alt="">
                                                            </a>
                                                            <a href="#" class="category category-world">Business</a>
                                                        </div>
                                                        <h2><a href="single-post.html">New alternatives are more</a></h2>
                                                        <ul class="post-tags">
                                                            <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                                            <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link sport" href="#">Sport <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="mega-posts-menu">
                                        <div class="posts-line">
                                            <ul class="filter-list">
                                                <li><a href="#">All</a></li>
                                                <li><a href="#">Football</a></li>
                                                <li><a href="#">Basketball</a></li>
                                                <li><a href="#">Teniss</a></li>
                                                <li><a href="#">Winter sports</a></li>
                                            </ul>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="news-post standart-post">
                                                        <div class="post-image">
                                                            <a href="single-post-2.html">
                                                                <img src="upload/blog/s30.jpg" alt="">
                                                            </a>
                                                            <a href="#" class="category category-sport">Tennis</a>
                                                        </div>
                                                        <h2><a href="single-post.html">Travelling is part of our life</a></h2>
                                                        <ul class="post-tags">
                                                            <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                                            <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="news-post standart-post">
                                                        <div class="post-image">
                                                            <a href="single-post-2.html">
                                                                <img src="upload/blog/s31.jpg" alt="">
                                                            </a>
                                                            <a href="#" class="category category-sport">Football</a>
                                                        </div>
                                                        <h2><a href="single-post.html">Travelling is part of our life</a></h2>
                                                        <ul class="post-tags">
                                                            <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                                            <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="news-post standart-post">
                                                        <div class="post-image">
                                                            <a href="single-post-2.html">
                                                                <img src="upload/blog/s32.jpg" alt="">
                                                            </a>
                                                            <a href="#" class="category category-sport">winter sports</a>
                                                        </div>
                                                        <h2><a href="single-post.html">Travelling is part of our life</a></h2>
                                                        <ul class="post-tags">
                                                            <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                                            <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="news-post standart-post">
                                                        <div class="post-image">
                                                            <a href="single-post-2.html">
                                                                <img src="upload/blog/s29.jpg" alt="">
                                                            </a>
                                                            <a href="#" class="category category-sport">Basketball</a>
                                                        </div>
                                                        <h2><a href="single-post.html">Travelling is part of our life</a></h2>
                                                        <ul class="post-tags">
                                                            <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                                            <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link tech" href="#">Tech <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="mega-posts-menu">
                                        <div class="posts-line">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="news-post standart-post">
                                                        <div class="post-image">
                                                            <a href="single-post-2.html">
                                                                <img src="upload/blog/s37.jpg" alt="">
                                                            </a>
                                                            <a href="#" class="category category-tech">Tennis</a>
                                                        </div>
                                                        <h2><a href="single-post.html">Travelling is part of our life</a></h2>
                                                        <ul class="post-tags">
                                                            <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                                            <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="news-post standart-post">
                                                        <div class="post-image">
                                                            <a href="single-post-2.html">
                                                                <img src="upload/blog/s38.jpg" alt="">
                                                            </a>
                                                            <a href="#" class="category category-tech">Tech</a>
                                                        </div>
                                                        <h2><a href="single-post.html">Travelling is part of our life</a></h2>
                                                        <ul class="post-tags">
                                                            <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                                            <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="news-post standart-post">
                                                        <div class="post-image">
                                                            <a href="single-post-2.html">
                                                                <img src="upload/blog/s39.jpg" alt="">
                                                            </a>
                                                            <a href="#" class="category category-tech">Tech</a>
                                                        </div>
                                                        <h2><a href="single-post.html">Travelling is part of our life</a></h2>
                                                        <ul class="post-tags">
                                                            <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                                            <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="news-post standart-post">
                                                        <div class="post-image">
                                                            <a href="single-post-2.html">
                                                                <img src="upload/blog/s2.jpg" alt="">
                                                            </a>
                                                            <a href="#" class="category category-tech">Tech</a>
                                                        </div>
                                                        <h2><a href="single-post.html">Travelling is part of our life</a></h2>
                                                        <ul class="post-tags">
                                                            <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                                            <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li> --}}
                                
                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link travel" href="#">Travel <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                </li>
                                <li class="nav-item drop-link">
                                    <a class="nav-link food" href="#">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="forums.html">Forum Pages <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown level2">
                                                <li><a href="forums.html">Forum</a></li>
                                                <li><a href="forums-category.html">Topics</a></li>
                                                <li><a href="forum-topic.html">Single Topic</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="author-list.html">Authors List</a></li>
                                        <li><a href="author-details.html">Author Details</a></li>
                                        <li><a href="archive.html">Archive Page</a></li>
                                        <li><a href="tag.html">Tags Page</a></li>
                                        <li><a href="search.html">Search Page</a></li>
                                        <li><a href="register.html">Register Page</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="404-error.html">404 Error</a></li>
                                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                        <li><a href="underconstruction.html" target="_blank">Underconstruction</a></li>
                                    </ul>
                                </li> --}}
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search for..." aria-label="Search">
                                <button class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </nav>
            </header>
            <!-- End Header -->