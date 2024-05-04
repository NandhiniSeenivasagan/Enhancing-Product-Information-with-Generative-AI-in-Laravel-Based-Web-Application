<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Productitem;
use Illuminate\Http\JsonResponse;
use GuzzleHttp\Client;

class ProductApiController extends Controller
{
    public function getProduct(Request $request, $id)
    {
        $product = Productitem::findOrFail($id);

        return response()->json($product);
    }
   public function callOpenAIApi()
    {
        $openaiApiKey = ''; // Replace this with your OpenAI API key

        $client = new Client();
        $response = $client->request('POST', 'https://api.openai.com/v1/chat/completions', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $openaiApiKey,
            ],
            'json' => [
                'model' => 'gpt-3.5-turbo',
                'messages' => [['role' => 'user', 'content' => 'Generate 4 possible product titles for an oppo:']],
                'temperature' => 0.7,
            ],
        ]);

        $openaiResponse = json_decode($response->getBody(), true);

        return response()->json($openaiResponse);
    }

}