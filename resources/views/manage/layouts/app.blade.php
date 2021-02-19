<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{env('APP_NAME')}} </title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="CodedThemes">
    <meta name="keywords"
          content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <!-- Favicon icon -->
    <link rel="icon" href="http://www.mobillium.com/assets/images/favicon.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('/manage/assets/css/bootstrap/css/bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('/manage/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('/manage/assets/icon/icofont/css/icofont.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/manage/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/manage/assets/css/jquery.mCustomScrollbar.css')}}">
    @yield('css')
</head>

<body>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">

                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        @include('manage.layouts.includes.head')

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                @include('manage.layouts.includes.leftSideBar')
                @yield('content')
            </div>
        </div>

    </div>
</div>

<!-- Required Jquery -->
<script type="text/javascript" src="{{asset('/manage/assets/js/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/manage/assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/manage/assets/js/popper.js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/manage/assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('/manage/assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{asset('/manage/assets/js/modernizr/modernizr.js')}}"></script>
<!-- am chart -->
<script src="{{asset('/manage/assets/pages/widget/amchart/amcharts.min.js')}}"></script>
<script src="{{asset('/manage/assets/pages/widget/amchart/serial.min.js')}}"></script>
<!-- Todo js -->
<script type="text/javascript " src="{{asset('/manage/assets/pages/todo/todo.js')}} "></script>
<!-- Custom js -->
<script type="text/javascript" src="{{asset('/manage/assets/pages/dashboard/custom-dashboard.js')}}"></script>
<script type="text/javascript" src="{{asset('/manage/assets/js/script.js')}}"></script>
<script type="text/javascript " src="{{asset('/manage/assets/js/SmoothScroll.js')}}"></script>
<script src="{{asset('/manage/assets/js/pcoded.min.js')}}"></script>
<script src="{{asset('/manage/assets/js/demo-12.js')}}"></script>
<script src="{{asset('/manage/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script>
    var $window = $(window);
    var nav = $('.fixed-button');
    $window.scroll(function () {
        if ($window.scrollTop() >= 200) {
            nav.addClass('active');
        } else {
            nav.removeClass('active');
        }
    });
</script>
@yield('js')
</body>

</html>
