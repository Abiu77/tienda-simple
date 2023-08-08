<x-layout title='Productos'>
  @if (session('status'))
  <div class="bg-green-500 p-3 rounded-md text-white text-center">
    {{ session('status') }}
  </div>
  @endif
  <section class="lg:container lg:mx-auto flex flex-col gap-10  px-4 py-2 lg:px-20 lg:py-4">
    <div class="flex justify-between">
      <h1 class="text-gray-100 text-4xl font-bold"> Productos </h1>
      <aside class="bg-green-400 p-2 rounded-md">
        <a class=" " href="{{ route('products.create')}}">
          <x-plusIcon></x-pluIcon>
        </a>
      </aside>
    </div>
    <form class="w-full rounded-md " action="">
      <table class="w-full border-2 rounded-lg border-gray-700">
        <thead class="bg-gray-800">
          <tr class="">
            <th class="px-6 py-3 border-2 border-gray-700">ID</th>
            <th class="px-6 py-3 border-2 border-gray-700">code</th>
            <th class="px-6 py-3 border-2 border-gray-700">name</th>
            <th class="px-6 py-3 border-2 border-gray-700">description</th>
            <th class="px-6 py-3 border-2 border-gray-700">Precio</th>
            <th class="px-6 py-3 border-2 border-gray-700">Eliminar</th>
            <th class="px-6 py-3 border-2 border-gray-700">Editar</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
          <tr>
            <td class="px-6 py-4 border-2 border-gray-700">{{ $product->id }}</td>
            <td class="px-6 py-4 border-2 border-gray-700">{{ $product->code }}</td>
            <td class="px-6 py-4 border-2 border-gray-700">{{ $product->name }}</td>
            <td class="px-6 py-4 border-2 border-gray-700">{{ $product->description }}</td>
            <td class="px-6 py-4 border-2 border-gray-700">{{ $product->sell_price }}</td>
            <td class="px-6 py-4 border-2 border-gray-700">
              <a class="bg-red-500 px-3 py-1 rounded" href="{{route('products.delete', $product)}}">Eliminar</a>
            </td>
            <td class="px-6 py-4 border-2 border-gray-700">
              <a class="bg-blue-600 px-3 py-1 rounded" href="{{route('products.edit', $product)}}"> Editar</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </form>
  </section>
</x-layout>