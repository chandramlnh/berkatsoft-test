<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/fevicon.png" type="image/png" />
    <link rel="stylesheet" href="{{ asset('back/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('back/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('back/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('back/css/colors.css') }}" />
    <link rel="stylesheet" href="{{ asset('back/css/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('back/css/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('back/css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('backjs/semantic.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('back/css/jquery.fancybox.css') }}" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="inner_page tables_page">
    <div class="full_container">
        <div class="inner_container">
            <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                    </div>
                </div>
                <div class="sidebar_blog_2">
                    <h4>General</h4>
                    <ul class="list-unstyled components">
                        <li class="active"><a href="{{ route('backoffice->category') }}"><i
                                    class="fa fa-table purple_color2"></i> <span>Category</span></a></li>
                        <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> <span>Sign out</span></a></li>
                    </ul>
                </div>
            </nav>
            <div id="content">
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title d-flex justify-content-between">
                                    <h2>Category</h2>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add"><i class="fa fa-plus fa-lg"></i> Add</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="white_shd full margin_bottom_30">
                                    <div class="table_section padding_infor_info">
                                        <div class="table-responsive-sm">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Category Name</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $no = 1; @endphp
                                                    @foreach($data as $d)
                                                        <tr>
                                                            <td>{{ $no++ }}</td>
                                                            <td>{{ $d->category_name }}</td>
                                                            <td class="d-flex">
                                                                <button href="#" type="button" data-toggle="modal" data-target="#edit-{{ $d->id }}" class="btn btn-warning mr-1"><i class="fa fa-pencil fa-lg"></i></button>
                                                                <div class="modal fade" id="edit-{{ $d->id }}">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title">Edit Category</h4>
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form method="POST" action="{{ route("backoffice->category->update", $d->id) }}">
                                                                                    @csrf
                                                                                    <div class="form-group">
                                                                                        <label for="category-name">Category Name</label>
                                                                                        <input class="form-control" autocomplete="off" name="category_name" type="text" value="{{ $d->category_name }}" required>
                                                                                    </div>
                                                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <form action="{{ route('backoffice->category->delete', $d->id) }}" method="POST" class="ml-1">
                                                                    @csrf
                                                                    <button class="btn btn-danger" type="submit"><i class="fa fa-trash fa-lg"></i></button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal fade" id="add">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Category</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route("backoffice->category->add") }}">
                            @csrf
                            <div class="form-group">
                                <label for="category-name">Category Name</label>
                                <input class="form-control" autocomplete="off" name="category_name" type="text" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('back/js/jquery.min.js') }}"></script>
    <script src="{{ asset('back/js/popper.min.js') }}"></script>
    <script src="{{ asset('back/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('back/js/animate.js') }}"></script>
    <script src="{{ asset('back/js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('back/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('back/js/Chart.min.js') }}"></script>
    <script src="{{ asset('back/js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('back/js/utils.js') }}"></script>
    <script src="{{ asset('back/js/analyser.js') }}"></script>
    <script src="{{ asset('back/js/perfect-scrollbar.min.js') }}"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <script src="{{ asset('back/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('back/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('back/js/custom.js') }}"></script>
    <script src="{{ asset('back/js/semantic.min.js') }}"></script>
</body>

</html>