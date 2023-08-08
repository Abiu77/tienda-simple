 <label class="flex gap-4 items-start justify-between">
   <span>Nombres:</span>
   <input name="name" class="bg-gray-700 rounded px-4 py-2 w-1/2" type="text" require value="{{old('name', $user->name)}}">
   @error('name')
   <p class="text-red-600">{{$message}}</p>
   @enderror
 </label>
 <label class="flex gap-4 items-start justify-between">
   <span> Apellidos:</span>
   <input name="lastname" class="bg-gray-700 rounded px-4 py-2 w-1/2" type="text" require value="{{old('lastname', $user->lastname)}}">
   @error('lastname')
   <p class=" text-red-600">{{$message}}</p>
   @enderror
 </label>
 <label class="flex gap-4 items-start justify-between">
   <span>Email:</span>
   <input name="email" class="bg-gray-700 rounded px-4 py-2 w-1/2" type="email" require value="{{old('email', $user->email)}}">
   @error('email')
   <p class=" text-red-600">{{$message}}</p>
   @enderror
 </label>