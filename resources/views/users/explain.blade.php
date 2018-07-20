<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Lunch Meeter</title>
        <link rel="stylesheet" href="css/explain.css">
        
<!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Poller+One" rel="stylesheet">
</head>

<body>

<!--紹介ページのトップ部分-->

 <div class="name">
   How to use 
  </div>


<div id="main">
<div class="top">
 
   <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10 ">
     <div id="slideshow">
      <div class="slideContents">
        <section id="slide01">
          <div class="contents">
            <h1><span>※SUPER IMPORTANT※</span></h1>
          </div>
        </section>
     
<div id="carousel-example" class="carousel slide" data-ride="carousel">
  <!-- スライドの内容 -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/ex1.jpg" alt="1">
      <!-- <div class="carousel-caption">-->
      <!--</div>-->
    </div>
    <div class="item">
      <img src="images/ex2.jpg" alt="2">
    </div>
    <div class="item">
      <img src="images/ex3.jpg" alt="haritts">
    </div>
    <div class="item">
      <img src="images/ex4.jpg" alt="katane">
    </div>
    <div class="item">
      <img src="images/ex5.jpg" alt="katane">
    </div>
  </div>
 
  <!-- 左右の移動ボタン -->
  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  </a>
</div>
</div>


</div>
</div>

<br>
<br>


<div id="botan" class="col-md-offset-5 col-md-2 col-xs-offset-4 col-xs-4">
  
 {!! link_to_route('users.edit', "Let's get started!!",['id' => Auth::id()],['class' => 'btn btn-info']) !!}
</div>
</body>
</html>