<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Productitem;

use GuzzleHttp\Client;
use App\Admin\Controllers\ProductitemController;
use App\Http\Controllers\ProductController;

class ApiController extends Controller
{
    public function selectProductItem(Request $request,$id)
    {
        
        $additional_info = $request->input('additional_info');
        if (!empty($additional_info)) {
            // Additional information is present
            // You can log it or perform any other action you need here
            // For example, you can log it to your Laravel log file
            \Log::info('Additional information received: ' . $additional_info);
        } else {
            // Additional information is not present
            // You can log this as well or handle it as per your requirements
            \Log::info('No additional information received');
        }
        $Productitem = Productitem::findOrFail($id);
        \Log::info('Product ID: ' . json_encode($Productitem));
        $titleResponse = $this->callOpenAIApi( $Productitem->Product_Name, $additional_info);
        \Log::info('Title response: ' . json_encode($titleResponse));
        return response()->json([
            'Productitem' => $Productitem,
            'titleResponse' => $titleResponse,
        ]);
    }
   public function callOpenAIApi($productName, $additional_info)
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
                'messages' => [['role' => 'user', 'content' => 'Generate 4 possible product titles for a ' . $productName  . ($additional_info ? ' with additional info: ' . $additional_info : '')]],
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
    public function showLogs()
{
    // Read the log file and retrieve log entries
    $logEntries = file(storage_path('logs/laravel.log'));

    return view('selectProductItem', ['logEntries' => $logEntries]);
}
}