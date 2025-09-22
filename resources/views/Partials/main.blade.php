<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="bett kipng'eno" />
    <link
      rel="shortcut icon"
      href="{{asset("images/images.jpeg")}}"
      type="image/x-icon"
    />
    @yield('styles')

    <script src="{{ asset("js/main.js") }} " defer></script>
    <title>{{ config('app.name' , "laravel") }}</title>
  </head>
  <body>
  
   @yield('body')
   @include('partials.footer')
  
  </body>
</html>