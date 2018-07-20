<link rel="stylesheet" href="{{ secure_asset('/css/allusers.css') }}">
 
@if (count($senders) > 0)
<div class="aside">
<ul>
@foreach ($senders as $key => $sender)
    <li class="main">
        <div class="media-body col-md-4 panel panel-info">
            <div>
                <br>
                        @if($user->avatar_filename)
                        <img src="{{ $sender->avatar_filename }}" class="img-responsive img-circle" alt="avatar" />
                        @else
                        <img src="{{ Gravatar::src($sender->name, 500) }}" class="img-responsive img-circle" alt="avatar" />
                        @endif
    
            <div class="name2">
                {!! link_to_route('users.directmessages', $sender->name, ['id' => $sender->id]) !!}  :
                <?php echo count($unseens->where('user_id', $sender->id)); ?>    
            </div>
            <br>
             <dl>
                                <div class="under col-md-offset-1 col-md-5 col-xs-offset-1 col-xs-5">
                                   <dt>gender</dt>
                                   <td>{{ $sender->gender }}</td>
                                </div>
                                <div class="under col-md-5 col-sm-5">
                                    <dt>hobby</dt>
                                    <td>{{ $sender->hobby }}</td>
                                </div><br>
                                
                                <div class="under col-md-offset-1 col-md-5 col-xs-offset-1 col-xs-5">
                                    <dt>language</dt>
                                    <td>{{ $sender->language }}</td>
                                </div>
                            
                                <div class="under col-md-5 col-xs-5">
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