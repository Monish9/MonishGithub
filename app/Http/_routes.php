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
    echo 'welcome to my site';
});

Route::get('hello/{name}', function ($name) {
	echo 'hello there '.$name;
});

Route::post('test', function(){
	echo 'post';
});

Route::get('test', function(){
	echo '<form action="test" method="post">';
	echo '<input type="submit" name = "Submit">';
	echo '<input type="hidden" name="_token" value="'.csrf_token().'">';
	echo '<input type="hidden" name="_method" value="delete">';
	echo '</form>';
});

Route::put('test', function(){
	echo 'PUT';
});

Route::delete('test', function(){
	echo 'Delete';
});

Route::get('test123', 'Testcontroller@index');

Route::get('customer/{id}', 'CustomerController@show');
  // $customer = App\customer::find($id);
//   echo 'Hello my name is '.$customer->Name; 
//   
//   $orders = $customer->orders;
//   
//   foreach($orders as $order){
//        echo '<br>'.$order->name;
//   }


Route::get('get_customer', 'CustomerController@get_customer');
  // $customer = App\customer::where('name','=','Monish')->first();
//   echo $customer->Name; 


Route::get('orders', 'OrderController@index');
  // $orders = App\orders::all();
//   foreach($orders as $order){
//    // $customer = App\customer::find($order->customer_id);
//     echo $order->name. ' Ordered by '. $order->customer->Name.' <br>';
//   } 


Route::get('mypage', function(){
    $customers = App\customer::all();
    $data = Array(
        'customers' => $customers
    );
   return View('mypage', $data);
});