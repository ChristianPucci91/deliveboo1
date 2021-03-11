<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Main Layout</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

    {{-- <div class="container"> --}}

      <!-- header -->
      @include('components.header')
    <div id="app">
        @yield('contenuto-pagina')
    </div>
      <!-- contenuto pagina -->
      {{-- @yield('test') --}}
    {{-- </div> --}}

    {{-- creare contenitore per il footer --}}
    <div class="container1">
      <!-- footer -->
      @include('components.footer')
    </div>

    <script src="{{asset('js/app.js')}}"></script>

    @stack('modals')
    {{-- @livewireScripts --}}

    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>

    @stack('js')
    

  </body>
</html>
