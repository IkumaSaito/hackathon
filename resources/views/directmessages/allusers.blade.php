@if (count($senders) > 0)
<ul>
@foreach ($senders as $key => $sender)
    <li>
        <div class="media-body">
            <div>

                {!! link_to_route('users.directmessages', $sender->name, ['id' => $sender->id]) !!}
                <?php echo "未読:" ; ?>        
                <?php echo count($unseens->where('user_id', $sender->id)); ?>        

            </div>
        </div>
    </li>
@endforeach
</ul>



@endif

<!--sendersは送ったユーザー-->
<!--unseensは未読DM-->