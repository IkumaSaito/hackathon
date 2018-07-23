
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
    <title>My Page | Lunch Meeter</title>
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

    <div class="content">
        <figure class="profile">
            <h1 class="name">
                {{ $user->name }}
            <!--<div class="logo"</div>-->
            <!--<img class="logo" src="/images/logo.jpg"> -->
            <!--</div>-->
            </h1>



            <h2 class="main">
            

            <div class="member">
            <!--<div class="clearfix">-->
                
                <!--Avatar-->
                <div class="row">
                <div class="col-md-6">
                <figure class="main-img">
                @if(\Auth::user()->avatar_filename)
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
                            <h3 class="name2">{{ $user->name }}
                            <!--編集ボタン-->
                            @if (Auth::id() == $user->id)
                            {!! link_to_route('users.edit', 'edit', ['id' => Auth::id()],['class' => 'btn btn-info btn-sm']) !!}
                            @endif
                            <!--DMbutton-->           
                            @if (Auth::id() != $user->id)
                            {!! link_to_route('users.directmessages', "Send a DM", ['id' => $user->id],['class' => 'btn btn-default']) !!}
                            @endif
                         
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
            </div>

@if (Auth::id() == $user->id)
    {!! link_to_route('calendar.edit', 'register your plan', ['user' => $user],['class' => 'btn btn-info btn-sm']) !!}
@endif

            @include('calendar.calendar')
            
                    <div class="right">
                    @if (Auth::id() != $user->id)
                        {!! link_to_route('users.directmessages', "DM", ['id' => $user->id],['class' => 'btn btn-default']) !!}
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