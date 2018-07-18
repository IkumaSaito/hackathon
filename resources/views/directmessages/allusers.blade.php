 <link rel="stylesheet" href="{{ secure_asset('/css/allusers.css') }}">
 
@if (count($senders) > 0)
<div class="aside">
<ul>
@foreach ($senders as $key => $sender)
    <li>
        <div class="media-body">
            <div>

    <img src="{{ Gravatar::src($user->email, 500) }}" class="img-circle" alt="avatar" />

                {!! link_to_route('users.directmessages', $sender->name, ['id' => $sender->id]) !!}  :
                <?php echo count($unseens->where('user_id', $sender->id)); ?>件    
                
             <dl>
                                <div class="under">
                                   <dt>gender</dt>
                                   <td>{{ $sender->gender }}</td>
                                </div>
                            
                                <div class="under">
                                    <dt>hobby</dt>
                                    <td>{{ $sender->hobby }}</td>
                                </div>
                            
                                <div class="under">
                                    <dt>language</dt>
                                    <td>{{ $sender->language }}</td>
                                </div>
                            
                                <div class="under">
                                    <dt>intro</dt>
                                    <td>{{ $sender->intro }}</td>
                                </div>
   
            </div>
        </div>
    </li>
@endforeach
</ul>
</div>

@endif

<!--sendersは送ったユーザー-->
<!--unseensは未読DM-->