<!DOCTYPE html>
<html lang="ja">
   <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       
       <title>Lunch Meter</title>

<!-- Bootstrap CSS-->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <link rel="stylesheet" href="{{ secure_asset('/css/register.css') }}">
       <!-- jQuery -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <!-- Bootstrap JavaScript-->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<body>
 @include('commons.error_messages')
    <div class="bg">
        <img class="img-responsive" src="/images/bg2.jpg">
    </div>

    <div class="row">
        <div class="signup col-xs-offset-3 col-xs-6">


            <div class="sign">
                 <div class="text-center">
                    <h1>Sign up</h1>
                </div>
                {!! Form::open(['route' => 'signup.post']) !!}
                    <!--Required-->
                    <div class="form-group">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                    </div>
                    <!--Required-->
                    <div class="form-group">
                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>
    
                    <div class="form-group">
                        {!! Form::label('password_confirmation', 'Confirmation') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                    </div>
                
                <div class="col-md-offset-10 col-md-2 col-sm-offset-6 col-sm-6 col-xs-offset-2 col-xs-8">
                    {!! Form::submit('Sign up', ['class' => 'btn btn-info btn-block btn-sm ']) !!}
                {!! Form::close() !!}
                </div>
            </div>
        </div>
</div>  
</body>