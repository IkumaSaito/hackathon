<ul class="media-list">
@foreach ($posts as $post)
    <?php $user = $post->user; ?>
    <li class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($user->name, 50) }}" alt="">
        </div>
        <div class="media-body">
            <div>
                <!--↓のリンクをユーザーごとのプロフィールページへのリンクに変える必要あり-->
                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $post->created_at }}</span>
            </div>
            <div>
                <p>{!! nl2br(e($post->content)) !!}</p>
            </div>
            <div>
                @if (Auth::id() == $post->user_id)
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                @endif
            </div>

            <div>
                @if (Auth::id() != $post->user_id)
                    <!--↓きれいなボタンにしてください。-->
                    {!! link_to_route('users.directmessages', "DM", ['id' => $post->user_id]) !!}
                    <!--<a href="{{ route('users.directmessages', ['id' => $user->id]) }}">DM </a>-->
                @endif
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $posts->render() !!}