<?php

namespace Modules\Parser\Request;
use Exception;

class Api {
    protected string $apiUrl;

    public function __construct(string $apiUrl) {
        $this->apiUrl = $apiUrl;
    }

    public function sendRequest() : string {
        $ch = curl_init($this->apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            throw new Exception("Curl error" . curl_error($ch));
        }
        curl_close($ch);
        return $response;
    }
}