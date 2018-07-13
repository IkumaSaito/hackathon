@extends('layouts.app')

@section('content')

    <?php echo $user->name . "さんのDM受信リスト" . PHP_EOL; ?>

        未読が {{ count($unseens) }} 件あります

    <!--ここからDMを送ってきた人一覧を呼び出し-->
    @include('directmessages.allusers', ['senders' => $senders, 'unseens' => $unseens])   
    <!--ここまで-->


@endsection