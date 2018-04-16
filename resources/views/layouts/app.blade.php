<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
 <head>
    @include('partials._head')
 </head>
<body>

@if(!Request::is('/login'))
  @include('partials._nav')
@endif

<div class="container">
  
    @include('partials._messages')

   

  @yield('content')
   

  @include('partials._footer')

</div>

    
@include('partials._javascript')

@yield('scripts')
  </body>
</html>
