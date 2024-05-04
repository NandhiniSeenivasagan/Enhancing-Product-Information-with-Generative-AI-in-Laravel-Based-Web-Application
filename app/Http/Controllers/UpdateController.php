<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productitem;
use GuzzleHttp\Client;
use App\Admin\Controllers\ProductitemController;

class UpdateController extends Controller
{
    public function updateProduct(Request $request)
    {
        $id = $request->input('id'); // Assuming you are passing the 'id' of the record to update

        $productItem = Productitem::findOrFail($id);
        
        // Update the attributes
        $productItem->Product_Name = $request->input('aiTitle');
        $productItem->Product_Description = $request->input('aiDescription');

        // Save the changes
        $productItem->save();

        return response()->json(['success' => true]);
    }
}
