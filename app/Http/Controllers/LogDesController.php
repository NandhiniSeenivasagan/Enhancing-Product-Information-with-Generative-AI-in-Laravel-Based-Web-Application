<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Admin\Controllers\ApilogsController;
use \App\Models\apilogs;


class LogDesController extends Controller
{
    public function selectProductItem(Request $request, $productId)
    {
        $productItems = Apilogs::pluck('Request_body')->toArray();

        // Decode JSON data in each Request_body
        foreach ($productItems as $key => $productItem) {
            $productItems[$key] = json_decode($productItem, true);
        }

        // Filter the items based on the provided ProductID
        $filteredProductItems = array_filter($productItems, function ($item) use ($productId) {
            return isset($item['ProductID']) && $item['ProductID'] === $productId;
        });

        // Extract only the "GeneratedDescription" data from the filtered product items
        $generatedDescriptions = [];
        foreach ($filteredProductItems as $item) {
            if (isset($item['GeneratedDescription'])) {
                $generatedDescriptions = array_merge($generatedDescriptions, $item['GeneratedDescription']);
               // $generatedDescriptions[] = $item['GeneratedDescription'];
            }
        }

        return $generatedDescriptions;
    }

}
