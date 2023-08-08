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
      <a class="font-black text-lg" href="/">Simple</a>
      <ul class="flex">
        <li><a class="px-4 py-2 font-normal" href="{{route('sales.index')}}">Ventas</a></li>
        <li><a class="px-4 py-2 font-normal" href="{{route('products.index')}}">Productos</a></li>
        <li><a class="px-4 py-2 font-normal" href="{{route('users.index')}}">Usuarios</a></li>
      </ul>
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
          <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
          <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
        </svg>
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