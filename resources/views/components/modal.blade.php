<section class="fixed flex top-0 left-0 right-0 bottom-0 bg-slate-900/70 opacity-0 pointer-events-none modal">
  <div class="modal_container w-11/12 bg-gray-950 m-auto p-8 rounded-xl flex flex-col gap-5">
    <section class="flex  justify-between">
      <h1 class="text-3xl font-bold mb-4 mt-4">Detalle de Ventas</h1>
      <div class="w-auto h-auto">
        <a href="#" class="modal_close rounded-xl  px-3 py-2 text-gray-950 font-black bg-red-400 inline-block transition-colors duration-300 hover:bg-red-300">X</a>
      </div>
    </section>
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
            <td class="px-6 py-4 border-2 border-gray-700">{{$detail->product_id}} </td>
            <td class="px-6 py-4 border-2 border-gray-700">{{$detail->quantity}}</td>
            <td class="px-6 py-4 border-2 border-gray-700">{{$detail->price}}</td>
            <td class="px-6 py-4 border-2 border-gray-700">{{$detail->subtotal}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </form>
  </div>
</section>