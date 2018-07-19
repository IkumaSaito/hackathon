@if (Auth::check())
        <?php $user = Auth::user(); ?>


    
@else
<!DOCTYPE html>
<html lang="ja">
   <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       
       <title>Lunch Meter</title>
       
       <link rel="stylesheet" href="css/welcome.css">
       
<!-- Bootstrap CSS-->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <!-- jQuery -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <!-- Bootstrap JavaScript-->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>



<body>
<!--トップページのタイトル部分-->
<div class="container-flud">
<div class="row">
   <div class="col-md-5" id="left">
       <img class="img-responsive" src="images/welcome.jpg">
         <br type="submit">  {!! link_to_route('users.intro', 'What is Lunch Meter',['button type' => 'submit'],['class' => 'btn btn-default']) !!}</br>
   </div>
   
   <div class="col-md-2">
   <div class="title">
       <img class="img-responsive" src="images/logo.jpg">
       <br>
       <br>
       <div class="text">
          <br type="submit">  {!! link_to_route('signup.get', 'Signup',['button type' => 'submit'],['class' => 'btn btn-default']) !!}</br>
                
                
          <br type="submit">  {!! link_to_route('login', 'Login',['button type' => 'submit'],['class' => 'btn btn-default']) !!}</br>
       <!--    <div class="btn btn-primary btn-block btn-xs">-->
       <!--<br>{!! link_to_route('signup.get', 'Signup') !!}-->
       <!--    </div>-->
       <!--    <div class="btn btn-primary btn-block btn-xs">-->
       <!--<br>{!! link_to_route('login', 'Login') !!}-->
       <!--    </div>  -->
       </div>
   </div>
   </div>
   
   <div class="col-md-5" id="right">
   <img class="img-responsive" src="images/welcome1.jpg">
       <br type="submit">  {!! link_to_route('users.introja', 'ランチミーターとは',['button type' => 'submit'],['class' => 'btn btn-default']) !!}</br>
       
       
   </div>
</div>
</div>

</body>
</html>
@endif