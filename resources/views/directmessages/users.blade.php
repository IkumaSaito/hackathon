@extends('layouts.app')

@section('content')

    <?php echo $user->name . "さんのDM受信リスト" . PHP_EOL; ?>
    
  @include('directmessages.allusers', ['senders' => $senders])   
            
    

    ここがDMユーザーリストになる予定です！！！

@endsection