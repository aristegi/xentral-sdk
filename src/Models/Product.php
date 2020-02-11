<?php

namespace Deinebaustoffe\XentralSdk\Models;

use Deinebaustoffe\XentralSdk\Http\XentralClient;

class Product
{
    use XentralClient;

    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getProducts()
    {
        return json_decode($this->client->get($this->url . '/artikel')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getProduct($id)
    {
        return json_decode($this->client->get($this->url . '/artikel/' . $id)->getBody()->getContents(), true);
    }
}
