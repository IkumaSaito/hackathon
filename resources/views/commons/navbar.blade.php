<link rel="stylesheet" href="{{asset('css/nav.css') }}">
<header>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Lunch Meeter</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                        <?php
                            $unseens = \App\Directmessage::where('receiver_id', \auth::id())
                                            ->where('seen', 0)->get();
                            $dms = count($unseens);
    
                        ?>
                        <li class="dropdown">
                            
                                <li>{!! link_to_route('users.show', 'My profile', ['id' => Auth::id()]) !!}</li>
                                <li>{!! link_to_route('posts.index', 'Find a person') !!}</li>

                                <li><a href="{{route('directmessages.users', ['id' => Auth::id()])}}">Direct Message {{ $dms > 0 ? '(' . $dms . ')' : '' }} </a></li>
                                <li>{!! link_to_route('users.concept', 'Concept', ['id' => Auth::id()]) !!}</li>
                                <li>{!! link_to_route('users.explain2', 'How to use', ['id' => Auth::id()]) !!}</li>
                                <li role="separator" class="divider"></li>
                                
                                <li>{!! link_to_route('logout.get', 'Logout', "", ['class' => 'logout']) !!}</li>
                            
                        </li>
                    @else
                        <li>{!! link_to_route('signup.get', 'Signup') !!}</li>
                        <li>{!! link_to_route('login', 'Login') !!}</li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>