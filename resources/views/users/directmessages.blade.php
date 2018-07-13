@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-3">
            <div class="panel panel-default">

<!--これでユーザーリストを呼び出してます-->
@include('directmessages.allusers', ['senders' => $senders])
<!--ここまで-->
            </div>
        </aside>
        <!--ここからタブ-->
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}">Direct Message 
            </ul>
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
                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '5']) !!}
                          {!! Form::submit('Send', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
                  {!! Form::close() !!}
            <!--ここまで-->
            <!--ここからDM呼び出し-->
            @if (count($directmessages) > 0)
                    @include('directmessages.directmessages', ['directmessages' => $directmessages])
            @endif
            <!--ここまで-->
            
        </div>
    </div>
@endsection

            