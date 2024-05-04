<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogAPICalls
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    /*public function handle($request, Closure $next)
    {
        // Handle the request and get the response
        $response = $next($request);
        $titles = [];
        if ($request->has('titleResponse')) {
            $titles = $request->input('titleResponse');
        }
        // Log the request and response to the database
        DB::table('api_logs')->insert([
            //'request_url' => $request->Url(),
            'request_method' => $request->method(),
            //'request_headers' => json_encode($request->header()),
            'request_body' => json_encode($request->all()),
            'response_status_code' => $response->status(),
            //'response_headers' => json_encode($response->headers->all()),
            //'response_body' => $response->getContent(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
       // Log the generated titles along with the API log
       foreach ($titles as $title) {
        DB::table('generated_titles')->insert([
            'api_log_id' => $apiLogId,
            'title' => $title,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

        // Return the response
        return $response;
    }*/
    public function handle($request, Closure $next)
    {
        // Check if the request method is POST
        if ($request->isMethod('post')) {
            // Handle the request and get the response
            $response = $next($request);
            $titles = [];
            if ($request->has('titleResponse')) {
                $titles = $request->input('titleResponse');
            }
            // Log the request and response to the database
            DB::table('api_logs')->insert([
                //'request_url' => $request->Url(),
                'request_method' => $request->method(),
                //'request_headers' => json_encode($request->header()),
                'request_body' => json_encode($request->all()),
                'response_status_code' => $response->status(),
                //'response_headers' => json_encode($response->headers->all()),
                //'response_body' => $response->getContent(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            // Log the generated titles along with the API log
            foreach ($titles as $title) {
                DB::table('generated_titles')->insert([
                    'api_log_id' => $apiLogId,
                    'title' => $title,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
            // Return the response
            return $response;
        } else {
            // If it's not a POST request, proceed without logging
            return $next($request);
        }
    }
}