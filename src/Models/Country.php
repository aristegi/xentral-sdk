<?php

namespace Deinebaustoffe\XentralSdk\Models;

use Deinebaustoffe\XentralSdk\Http\XentralClient;

class Country
{
    use XentralClient;

    /**
     * @return mixed
     */
    public function getCountries()
    {
        return json_decode($this->client->get($this->url . '/laender')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getCountry($id)
    {
        return json_decode($this->client->get($this->url . '/laender/' . $id)->getBody()->getContents(), true);
    }
}
