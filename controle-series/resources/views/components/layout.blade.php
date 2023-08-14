<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
    <!-- podemos adicionar um titulo padrão -->
    <title>{{ $title }} - Controle de Séries</title>
  </head>
  <body>
    <h1>{{ $title}}</h1>
    {{ $slot }}
  </body>
</html>
