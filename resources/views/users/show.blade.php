@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/mypage3.css">
</head>

<title>
My Page
</title>


<body>

<div class="contents">



<header>
<h2 class="name">
{{ $user->name }}
</h2>
</header>

<section class="contact">
<div class="ngt48-member">



<div class="clearfix">
<figure class="main-img"><img alt="宮島 亜弥" src="http://img.futureartist.net/ngt48/profile/miyajima_aya.jpg" width="300" height="400" >
</figure>


<div class="prof">
<h2 style="font-size: 2.3125rem; line-height: 1.4;" data-idx="0">{{ $user->name }}</h2>
 

<dl>
   <div class="under">
   <dt>gender</dt>
   <td>{{ $user->gender }}</td>
   </div>
   <div class="under">
   <dt>hobby</dt>
   <td>{{ $user->hobby }}</td>
   </div>
   <div class="under">
   <dt>language</dt>
   <td>{{ $user->language }}</td>
   </div>
    <div class="under">
   <dt>intro</dt>
   <td>{{ $user->intro }}</td>
   </div>
   <!--<div class="under">-->
   <!--<dt>メッセージ</dt>-->
   <!--<dd>残りの日々と皆様と過ごせる時間を大切に、最後まで頑張ります！皆様を笑顔にできますように！</dd>-->
   <!--</div>-->
</dl>



</div>
</div>


</div>

   <div class="right">
       {!! link_to_route('users.edit', 'Profile edit', ['id' => Auth::id()],['class' => 'btn btn-default']) !!}
       </div>
</section>
</div>

    

</body>
</html>
<!--</section>-->
<!--</div>-->

<!--       <div class="col-xs-8">-->
        <!--<aside class="col-md-offset-2 col-md-1 col-xs-offset-2 col-xs-3">-->

        <!--</aside>-->
 
<!--      </div>-->
<!--</body>-->


<!--</html>-->


 @endsection

        
   