<?php

namespace Deinebaustoffe\XentralSdk\Models;

use Deinebaustoffe\XentralSdk\Http\XentralClient;

class Credit
{
    use XentralClient;

    /**
     * @return mixed
     */
    public function getCredits()
    {
        return json_decode($this->client->get($this->url . '/belege/gutschriften')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getCredit($id)
    {
        return json_decode($this->client->get($this->url . '/belege/gutschriften/' . $id)->getBody()->getContents(), true);
    }
}
