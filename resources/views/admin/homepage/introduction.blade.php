@extends('layouts.main')
<h1 class="icon">Introduction</h1>
@section('content')
<body>
    <br><h2 class="icon2">masheriami</h2>
    <p>Ranranをはじめとしたメンバーがレッスンやイベント活動しています。</p>
    <ul class="clearfix member">
        <style>
        .clearfix::after {
           content: "";
           display: block;
           clear: both;
        }
        h2{
            margin: 0 0 0 0%;
        }
        p{
            margin: 0 0 0 10%;
        }
        ul{
            margin: 3%;
        }
        img{
            width: 25%;
            float: left;
        }
        </style>
            <li><img src="../../image/ranran.JPG" alt="dancer"></li>
            <li><img src="../../image/yukako.JPG" alt="masheriami"></li>
            <li><img src="../../../image/miki.JPG" alt="singer"></li>
            <li><img src="../../image/chisato.JPG" alt="musical"></li>
            <li><img src="../../image/nori.JPG" alt="dancer"></li>
            <li><img src="../../../../image/kaede.JPG" alt="新体操"></li>
            <li><img src="../../image/miru.JPG" alt="actor"></li>
            <li><img src="../../image/akane.JPG" alt="ダンス講師"></li>
    </ul>

<!--  後追加していく

<aside class="sider">
        <section id="photo">
            <h2>Photograph</h2>
            <ul>
                <li><a href=""></a></li>
            </ul>
        </section>
        <section id="movie">
            <h2>Movie</h2>
            <ul>
                <li><a href=""></a></li>
            </ul>
        </section>
    </aside>                           
    
    -->
</body>
@endsection