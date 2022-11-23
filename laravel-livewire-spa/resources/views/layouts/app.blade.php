<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel Livewire SPA - YaserAntariksa</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <livewire:styles/>
  <livewire:scripts/>
</head>
<body>
  <div class="container mt-5 mb-5">
    <div class="row justify-content-certer">
      <div class="col-md-12">

        {{-- flash message  --}}
        @if (session()->has('message'))
        .alert <alert-success>
          {{ session('message') }}
        </alert-success>
        @endif
        {{-- end flash message --}}

        {{-- component --}}
        @yield('content')
        {{-- end component --}}
      </div>
    </div>
  </div>

  {{-- javascript --}}
  <script src="{{ vite('js/app.js') }}"></script>

</body>
</html>