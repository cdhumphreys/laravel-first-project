<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('customers/{id}', function ($id) {
	$customer = App\Customer::find($id);

	echo 'Customer: ' . $customer->firstname . ' ' . $customer->lastname . ' <br/>';
	echo 'Orders:' . '<br/>';

	$orders = $customer->orders;

	echo '<ul>';
	foreach($orders as $order) {
		echo '<li>' . $order->item . '</li>';
	}
	echo '</ul>';

	
});

Route::get('customer_name', function() {
	$customer = App\Customer::where('firstname', '=', 'Tony')->first();
	echo $customer->firstname;
});

Route::get('orders', function() {
	$orders = App\Order::all();


	foreach($orders as $order) {
		echo $order->item . ' ordered by ' . $order->customer->firstname . '<br />';
	
	}
});

Route::get('testpage', function() {
	$data = array(
			'a' => 'Chicken',
			'b' => 'Beef',
			'c' => 'Tofu'
		);
	return view('testview', $data);
});