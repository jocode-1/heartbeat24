<!-- SIDEBAR - START -->
<div class="page-sidebar ">

    <!-- MAIN MENU - START -->
    <div class="page-sidebar-wrapper" id="main-menu-wrapper"> 

        <!-- USER INFO - START -->
        <div class="profile-info row">

            <div class="profile-image col-md-4 col-sm-4 col-xs-4">
                <a href="ui-profile.html">
                    <img src="data/profile/profile-blog.jpg" class="img-responsive img-circle">
                </a>
            </div>

            <div class="profile-details col-md-8 col-sm-8 col-xs-8">

                <h3>
                    <a href="ui-profile.html">Mark Yurey</a>

                    <!-- Available statuses: online, idle, busy, away and offline -->
                    <span class="profile-status online"></span>
                </h3>

                <p class="profile-title">Administrator</p>

            </div>

        </div>
        <!-- USER INFO - END -->



        <ul class='wraplist'>	


            <li class="open"> 
                <a href="index-blog.html">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class=""> 
                <a href="javascript:;">
                    <i class="fa fa-edit"></i>
                    <span class="title">Blogs</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu" >
                    <li>
                        <a class="" href="blo-blogs.html" >All Blogs</a>
                    </li>
                    <li>
                        <a class="" href="blo-blog-add.html" >Add Blog</a>
                    </li>
                    <li>
                        <a class="" href="blo-blog-edit.html" >Edit Blog</a>
                    </li>
                    <li>
                        <a class="" href="blo-blog-view.html" >View Blog</a>
                    </li>
                </ul>
            </li>
            <li class=""> 
                <a href="blo-search.html">
                    <i class="fa fa-search"></i>
                    <span class="title">Search</span>
                </a>
            </li>
            <li class=""> 
                <a href="javascript:;">
                    <i class="fa fa-upload"></i>
                    <span class="title">Media</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu" >
                    <li>
                        <a class="" href="blo-media.html" >All Media</a>
                    </li>
                    <li>
                        <a class="" href="blo-upload.html" >Upload</a>
                    </li>
                </ul>
            </li>
            <li class=""> 
                <a href="javascript:;">
                    <i class="fa fa-sitemap"></i>
                    <span class="title">Categories</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu" >
                    <li>
                        <a class="" href="{{ url('admin/add-category') }}" >Add Categories</a>
                    </li>
                    <li>
                        <a class="" href="{{ url('admin/create') }}" >View Categories</a>
                    </li>
                    {{-- <li>
                        <a class="" href="blo-category-edit.html" >Edit Category</a>
                    </li> --}}
                </ul>
            </li>
            <li class=""> 
                <a href="javascript:;">
                    <i class="fa fa-files-o"></i>
                    <span class="title">Posts</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu" >
                    <li>
                        <a class="" href="{{ url('admin/add-posts')}}" >Add Post</a>
                    </li>
                    <li>
                        <a class="" href="{{ url('admin/posts')}}" >View Post</a>
                    </li>
                </ul>
            </li>
            <li class=""> 
                <a href="javascript:;">
                    <i class="fa fa-user"></i>
                    <span class="title">Users</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu" >
                    <li>
                        <a class="" href="blo-users.html" >All Users</a>
                    </li>
                    <li>
                        <a class="" href="blo-user-add.html" >Add User</a>
                    </li>
                    <li>
                        <a class="" href="blo-user-edit.html" >Edit User</a>
                    </li>
                    <li>
                        <a class="" href="blo-user-profile.html" >User Profile</a>
                    </li>
                </ul>
            </li>
            <li class=""> 
                <a href="javascript:;">
                    <i class="fa fa-envelope"></i>
                    <span class="title">Mailbox</span>
                    <span class="arrow "></span><span class="label label-orange">4</span>
                </a>
                <ul class="sub-menu" >
                    <li>
                        <a class="" href="blo-mail-inbox.html" >Inbox</a>
                    </li>
                    <li>
                        <a class="" href="blo-mail-compose.html" >Compose</a>
                    </li>
                    <li>
                        <a class="" href="blo-mail-view.html" >View</a>
                    </li>
                </ul>
            </li>
            <li class=""> 
                <a href="javascript:;">
                    <i class="fa fa-bar-chart"></i>
                    <span class="title">Reports</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu" >
                    <li>
                        <a class="" href="blo-report-site.html" >Site</a>
                    </li>
                    <li>
                        <a class="" href="blo-report-visitors.html" >Visitors</a>
                    </li>
                </ul>
            </li>
            <li class=""> 
                <a href="javascript:;">
                    <i class="fa fa-tags"></i>
                    <span class="title">Tags</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu" >
                    <li>
                        <a class="" href="blo-tags.html" >All Tags</a>
                    </li>
                    <li>
                        <a class="" href="blo-tag-add.html" >Add Tag</a>
                    </li>
                    <li>
                        <a class="" href="blo-tag-edit.html" >Edit Tag</a>
                    </li>
                </ul>
            </li>
            <li class=""> 
                <a href="javascript:;">
                    <i class="fa fa-suitcase"></i>
                    <span class="title">Multi Purpose</span>
                    <span class="arrow "></span><span class="label label-orange">NEW</span>
                </a>
                <ul class="sub-menu" >
                    <li>
                        <a class="" href="general.html"  target = '_blank' >General Admin</a>
                    </li>
                    <li>
                        <a class="" href="hospital.html"  target = '_blank' >Hospital Admin</a>
                    </li>
                    <li>
                        <a class="" href="music.html"  target = '_blank' >Music Admin</a>
                    </li>
                    <li>
                        <a class="" href="crm.html"  target = '_blank' >CRM Admin</a>
                    </li>
                    <li>
                        <a class="" href="socialmedia.html"  target = '_blank' >Social Media Admin</a>
                    </li>
                    <li>
                        <a class="" href="freelancing.html"  target = '_blank' >Freelancing Admin</a>
                    </li>
                    <li>
                        <a class="" href="university.html"  target = '_blank' >University Admin</a>
                    </li>
                    <li>
                        <a class="" href="ecommerce.html"  target = '_blank' >Ecommerce Admin</a>
                    </li>
                    <li>
                        <a class="" href="blog.html"  target = '_blank' >Blog Admin</a>
                    </li>
                </ul>
            </li>

        </ul>

    </div>
    <!-- MAIN MENU - END -->



    <div class="project-info">

        <div class="block1">
            <div class="data">
                <span class='title'>New&nbsp;Users</span>
                <span class='total'>245</span>
            </div>
            <div class="graph">
                <span class="sidebar_orders">...</span>
            </div>
        </div>

        <div class="block2">
            <div class="data">
                <span class='title'>Subscribers</span>
                <span class='total'>990</span>
            </div>
            <div class="graph">
                <span class="sidebar_visitors">...</span>
            </div>
        </div>

    </div>



</div>