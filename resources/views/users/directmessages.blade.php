@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <!--送り主ユーザーは$user。紛らわしいので非表示-->
                <!--<div class="panel-heading">-->
                <!--    <h3 class="panel-title">{{ $user->name }}</h3>-->
                <!--</div>-->
                <!--<div class="panel-body">-->
                <!--    <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->name, 500) }}" alt="">-->
                <!--</div>-->
            </div>
        </aside>
        <!--ここからタブ-->
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">Direct Message <span class="badge">{{ $count_posts }}</span></a></li>
                <!--<li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.directmessages', ['id' => $user->id]) }}">DM <span class="badge">{{ $count_directmessages }}</span></a></li>-->
            </ul>
        <!--ここまで-->
            <!--ここからDM-->
            @if (Auth::id() == $user->id)
            <!--変数の確認-->
                <?php echo $receiver->name . "への返信" . PHP_EOL; 
                      echo $receiver->id . "への返信" . PHP_EOL; ?>
                
                  {!! Form::open(['route' => 'directmessages.store']) !!}
                      <div class="form-group">
                          <!--{!! Form::hidden('receiver_id', '$receiver->id') !!}-->
                          {!! Form::textarea('receiver_id', old('receiver_id'), ['class' => 'form-control', 'rows' => '1']) !!}
                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '5']) !!}
                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
                  {!! Form::close() !!}
            @endif
            @if (count($directmessages) > 0)
                    @include('directmessages.directmessages', ['directmessages' => $directmessages])
            @endif
            <!--ここまで-->
            
        </div>
    </div>
@endsection

            