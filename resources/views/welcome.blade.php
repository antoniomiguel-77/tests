<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Efeito de brilho nas bordas */
    .neon-border {
      border: 2px solid transparent;
      background-image: linear-gradient(#0f172a, #0f172a),
                        linear-gradient(90deg, #00f5ff, #00ff95, #00f5ff);
      background-origin: border-box;
      background-clip: padding-box, border-box;
    }
    .neon-border:focus {
      box-shadow: 0 0 15px #00f5ff;
    }
  </style>
</head>
<body class="bg-[#0f172a] flex items-center justify-center min-h-screen text-white font-sans">
    @yield('content')
</body>
</html>
