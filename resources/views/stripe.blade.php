<!DOCTYPE html>
<html>
  <head>
    <title>Buy Product</title>
    <script src="https://js.stripe.com/v3/"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    
  </head>
  <body>
    <dic class='container'>
    	<h4 class="bg-warning text-center col-8 m-auto p-3 mb-3">Laravel Striped GateWay Payment Method</h4>
    <div class="row">
    
      <div class="card text-center col-3">
  <form action="{{ route('index',['Product'=>'Bags','price'=>30]) }}" method="POST">
        @csrf

      	<img class="card-img-top" src="{{ asset('images/bag.jpg') }}" alt="Card image cap">
      	<div class="card-body">
      		<h4 class="card-title">Bags</h4>
      		          <h5>$30.00</h5>

      		<button type="submit" class="btn btn-primary" id="checkout-button">Checkout</button>


      </form>


      	</div>


   
      	</div>
      		    <div class="card text-center col-3 ml-3">
  <form action="{{ route('index',['Product'=>'dell','price'=>3000.00]) }}" method="POST">
        @csrf
      		  	<img class="card-img-top" src="{{ asset('images/dell.jpg') }}" alt="Card image cap">
      	<div class="card-body">
      		<h4 class="card-title">Dell Laptop</h4>
      		          <h5>$30.00</h5>

      		<button type="submit" class="btn btn-primary" id="checkout-button">Checkout</button>
      		</div>
      	</div>
  </body>
</html>