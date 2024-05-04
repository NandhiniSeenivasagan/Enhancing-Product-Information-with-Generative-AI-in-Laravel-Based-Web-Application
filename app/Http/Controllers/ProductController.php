<?php

namespace App\Http\Controllers;
use App\Models\Productitem;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Admin\Controllers\ProductitemController;
use App\Http\Controllers\ProductController;

class ProductController extends Controller
{
    
    public function selectProductItem($id)
    {
        $Productitem = Productitem::findOrFail($id);
        //$titleResponse = $this->callOpenAIApi('title', $Productitem->Product_Name);
        //$descriptionResponse = $this->callOpenAIApi('description', $Productitem->Product_Name);
        return view('selectProductItem', ['Productitem' => $Productitem]);
        //return view('selectProductItem', ['Productitem' => $Productitem, 'titleResponse' => $titleResponse,
        //'descriptionResponse' => $descriptionResponse]);
    }
   
}