<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lunch Meeter</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

         <link rel="stylesheet" href="css/explain.css">
         <link rel="stylesheet" href="css/hakason.css">
        <link rel="stylesheet" href="css/hakason15.css">
   
   

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
       
        
        @if (strpos(Request::url(),'intro')=== false) 
            @include('commons.navbar')
            @include('commons.error_messages')
        @endif
       
        @yield('content') 
    </body>
</html>