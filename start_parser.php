<?php

require_once __DIR__ . '/vendor/autoload.php';

use Modules\Parser\Models\CurrencyValue;
use Modules\Parser\Request\Api as ApiRequest;

function parseRates(string $response) : array {
    $xml = new SimpleXMLElement($response);
    $result = [];
    foreach ($xml as $xmlElement) {
        $charCode = (string)$xmlElement->CharCode;
        $vunitRate = (string)$xmlElement->VunitRate;
        $vunitRate = str_replace(',', '.', $vunitRate);
        $fields = ['charcode' => $charCode, 'rate' => $vunitRate];
        $result[] = $fields;
    }
    return $result;
}

try {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $url = 'https://cbr.ru/scripts/XML_daily.asp';
    $apiRequest = new ApiRequest($url);
    $currencyModel = CurrencyValue::getInstance();

    while(true) {
        $response = $apiRequest->sendRequest();
        $result = parseRates($response);
        foreach ($result as $key => $value) {
            $currencyModel->add($value);
        }
        echo "[" . date('Y-m-d H:i:s') . "]" . " parsed rates saved." . PHP_EOL;
        sleep(3 * 60 * 60); // cron better
    }

} catch (Exception $e) {
    echo $e->getMessage();
}