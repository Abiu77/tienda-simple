<x-layout title='Ventas'>
  @if (session('status'))
  <div class="bg-green-500 p-3 rounded-md text-white text-center">
    {{ session('status') }}
  </div>
  @endif
  <section class="lg:container lg:mx-auto flex flex-col gap-10  px-4 py-2 lg:px-20 lg:py-4">
    <div class="flex justify-between">
      <h1 class="text-gray-100 text-4xl font-bold">Ventas</h1>
      <aside class="bg-green-400 p-2 rounded-md">
        <a class=" " href="{{ route('sales.create') }}">
          <x-plusIcon></x-pluIcon>
        </a>
      </aside>
    </div>
    <form class="w-full rounded-md " action="">
      <table class="w-full border-2 rounded-lg border-gray-700">
        <thead class="bg-gray-800">
          <tr class="">
            <th class="px-6 py-3 border-2 border-gray-700">ID</th>
            <th class="px-6 py-3 border-2 border-gray-700">Ver detalle</th>
            <th class="px-6 py-3 border-2 border-gray-700">Vendedor</th>
            <th class="px-6 py-3 border-2 border-gray-700">Fecha de venta</th>
            <th class="px-6 py-3 border-2 border-gray-700">Total</th>
          </tr>
        </thead>
        <tbody>
          @foreach($sales as $sale)
          <tr>
            <td class="px-6 py-4 border-2 border-gray-700">{{$sale->id}}</td>
            <td class="px-6 py-4 border-2 border-gray-700">
              <a class="bg-cyan-500 px-3 py-1 rounded cursor-pointer active-modal">Ver detalle</a>
              <x-modal></x-modal>
            </td>
            <td class="px-6 py-4 border-2 border-gray-700">{{$sale->user_id}}</td>
            <td class="px-6 py-4 border-2 border-gray-700">{{$sale->sale_date}}</td>
            <td class="px-6 py-4 border-2 border-gray-700">{{$sale->total}}</td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </form>
  </section>
</x-layout>