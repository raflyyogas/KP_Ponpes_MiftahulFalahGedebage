<!DOCTYPE html>

<html lang="en">



<head>



    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="Lolipop Team">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo-pondok.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo-pondok.png') }}" rel="apple-touch-icon">

    <title>Dashboard PONPES</title>



    <!-- Custom fonts for this template-->

    <link href="{{ asset('/dashboard/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Custom styles for this template-->

    <link href="{{ asset('/dashboard/css/sb-admin-2.min.css') }}" rel="stylesheet">

    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>s --}}

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

</head>



<body id="page-top">



    <!-- Page Wrapper -->

    <div id="wrapper">



        <!-- Sidebar -->

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">



            <!-- Sidebar - Brand -->

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('ds') }}">

                <div class="sidebar-brand-icon rotate-n-15">

                    <i class="fas fa-school"></i>

                </div>

                <div class="sidebar-brand-text mx-3">Miftahul Falah</div>

            </a>



            <!-- Divider -->

            <hr class="sidebar-divider my-0">



            <!-- Nav Item - Dashboard -->

            <li class="nav-item active">

                <a class="nav-link" href="{{ route('ds') }}">

                    <i class="fas fa-fw fa-tachometer-alt"></i>

                    <span>Dashboard</span></a>

            </li>



            <!-- Divider -->

            <hr class="sidebar-divider">



            <!-- Heading -->

            <div class="sidebar-heading">

                Interface

            </div>



            <!-- Nav Item - Pages Collapse Menu -->

            <li class="nav-item">

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#artikel"
                    aria-expanded="true" aria-controls="artikel">

                    <i class="fas fa-fw fa-table"></i>

                    <span>Artikel</span>

                </a>

                <div id="artikel" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">



                    <div class="bg-white py-2 collapse-inner rounded">

                        <h6 class="collapse-header">Galeri:</h6>

                        <a class="collapse-item" href="{{ route('admartikel') }}">Data Artikel</a>

                        <a class="collapse-item" href="{{ route('addartikel') }}">Tambah Artikel</a>

                    </div>

                </div>

            </li>



            <!-- Nav Item - Pages Collapse Menu -->

            <li class="nav-item">

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">

                    <i class="fas fa-fw fa-cog"></i>

                    <span>Data Galeri</span>

                </a>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">



                    <div class="bg-white py-2 collapse-inner rounded">

                        <h6 class="collapse-header">Galeri:</h6>

                        <a class="collapse-item" href="{{ route('editfoto') }}">Data Foto</a>

                        <a class="collapse-item" href="{{ route('editvideo') }}">Data Video</a>

                    </div>

                </div>

            </li>

            <!-- Nav Item - Charts -->

            <li class="nav-item">

                <a class="nav-link" href="{{ route('contacts') }}">

                    <i class="fas fa-fw fa-chart-area"></i>

                    <span>Kontak</span></a>

            </li>



            {{-- <!-- Nav Item - Pages Collapse Menu -->

            <li class="nav-item">

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"

                    aria-expanded="true" aria-controls="collapseTwo">

                    <i class="fas fa-fw fa-cog"></i>

                    <span>Components</span>

                </a>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"

                    data-parent="#accordionSidebar">



                    <div class="bg-white py-2 collapse-inner rounded">

                        <h6 class="collapse-header">Custom Components:</h6>

                        <a class="collapse-item" href="buttons.html">Buttons</a>

                        <a class="collapse-item" href="cards.html">Cards</a>

                    </div>

                </div>

            </li> --}}



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



                    <!-- Topbar Navbar -->

                    <ul class="navbar-nav ml-auto">



                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->





                        <div class="topbar-divider d-none d-sm-block"></div>



                        <!-- Nav Item - User Information -->

                        <li class="nav-item dropdown no-arrow">

                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <span
                                    class="mr-2 d-none d-lg-inline fs-5 text-gray-600 small">{{ auth()->user()->name }}</span>

                                <i class="bi bi-person-circle fs-3"></i>

                                {{-- <img class="img-profile rounded-circle" src="img/undraw_profile.svg"> --}}

                            </a>

                            <!-- Dropdown - User Information -->

                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal"
                                    data-target="#logoutModal">

                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>

                                    Logout

                                </a>

                            </div>

                        </li>



                    </ul>



                </nav>

                <!-- End of Topbar -->





                <!-- Begin Page Content -->

                <div class="container-fluid">

                    @yield('main')

                </div>

                <!-- /.container-fluid -->



            </div>

            <!-- End of Main Content -->



            <!-- Footer -->

            <footer class="sticky-footer bg-white">

                <div class="container my-auto">

                    <div class="copyright text-center my-auto">

                        <span>Copyright &copy; MIFTAHUL FALAH 2022 | 🍭🍭</span>

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

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">

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

                    <form action="{{ route('logout') }}" method="post">

                        @csrf

                        <button type="submit" class="btn btn-primary"> Logout</button>

                    </form>

                </div>

            </div>

        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>



    <!-- Bootstrap core JavaScript-->

    <script src="{{ asset('/dashboard/vendor/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>



    <!-- Core plugin JavaScript-->

    <script src="{{ asset('/dashboard/vendor/jquery-easing/jquery.easing.min.js') }}"></script>



    <!-- Custom scripts for all pages-->

    <script src="{{ asset('/dashboard/js/sb-admin-2.min.js') }}"></script>



    <!-- Page level plugins -->

    <script src="{{ asset('/dashboard/vendor/chart.js/Chart.min.js') }}"></script>



    <!-- Page level custom scripts -->

    <script src="{{ asset('/dashboard/js/demo/chart-area-demo.js') }}"></script>

    <script src="{{ asset('/dashboard/js/demo/chart-pie-demo.js') }}"></script>



</body>



</html>
