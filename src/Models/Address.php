<?php

namespace Deinebaustoffe\XentralSdk\Models;

use Deinebaustoffe\XentralSdk\Http\XentralClient;

class Address
{
    use XentralClient;

    /**
     * @return mixed
     */
    public function getAddresses()
    {
        return json_decode($this->client->get($this->url . '/adressen')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getAddress($id)
    {
        return json_decode($this->client->get($this->url . '/adressen/' . $id)->getBody()->getContents(), true);
    }

    /**
     * @return mixed
     */
    public function getAddressTypes()
    {
        return json_decode($this->client->get($this->url . '/adresstyp')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getAddressType($id)
    {
        return json_decode($this->client->get($this->url . '/adresstyp/' . $id)->getBody()->getContents(), true);
    }
}
