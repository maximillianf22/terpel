<!DOCTYPE html>
<html lang="es-CO">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- <link rel="icon" href="../../../images/favicon.ico"> --}}

  <title>@yield('title', 'Inicio') | Terpel</title>

  <!-- Bootstrap 4.0-->
  <link rel="stylesheet" href="{{asset('minimalpro/vendor_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('minimalpro/vendor_components/bootstrap/dist/css/bootstrap-extend.css')}}">

  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('minimalpro/vendor_components/select2/dist/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('minimalpro/vendor_components/bootstrap-switch/switch.css')}}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('minimalpro/css/master_style.css')}}">
  <link rel="stylesheet" href="{{asset('minimalpro/css/skins/_all-skins.css')}}">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('administrator/css/admin.css')}}">

  @yield('style')

</head>

<body class="skin_color_template sidebar-mini fixed">
  <div class="wrapper">

    @include('layout.components.navbar')

    @include('layout.components.sidebar')

    @yield('content')

    @include('layout.components.footer')

    <div class="modals">
      @yield('modals')
    </div>
    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
    <form id="logout-form" action="Logout" method="POST" style="display: none;">
      @csrf
    </form>
  </div>
  <!-- jQuery 3 -->
  <script src="{{asset('minimalpro/vendor_components/jquery/dist/jquery.min.js')}}"></script>
  <!-- popper -->
  <script src="{{asset('minimalpro/vendor_components/popper/dist/popper.min.js')}}"></script>
  <!-- Bootstrap 4.0-->
  <script src="{{asset('minimalpro/vendor_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- Select2 -->
  <script src="{{asset('minimalpro/vendor_components/select2/dist/js/select2.full.js')}}"></script>
  <!-- ChartsJs -->
  <script src="{{asset('minimalpro/vendor_components/chart-js/chart.js')}}"></script>
  <!-- InputMask -->
  <script src="{{asset('minimalpro/vendor_plugins/input-mask/jquery.inputmask.js')}}"></script>
  <script src="{{asset('minimalpro/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
  <script src="{{asset('minimalpro/vendor_plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
  <!-- SlimScroll -->
  <script src="{{asset('minimalpro/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('minimalpro/vendor_components/fastclick/lib/fastclick.js')}}"></script>
  <!-- MinimalPro Admin App -->
  <script src="{{asset('minimalpro/js/template.js')}}"></script>
  <!-- MinimalPro Admin for demo purposes -->
  <script src="{{asset('minimalpro/js/demo.js')}}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{asset('minimalpro/vendor_components/tiny-editable/mindmup-editabletable.js')}}"></script>
  <script src="{{asset('minimalpro/vendor_components/tiny-editable/numeric-input-example.js')}}"></script>
  <!-- steps  -->
  <script src="{{asset('minimalpro/vendor_components/jquery-steps-master/build/jquery.steps.js')}}"></script>
  <!-- validate  -->
  <script src="{{asset('minimalpro/vendor_components/jquery-validation-1.17.0/dist/jquery.validate.min.js')}}"></script>
  <!-- wizard  -->
  <script src="{{asset('minimalpro/js/pages/steps.js')}}"></script>
  <!-- Sweet-Alert  -->
  <script src="{{asset('minimalpro/js/sweetalert.min.js')}}"></script>

  <script>
        $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
        $('#example1').editableTableWidget().numericInputExample().find('td:first').focus();
    </script>
  @yield('js')
  @yield('js')

</body>

</html>