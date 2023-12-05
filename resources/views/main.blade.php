{{-- Ini adalah main layout yang digunakan oleh beberapa halaman --}}
<!doctype html>
<html lang="en">
  <head>
    {{-- Style untuk Form Login --}}
    <link rel="stylesheet" href="/css/style.css">
    {{-- Implementasi Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    
  </head>
  <body>
    {{-- Bagian ini adalah bagian untuk child layout --}}
    <div class="container mt-4">
        @yield('container')
    </div>
  </body>
</html>