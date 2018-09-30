<!-- Theme style -->
<link href="{{ asset('css/AdminLTE.min.css') }}" rel="stylesheet">

<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
<link href="{{ asset('css/skins/_all-skins.min.css') }}" rel="stylesheet">

<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
{{-- <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"> --}}

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
{{-- <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css"> --}}

<!-- Ionicons -->
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.4.1/css/ionicons.min.css"> --}}
<link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">

<!-- Morris chart -->
<link rel="stylesheet" href="{{ asset('bower_components/morris.js/morris.css') }}">

<!-- jvectormap -->
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.4/jquery-jvectormap.css"> --}}
<link rel="stylesheet" href="{{ asset('bower_components/jvectormap/jquery-jvectormap.css') }}">

<!-- Date Picker -->
<link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">

<!-- Daterange picker -->
<link rel="stylesheet" href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">

<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">


@yield('otherCSS')