<?php

namespace App\Http\Controllers;


use App\phn;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PhnController extends Controller
{
    public function insertPhn()
    {
        $phn=new phn();
        $customer=new Customer();
        $customer->name="Mariat";
        $customer->email="Mariat@.com";
        $customer->address="UTTARA";
        $customer->image="88.png";
        $customer->save();       
        $phn->phone="01233223604";
        $phn->customer_id=$customer->id;
        $phn->save();
        return "Added";
    }

    public function getdata($id){
        return Customer::find($id)->phone;
    }
    
}
