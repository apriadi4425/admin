

<title>@yield('judul_halaman','Admin' )</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="initial-scale=0.1">

@yield('meta_foto')
<link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{ URL::to('plugins/fontawesome-free/css/all.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ URL::to('dist/css/adminlte.min.css') }}">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<script src="{{ URL::to('js/app.js') }}" charset="utf-8"></script>
<!-- jQuery -->
<script src="{{ URL::to('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ URL::to('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::to('dist/js/adminlte.min.js') }}"></script>
