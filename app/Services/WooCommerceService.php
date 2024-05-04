<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WooCommerceService
{
    protected $baseUrl;
    protected $consumerKey;
    protected $consumerSecret;

    public function __construct()
    {
        $this->baseUrl = env('WOOCOMMERCE_BASE_URL');
        $this->consumerKey = env('WOOCOMMERCE_CONSUMER_KEY');
        $this->consumerSecret = env('WOOCOMMERCE_CONSUMER_SECRET');
    }

    public function createProduct($data)
    {
        $response = Http::withBasicAuth($this->consumerKey, $this->consumerSecret)
            ->post("{$this->baseUrl}/wp-json/wc/v3/products", $data);

        return $response;
    }
}
