@if (count($senders) > 0)
<ul class="media-list">
@foreach ($senders as $key => $sender)
    <li class="media">
        <div class="media-body">
            <div>
                
                {!! link_to_route('users.directmessages', $sender->name, ['id' => $sender->id]) !!}
                
            </div>
        </div>
    </li>
@endforeach
</ul>


@endif