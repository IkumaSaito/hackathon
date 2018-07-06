@extends('layouts.app')

@section('content')
<title>Lunch Meter</title>
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">
<body>
    <div class="container">
    <div class="row">
    <div class="edit col-lg-offset-3 col-log-6 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
        <div class="title">
        <h1>Hi {{ $user->name }}!!<br> You Can Update Your Information</h1>
        </div>
        <br>
        <br>
    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}
    <div class="text">
        {!! Form::label('name', 'name: ') !!}
        {!! Form::text('name') !!}
        <br>
        <br>
        {!! Form::label('password', 'password: ') !!}
        {!! Form::text('password') !!}
        <br>
        <br>
        {!! Form::label('gender', 'gender: ') !!}
        {!! Form::text('gender') !!}
        <br>
        <br>
        {!! Form::label('hobby', 'hobby: ') !!}
        {!! Form::text('hobby') !!}
        <br>
        <br>
        {!! Form::label('language', 'language: ') !!}
        {!! Form::text('language') !!}
        <br>
        <br>
       
        {!! Form::label('intro', 'intro: ') !!}<br>
        {!! Form::textarea('intro') !!}
        <br>
        <br>
        {!! Form::submit('Update') !!}
        <br>
        <br>
    {!! Form::close() !!}
     </div>
</div>
</div>
</div>
</body>
@endsection