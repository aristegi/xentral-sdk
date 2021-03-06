<?php

namespace Deinebaustoffe\XentralSdk\Models;

use Deinebaustoffe\XentralSdk\Http\XentralClient;
use RuntimeException;

class Product
{
    use XentralClient;

    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getProducts($page = 1)
    {
        return json_decode($this->client->get($this->url . '/artikel?items=1000&page=' . $page)->getBody()->getContents(), true);
    }

    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getPagination()
    {
        $pagination =  json_decode($this->client->get($this->url . '/artikel?items=1000')->getBody()->getContents(), true)['pagination'];
        return $pagination;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getProduct($id)
    {
        return json_decode($this->client->get($this->url . '/artikel/' . $id)->getBody()->getContents(), true);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function createProduct($data)
    {
        return json_decode($this->client->post($this->url . '/artikel', $data)->getBody()->getContents(), true);
    }

    /**
     * @param mixed $id
     * @param mixed $data
     * @return mixed
     * @throws RuntimeException
     */
    public function updateProduct($id, $data)
    {
        return $this->client->post($this->url . '/ArtikelEdit/' . $id, $data);
    }
}
