@extends('layouts.app')

 <link rel="stylesheet" href="{{ secure_asset('/css/allusers.css') }}">

@section('content')

<div class="title">
    <?php echo $user->name . "さんのDM受信リスト" . PHP_EOL; ?>

        未読が {{ count($unseens) }} 件あります
</div>
<br>

 <div class="col-md-3">
    <!--ここからDMを送ってきた人一覧を呼び出し-->
   <div class="panel panel-default">
    @include('directmessages.allusers', ['senders' => $senders, 'unseens' => $unseens])
    </div>
    </div>
    <!--ここまで-->


@endsection