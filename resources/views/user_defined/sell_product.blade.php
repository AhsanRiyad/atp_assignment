@extends('samples')
@section('content')








<div class="row div_margin_left">

<!-- section 1 starts -->

<div class="col-sm-3 ">
<div class="card">
<div class="card-header">
<strong>Point Of Sell</strong>
<small>Sell's info</small>
</div>
<div class="card-body">
<div class="form-group">
<label for="company">Customer Id</label>
<input class="form-control" id="id" type="text" placeholder="Enter your company name" name="id">
</div>
<div class="form-group">
<label for="vat">Total</label>
<input class="form-control" id="vat" type="text" placeholder="PL1234567890" name="price">
</div>

<div class="form-group">
<label for="ccmonth">Sales Point</label>
<select class="form-control" id="ccmonth" name="category">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
</select>
</div>


<div class="row">
<div class="form-group col-sm-8">
<label for="city">Amount Paid</label>
<input class="form-control" id="city" type="text" placeholder="Enter your city">
</div>
<div class="form-group col-sm-4">
<label for="postal-code">Amount Left</label>
<input disabled="true" class="form-control" id="postal-code" type="text" placeholder="Postal Code">
</div>
</div>


<button class="btn btn-sm btn-primary" type="submit">
<i class="fa fa-dot-circle-o"></i> Submit</button>


</div>
</div>
</div>



<!-- section 2  starts-->

	<div class="col-sm-2" >
		

<div class="card" >
<div class="card-header">
<strong>Select Product</strong>
<small>Product List</small>
</div>







	


<div class="form-group col-sm-12 div_add_product">
<label for="ccyear">Product</label>
<select class="form-control" id="productDetails" name="name">

<p hidden="true" id="productDetailsUrl">{{ route('ProductsController.addToCart') }}</p>


@foreach($products as $product)


<option> {{ $product->id}} - {{ $product->product_name}}



</option>





@endforeach


</select>
</div>
<div class="col-sm-12">
<div class="form-group">
<label for="cvv">Quantity</label>
<input class="form-control" id="cvv" type="text" placeholder="123">
</div>
</div>

<div class="col-sm-2">
	<button class="btn btn-sm btn-primary"  id="button_add_product">
<i class="fa fa-dot-circle-o"></i> Add Product
</button>

</div>
</div>

</div>

<!-- section 3 starts -->

<div class="col-sm-5 ">
<div class="card">
<div class="card-header">
<strong>Point Of Sell</strong>
<small>Sell's info</small>
</div>
<div class="card-body">





<div class="row">


<div class="form-group col-sm-2">
<label for="city">Product Id</label>
<input disabled="true" class="form-control" id="city" type="text" placeholder="Enter your city">
</div>


<div class="form-group col-sm-4">
<label for="postal-code">Name</label>
<input disabled="true" class="form-control" id="postal-code" type="text" placeholder="Postal Code">
</div>



<div class="form-group col-sm-2">

<label for="ccmonth">Quantity</label>
<select class="form-control" id="ccmonth" name="category">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
</select>

</div>

<div class="form-group col-sm-2">
<label  for="ccmonth">Update</label>
<button class="btn btn-sm btn-primary" type="submit">
<i class="fa fa-dot-circle-o"></i> Update</button>

</div>

<div class="form-group col-sm-2">
<label for="ccmonth">Delete</label>
<button class="btn btn-sm btn-primary" type="submit">
<i class="fa fa-dot-circle-o"></i> Delete</button>

</div>

</div>





</div>
</div>
</div>



</div>


@endsection
<!-- /.conainer-fluid -->

@section('myscript')
  <script src="{{ asset('js/views/main.js') }}"></script>

<script src="{{ asset('js/my_js.js') }}"></script>

@endsection

