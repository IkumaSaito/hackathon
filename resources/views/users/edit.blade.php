@extends('layouts.app')

@section('content')
<title>Lunch Meter</title>
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">
<body>
    <div class="container">
    <div class="row">
    <div class="edit col-lg-offset-3 col-log-6 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
        <div class="title">
        <h1>Hi {{ $user->name }}!!<br> You Can Update Your Information.</h1>
        </div>
        
            
    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}
    <div class="text">
        {!! Form::label('name', 'name: ') !!}
        {!! Form::text('name',null, ['class' => 'form-control'])!!}
        <br>
        <br>
        {!! Form::label('gender', 'gender: ') !!}
        {!! Form::text('gender',null, ['class' => 'form-control']) !!}
        <br>
        <br>
        {!! Form::label('hobby', 'hobby: ') !!}
        {!! Form::text('hobby',null, ['class' => 'form-control']) !!}
        <br>
        <br>
        {!! Form::label('language', 'language: ') !!}
        {!! Form::text('language',null, ['class' => 'form-control']) !!}
        <br>
        <br>
       
        {!! Form::label('intro', 'intro: ') !!}<br>
        {!! Form::textarea('intro',null, ['class' => 'form-control']) !!}
        <br>
        <br>
        {!! Form::submit('Info Update') !!}
        <br>
        <br>
  {!! Form::close() !!}   


     </div>
</div>
</div>
</div>
</body>

@endsection

