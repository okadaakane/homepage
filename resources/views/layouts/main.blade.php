<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masheriami_official</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link href ="css/main.css" rel="stylesheet">
</head>
<body>
    <div class="col-xs-12 col-lg-4">
        <img src="image/mashelogo.JPG" alt="logo" width="70%" height="1%">
    </div>
    <!-- share buttom -->
    <main class ="umekomi">@yield('content')</main>
    
    <ul class ="sns_share_button">
        <li class="pocket"><a href="http://getpocket.com/edit?url={https://89cd654026764c568fcfb68e3cd9aafc.vfs.cloud9.us-east-2.amazonaws.com/}&title={masheriami_official}" rel="nofollow" rel="nofollow" target="_blank">pocket</a></li>
        <li class=""></li>
    </ul>
</body>
</html>