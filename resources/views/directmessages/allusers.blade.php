 <link rel="stylesheet" href="{{ secure_asset('/css/allusers.css') }}">
 
@if (count($senders) > 0)
<div class="aside">
<ul>
@foreach ($senders as $key => $sender)
    <li>
        <div class="media-body">
            <div>

                {!! link_to_route('users.directmessages', $sender->name, ['id' => $sender->id]) !!}  :
                <?php echo count($unseens->where('user_id', $sender->id)); ?>件    


   
            </div>
        </div>
    </li>
@endforeach
</ul>
</div>

@endif

<!--sendersは送ったユーザー-->
<!--unseensは未読DM-->