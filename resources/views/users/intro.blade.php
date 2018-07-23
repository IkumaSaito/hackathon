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
                                <p>Don’t you feel a little lonely having lunch alone and want to ask someone to have lunch with you?</p>
                                <p>Would you like to learn a foreign language from a native or experience cross-cultural exchange?</p>
                                <p>If your answers are “YES”, you can make these wishes come true with this app “LUNCH MEETER”!!!.</p>
                                <p>We offer you a new chance!!</p>
                                
                               
                                <p><div class="sita">⇩⇩</div></p>
                                 <p>Scroll down</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <h1 class="container_h1">Why use LUNCH MEETER?</h1>
            <br>
            <br>
            <br>
            
            
            
            <div class="row">
               <div class="col-md-4 col-md-offset-2 col-xs-offset-1 col-xs-4">
                       <img src="images/hakason2.jpg" class="img-circle_lm" alt="Cinque Terre" width="100%">
               </div>
               <div class="naiyou col-md-6 col-xs-7">    
                       <p>①Easy to register!</p>
               </div>
            </div>
            
            
            <div class="row">
               <div class="naiyou col-md-4 col-md-offset-2 col-xs-offset-1 col-xs-6">    
                       <p>②No personal information needed.</p>
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
                       <p>③Chance to meet with<br>foreigners around the world.<br>
                       </p>
               </div>
            </div>
      
            
            
            
            <h1 class="container_h1">How to use LUNCH MEETER</h1>
            <br>
            <br>
            <br>
            
            
            

        

            
           
            
 
   
    <div class="row">
    
        <div class="col-md-3 col-md-offset-1 col-xs-3">
                <img class="sanko" src="images/&2.jpg" width="240px" height="500px">
                <br>
                <h4>
               Make a profile.
               </h4>
                </div>
        
        <div class="col-xs-1">
                <img class="niko" src="images/yazirushi.jpg" width="50" height="30">
        </div>
        
        <div class="col-md-3 col-xs-3">
            <img class="sanko" src="images/&3.jpg" width="240px" height="500px"><br>
                 <h4>
                  Find a person.
                  </h4>
             </div>
             
        <div class="col-xs-1">
             <img class="niko" src="images/yazirushi.jpg" width="50" height="30">
        </div> 
            
        <div class="col-md-3 col-xs-3">
             <img class="sanko" src="images/&4.jpg"width="240px" height="500px"><br>
                <h4>
                Send a message.
                </h4>
         </div>
        
        
        
   
   
    </div>
           
            
         </div>
         <div class=buttom>
             <br type="submit">  {!! link_to_route('signup.get', 'Signup!!',['button type' => 'submit'],['class' => 'btn btn-info btn-lg']) !!}</br>
                </div>
                <div class="footer">
           <p>Copyright © 2018  Amigos.</p> 
        </div>
            
@endsection

            
     