<link rel="stylesheet" href="{{ secure_asset('/css/allusers.css') }}">
 
@if (count($senders) > 0)
<div class="aside">
<ul>
@foreach ($senders as $key => $sender)
    <li>
        <div class="media-body">

                    @if($user->avatar_filename)
                    <img src="{{ $sender->avatar_filename }}" class="img-responsive img-circle center-block" alt="avatar" />
                    @else
                    <img src="{{ Gravatar::src($sender->name, 500) }}" class="img-responsive img-circle" alt="avatar" />
                    @endif
 
            <div class="name">
                {!! link_to_route('users.directmessages', $sender->name, ['id' => $sender->id]) !!}  :
                <?php echo count($unseens->where('user_id', $sender->id)); ?>    
            </div>
            
           
        </div>
    </li>
@endforeach
</ul>
</div>


@endif