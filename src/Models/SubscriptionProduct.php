<?php

namespace Deinebaustoffe\XentralSdk\Models;

use Deinebaustoffe\XentralSdk\Http\XentralClient;

class SubscriptionProduct
{
    use XentralClient;

    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getSubscriptionProducts()
    {
        return json_decode($this->client->get($this->url . '/aboartikel')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getSubscriptionProduct($id)
    {
        return json_decode($this->client->get($this->url . '/aboartikel/' . $id)->getBody()->getContents(), true);
    }
}
