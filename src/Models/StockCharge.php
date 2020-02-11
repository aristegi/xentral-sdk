<?php

namespace Deinebaustoffe\XentralSdk\Models;

use Deinebaustoffe\XentralSdk\Http\XentralClient;

class StockCharge
{
    use XentralClient;

    /**
     * @return mixed
     */
    public function getStockCharges()
    {
        return json_decode($this->client->get($this->url . '/lagercharge')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getStockCharge($id)
    {
        return json_decode($this->client->get($this->url . '/lagercharge/' . $id)->getBody()->getContents(), true);
    }
}
