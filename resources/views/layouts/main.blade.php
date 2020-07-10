<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Masheriami_official</title>
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
<!-- style -->
<link href="{{ secure_asset('css/main.css') }}" rel="stylesheet">
<link href="{{ secure_asset('css/contact.css') }}" rel="stylesheet">
<link href="{{ secure_asset('css/introduction') }}" rel="stylesheet">

</head>
<body>
<style>body {
    background-image: url(../image/mashelogo.JPG);
    color: black;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    background-size: 50%;
    display: inline;
    font-size: 15px;
    transform: translate(-50%,-50%);
}</style>
    <header>
        <div class="wrapper clearfix"><style>.wrapper{
            float: right;
        }
        </style>
            <!-- gloval navbar --> 
            <ul class="globalnav">
                <div id="nav-drawer">
                    <input id="nav-input" type="checkbox" class="nav-unshown">
                    <label id="nav-open" for="nav-input"><span></span></label>
                    <label class="nav-unshown" id="nav-close" for="nav-input"></label>
                    <div id="nav-content">
                        <ul class="menu">
                            <li><a href="{{ url('admin/homepage/introduction') }}">Introduction</a></li>
                            <li><a href="{{ url('admin/homepage/youtube') }}">Youtube</a></li>
                            <li><a href="{{ url('admin/homepage/access') }}">Access</a></li>
                            <li><a href="https://www.osaka-dance.com/">Impress</a></li>
                            <li><a href="https://dancestudio-obt.amebaownd.com/">dance studio OBT</a></li>
                            <li><a href="{{ url('admin/homepage/contact') }}">Contact us</a></li>
                            <li><a href="/">Top</a></li>
                        </ul>
                    </div>
                </div>
            </ul>
        </div>
    </header>
    <!-- share buttom -->
    <main class="y-c">@yield('content')</main>

<footer>
<!-- <ul class ="sns_share_button">
        <li class="pocket"><a href="http://getpocket.com/edit?url={https://89cd654026764c568fcfb68e3cd9aafc.vfs.cloud9.us-east-2.amazonaws.com/}&title={masheriami_official}" rel="nofollow" rel="nofollow" target="_blank">pocket</a></li>
        <li class=""></li>
    </ul> -->
</footer>
</body>
</html>