@extends('layouts.app')

@section('content')

    <aside class="col-md-offset-4 col-md-4 col-xs-offset-2 col-xs-8">

        <ul class="media-list">

            
            @if (Auth::id() == $user->id)
                  {!! Form::open(['route' => 'posts.store']) !!}
                      <div class="form-group">
                          {!! Form::textarea('content', old('content'), ["placeholder"=>"ex) I am free from 1PM to 2PM today."], ['class' => 'form-control', 'rows' => '2']) !!}
                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
                  {!! Form::close() !!}
            @endif
            

            @if (count($posts) > 0)
                @include('posts.posts', ['posts' => $posts])
            @endif
            
        </ul>

{!! $posts->render() !!}

</aside>

<div class="footer col-md-12 col-xs-12">
           <p>Copyright © 2018  Amigos.</p> 
        </div>


@endsection

