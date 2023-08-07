<x-layout title='Ventas'>


  <section class="lg:container lg:mx-auto flex flex-col gap-10  px-4 py-2 lg:px-20 lg:py-4">
    <div class="flex justify-between">
      <h1 class="text-gray-100 text-4xl font-bold"> Ventas </h1>
      <x-plus></x-plus>
    </div>
    <form class="w-full rounded-md " action="">
      <table class="w-full border-2 rounded-lg border-gray-700">
        <thead class="bg-gray-800">
          <tr class="">
            <th class="px-6 py-3 border-2 border-gray-700">ID</th>
            <th class="px-6 py-3 border-2 border-gray-700">Ver detalle</th>
            <th class="px-6 py-3 border-2 border-gray-700">Fecha de venta</th>
            <th class="px-6 py-3 border-2 border-gray-700">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="px-6 py-4 border-2 border-gray-700">1</td>
            <td class="px-6 py-4 border-2 border-gray-700">
              <button class="bg-cyan-500 px-3 py-1 rounded">Ver detalle</button>
            </td>
            <td class="px-6 py-4 border-2 border-gray-700">07/08/2023</td>
            <td class="px-6 py-4 border-2 border-gray-700">S/. 670</td>

          </tr>

        </tbody>
      </table>
    </form>
  </section>
</x-layout>