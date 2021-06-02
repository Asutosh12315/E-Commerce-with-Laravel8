@extends('Master')

@section('content')

<div class="custom-product">       

  <div class="col-sm-6">
  
  <table class="table table-striped">
    
    <tbody>
      <tr>
        <td>Price</td>
        <td>INR : {{$total}}</td>
   
      </tr>
      <tr>
        <td>Tax</td>
        <td>INR : 0 </td>
        
      </tr>
      <tr>
        <td>Delivery Charges</td>
        <td>INR : 89</td>
        
      </tr>
      <tr>
        <td>Total Ammount</td>
        <td>INR : {{$total+89}}</td>
        
      </tr>
    </tbody>
  </table>

  <form action="/orderplace" method="POST">
  @csrf
  <div class="form-group">
    <textarea  class="form-control"rows="8" cols="10" placeholder="Enter Your Address" name="address"></textarea>
  </div>
  <div class="form-group">
    <label for="">Payment Method</label>
    <p><input type="radio"  value="cash" name="payment"><span>Online Payment</span></p>
    <p><input type="radio"  value="cash" name="payment"><span>EMI Payment</span></p>
    <p><input type="radio" value="cash" name="payment"><span>Cash On Delivery</span></p>

    
    
  </div>
  
  <button type="submit" class="btn btn-primary">Order Now</button>
</form>

  </div>

</div>



@endsection
