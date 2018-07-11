@if (count($users) > 0)
<ul class="media-list">
@foreach ($users as $user)
    <li class="media">
        <div class="media-body">
            <div>
                {{ $user->name }}
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $users->render() !!}

@endif