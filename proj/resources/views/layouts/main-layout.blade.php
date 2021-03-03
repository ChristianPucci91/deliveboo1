<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Main Layout</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
  </head>
  <body>

    <div class="container">

      <!-- header -->
      @include('components.header')
    <div id="app">
        @yield('contenuto-pagina')
    </div>
      <!-- contenuto pagina -->
      {{-- @yield('test') --}}

      <!-- footer -->
      @include('components.footer')

    </div>
    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>
