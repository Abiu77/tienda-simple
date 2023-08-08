<x-layout title='crear usuarios'>
  <div class="lg:container lg:mx-auto flex flex-col gap-10  px-4 py-2 lg:px-20 lg:py-4 h-screen ">
    <h2 class="text-3xl font-bold mx-auto ">Crear nuevo usuario</h2>
    <section class="border-2 p-3 border-fuchsia-500/20 rounded-lg w-96 mx-auto">
      <form class="flex flex-col gap-8" action="{{route('users.store')}}" method="POST">
        @csrf
        @include('users.form-users')
        <button class="bg-green-500 px-3 py-3 rounded" type="submit">Guardar</button>
      </form>
    </section>
  </div>
</x-layout>