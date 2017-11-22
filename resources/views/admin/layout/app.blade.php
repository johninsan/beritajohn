<!DOCTYPE html>
<html lang="en">
<head>
@include('admin/layout/head')

</head>
<body class="hold-transition- skin-black sidebar-mini ">
<div class="wrapper">
@include('admin/layout/header')
    @section('main-content')
        @show
@include('admin/layout/sidebar')
@include('admin/layout/footer')
</div>
</body>
</html>