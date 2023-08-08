<x-layout title='crear ventas'>
  <h2 class="font-bold text-2xl mb-5">Crear nueva venta</h2>
  <form class="flex flex-col gap-8" action="{{route('sales.store')}}" method="POST">
    @csrf
    @include('sales.form-sales')
    <button class="bg-green-500 px-3 py-1 rounded" type="submit">Guardar</button>
  </form>
</x-layout>