<x-layout title='Ventas'>
  @if (session('status'))
  <div class="bg-green-500 p-3 rounded-md text-white text-center">
    {{ session('status') }}
  </div>
  @endif
  <section class="container mx-auto flex flex-col gap-10  px-4  lg:px-20 py-8 h-screen">
    <h1 class="text-7xl font-black">Bienvenido</h1>
    <div class="flex flex-wrap gap-4 text-gray-950 ">
      <a class="w-32 h-32 flex flex-col items-center gap-4 p-4 rounded-lg bg-orange-400 font-bold text-lg text-center" href="{{route('sales.index')}}">
        <span>Ventas</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-report-money" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path>
          <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
          <path d="M14 11h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5"></path>
          <path d="M12 17v1m0 -8v1"></path>
        </svg>
      </a>
      <a class="w-32 h-32 flex flex-col items-center gap-4 p-4 rounded-lg bg-cyan-400 font-bold text-lg text-center" href="{{route('products.index')}}">
        <span>Productos</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-store" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path d="M3 21l18 0"></path>
          <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4"></path>
          <path d="M5 21l0 -10.15"></path>
          <path d="M19 21l0 -10.15"></path>
          <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4"></path>
        </svg>
      </a>
      <a class="w-32 h-32 flex flex-col items-center gap-4 p-4 rounded-lg bg-green-400 font-bold text-lg text-center" href="{{route('users.index')}}">
        <span>Usuarios</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
          <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
          <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
          <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
        </svg>
      </a>
    </div>
  </section>
</x-layout>