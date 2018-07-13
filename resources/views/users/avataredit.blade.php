@extends('layouts.app')

@section('content')
<title>Lunch Meter</title>
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">
<body>
    <div class="container">
    <div class="row">
    <div class="edit col-lg-offset-3 col-log-6 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
        <div class="title">
            <h1>Hi {{ $user->name }}!!<br> You Can Upload Your Avatar.</h1>
        </div>
        
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
                        <figure class="main-img"><img src="{{ asset('storage/avatar/' . $user->avatar_filename) }}" class="img-circle" alt="avatar" />
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

@endsection