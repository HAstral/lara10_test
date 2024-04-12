<?php


use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {  //from view welcome.blade.php
    return view('home',['name'=> 'CodeLab','year'=> '<h4>almost five</h4>']);
});
// Route::get('/about', function () {
//     $n1=10;
//     $n2= 20;
//     $res=$n1+$n2;
//     return view('aboutPage',['message'=>"this is from your mom,not your mother"],["res"=>$res]);
// });
//the same process as above without function .This can not use functions as sum ,tho.
Route::view('about', 'aboutPage',["num1" => 11,"num2" => 13,"fruits"=>["apple","banana","marian"],"name"=>"surian"]);
Route::view("customer/help/service","service",["message"=> ""])->name("serve");
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/customer/list', function () {
    return view('customer.list');
});
Route::get('/vipMaleCustomer', function () {
    return view('customer.vipCustomer.male.list');
});
Route::get('/vipFemaleCustomer', function () {
    return view('customer.vipCustomer.female.list');
});
Route::get('result/{num1}/{num2}', function ($num1,$num2) {
    $myRes=$num1+$num2;
    return view('result',['result'=>$myRes]);
})->name('myCalculate');
Route::get('paraPass/{name?}', function ($myName="Nigga?") {
    return $myName;
})->name("nahe");
// Route::get('/', function () {    //'/' means that if nothing had to be done , the function will be served.
//     return "welcome from laravel 10";
// });

// Route::get('/home', function () {  //if you write "public/home" then the function will work
//     return 'home sweet home';
// });
// Route::get('/about', function () {
//     return "Hmm!!What're you thinking about?";
// });
// Route::get('/user/contact', function () {
//     return "user nonsense page.BOOO!!!So Boringggg:(";
// });

// Route::get('/customer/{name}/{age}', function ($name,$age) {
//     return "customer name (" . $name . ") is gay and he/she is " . $age . ". Bruh! Who cares?";
// });
//
// function sum($num1){
//     return $num1;
// }
// sum(1);
Route::get('sum/{num1}/{num2}',function($num1,$num2){
    return $num1 + $num2;
});
Route::get('add/{num1}/{num2}',fn($num1,$num2) => $num1 + $num2);  //same as above
//pure php
Route::get('getData',function(){
    $data=file_get_contents('https://fakestoreapi.com/products');
    $jsonData=json_decode($data);
    $result=array_filter($jsonData,fn($v) => $v ->price<50); //showing the items which are less than 50$
    dd($result);
    // return $jsonData;
    // dd($jsonData); //same as var_dump in php
    // dd($jsonData[0]->price);
});
//laravel formatt
Route::get('laraGdata',function(){
    $data=Http::get('https://fakestoreapi.com/products');
    $data=$data->json(); //can use object instead of json
    dd($data[2]['price']); //if object ,u can use ->price
});
Route::get('laraGetdata',function(){
    $data1=Http::get('https://fakestoreapi.com/products')->object();
    $data1=collect($data1)->where('price','<',10)->toArray(); //same as above
    // dd($data[6]->title);

    foreach($data1 as $k){
        echo $k->title."<br>";
    }
});
Route::view("customer/Register",'customerRegist');
//Post Method
// Route::post('postMe/{name}/{age}',function($name,$age){
//     return "hello you may be ". $name . $age . 'years old.';
//     // return "posty melon";
// })->name("customerPT");
// Route::post('postMe/{id}',function(Request $request,$id){
// //    dd($request->all());
//     $userData=[
//         'name'=>$request->userName,
//         'age'=>$request->userAge,
//         'address'=>$request->userAddress,
//         'gender'=>$request->userGender
//     ];
//     dd($request->all(),$userData,$id);
// })->name('customerPT');
// Route::post('postMe',function(Request $request){
//     //    dd($request->all());
//         // $userData=[
//         //     'name'=>$request->userName,
//         //     'age'=>$request->userAge,
//         //     'address'=>$request->userAddress,
//         //     'gender'=>$request->userGender
//         // ];
//         // dd($request->all(),$userData);
//     })->name('customerPT');
//Route::get/post('URI',[controllerName::class,'className'])
// Route::post('postMe',[AdminController::class,'adminPostMe'])->name('customerPT');

// //Customer controller
// //  Route::get('helloTest',function(){
// //     return "Hello world";
// //  });
// Route::get('helloTest',[CustomerController::class,'outputHello']);

// Route::get('compact/list',[CustomerController::class,'compactList']);

//customer
Route::get('customer/home',[CustomerController::class,'home'])->name('customer#home');
Route::post('customer/insert',[CustomerController::class,'insert'])->name('customer#insert');
Route::get('customer/read',[CustomerController::class,'read'])->name('customer#read');
