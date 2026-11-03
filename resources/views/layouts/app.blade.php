<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Students</title>
  <style>body{font-family:system-ui,sans-serif;max-width:760px;margin:40px auto;padding:0 16px}
  .flash{background:#d4edda;padding:8px 12px;border-radius:6px;margin-bottom:12px}</style>
</head>
<body>
@if (session('status'))
  <div class="flash">{{ session('status') }}</div>
@endif
@yield('content')
</body>
</html>
