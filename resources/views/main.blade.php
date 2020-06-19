   @include('_head')
  <body>
  @include('_nav')
     <div class="container">
     @include('_messages')
     @yield('content')
     </div>
  @include('_javas')
   
  </body>
</html>
