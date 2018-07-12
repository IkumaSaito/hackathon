<!DOCTYPE html>
<html lang="ja">
   <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       
       <title>Lunch Meter</title>

<!-- Bootstrap CSS-->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <link rel="stylesheet" href="{{ secure_asset('/css/posts.css') }}">
       <!-- jQuery -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <!-- Bootstrap JavaScript-->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<ul class="media-list">
@foreach ($posts as $post)
    <?php $user = $post->user; ?>
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
                        {!! link_to_route('users.directmessages', "DM", ['id' => $post->user_id],['class' => 'btn btn-default btn-xs']) !!}
                    @endif
                </div>
            </li>
     

    </div>
    <br>
@endforeach
</ul>
{!! $posts->render() !!}