
       <link rel="stylesheet" href="{{ secure_asset('/css/posts.css') }}">
     

<ul class="media-list">
@foreach ($posts as $post)
    <?php $user = $post->user; ?>
    
    <br>
    
    <div class="panel panel-primary">
        
            <li class="media">
                <div class="media-body">
                    <div>
                        
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
                    <!--ここからDM機能、ボタン追加お願いします-->
                    @if (Auth::id() != $post->user_id)
                        {!! link_to_route('users.directmessages', "Send Message", ['id' => $post->user_id],['class' => 'btn btn-info btn-xs']) !!}
                    @endif
                </div>
            </li>
     

    </div>
    <br>
@endforeach
</ul>
{!! $posts->render() !!}