@extends('layouts.app')

@section('content')
        <div class="container-fluid">
            <div class='row'>
                <div class="col-md-12 col-xs-12">
                    <div class="top">
                        
                        <img class="img-respons" src="images/top.jpg"> 
                        
                        <div class='concept col-md-10 col-xs-12'>
                            <div class="senpai">What is LUNCH MEETER?</div>
                            <div class='message'>
                                <p>「1人で過ごすランチタイムはちょっと寂しい」「気軽にランチに誘いたい」という思いと、
                                    「生の外国語を勉強したい」「気軽に異文化交流をしてみたい」という思い。<br>
                                    この2つの願いを叶えられるアプリが“LUNCH MEETER”です。<br>
                                            コンセプトは"LUNCH×MEET"。 
                                            知らない言葉、新しい出会いを提供します。
                                            </p><br>
                                
                               
                                <p><div class="sita">⇩⇩</div></p>
                                 <p>下へ続く</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <h1 class="container_h1">ポイント</h1>
            <br>
            <br>
            <br>
            
            
            
            <div class="row">
               <div class="col-md-4 col-md-offset-2 col-xs-offset-1 col-xs-4">
                       <img src="images/hakason2.jpg" class="img-circle_lm" alt="Cinque Terre" width="100%">
               </div>
               <div class="naiyou col-md-6 col-xs-7">    
                       <p>①簡単登録！</p>
               </div>
            </div>
            
            
            <div class="row">
               <div class="naiyou col-md-4 col-md-offset-2 col-xs-offset-1 col-xs-6">    
                       <p>②ニックネーム登録で実名はでません！</p>
               </div>
               <div class="col-md-7 col-xs-5">
                       <img src="images/nickname.jpg" class="img-circle_lm" alt="Cinque Terre" width="100%">
               </div>
            </div>
            
            
            <div class="row">
               <div class="col-md-4 col-md-offset-2 col-xs-offset-1 col-xs-4">
                       <img src="images/hakason4.jpg" class="img-circle_lm" alt="Cinque Terre" width="100%">
               </div>
               <div class="naiyou col-md-7">    
                       <p>③ネイティブスピーカーと喋ろう！
                       </p>
               </div>
            </div>
      
            
            
            
            <h1 class="container_h1">使い方</h1>
            <br>
            <br>
            <br>
            
            
            

        

            
           
            
 
   
    <div class="row">
    
        <div class="col-md-3 col-md-offset-1 col-xs-3">
                <img class="sanko" src="images/12.jpg" width="240px" height="500px">
                <br>
                <h4>
              プロフィールを作りましょう。
               </h4>
                </div>
        
        <div class="col-xs-1">
                <img class="niko" src="images/yazirushi.jpg" width="50" height="30">
        </div>
        
        <div class="col-md-3 col-xs-3">
            <img class="sanko" src="images/9991.jpg" width="240px" height="500px"><br>
                 <h4>
                 ランチしたい人を見つけましょう。
                  </h4>
             </div>
             
        <div class="col-xs-1">
             <img class="niko" src="images/yazirushi.jpg" width="50" height="30">
        </div> 
            
        <div class="col-md-3 col-xs-3">
             <img class="sanko" src="images/9992.jpg"width="240px" height="500px"><br>
                <h4>
                 メッセージを送りましょう。
                </h4>
         </div>
        
        
        
   
   
    </div>
           
            
         </div>
         <div class=buttom>
             <br type="submit">  
             {!! link_to_route('signup.get', 'Signup now',['button type' => 'submit'],['class' => 'btn btn-info btn-lg']) !!}</br>
             <br type="submit">
             {!! link_to_route('views.welcome', 'HOME',['button type' => 'submit'],['class' => 'btn btn-info2']) !!}</br>
                </div>
                <div class="footer">
           <p>Copyright © 2018  Amigos.</p> 
        </div>
            
@endsection

            
     