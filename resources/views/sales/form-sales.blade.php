<label class=" flex justify-between" for="user_id">
  Nombre:
  <select name="user_id" id="user_id" class="w-52 bg-gray-700 px-2 py-1 rounded">
    <option value="">Escoga su nombre</option>
    @foreach($users as $user)
    <option class="w-52" value="{{$user->id}}">{{$user->name}}</option>
    @endforeach
  </select>
</label>
<label class=" flex justify-between" for="producto_id">
  Producto:
  <select name="producto_id" id="producto_id" class="w-52 bg-gray-700 px-2 py-1 rounded">
    <option value="">Escoga el producto</option>
    @foreach($products as $product)
    <option class="w-52" value="{{$product->id}}">
      {{$product->name}}
    </option>
    @endforeach
  </select>
</label>
<label class="flex justify-between">
  Total:
  <input name="total" class="bg-gray-700 py-1 w-52 px-2 rounded" type='floatval' require value="{{old('total',$sale->total)}}">
</label>