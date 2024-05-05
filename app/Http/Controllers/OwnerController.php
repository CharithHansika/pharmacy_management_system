<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Item;

class OwnerController extends Controller
{
    public function addCustomer(){
        return view('add_customer');
    }

    public function addItem(){
        return view('add_item');
    }

    public function submitaddCustomer(Request $request)

    {
    
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->mobile = $request->mobile;

        $customer->save();

        // Handle successful insertion (e.g., flash message)
        session()->flash('success', 'Customer created successfully!');

        // Redirect to a more suitable page (e.g., dashboard)
        return view('add_customer');
    }

    public function submitaddItem(Request $request)

    {
    
        $item = new Item();
        $item->name = $request->name;
        $item->address = $request->address;
        $item->mobile = $request->mobile;

        $item->save();

        // Handle successful insertion (e.g., flash message)
        session()->flash('success', 'item created successfully!');

        // Redirect to a more suitable page (e.g., dashboard)
        return view('add_item');
    }


}
