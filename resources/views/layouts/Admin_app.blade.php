<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield("title")</title>

    <!-- Custom fonts for this template-->
    {!! Html::style("admin/vendor/fontawesome-free/css/all.min.css") !!}
    {!! Html::style("admin/css/bootstrap.min.css") !!}


    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    {!! Html::style("admin/css/sb-admin-2.min.css") !!}

  <!--  ///////////////////////////////////////////////////////  -->

        {!! Html::style("admin/ano/vendor/font-awesome-4.7/css/font-awesome.min.css") !!}
    <!-- Bootstrap CSS-->
    {!! Html::style("admin/ano/vendor/bootstrap-4.1/bootstrap.min.css") !!}

    <!-- Main CSS-->
    {!! Html::style("admin/ano/css/theme.css") !!}

<!--  //////////////////////////index/////////////////////////////  -->

    {!! Html::style("admin/vendor/fontawesome-free/css/all.min.css") !!}
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    {!! Html::style("admin/vendor/datatables/dataTables.bootstrap4.min.css") !!}




</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="{{route('section.index')}}">
                <i class="fas fa-th fa-table"></i>
                <span>Sections</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('Image.Index')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Images</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('Post.Index')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Posts</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>


                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                @auth
                                    {{auth()->user()->name}}
                                @else
                                    Guest
                                @endauth</span>
                        </a>
                        <!-- Dropdown - User Information -->

                    </li>

                </ul>

            </nav>
            <div class="container-fluid">
            </div>
        </div>
    @yield('content')


        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2019</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
{!! Html::script("admin/vendor/jquery/jquery.min.js") !!}

{!! Html::script("admin/vendor/bootstrap/js/bootstrap.bundle.min.js") !!}


<!-- Core plugin JavaScript-->
{!! Html::script("admin/vendor/jquery-easing/jquery.easing.min.js") !!}



<!-- Custom scripts for all pages-->
{!! Html::script("admin/js/sb-admin-2.min.js") !!}
{!! Html::script("admin/js/bootstrap.min.js") !!}

<!-- Custom scripts for all pages/////////////////////////////////////////////-->


{!! Html::script("admin/ano/vendor/jquery-3.2.1.min.js") !!}
<!-- Bootstrap JS-->
{!! Html::script("admin/ano/vendor/bootstrap-4.1/popper.min.js") !!}

{!! Html::script("admin/ano/vendor/bootstrap-4.1/bootstrap.min.js") !!}


{!! Html::script("admin/ano/vendor/animsition/animsition.min.js") !!}
{!! Html::script("admin/ano/js/main.js") !!}




<!-- JavaScript  to index page-------------------------------->
{!! Html::script("admin/vendor/jquery/jquery.min.js") !!}

{!! Html::script("admin/vendor/bootstrap/js/bootstrap.bundle.min.js") !!}


<!-- Core plugin JavaScript-->
{!! Html::script("admin/vendor/jquery-easing/jquery.easing.min.js") !!}


<!-- Custom scripts for all pages-->
{!! Html::script("admin/js/sb-admin-2.min.js") !!}


<!-- Page level plugins -->
{!! Html::script("admin/vendor/datatables/jquery.dataTables.min.js") !!}

{!! Html::script("admin/vendor/datatables/dataTables.bootstrap4.min.js") !!}


<!-- Page level custom scripts -->
{!! Html::script("admin/js/demo/datatables-demo.js") !!}




</body>

</html>
