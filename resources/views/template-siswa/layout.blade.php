<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Absensi-Siswa</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      
    <!-- ======= Header ======= -->
      <header id="header" class="header fixed-top d-flex align-items-center">
      @include('template-siswa.navbar')
      </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
      <aside id="sidebar" class="sidebar">
      @include('template-siswa.sidebar')
      </aside>
    <!-- End Sidebar-->


    <!-- Main Content -->
      <div class="main-content">
      <section class="section dashboard">
      <div class="row ">
      @yield('konten')
      </div>
      </section>  
      </div>

    <!-- ======= Footer ======= -->
      <footer id="footer" class="footer">
      @include('template-siswa.footer')
      </footer>
    <!-- End Footer -->

    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{asset('assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('assets/js/page/index.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{asset('assets/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{asset('assets/js/custom.js')}}"></script>
</body>

<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>