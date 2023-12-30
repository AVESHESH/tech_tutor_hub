<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{url('assets/img/fav.png')}}">

    <title>Tech Tutor Hub</title>

    @include('layouts.adminheader')
</head>

<body class="hold-transition skin-blue-light sidebar-mini">
    <div class="wrapper">

        @include('layouts.nav')

        @include('layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">


            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->






    </div>
    <!-- ./wrapper -->










    @include('layouts.footer')


</body>

</html>
