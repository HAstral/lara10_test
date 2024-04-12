<?php

namespace App\Http\Controllers;

// use App\Models\Customer;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;



class CustomerController extends Controller
{
    //customer home page
    public function home(){
        return view("customer.insert");

    }
    //create customer data
    //MVC => Model View Controller
    public function insert(Request $request){
        // dd($request->all());
        //first way
        $data=[
            'name'=> $request->customerName,
            'address'=> $request->customerAddress,
            'phone'=> $request->customerPhone,
            'created_at'=>Carbon::now() //this will give you current time,even if you don't insert it will do it itself,you will also need to declare in customer.php
        ];
        Customer::create($data);
        return 'Create success...';}
        //second way
    //         $record=new Customer();//customer mean customer.php
    //         $record->name=$request->customerName;
    //         $record->address=$request->customerAddress;
    //         $record->phone=$request->customerPhone;
    //         $record->created_at=Carbon::now();
    //         $record->updated_at=Carbon::now();
    //         $record->save();

    //         return "created success... ";
    // }
    //get customer read
    public function read(){
    //     $data=new Customer();
    //    dd( $data->find(1)->toArray() );//can use first() or findOrFail()
        dd(Customer::find(1)->toArray()); //second way
        }
}
