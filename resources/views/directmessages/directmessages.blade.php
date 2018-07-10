<ul class="media-list">
@foreach ($directmessages as $directmessage)
        <?php $user = $directmessage->user; ?>
        <?php $id = $directmessage->receiver_id; ?>
        <?php $auth_id = $directmessage->user_id; ?>
        
        <li class="media">
            <div class="media-left">
            </div>
            <div class="media-body">
                <div>
                    <?php echo $auth_id; ?>
                    {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $directmessage->created_at }}</span>
                    <?php echo $id; ?> 
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
        </li>
@endforeach
</ul>
{!! $directmessages->render() !!}