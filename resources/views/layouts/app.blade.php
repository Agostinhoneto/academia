<!DOCTYPE HTML>
<html lang=”pt-br”>
<head>
  <meta charset=”UTF-8”>
  <title>Academia</title>
</head>
<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
  @if (session('sucesso'))
    <div>
      <h2>{{ session('sucesso') }}</h2>
    </div>
  @endif
  @if (session('erro'))
    <div>
      <h2>{{ session('erro') }}</h2>
    </div>
  @endif

    @yield('content')
</body>
</html>    
