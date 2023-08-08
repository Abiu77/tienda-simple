<x-layout title='crear usuarios'>
  <h2>Crear nuevo Usuario</h2>
  @dump($user->toArray())
  <form class="flex flex-col gap-8" action="{{route('users.store')}}" method="POST">
    @csrf
    @include('users.form-users')
    <button class="bg-green-500 px-3 py-1 rounded" type="submit">Guardar</button>
  </form>
</x-layout>