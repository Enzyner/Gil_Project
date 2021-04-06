<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Construction Management System</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{ asset('/images/favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('/images/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('/assets/css/normalize.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/css/pe-icon-7-stroke.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/css/cs-skin-elastic.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="{{ asset('/assets/css/googlefonts.css')}}" rel='stylesheet' type='text/css'>

    @yield('page-level-styles')
   
    
    
   
</head>

<body>
    
    @yield('main')
    
    


    <!-- Scripts -->
    <script src="{{ asset('/assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('/assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('/assets/js/jquery.matchHeight.min.js')}}"></script>
    <script src="{{ asset('/assets/js/main.js')}}"></script>


    <script src="{{ asset('/assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{ asset('/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{ asset('/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
    <script src="{{ asset('/js/lib/data-table/jszip.min.js')}}"></script>
    <script src="{{ asset('/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{ asset('/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{ asset('/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
    <script src="{{ asset('/assets/js/init/datatables-init.js')}}"></script>

    @yield('page-level-scripts') 


</body>
</html>


