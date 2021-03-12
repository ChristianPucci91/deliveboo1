<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Main Layout</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
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



    {{-- <script src="{{asset('js/app.js')}}"></script> --}}
    {{-- <script type="text/javascript">
    (function($){
      window.onbeforeunload = function(e){
      window.name += ' [' + $(window).scrollTop().toString() + '[' + $(window).scrollLeft().toString();
      };
      $.maintainscroll = function() {
      if(window.name.indexOf('[') > 0)
      {
      var parts = window.name.split('[');
      window.name = $.trim(parts[0]);
      window.scrollTo(parseInt(parts[parts.length - 1]), parseInt(parts[parts.length - 2]));
      }
      };
      $.maintainscroll();
      })(jQuery);
    </script> --}}

  </body>
</html>
