<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Customer as Customer;

class CustomerController extends Controller
{
  public function customerOrders($id) {

    //Customer model, find customer with ID of $id
    $customer = Customer::find($id);

    return view('customerOrders', array('customer' => $customer));

  }
}
