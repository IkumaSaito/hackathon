@extends('layouts.app')

@section('content')
<title>Lunch Meter</title>
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">
<body>
    <div class="container">
    <div class="row">
    <div class="edit col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10">
        <div class="title">
        <h1>Hi {{ $user->name }}!!<br> You Can Update Your Information.</h1>
        </div>
        <br>
        <br>
        
            
    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}
    <div class="text">
        <div class="first col-md-6">
            {!! Form::label('name', 'name: ') !!}
            {!! Form::text('name',null, ['class' => 'form-control'])!!}
            <br>
            <br>
            {!! Form::label('gender', 'gender: ') !!}
            {!! Form::text('gender',null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="second col-md-6">
            {!! Form::label('hobby', 'hobby: ') !!}
            {!! Form::text('hobby',null, ['class' => 'form-control']) !!}
        
            <br>
            <br>
            {!! Form::label('language', 'language: ') !!}
            {!! Form::text('language',null, ['class' => 'form-control']) !!}
            <br>
            <br>
        </div>
       
        {!! Form::label('intro', 'intro: ') !!}<br>
        {!! Form::textarea('intro',null, ['class' => 'form-control']) !!}
        <br>
        <br>
        {!! Form::submit('Info Update') !!}
        <br>
        <br>
  {!! Form::close() !!}   


  
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

