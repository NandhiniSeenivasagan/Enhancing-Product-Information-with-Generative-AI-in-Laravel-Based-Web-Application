<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Automattic\WooCommerce\Client;

class WooController extends Controller
{
    protected $woocommerce;

    public function __construct()
    {
        // Initialize WooCommerce client
        $this->woocommerce = new Client(
            'http://localhost/mywordpress/',
            'ck_fe0c7cc3b3f1446dc4f8f1ecc8f946e0a36f36d1',
            'cs_21a89a76a771101c0f96be661fe57b73fec08fb9',
            [
                'version' => 'wc/v3',
            ]
        );
    }

    public function createProduct(Request $request)
    {
        // Validate request data as needed

        // Prepare product data
        $data = [
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'regular_price' => $request->input('regular_price'),
            'description' => $request->input('description'),
            'short_description' => $request->input('short_description'),
            'categories' => $request->input('categories'),
            'images' => $request->input('images'),
        ];

        try {
            // Create product in WooCommerce
            $response = $this->woocommerce->post('products', $data);
            
            // Handle response as needed
            return response()->json($response);
        } catch (\Exception $e) {
            // Handle exceptions
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // Implement other methods for updating, deleting, or retrieving products from WooCommerce as needed
}
