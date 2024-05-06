<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    // public function showCustomer(){
    //     return view('customer-list');
    // }

    // public function showCustomerDetails(){
    //     $customers = Customer::all(); // Fetch all items from the database
    
    //     return view('manager_dashboard', compact('customers'));
    
    
    // }



    public function showCustomerDetails()
    {
        $customers = Customer::all(); // Assuming you have a Customer model
        return view('manager_dashboard', compact('customers'));
    }
    



    public function editCustomerDetails($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer.edit', compact('customer'));
    }

    public function updateCustomerDetails(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'mobile' => 'required|string|max:20',
            // Add more validation rules for other fields if needed
        ]);

        $customer->update($validatedData);

        return redirect()->route('customer.details', ['id' => $id])->with('success', 'Customer details updated successfully');
    }

    


    public function deleteCustomer($id)
    {
        
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect()->route('customer.details')->with('success', 'Customer deleted successfully');
    }

}
