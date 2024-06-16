<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
   public function boot(): void
{
    try {
        $url = "https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Optional: Add a User-Agent header
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'User-Agent: eckmar/1.0', // Replace with your actual User-Agent
        ]);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            throw new \Exception("cURL error: " . curl_error($ch));
        }

        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if ($httpCode !== 200) {
            throw new \Exception("HTTP request failed with status code: " . $httpCode);
        }

        curl_close($ch);

        $crypto = json_decode($response);

        if ($crypto === null) {
            throw new \Exception("Failed to decode JSON response");
        }

        $usd = json_decode(file_get_contents("http://www.floatrates.com/daily/usd.json"));

        $data = [
            'usdprice' => $usd,
            'crypto' => $crypto,
        ];

        View::share('priceData', $data);
    } catch (\Exception $e) {
        // Handle the error gracefully
        report($e);

        // Provide a demo response or handle the error as needed
        $demoResponse = [
            'usdprice' => [
                // Demo data for 'usdprice'
            ],
            'crypto' => [
                // Demo data for 'crypto'
            ],
        ];

        View::share('priceData', $demoResponse);
    }
}

}
