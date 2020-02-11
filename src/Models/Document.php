<?php

namespace Deinebaustoffe\XentralSdk\Models;

use Deinebaustoffe\XentralSdk\Http\XentralClient;

class Document
{
    use XentralClient;

    /**
     * @return mixed
     */
    public function getCrmDocuments()
    {
        return json_decode($this->client->get($this->url . '/crmdokumente')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getCrmDocument($id)
    {
        return json_decode($this->client->get($this->url . '/crmdokumente/' . $id)->getBody()->getContents(), true);
    }
}
