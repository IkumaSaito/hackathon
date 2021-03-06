<ul class="media-list">
<link rel="stylesheet" href="{{ asset('/css/directmessages.css') }}">
 <link rel="stylesheet" href="{{asset('/css/hakason15.css')}}">
   

<div class="DM">
@foreach ($directmessages as $directmessage)
        <?php $user = $directmessage->user; ?>
        <?php $id = $directmessage->receiver_id; ?>
        <?php $auth_id = $directmessage->user_id; ?>
        
    <?php if (Auth::id() == $directmessage->user_id): ?>
        <div class="sent">
    <?php  else:  ?>
        <div class="received">
    <?php endif; ?>        
        
        <li class="media">
            <div class="media-left">


                <figure class="main-img">
                    @if($user->avatar_filename)
                    <img src="{{ $user->avatar_filename }}" class="img-responsive img-circle" alt="avatar" />
                    @else
                    <img src="{{ Gravatar::src($user->name, 500) }}" class="img-responsive img-circle" alt="avatar" />
                    @endif
                
            </div>
            <div class="media-body">
                <div>
                    
                    <!--<?php echo $auth_id; ?>-->
                        {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">　{{ $directmessage->created_at }}</span>
                    <!--<?php echo $id; ?> -->
                    
                </div>
                <div>
                    <p>{!! nl2br(e($directmessage->content)) !!}</p>
                </div>
                <div>
                    @if (Auth::id() == $directmessage->user_id)
                        {!! Form::open(['route' => ['directmessages.destroy', $directmessage->id], 'method' => 'delete']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    @endif
                </div>
                </div>
            </div>
        </li>

@endforeach
</ul>
</div>
{!! $directmessages->render() !!}

<div class="footer col-md-12 col-xs-12">
           <p>Copyright © 2018  Amigos.</p> 
        </div>