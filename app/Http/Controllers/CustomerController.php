<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function add_customer(Request $request)
    {
        $c=new Customer;
        $c->name=$request->name;
        $c->email=$request->email;
        $c->password=$request->password;
        $c->save();
        return redirect()->back();
    }
}
