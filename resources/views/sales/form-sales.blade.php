<label class=" flex justify-between">
  Nombre:
  <select name="Usuario" id="Usuario" class="w-40 bg-gray-700 px-2 py-1 rounded">
    @foreach($users as $user)
    <option class="w-40" value="{{$sale->user_id}}">{{$user->id}} </option>
    @endforeach
  </select>
</label>
<label class=" flex justify-between">
  Producto:
  <select name="Productos" id="Productos" class="w-40 bg-gray-700 px-2 py-1 rounded">
    @foreach($products as $product)
    <option class="w-40" value="{{old('product_id',$sale->product_id)}}">{{$product->id}} </option>
    @endforeach
  </select>
</label>
<label class="flex justify-between">
  Total:
  <input name="total" class="bg-gray-700 py-1 w-40 px-2 rounded" type='floatval' require value="{{old('total',$sale->total)}}">
</label>