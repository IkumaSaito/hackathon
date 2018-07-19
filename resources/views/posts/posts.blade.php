
       <link rel="stylesheet" href="{{ secure_asset('/css/posts.css') }}">
     

<ul class="media-list">
@foreach ($posts as $post)
    <?php $user = $post->user; ?>
    <br>
    <br>
    <div class="panel panel-info">
        
            <li class="media">
                <div class="media-body">
                    <div>
                <figure class="main-img">
                    @if(file_exists('storage/avatar/' .$user->avatar_filename))
                    <img src="{{ asset('storage/avatar/' . $user->avatar_filename) }}" class="img-responsive img-circle" alt="avatar" />
                    @else
                    <img src="{{ Gravatar::src($user->name, 500) }}" class="img-responsive img-circle" alt="avatar" />
                    @endif
                </figure>
                        {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $post->created_at }}</span>
                    </div>
                <div>
                    <p>{!! nl2br(e($post->content)) !!}</p>
                </div>
                <div>
                    @if (Auth::id() == $post->user_id or 14 or 2)
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    @endif
                </div>
                    <!--ここからDM機能、ボタン追加お願いします-->
                    @if (Auth::id() != $post->user_id)
                        {!! link_to_route('users.directmessages', "Send Message", ['id' => $post->user_id],['class' => 'btn btn-success btn-xs']) !!}
                    @endif
                </div>
            </li>
     

    </div>
@endforeach
</ul>