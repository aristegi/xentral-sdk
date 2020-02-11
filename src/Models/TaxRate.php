<?php

namespace Deinebaustoffe\XentralSdk\Models;

use Deinebaustoffe\XentralSdk\Http\XentralClient;

class TaxRate
{
    use XentralClient;

    /**
     * @return mixed
     */
    public function getTaxRates()
    {
        return json_decode($this->client->get($this->url . '/steuersaetze')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getTaxRate($id)
    {
        return json_decode($this->client->get($this->url . '/steuersaetze/' . $id)->getBody()->getContents(), true);
    }
}
