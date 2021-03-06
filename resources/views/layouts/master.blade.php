<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{asset('images/tablogo.png')}}">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css'>
    @include('layouts.style')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    @include('layouts.header')
    @yield('banner')
    @include('layouts.flash-messages')
    <!-- Body Start -->
    <div class="wm-main-content">
        @yield('content')
    </div>
    <!-- Body End -->
    <div class="clearfix"></div>
    <!--// Main Wrapper \\-->
    @include('layouts.modals')
    @include('layouts.scripts')
</body>

</html>