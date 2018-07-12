@extends('layouts.app')

@section('content')

    <?php echo $user->name . "さんのDM受信リスト" . PHP_EOL; ?>

    <!--ここからダイレクトメッセージを呼び出し-->
    @include('directmessages.allusers', ['senders' => $senders])   
    <!--ここまで-->


@endsection