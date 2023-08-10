<x-layout title='Ventas'>
  @if (session('status'))
  <div class="bg-green-500 p-3 rounded-md text-white text-center">
    {{ session('status') }}
  </div>
  @endif
  <section class="lg:container lg:mx-auto flex flex-col gap-10  px-4 py-2 lg:px-20 lg:py-4 min-h-screen">
    <h1 class="text-3xl font-bold mb-4 mt-4">Detalle de Ventas</h1>
    <form class="w-full rounded-md " action="">
      <table class="w-full border-2 rounded-lg border-gray-700">
        <thead class="bg-gray-800">
          <tr class="">
            <th class="px-6 py-3 border-2 border-gray-700">ID</th>
            <th class="px-6 py-3 border-2 border-gray-700">Producto</th>
            <th class="px-6 py-3 border-2 border-gray-700">Cantidad</th>
            <th class="px-6 py-3 border-2 border-gray-700">Precio</th>
            <th class="px-6 py-3 border-2 border-gray-700">Subtotal</th>
          </tr>
        </thead>
        <tbody>
          @foreach($details as $detail)
          <tr>
            <td class="px-6 py-4 border-2 border-gray-700">{{$detail->id}}</td>
            <td class="px-6 py-4 border-2 border-gray-700">{{$detail->product->name}} </td>
            <td class="px-6 py-4 border-2 border-gray-700">{{$detail->quantity}}</td>
            <td class="px-6 py-4 border-2 border-gray-700">{{$detail->price}}</td>
            <td class="px-6 py-4 border-2 border-gray-700">{{$detail->subtotal}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </form>
  </section>
</x-layout>