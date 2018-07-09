@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--<link rel="stylesheet" href="mypage3.css">-->
  <link rel="stylesheet" href="{{ ('/css/mypage3.css') }}">
</head>

<title>
My Page
</title>


<body>

<div class="contents">



<header>
<h2 class="name">
ニックネーム
</h2>
</header>

<section class="contact">
<div class="ngt48-member">



<div class="clearfix">
<figure class="main-img"><img alt="宮島 亜弥" src="http://img.futureartist.net/ngt48/profile/miyajima_aya.jpg" width="300" height="400" >
</figure>


<div class="prof">
<h2 style="font-size: 2.3125rem; line-height: 1.4;" data-idx="0">ニックネーム</h2>


<dl>
   <div class="under">
   <dt>特技</dt>
   <dd>早起き</dd>
   </div>
   <div class="under">
   <dt>趣味</dt>
   <dd>メイク</dd>
   </div>
   <div class="under">
   <dt>好きな食べ物</dt>
   <dd>アイス、お肉</dd>
   </div>
    <div class="under">
   <dt>好きな言葉</dt>
   <dd>ありがとう</dd>
   </div>
   <div class="under">
   <dt>メッセージ</dt>
   <dd>残りの日々と皆様と過ごせる時間を大切に、最後まで頑張ります！皆様を笑顔にできますように！</dd>
   </div>
</dl>
</div>
</div>


</div>
</section>
</div>

       <div class="col-xs-8">
        <!--<aside class="col-md-offset-2 col-md-1 col-xs-offset-2 col-xs-3">-->
       <div class="right">
       {!! link_to_route('users.edit', 'Profile edit', ['id' => Auth::id()],['class' => 'btn btn-default']) !!}
       </div>
        <!--</aside>-->
 
      </div>
</body>


</html>


 @endsection

        
     


 
