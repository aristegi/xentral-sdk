<?php

namespace Deinebaustoffe\XentralSdk\Models;

use Deinebaustoffe\XentralSdk\Http\XentralClient;

class ProductCategory
{
    use XentralClient;

    /**
     * @return mixed
     */
    public function getProductCategories()
    {
        return json_decode($this->client->get($this->url . '/artikelkategorien')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getProductCategory($id)
    {
        return json_decode($this->client->get($this->url . '/artikelkategorien/' . $id)->getBody()->getContents(), true);
    }
}
