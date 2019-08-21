<!DOCTYPE html>
<html>
<head>
    @include('layout/header')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
@include('layout/navbar')
@include('layout/sidebar')
@yield('content')
</div>
@yield('script')
</body>
</html>
