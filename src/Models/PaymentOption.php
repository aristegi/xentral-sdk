<?php

namespace Deinebaustoffe\XentralSdk\Models;

use Deinebaustoffe\XentralSdk\Http\XentralClient;

class PaymentOption
{
    use XentralClient;

    /**
     * @return mixed
     */
    public function getPaymentOptions()
    {
        return json_decode($this->client->get($this->url . '/zahlungsweisen')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getPaymentOption($id)
    {
        return json_decode($this->client->get($this->url . '/zahlungsweisen/' . $id)->getBody()->getContents(), true);
    }
}
