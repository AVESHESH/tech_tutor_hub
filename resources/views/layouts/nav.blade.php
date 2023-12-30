<header class="main-header">
           
            
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">






                <!-- User Account -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ Avatar::create(auth()->user()->name)->toBase64() }}"
                            class="user-image rounded-circle" alt="User Image">
                    </a>
                    <ul class="dropdown-menu scale-up">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ Avatar::create(auth()->user()->name)->toBase64() }}"
                                class="float-left rounded-circle" alt="User Image">

                            <p>
                                Romi Roy
                                <small class="mb-5">jb@gmail.com</small>
                                <a href="#" class="btn btn-danger btn-sm btn-rounded">View Profile</a>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="row no-gutters">
                                <div class="col-12 text-left">
                                    <a href="#"><i class="ion ion-person"></i> My Profile</a>
                                </div>
                                <div class="col-12 text-left">
                                    <a href="#"><i class="ion ion-email-unread"></i> Inbox</a>
                                </div>
                                <div class="col-12 text-left">
                                    <a href="#"><i class="ion ion-settings"></i> Setting</a>
                                </div>
                                <div role="separator" class="divider col-12"></div>
                                <div class="col-12 text-left">
                                    <a href="#"><i class="ti-settings"></i> Account Setting</a>
                                </div>
                                <div role="separator" class="divider col-12"></div>
                                <div class="col-12 text-left">
                                    <a href="#"><i class="fa fa-power-off"></i> Logout</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</header>