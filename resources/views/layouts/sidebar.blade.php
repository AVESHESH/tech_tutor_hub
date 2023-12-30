     <!-- Left side column. contains the logo and sidebar -->
     <aside class="main-sidebar">
        <!-- sidebar -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="ulogo">
                    <a href="index.html">
                        <!-- logo for regular state and mobile devices -->
                        <span>Tech Tutor Hub</span>
                    </a>
                </div>
                <div class="image">
                    <img src="{{ Avatar::create(auth()->user()->name)->toBase64() }}" class="rounded-circle" alt="User Image">
                </div>
                <div class="info">
                    <p>{{auth()->user()->name}}</p>
                    <a href="" class="link" data-toggle="tooltip" title=""
                        data-original-title="Settings"><i class="ion ion-gear-b"></i></a>
                    <a href="" class="link" data-toggle="tooltip" title=""
                        data-original-title="Email"><i class="ion ion-android-mail"></i></a>
                    <a href="" class="link" data-toggle="tooltip" title=""
                        data-original-title="Logout"><i class="ion ion-power"></i></a>
                </div>
            </div>
            <!-- sidebar menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="nav-devider"></li>
                <li class="header nav-small-cap">PERSONAL</li>
                <li class=" {{request()->is('admin/dashboard')?'active':""}}" >
                    <a href="{{url('admin/dashboard')}}">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                </li>
                <li class="treeview {{request()->is('admin/post*')?'active':""}}">
                    <a href="#">
                        <i class="fa fa-th"></i>
                        <span>Content</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li  class=" {{request()->is('admin/post/post-category')?'active':""}}">
                            <a href="{{url('admin/post/post-category')}}">Category</a></li>
                        <li  class=" {{request()->is('admin/post/view')?'active':""}}"><a href="{{url('admin/post/view')}}">Posts</a></li>
                        <li  class=" {{request()->is('admin/post/view-posts')?'active':""}}"><a href="{{url('admin/post/view-posts')}}">View Posts</a></li>
                    </ul>
                </li>
              
                     

            </ul>
        </section>
    </aside>