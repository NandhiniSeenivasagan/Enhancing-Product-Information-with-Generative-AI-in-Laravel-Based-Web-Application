<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Admin\Controllers\ProductitemController;

class Productitem extends Model
{
    protected $table = 'productitem';
    protected $fillable = [
        'product_name',
        'product_description',
        'created_at', // Add the column names here
        'updated_at',
    ];
    // Specify the fields to be treated as dates
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
