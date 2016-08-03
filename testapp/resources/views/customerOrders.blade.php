<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ $customer->firstname}}'s Orders</title>
  </head>
  <body>
    <h1>Customer: {{ $customer->firstname }}</h1>
  	<h4>Orders:</h4>




  	<ul>
  	@foreach ($customer->orders as $order)
  		<li>{{$order->item}}</li>
  	@endforeach
  	</ul>
  </body>
</html>
