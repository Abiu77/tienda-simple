<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Tienda simple - {{$title}}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  @vite('resources/css/app.css')
</head>

<body class="w-full flex flex-col   bg-gray-100  dark:bg-gray-900 ">
  <header class="w-full text-gray-100 bg-gray-700">
    <section class="lg:container lg:mx-auto flex justify-between px-4 py-2 lg:px-20 lg:py-4">
      <p class="font-black">Simple</p>
      <ul class="flex">
        <li><a class="px-4 py-2 font-normal" href="/">Ventas</a></li>
        <li><a class="px-4 py-2 font-normal" href="products">Productos</a></li>
        <li><a class="px-4 py-2 font-normal" href="/users">Usuarios</a></li>
      </ul>
      <div>
        HI
      </div>
    </section>
  </header>
  <main class="w-full text-gray-100 font-normal relative">
    {{ $slot }}
  </main>
  <footer class="w-full py-10">
    <p class="text-center text-sm text-gray-500 dark:text-gray-400 ">Designed by Humberto</p>
  </footer>
</body>

</html>