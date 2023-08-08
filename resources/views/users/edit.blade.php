<x-layout title='Editar usruarios'>
  <div class="lg:container lg:mx-auto flex flex-col gap-10  px-4 py-2 lg:px-20 lg:py-4">
    <h1 class="text-2xl font-bold mt-4">Editar Usuario</h1>
    <form class="flex flex-col gap-8 w-1/2 border-2 p-6 border-fuchsia-300/50 rounded-md" action="{{route('users.update', $user)}}" method="POST" value>
      @csrf
      @method('PATCH')
      @include('users.form-users')
      <button class="bg-green-400 px-3 rounded-lg text-lg font-bold text-gray-950 py-3" type="submit">Guardar</button>
    </form>
  </div>
</x-layout>