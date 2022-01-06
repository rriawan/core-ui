<!doctype html>
<html lang="en">
  <head>
    @include('partials.plugin-css')
  </head>
  <body>
    @include('partials.sidebar') 
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">      
      @include('partials.navbar')
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          @yield('content')
        </div>
      </div>
      @include('partials.footer')
    </div>
    @include('partials.plugin-js')
  </body>
</html>