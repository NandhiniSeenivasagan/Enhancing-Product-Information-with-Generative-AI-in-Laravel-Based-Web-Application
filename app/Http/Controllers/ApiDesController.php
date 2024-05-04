<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productitem;

use GuzzleHttp\Client;
use App\Admin\Controllers\ProductitemController;
use App\Http\Controllers\ProductController;

class ApiDesController extends Controller
{
    public function selectProductItem(Request $request,$id)
    {
        $additional_infod = $request->input('additional_infod');
        if (!empty($additional_infod)) {
            // Additional information is present
            // You can log it or perform any other action you need here
            // For example, you can log it to your Laravel log file
            \Log::info('Additional information received: ' . $additional_infod);
        } else {
            // Additional information is not present
            // You can log this as well or handle it as per your requirements
            \Log::info('No additional information received');
        }
        $Productitem = Productitem::findOrFail($id);
        $descriptionResponse = $this->callOpenAIApi( $Productitem->Product_Name, $additional_infod);
        \Log::info('Description response: ' . json_encode($descriptionResponse));
        return response()->json([
            'Productitem' => $Productitem,
            'descriptionResponse' => $descriptionResponse,
        ]);
    }
   public function callOpenAIApi($productName, $additional_infod)
    {
        $openaiApiKey = env('OPENAI_API_KEY'); // Replace this with your OpenAI API key

        $client = new Client();
        $response = $client->request('POST', 'https://api.openai.com/v1/chat/completions', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $openaiApiKey,
            ],
            'json' => [
                'model' => 'gpt-3.5-turbo',
                'messages' => [['role' => 'user', 'content' => 'Generate a possible product description within 20 words for a ' . $productName  . ($additional_infod ? ' with additional info: ' . $additional_infod : '')]],
                'temperature' => 0.7,
            ],
        ]);

        $openaiResponse = json_decode($response->getBody(), true);
        $results = [];
        foreach ($openaiResponse['choices'] as $choice) {
            $results[] = $choice['message']['content'];
        }

        return $results;
    }
}

