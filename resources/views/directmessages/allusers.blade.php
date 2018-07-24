<link rel="stylesheet" href="{{ secure_asset('/css/allusers.css') }}">
 <link rel="stylesheet" href="{{asset('css/hakason15.css')}}">
   
 
@if (count($senders) > 0)
<div class="aside">
<ul>
@foreach ($senders as $key => $sender)
    <li class="main">
        <div class="media-body col-md-4 panel panel-info">
            <div>
                <br>
                        @if($sender->avatar_filename)
                        <img src="{{ $sender->avatar_filename }}" class="img-responsive img-circle center-block" alt="avatar" />
                        @else
                        <img src="{{ Gravatar::src($sender->name, 500) }}" class="img-responsive img-circle center-block" alt="avatar" />
                        @endif
    
            <div class="name2">
                {!! link_to_route('users.directmessages', $sender->name, ['id' => $sender->id]) !!}  :
                <?php echo count($unseens->where('user_id', $sender->id)); ?>    
            </div>
            <br>
             <dl>
                                <div class="under col-md-offset-1 col-md-5 col-xs-offset-1 col-xs-5">
                                   <dt>gender</dt>
                                   <td>{{ $sender->gender }}</td>
                                </div>
                                <div class="under col-md-5 col-sm-5">
                                    <dt>hobby</dt>
                                    <td>{{ $sender->hobby }}</td>
                                </div><br>
                                
                                <div class="under col-md-offset-1 col-md-5 col-xs-offset-1 col-xs-5">
                                    <dt>language</dt>
                                    <td>{{ $sender->language }}</td>
                                </div>
                                
                                
                                <div class="under col-md-5 col-xs-5">
                                    <dt>intro</dt>
                                <?php
                                     echo mb_strimwidth("$sender->intro ", 0, 25, "...");
                                ?>
                                </div>
                            

            </div>
        </div>
        
    </li>
@endforeach

</ul>
</div>

@endif

<!--sendersは送ったユーザー-->
<!--unseensは未読DM-->