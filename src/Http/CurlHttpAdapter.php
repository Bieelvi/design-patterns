<?php 

namespace App\Http;

class CurlHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_PORT, $data);
        curl_exec($curl);
        curl_close($curl);
    }
}