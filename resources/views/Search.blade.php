@extends('Master')

@section('content')

<div class="custom-product">       

  <div class="col-sm-4">
  
  <a href="#">Filter</a>
  
  </div>

  <div class="col-sm-4">
  
  <div class="trending-wrapper">
    
    <h4>Result For Products</h4>
    
    <div class="">
        @foreach($data as $item)
       <div class="search-item">
       <a href="/details/{{$item['id']}}">
  
      <img class="search-img" src="{{asset('asset\images')}}\{{$item['gallery']}}"style="height: 200px;"> 
      <div class="">
      <h2>{{$item['name']}}</h2>
      <h5>{{$item['description']}}</h5>
      </div> 
  
      </a>    
      </div>
       @endforeach

    </div>
  
  </div>

</div>



@endsection
