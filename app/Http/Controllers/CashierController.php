<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;


class CashierController extends Controller
{
    public function showItemDetails(){
        $items = Item::all(); 
    
        return view('cashier_dashboard', compact('items'));
    
    
    }

    public function editItemDetails($id)
    {
        $item = Item::findOrFail($id);
        return view('item.edit', compact('item'));
    }

    public function updateItemDetails(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|string|max:255',
            'price' => 'required|string|max:20',
            // Add more validation rules for other fields if needed
        ]);

        $item->update($validatedData);

        return redirect()->route('item.details', ['id' => $id])->with('success', 'Item details updated successfully');
    }

    


    public function deleteItem($id)
    {
        
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect()->route('item.details')->with('success', 'Item deleted successfully');
    }




}
