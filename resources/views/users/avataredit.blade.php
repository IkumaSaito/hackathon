@extends('layouts.app')

@section('content')
<title>Lunch Meter</title>
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">
<body>
    <div class="container">
    <div class="row">
    <div class="edit col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10">
        <div class="title">
            <h1>Hi {{ $user->name }}!!<br> You Can Upload Your Avatar.</h1>
        </div>
        
        <div class="text">
        {!! Form::open(['url' => 'users/upload', 'method' => 'post', 'files' => true]) !!}
        {!! Form::label('file', 'Avater Upload', ['class' => 'control-label']) !!}

        
            {{--成功時のメッセージ--}}
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                    {{-- エラーメッセージ --}}
                @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        </div>
                @endif
        
        
        <div class="form-group">
                @if ($user->avatar_filename)
                    <p>
                        <figure class="main-img">
                            @if(file_exists('storage/avatar/'.$user->avatar_filename))
                            <img src="{{ asset('storage/avatar/' . $user->avatar_filename) }}" class="img-circle" alt="avatar" />
                            @else
                            <img src="{{ Gravatar::src($user->name, 500) }}" class="img-circle" alt="avatar" />
                            @endif
                        </figure>
                    </p>
                @endif
            {!! Form::file('file') !!}
        </div>
                    
        <div class="form-group">
            {!! Form::submit('Avater Upload') !!} 
        </div>
        {!! Form::close() !!}
        </div>
    </div>
    </div>
    </div>
    </body>
    </div>

@endsection