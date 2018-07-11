@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="ja">
    <head>
    	<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>My Page</title>
        
        <link rel="stylesheet" href="css/mypage3.css">
    
    </head>

    
    <body>
        <h1 class="name">
            {{ $user->name }}
        </h1>

        <section class="main">
            
            <div class="ngt48-member">
            <div class="clearfix">
                
                <div class="row">
                <div class="col-md-6"><figure class="main-img"><img src="{{ asset('storage/avatar/' . $user->avatar_filename) }}" class="img-circle" alt="avatar" />
                </figure></div>
                <div class="col-md-6"><div class="prof">
                <h2 style="font-size: 3rem; line-height: 1.4;" data-idx="0">{{ $user->name }}</h2>
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
            </div>
            </div>
            
            <div class="right">
                <!--@if (Auth::id() == $user->id)-->
                {!! link_to_route('users.edit', 'Profile edit', ['id' => Auth::id()],['class' => 'btn btn-default']) !!}
                <!--@endif-->
            </div>
        </section>
        
    </body>

    
@endsection