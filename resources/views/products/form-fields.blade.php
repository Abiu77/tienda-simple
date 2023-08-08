 <label class="flex gap-4 items-start justify-between">
   <span>Codigo:</span>
   <input name="code" class="bg-gray-700 rounded px-4 py-2 w-1/2" type="text" require value="{{old('code', $product->code)}}">
   @error('code')
   <p class="text-red-600">{{$message}}</p>
   @enderror
 </label>
 <label class="flex gap-4 items-start justify-between">
   <span> Nombre:</span>
   <input name="name" class="bg-gray-700 rounded px-4 py-2 w-1/2" type="text" require value="{{old('name', $product->name)}}">
   @error('name')
   <p class=" text-red-600">{{$message}}</p>
   @enderror
 </label>
 <label class="flex gap-4 items-start justify-between">
   <span>Description:</span>
   <textarea name="description" class="bg-gray-700 rounded px-4 py-2 w-1/2" require value="{{old('description', $product->description)}}" rows="5">{{old('description', $product->description)}}</textarea>
   @error('description')
   <p class=" text-red-600">{{$message}}</p>
   @enderror
 </label>
 <label class="flex gap-4 items-start justify-between">
   <span> Precio de venta:</span>
   <input name="sell_price" class="bg-gray-700 rounded px-4 py-2 w-1/2" type='number' require value="{{old('sell_price',$product->sell_price)}}">
   @error('sell_price')
   <p class=" text-red-600">{{$message}}</p>
   @enderror
 </label>