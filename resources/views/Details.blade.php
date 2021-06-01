@extends('Master')
@section('content')

<div class="container">

    <div class="row">
    
    <div class="col-sm-6">

    <img src="{{asset('asset/images')}}/{{$product['gallery']}}" alt="" class="details-img">

    </div>
    
    <div class="col-sm-6">
    
    <a href="/">Go Back</a>
      <h2>Name : {{$product['name']}}</h2>
      <h3>Price : {{$product['price']}}</h3>
      <h3>Category : {{$product['category']}}</h3>
      <h3>Description : {{$product['description']}}</h3>
      <br><br>
      <button class="btn btn-success">Add To Cart</button>
      <br><br>
    <button class="btn btn-primary">Buy Now</button>
    
    </div>

    </div>

</div>

@endsection