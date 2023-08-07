 <label for="">
   Codigo
   <input name="code" class="bg-gray-700 rounded" type="text" require value="{{old('code', $product->code)}}">
   @error('code')
   <p class="text-red-600">{{$message}}</p>
   @enderror
 </label>
 <label for="">
   Nombre
   <input name="name" class="bg-gray-700 rounded" type="text" require value="{{old('name', $product->name)}}">
   @error('name')
   <p class=" text-red-600">{{$message}}</p>
   @enderror
 </label>
 <label for="">
   Description
   <textarea name="description" class="bg-gray-700 rounded" name="" id="" cols="30" rows="10" require value="{{old('description', $product->description)}}">{{old('description', $product->description)}}</textarea>
   @error('description')
   <p class=" text-red-600">{{$message}}</p>
   @enderror
 </label>
 <label for="">
   Precio de venta
   <input name="sell_price" class="bg-gray-700 rounded" type='number' require value="{{old('sell_price',$product->sell_price)}}">
   @error('sell_price')
   <p class=" text-red-600">{{$message}}</p>
   @enderror
 </label>