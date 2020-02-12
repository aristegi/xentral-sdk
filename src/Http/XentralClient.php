<?php

namespace Deinebaustoffe\XentralSdk\Http;

use Exception;
use GuzzleHttp\Client;

trait XentralClient
{
    /**
     * @var Client
     */
    public $client;

    /**
     * @var string
     */
    private $url;

    /**
     * XentralClient constructor.
     */
    public function __construct()
    {
        $this->url = config('xentral-sdk.xentral_host') . '/api/v1';
        $this->client = new Client([
            'headers' => array('Accept' => 'application/json'),
            'auth' => array(config('xentral-sdk.xentral_api_username'), config('xentral-sdk.xentral_api_key'), 'digest'),
        ]);
    }

    /**
     * @return string
     */
    public function generateHash()
    {
        $initKey = config('xentral-sdk.xentral_init_key');
        $appName = config('xentral-sdk.xentral_app_name');
        $date = gmdate('dmY');
        $hash = null;

        for($i = 0; $i <= 200; $i++) {
            $hash = sha1($hash . $initKey . $appName . $date);
        }

        return $hash;
    }

    /**
     * @param $methodname
     * @param $xml
     * @param $hash
     * @return false|string
     */
    public function sendRequest($methodname, $xml, $hash)
    {
        $url = config('xentral-sdk.xentral_host') . '/index.php?module=api&action=' . $methodname . '&hash=' . $hash;
        $data = [
            'xml' => $xml, 'md5sum' => md5($xml)
        ];

        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded",
                'method'  => 'POST',
                'content' => http_build_query($data),
            ],
        ];

        $context  = stream_context_create($options);

        return file_get_contents($url, false, $context);
    }
}
