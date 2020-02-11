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
}
