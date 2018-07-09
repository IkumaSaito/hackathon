@extends('layouts.app')

@section('content')
<div class="row">
    <aside class="col-md-offset-2 col-md-8 col-xs-offset-2 col-xs-8">
<ul class="media-list">
            
            @if (Auth::id() == $user->id)
                  {!! Form::open(['route' => 'posts.store']) !!}
                      <div class="form-group">
                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
                  {!! Form::close() !!}
            @endif
            
@foreach ($posts as $post)
    <?php $user = $post->user; ?>
     <div class="panel panel-primary">
  <div class="panel-body">
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
        </div>
    </li>
    </div>
    </div>
@endforeach
</ul>
{!! $posts->render() !!}
@endsection