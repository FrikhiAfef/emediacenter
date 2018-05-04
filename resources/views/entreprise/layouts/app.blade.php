<!DOCTYPE html>
<html lang="en">
<head>

    @include('entreprise.layouts.head')

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include('entreprise.layouts.header')

    @include('entreprise.layouts.sidebar')
    @section('main-content')
    @show
    @include('entreprise.layouts.footer')

</div>

</body>

</html>
