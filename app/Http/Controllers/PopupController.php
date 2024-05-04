<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProductApiController;

class PopupController extends Controller
{
    public function show()
    {
        return view('popup');
    }
    
}
