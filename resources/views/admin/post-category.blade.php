<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ url('assets/img/fav.png') }}">

    <title>Post Category</title>

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
                    Post Category

                </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="breadcrumb-item active">Post Category</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">



                <div class="container">
                    <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#modal-center">
                        Create Category
                    </button>
                    <br>
                    <table class="table table-striped">
                        <thead class="table-primary">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($postCategory as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->title}}</td>
                                <td>{{$data->status}}</td>
                                <td><button class="btn btn-danger">Delete</button></td>
                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>











            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->






    </div>
    <!-- ./wrapper -->








    <!-- Modal -->
    <div class="modal center-modal fade" id="modal-center" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Category</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/post/post-category') }}" method="post">
                        @csrf
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" />

                        <button type="submit" class="btn btn-primary mt-4">Submit</button>




                    </form>
                </div>

            </div>
        </div>
    </div>





    @include('layouts.footer')


</body>

</html>
