<x-layout title='Productos edit'>
  <h1>Editar Producto</h1>
  <form class="flex flex-col gap-8" action="{{route('products.update', $product)}}" method="POST" value>
    @csrf
    @method('PATCH')
    @include('products.form-fields')
    <button class="bg-green-500 px-3 py-1 rounded" type="submit">Guardar</button>

  </form>
</x-layout>