<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>gestion de congé</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/iCheck/square/blue.css')}}">
    <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
  @yield('css')


  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body class="sidebar-mini control-sidebar-slide-open">

  @yield('content')
  <!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- iCheck -->
<script src="{{ asset('assets/plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
<!-- REQUIRED SCRIPTS -->
<!-- AdminLTE App -->

<script src="{{ asset('assets/js/adminlte.js')}}"></script>
<script src="{{ asset('assets/fontawesome/js/all.js')}}"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('assets/js/demo.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- SparkLine -->
<script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jVectorMap -->
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{{ asset('assets/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- ChartJS 1.0.2 -->
<script src="{{ asset('assets/plugins/chartjs-old/Chart.min.js')}}"></script>

<!-- PAGE SCRIPTS -->
<script src="{{ asset('assets/js/pages/dashboard2.js')}}"></script>
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  })
</script>
</body>
