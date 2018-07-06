@extends('layouts.app')

@section('content')

<h1>Hi {{ $user->name }}!! You Can Update Your Information </h1>

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
        
       {!! Form::open(['url' => 'users/upload', 'method' => 'post', 'files' => true]) !!}
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
                                <img src="{{ asset('storage/avatar/' . $user->avatar_filename) }}" alt="avatar" />
                            </p>
                        @endif
                        {!! Form::label('file', '画像アップロード', ['class' => 'control-label']) !!}
                        {!! Form::file('file') !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::submit('アップロード', ['class' => 'btn btn-default']) !!} 
                    </div>
                    {!! Form::close() !!}

@endsection