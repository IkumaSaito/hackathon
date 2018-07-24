@extends('layouts.app')

@section('content')


<link rel="stylesheet" href="{{asset('/css/dm2.css') }}">

        <aside class="col-xs-3">
            <div class="panel panel-default">

<!--これでユーザーリストを呼び出してます-->

@include('users.direct', ['senders' => $senders])

<!--ここまで-->
            </div>
        </aside>
        
        
        <!--ここからタブ-->
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><h1>Direct Message</h1> 
            </ul>
            <br>
            <br>
        <!--ここまで-->
            <!--ここからDM-->
            
            <!--デバッグ用変数の確認-->
                <!--<?php echo "To(user_id): " . $id . PHP_EOL; ?>-->
                <!--<?php echo "From: " . $user->name . PHP_EOL; ?>-->
                <!--<?php echo "id" . $user->id . PHP_EOL; ?>-->
                <?php echo $to_user->name . "さんへのメッセージを作成" . PHP_EOL; ?>
            <!--ここまで    -->
            <!--ここから入力フォーム-->
                {!! Form::open(['route' => 'directmessages.store']) !!}
                      <div class="form-group">
                          {!! Form::hidden('receiver_id', $id) !!}
                          {!! Form::textarea('content', old('content'), ["placeholder"=>"ex) Let's have a lunch from 12 PM to 13 PM today!"], ['class' => 'form-control', 'rows' => '5']) !!}
                          {!! Form::submit('Send', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
                  {!! Form::close() !!}
                  <br>
                  <br>
            <!--ここまで-->
            <!--ここからDM呼び出し-->
            @if (count($directmessages) > 0)
                    @include('directmessages.directmessages', ['directmessages' => $directmessages])
            @endif
            <!--ここまで-->
            
        </div>
    </div>
    

@endsection

