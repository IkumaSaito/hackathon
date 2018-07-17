@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
    <title>My Page | Lunch Meeter</title>
        
    <link rel="stylesheet" href="{{asset('css/mypage3.css') }}">
</head>

    

<body>
    <div class="content">
        <figure class="profile">
            <h1 class="name">
                {{ $user->name }}
            <!--<div class="logo"</div>-->
            <!--<img class="logo" src="/images/logo.jpg"> -->
            <!--</div>-->
            </h1>



            <h2 class="main">
            

            <div class="ngt48-member">
            <div class="clearfix">
                
                <!--Avatar-->
                <div class="row">
                <div class="col-md-6"><figure class="main-img">
                @if(file_exists('storage/avatar/'.Auth::user()->avatar_filename))
                <img src="{{ asset('storage/avatar/' . $user->avatar_filename) }}" class="img-circle" alt="avatar" />
                @else
                <img src="{{ Gravatar::src($user->email, 500) }}" class="img-circle" alt="avatar" />
                @endif
                </figure>
                <!--avatat\r編集ボタン-->
                 <div id="avatarbtn">
                        {!! link_to_route('users.avataredit', 'avatar upload', ['id' => Auth::id()],['class' => 'btn btn-warning btn-sm']) !!}
                </div>
                </div>
                
                <div class="prof col-md-6">


               

                    
                      

                    
                    
                        <div class="prof col-md-6">
                            <h3 class="name2">{{ $user->name }}
                            <!--編集ボタン-->
                            @if (Auth::id() == $user->id)
                            {!! link_to_route('users.edit', 'edit', ['id' => Auth::id()],['class' => 'btn btn-info btn-sm']) !!}
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
            

            
                    
                    <div class="right">
                    @if (Auth::id() != $user->id)
                        {!! link_to_route('users.directmessages', "DM", ['id' => $user->id],['class' => 'btn btn-default']) !!}
                    @endif
                    </div>
                </div>
            </h2>
        </figure>
    </div>
</body>
</html>
@endsection