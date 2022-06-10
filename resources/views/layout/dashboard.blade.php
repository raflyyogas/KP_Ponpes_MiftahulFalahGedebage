<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MahasiswaLancer</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assetsmhs/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsmhs/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsmhs/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assetsmhs/images/faces/face10.jpg') }}" />
  </head>


  <body>
    
    <div class="container-scroller">
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="background-color: black;">
            <a class="navbar-brand brand-logo" href="#" style="color: aliceblue; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><img src="assetsmhs/images/dashboard/bxs_graduation.png" style="width:30px; height: auto; margin-right: 10px;"  alt="logo" />MahasiswaLancer</a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch" style="box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1);">
            <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile">
                <a class="nav-link" id="profile" href="#" aria-expanded="false">
                <div class="nav-profile-img">
                    <img src="assetsmhs/images/faces/face1.jpg" alt="image">
                </div>
                <div class="nav-profile-text">
                    <p class="mb-1 text-black">Darma Putra</p>
                </div>
                </a>
            </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
            </button>
        </div>
        </nav>

        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ds') }}">
                    <span class="menu-title">Dashboard</span>
                    <i class="mdi mdi-home menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('konten') }}">
                    <span class="menu-title">Pesanan</span>
                    <i class="mdi mdi-clipboard-text menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="statuspekerjaan.html">
                    <span class="menu-title">Status Pengerjaan</span>
                    <i class="mdi mdi-comment menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="biodata.html">
                    <span class="menu-title">Biodata</span>
                    <i class="mdi mdi-account-edit menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item" style="margin-top: 140%;">
                    <a class="nav-link" href="#">
                    <span class="menu-title">Logout</span>
                    <i class="mdi mdi-logout menu-icon"></i>
                    </a>
                </li>
                </ul>
            </nav>

            <div class="main-panel">
                @yield('main')
                <footer class="footer" style="width: 110%; margin-left: 20%;">
                <div class="container-fluid d-flex justify-content-between">
                    <span class="text-muted" style="margin-left: 500px;">Copyright © MahasiswaLancer.com 2022</span>
                </div>
                </footer>
            </div>
        </div>
    </div>

    <!-- plugins:js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('assetsmhs/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assetsmhs/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assetsmhs/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assetsmhs/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assetsmhs/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assetsmhs/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assetsmhs/js/dashboard.js') }}"></script>
    <script src="{{ asset('assetsmhs/js/todolist.js') }}"></script>
    <script src="https://kit.fontawesome.com/1cea8d8163.js" crossorigin="anonymous"></script>
    <!-- End custom js for this page -->
  </body>
</html>