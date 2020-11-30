<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="shortcut icon" href="{{url('public')}}/img/favicon.png">

  <title> Admin Page Alat Kopi</title>

  <link rel="stylesheet" href="{{url('public')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('public')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{url('public')}}/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('public')}}/admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{url('public')}}/admin/plugins/ekko-lightbox/ekko-lightbox.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  @include('admin.section.header')

  @include('admin/section/sidebar')

  <div class="content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          @include('utils.notif')
        </div>
      </div>
    </div>
    @yield('content')
  </div>

  @include('admin/section/footer')
</div>

<script src="{{url('public')}}/admin/plugins/jquery/jquery.min.js"></script>
<script src="{{url('public')}}/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{url('public')}}/admin/dist/js/adminlte.min.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="{{url('public')}}/admin/plugins/chart.js/Chart.min.js"></script>
<script src="{{url('public')}}/admin/dist/js/demo.js"></script>
<script src="{{url('public')}}/admin/dist/js/pages/dashboard3.js"></script>

<script src="{{url('public')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('public')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{url('public')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url('public')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
  $(".table-datatable").dataTable();
</script>
</body>
</html>
