<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
    <title>My profile | Lunch Meeter</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
     <link rel="stylesheet" href="{{asset('css/mypage3.css') }}">
     <link rel="stylesheet" href="{{asset('css/hakason15.css')}}">
   
    
</head>

    

<body>
        @include('commons.navbar')
        @include('commons.error_messages')

<script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/0.0.11/push.min.js">
    
    Push.Permission.request();
    
    Push.create('こんにちは！', {
　　body: '更新をお知らせします！',
　　timeout: 8000, // 通知が消えるタイミング
　　vibrate: [100, 100, 100], // モバイル端末でのバイブレーション秒数
　　onClick: function() {
　　　　// 通知がクリックされた場合の設定
　　　　console.log(this);
　　}
});
    
</script>

    <div class="content">
        <figure class="profile">
            <h2 class="name">
                {{ $user->name }}
            <!--<div class="logo"</div>-->
            <!--<img class="logo" src="/images/logo.jpg"> -->
            <!--</div>-->
            </h2>



            <h4 class="main">
            

            <div class="member">
            <!--<div class="clearfix">-->
                
                <!--Avatar-->
                <div class="row">
                <div class="col-md-6">
                <figure class="main-img">
                @if($user->avatar_filename)
                <img src="{{ $user->avatar_filename }}" class="img-circle" alt="avatar" />
                @else
                <img src="{{ Gravatar::src($user->name, 500) }}" class="img-circle" alt="avatar" />
                @endif
                </figure>
                <!--avatat\編集ボタン-->
                 <div id="avatarbtn">
                            @if (Auth::id() == $user->id)
                            {!! link_to_route('users.avataredit', 'avatar upload', ['id' => Auth::id()],['class' => 'btn btn-warning btn-sm']) !!}
                            @endif
                </div>
                </div>
                
                    
                        <div class="prof col-md-6">
                            <h3 class="name2">
                                <!--{{ $user->name }}-->
                            <!--編集ボタン-->
                            @if (Auth::id() == $user->id)
                            {!! link_to_route('users.edit', 'edit', ['id' => Auth::id()],['class' => 'btn btn-info btn-sm']) !!}
                            @endif
                            <!--DMbutton-->           
                            <!--@if (Auth::id() != $user->id)-->
                            <!--{!! link_to_route('users.directmessages', "Send a DM", ['id' => $user->id],['class' => 'btn btn-default']) !!}-->
                            <!--@endif-->
                         
                            </h3>
    
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
                            </dl>
                        </div>
                    </div>
                    
                    <div class="right">
                    @if (Auth::id() != $user->id)
                        {!! link_to_route('users.directmessages', "send a DM", ['id' => $user->id],['class' => 'btn btn-default1']) !!}
                    @endif
            </div>
<br>
<br>
  @include('calendar.calendar')
            
                    <!--<div class="right">-->
                    <!--@if (Auth::id() != $user->id)-->
                    <!--    {!! link_to_route('users.directmessages', "send a DM", ['id' => $user->id],['class' => 'btn btn-default']) !!}-->
                    <!--@endif-->

@if (Auth::id() == $user->id)
<br>
    {!! link_to_route('calendar.edit', 'Update schedule', ['user' => $user],['class' => 'btn btn-success btn-md']) !!}<br>
@endif

          
                    </div>
                </div>
            </h2>
        </figure>
    </div>
    <div class="footer col-md-12 col-xs-12">
           <p>Copyright © 2018  Amigos.</p> 
        </div>
</body>
</html>