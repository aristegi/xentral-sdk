<?php

namespace Deinebaustoffe\XentralSdk\Models;

use Deinebaustoffe\XentralSdk\Http\XentralClient;

class Offer
{
    use XentralClient;

    /**
     * @return mixed
     */
    public function getOffers()
    {
        return json_decode($this->client->get($this->url . '/belege/angebote')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getOffer($id)
    {
        return json_decode($this->client->get($this->url . '/belege/angebote/' . $id)->getBody()->getContents(), true);
    }
}
