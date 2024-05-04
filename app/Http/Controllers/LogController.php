<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Admin\Controllers\ApilogsController;
use \App\Models\apilogs;


class LogController extends Controller
{
   /* public function selectProductItem(Request $request, $productId)
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

        // Extract only the "GeneratedTitle" data from the filtered product items
        $generatedTitles = [];
        foreach ($filteredProductItems as $item) {
            if (isset($item['GeneratedTitle'])) {
                $generatedTitles[] = $item['GeneratedTitle'];
            }
        }

        return $generatedTitles;
    }*/
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

    // Extract all "GeneratedTitle" data from the filtered product items
    $generatedTitles = [];
    foreach ($filteredProductItems as $item) {
        if (isset($item['GeneratedTitle'])) {
            // Append generated titles to the array
            $generatedTitles = array_merge($generatedTitles, $item['GeneratedTitle']);
        }
    }

    return $generatedTitles;
}
    }

