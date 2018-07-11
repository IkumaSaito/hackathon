
<!DOCTYPE html>
<html lang="ja">
   <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       
       <title>Lunch Meter</title>

<!-- Bootstrap CSS-->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <link rel="stylesheet" href="{{ secure_asset('/css/login.css') }}">
       <!-- jQuery -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <!-- Bootstrap JavaScript-->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<body>
 @include('commons.navbar')
 @include('commons.error_messages')
    <div class="bg">
        <img class="img-responsive" src="/images/bg0.jpg">
    </div>

<div class="row">
    <div class="loginbox col-xs-offset-3 col-xs-6">
    <div class="text-center">
        <h1>Log in</h1>
    </div>

        <div class="login">
            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control input-sm']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control input-sm']) !!}
                </div>
        </div>
            
        <div class="col-md-offset-9 col-md-3 col-sm-offset-6 col-sm-6 col-xs-offset-1 col-xs-10">
                {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block btn-sm']) !!}
            {!! Form::close() !!}

            <p>New user?<br> {!! link_to_route('signup.get', 'Sign up now!') !!}</p>
        </div>
    </div>
</div>
</body>
