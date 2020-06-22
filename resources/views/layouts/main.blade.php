<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Masheriami_official</title>
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker rel="stylesheet">
<!-- Styles -->
<link href="{{ secure_asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
 <div class="wrapper">
    <!-- gloval navbar -->
    <ul class="globalnav">
        <div id="nav-drawer">
            <input id="nav-input" type="checkbox" class="nav-unshown">
            <label id="nav-open" for="nav-input"><span></span></label>
            <label class="nav-unshown" id="nav-close" for="nav-input"></label>
            <div id="nav-content">
                <li><a href="{{ url('admin/homepage/introduction') }}">Introduction</a></li>
                <li><a href="{{ url('admin/homepage/youtube') }}">Youtube</a></li>
                <li><a href="{{ url('admin/homepage/access') }}">Access</a></li>
                <li><a href="https://www.osaka-dance.com/">Impress</a></li>
                <li><a href="https://dancestudio-obt.amebaownd.com/">Dance studio OBT</a></li>
                
                <li><a href="/">Top</a>に戻る</li>
            </div>
        </div>
    </ul>
   
    <style>
        body{
        color: #3366FF;
        background-image: url(../image/mashelogo.JPG);
        background-repeat: no-repeat;
        background-position: center center;
        background-attachment: fixed;
        background-size: 50%;
        display: inline;
        }
    </style>
</div>

<!-- share buttom -->
    <main>@yield('content')</main>

    <ul class ="sns_share_button">
        <li class="pocket"><a href="http://getpocket.com/edit?url={https://89cd654026764c568fcfb68e3cd9aafc.vfs.cloud9.us-east-2.amazonaws.com/}&title={masheriami_official}" rel="nofollow" rel="nofollow" target="_blank">pocket</a></li>
        <li class=""></li>
    </ul>
</body>
</html>