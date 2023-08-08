<x-layout title='crear Productos'>
  <div class="lg:container lg:mx-auto flex flex-col gap-10  px-4 py-2 lg:px-20 lg:py-4">
    <h2 class="mx-auto text-3xl font-bold">Crear nuevo producto</h2>
    <div class="w-96 mx-auto border-2 rounded-lg p-3 border-fuchsia-400/20">
      <form class="flex flex-col gap-8" action="{{route('products.store')}}" method="POST">
        @csrf
        @include('products.form-fields')
        <button class="bg-green-500 px-3 py-3 text-gray-950 font-bold rounded" type="submit">Guardar</button>
      </form>
    </div>
  </div>
</x-layout>