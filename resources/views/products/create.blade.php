<x-layout title='crear Productos'>
  <h2>Crear nuevo producto</h2>
  <form class="flex flex-col gap-8" action="{{route('products.store')}}" method="POST">
    @csrf
    @include('products.form-fields')
    <button class="bg-green-500 px-3 py-1 rounded" type="submit">Guardar</button>
  </form>
</x-layout>