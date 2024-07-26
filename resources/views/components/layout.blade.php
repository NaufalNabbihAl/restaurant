<!doctype html class="h-full bg-white">
<html>
<head >
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="h-full">
  {{ $slot }}
</body>
</html>