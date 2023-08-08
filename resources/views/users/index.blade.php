<x-layout title='Usuarios'>
  <section class="lg:container lg:mx-auto h-screen flex flex-col gap-10  px-4 py-2 lg:px-20 lg:py-4">
    <div class="flex justify-between mt-4 mb-4">
      <h1 class="text-gray-100 text-4xl font-bold"> Usuarios </h1>
      <aside class="bg-green-400 p-2 rounded-md">
        <a class=" " href="{{route('users.create')}}">
          <x-plusIcon></x-pluIcon>
        </a>
      </aside>
    </div>
    <table class="w-full border-2 rounded-lg border-gray-700">
      <thead class="bg-gray-800">
        <tr class="">
          <th class="text-center py-1 border-2 border-gray-700">ID</th>
          <th class="text-center py-1 border-2 border-gray-700">Nombres</th>
          <th class="text-center py-1 border-2 border-gray-700">Apellidos</th>
          <th class="text-center py-1 border-2 border-gray-700">Email</th>
          <th class="text-center py-1 border-2 border-gray-700">Elminar</th>
          <th class="text-center py-1 border-2 border-gray-700">Editar</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <td class="py-1 text-center border-2 border-gray-700">{{ $user->id }}</td>
          <td class="py-1 text-center border-2 border-gray-700">{{ $user->name }}</td>
          <td class="py-1 text-center border-2 border-gray-700">{{ $user->lastname}}</td>
          <td class="py-1 text-center border-2 border-gray-700">{{ $user->email}}</td>
          <td class="py-1 text-center border-2 border-gray-700">
            <form action="{{route('users.destroy', $user)}}" method="POST">
              @csrf
              @method('DELETE')
              <button class="bg-red-500 px-3 py-1 rounded">Eliminar</button>
            </form>
          </td>
          <td class="py-1 text-center border-2 border-gray-700">
            <a class="bg-blue-600 px-3 py-1 rounded" href="{{route('users.edit', $user)}}"> Editar</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </section>
</x-layout>