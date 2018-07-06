@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <!--<div class="panel panel-default">-->
                <!--<div class="panel-heading">-->
                 
                <!--</div>-->
            <!--</div>-->
        </aside>
        
    <!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--<link rel="stylesheet" href="css/mypage3.css">-->
   <link rel="stylesheet" href="{{ asset('/css/mypage3.css') }}">
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
<figure class="main-img"><img src="images/NGT.jpg" width="300" height="400" >
</figure>


<div class="prof">
<h2 style="font-size: 2.3125rem; line-height: 1.4;" data-idx="0">ニックネーム</h2>


<dl>
   <div class="under">
   <dt>gender</dt>
   <dd>早起き</dd>
   </div>
   <div class="under">
   <dt>hobby</dt>
   <dd>メイク</dd>
   </div>
   <div class="under">
   <dt>language</dt>
   <dd>アイス、お肉</dd>
   </div>
    <div class="under">
   <dt>intro</dt>
   <dd>ありがとうzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzsssssssssssssssssssccccccccccccdddddddddddd</dd>
   </div>

</dl>
</div>
</div>


</div>
</section>
</div>

</body>
</html>
        
     
        <div class="col-xs-8">
            
  
        </div>
        
    </div>
    

      <div class="right">
        {!! link_to_route('users.edit', 'Profile edit',['button type' => 'submit'],['class' => 'btn btn-default']) !!}
    </div>
       <!--{!! link_to_route('users.edit', 'Profile edit', ['id' => Auth::id()],['button type' => 'submit'],['class' => 'btn btn-default']) !!}-->
@endsection