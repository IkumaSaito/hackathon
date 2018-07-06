@extends('layouts.app')

@section('content')

<h1>id: Update Your Information : {{ $user->name }} </h1>

    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}

        {!! Form::label('name', 'name:') !!}
        {!! Form::text('name') !!}
        
        {!! Form::label('password', 'password:') !!}
        {!! Form::text('password') !!}
        
        {!! Form::label('gender', 'gender:') !!}
        {!! Form::text('gender') !!}
        
        {!! Form::label('hobby', 'hobby:') !!}
        {!! Form::text('hobby') !!}
        
        {!! Form::label('language', 'language:') !!}
        {!! Form::text('language') !!}
        
        {!! Form::label('intro', 'intro:') !!}
        {!! Form::text('intro') !!}

        {!! Form::submit('Update') !!}

    {!! Form::close() !!}

@endsection