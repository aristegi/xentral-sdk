<?php

namespace Deinebaustoffe\XentralSdk\Models;

use Deinebaustoffe\XentralSdk\Http\XentralClient;

class StockShelfLife
{
    use XentralClient;

    /**
     * @return mixed
     */
    public function getStockShelfLifes()
    {
        return json_decode($this->client->get($this->url . '/lagermhd')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getStockShelfLife($id)
    {
        return json_decode($this->client->get($this->url . '/lagermhd/' . $id)->getBody()->getContents(), true);
    }
}
