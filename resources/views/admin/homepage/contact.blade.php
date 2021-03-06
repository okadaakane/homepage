@extends('layouts.main')
<h1 class="icon">Contact us</h1>
@section('content')
<p><a href="https://www.instagram.com/masheriami_official/">Instagram</a>はこちら!</p>
<div class="form">
     <form action="{{ action('Admin\HomepageController@response') }}" method="post" enctype="multipart/form-data">
         @csrf
        <dl>
            <dt><span class="required">お名前</span></dt>
            <dd><input type="text" name="name" class="name" required></dd>
            <dt><span class="required">メールアドレス</span></dt>
            <dd><input type="email" name="email" class="email" required></dd>
            <dt>お問い合わせの種類</dt>
            <dd>
                <select name="type" class="type">
                    <option value="撮影・イベントのご依頼">撮影・イベントのご依頼</option>
                    <option value="参加したい・踊りたい">参加したい・踊りたい</option>
                    <option value="その他のお問い合わせ">その他のお問い合わせ</option>
                    <option value="伝えたいこと">伝えたいことやメッセージ</option>
                </select>
            </dd>
            <dt>お問い合わせ内容</dt>
            <dd><textarea name="message" class="message"></textarea></dd>
        </dl>
         {{ csrf_field() }}
        <button type="submit" class="btn">送信</button>
    </form>
    <div class="attention">
        <p><br>※「<span class="required"></span>」のついている項目は必須項目です。
        <br>※MasheriamiのinstagramアカウントからDM（ダイレクトメッセージ）による問合せが可能です。<br></p>
    </div>
</div>
@endsection