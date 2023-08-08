<x-layout title='Usuarios'>
  <section class="lg:container lg:mx-auto flex flex-col gap-10  px-4 py-2 lg:px-20 lg:py-4">
    <div class="flex justify-between">
      <h1 class="text-gray-100 text-4xl font-bold"> Usuarios </h1>
      <aside class="bg-green-400 p-2 rounded-md">
        <a class=" " href="#">
          <x-plusIcon></x-pluIcon>
        </a>
      </aside>
    </div>
    <form class="w-full rounded-md " action="">
      <table class="w-full border-2 rounded-lg border-gray-700">
        <thead class="bg-gray-800">
          <tr class="">
            <th class="px-6 py-3 border-2 border-gray-700">ID</th>
            <th class="px-6 py-3 border-2 border-gray-700">Nombres</th>
            <th class="px-6 py-3 border-2 border-gray-700">Apellidos</th>
            <th class="px-6 py-3 border-2 border-gray-700">Email</th>
            <th class="px-6 py-3 border-2 border-gray-700">Elminar</th>
            <th class="px-6 py-3 border-2 border-gray-700">Editar</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td class="px-6 py-4 border-2 border-gray-700">{{ $user->id }}</td>
            <td class="px-6 py-4 border-2 border-gray-700">{{ $user->name }}</td>
            <td class="px-6 py-4 border-2 border-gray-700">{{ $user->lastname}}</td>
            <td class="px-6 py-4 border-2 border-gray-700">{{ $user->email}}</td>
            <td class="px-6 py-4 border-2 border-gray-700">
              <button class="bg-red-500 px-3 py-1 rounded">Eliminar</button>
            </td>
            <td class="px-6 py-4 border-2 border-gray-700">
              <button class="bg-blue-600 px-3 py-1 rounded"> Editar</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </form>
  </section>
</x-layout>