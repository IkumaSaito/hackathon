@extends('layouts.app')

@section('content')

<header>
<h2 class="name">
{{ $user->name }}
</h2>
</header>

<section class="contact">
<div class="ngt48-member">



<div class="clearfix">
<figure class="main-img"><img src="{{ asset('storage/avatar/' . $user->avatar_filename) }}" class="img-circle" alt="avatar" />
</figure>


<div class="prof">
<h3 style="font-size: 2.3125rem; line-height: 1.4;" data-idx="0">{{ $user->name }}</h3>
 

<dl>
   <div class="under">
   <dt>gender</dt>
   <td>{{ $user->gender }}</td>
   </div>
   <div class="under">
   <dt>hobby</dt>
   <td>{{ $user->hobby }}</td>
   </div>
   <div class="under">
   <dt>language</dt>
   <td>{{ $user->language }}</td>
   </div>
    <div class="under">
   <dt>intro</dt>
   <td>{{ $user->intro }}</td>
   </div>

</dl>



</div>
</div>


</div>

   <div class="right">
       {!! link_to_route('users.edit', 'Profile edit', ['id' => Auth::id()],['class' => 'btn btn-default']) !!}
       </div>
       
     <br>
     <br>
</section>
</div>

       <!--<div class="col-xs-8">-->
        <!--<aside class="col-md-offset-2 col-md-1 col-xs-offset-2 col-xs-3">-->
       <!--<div class="right">-->
       <!--{!! link_to_route('users.edit', 'Profile edit', ['id' => Auth::id()],['class' => 'btn btn-default']) !!}-->
       <!--</div>-->
        <!--</aside>-->
 
      <!--</div>-->



 @endsection

        
     


 
