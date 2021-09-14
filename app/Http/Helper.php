<?php

namespace App\Http;

class Helper
{
    /**
     * Basic cURL request
     * 
     * @param string URL
     * @return string response 
     */
    static public function curlRequest($url)
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true); 

        $response = curl_exec($curl);
        curl_close($curl);
        
        return $response;
    }
}