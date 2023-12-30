<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ url('assets/img/fav.png') }}">

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
                <div class="container">

                <form action="{{url('admin/post/create')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstName1">Title :</label>
                                <input type="text" class="form-control" id="firstName1" name="title">
                                @error('title')
                                <p class="text-danger">{{$message}}</p>
                                    
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="location2">Select Category :</label>
                                <select class="custom-select form-control" id="location2" name="category_id">
                                    @foreach ($category as $data)
                                    <option value="{{$data->id}}">{{$data->title}}</option>
                                    @endforeach
                                    
                                 
                                </select>
                            </div>
                        </div>
                    </div>

                    <label for="firstName1">Description :</label>
                    <textarea id="editor" name="description"></textarea>
                        @error('description')
                        <p class="text-danger">{{$message}}</p>
                            
                        @enderror

                    
                    <label for="firstName1">Post Image :</label>
                    <input type="file" class="input-images-2 form-control" style="padding-bottom: .5rem;" name="post_image"/>
                    @error('post_image')
                    <p class="text-danger">{{$message}}</p>
                        
                    @enderror
                    <br>
                    <button type="submit" class="btn btn-primary">Publish Post</button>


                </form>

            </div>
              

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->






    </div>
    <!-- ./wrapper -->










    @include('layouts.footer')


    <script>
        let preloaded = [


        ];

        $('.input-images-2').imageUploader({
            preloaded: preloaded,
            imagesInputName: 'photos',
            preloadedInputName: 'old'
        });

    </script>




    <style>
        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 200px;
        }

        .ck-content .image {
            /* block images */
            max-width: 80%;
            margin: 20px auto;
        }
    </style>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>

</body>

</html>
