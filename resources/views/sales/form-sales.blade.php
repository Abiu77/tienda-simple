 <label for="">
   Usuario
   <input name="user_id" class="bg-gray-700 rounded" type="text" require value="{{old('user_id', $sale->user_id)}}">

 </label>
 <label for="">
   Fecha de venta
   <input name="sale_date" class="bg-gray-700 rounded" type="date" autocomplete="" require value="{{old('sale_date', $sale->sale_date)}}">

 </label>

 <label for="">
   Total
   <input name="total" class="bg-gray-700 rounded" type='number' require value="{{old('total',$sale->total)}}">
 </label>