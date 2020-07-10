<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'name' => 'required',
        'email' => 'required',
    );
     static $types = [
        '撮影・イベントのご依頼', '参加したい・踊りたい', 'その他のお問い合わせ', '伝えたいことやメッセージ'
    ];
}