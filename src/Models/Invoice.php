<?php

namespace Deinebaustoffe\XentralSdk\Models;

use Deinebaustoffe\XentralSdk\Http\XentralClient;

class Invoice
{
    use XentralClient;

    /**
     * @return mixed
     */
    public function getInvoices()
    {
        return json_decode($this->client->get($this->url . '/belege/rechnungen')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getInvoice($id)
    {
        return json_decode($this->client->get($this->url . '/belege/rechnungen/' . $id)->getBody()->getContents(), true);
    }
}
