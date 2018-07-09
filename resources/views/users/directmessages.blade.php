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
            
            <!--変数の確認-->
                <?php echo $user->name . "が送り主(あってる)" . PHP_EOL; ?>
                <?php echo $id . PHP_EOL; ?>
                
                
                {!! Form::open(['route' => 'directmessages.store']) !!}
                      <div class="form-group">
                          {!! Form::hidden('receiver_id', $id) !!}
                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '5']) !!}
                          {!! Form::submit('Send', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
                  {!! Form::close() !!}
                
            @if (count($directmessages) > 0)
                    @include('directmessages.directmessages', ['directmessages' => $directmessages])
            @endif
            <!--ここまで-->
            
        </div>
    </div>
@endsection

            