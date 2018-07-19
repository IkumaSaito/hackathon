@extends('layouts.app')

 <link rel="stylesheet" href="{{ secure_asset('/css/allusers.css') }}">

@section('content')

<div class="title">
        Direct Messages (Unread:{{ count($unseens) }})
</div>
<br>

 <div class="col-md-12">
    <!--ここからDMを送ってきた人一覧を呼び出し-->
   
    @include('directmessages.allusers', ['senders' => $senders, 'unseens' => $unseens])
    
    </div>
    </div>
    <!--ここまで-->

@endsection