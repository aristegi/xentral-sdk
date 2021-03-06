<?php

namespace Deinebaustoffe\XentralSdk\Models;

use Deinebaustoffe\XentralSdk\Http\XentralClient;

class File
{
    use XentralClient;

    /**
     * @return mixed
     */
    public function getFiles()
    {
        return json_decode($this->client->get($this->url . '/dateien')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getFile($id)
    {
        return json_decode($this->client->get($this->url . '/dateien/' . $id)->getBody()->getContents(), true);
    }

    public function searchFile($filename)
    {
        return json_decode($this->client->get($this->url . '/dateien?dateiname_startswith=' . $filename)->getBody()->getContents(), true);
    }

    public function downloadFile($id)
    {
        return json_decode($this->client->get($this->url . '/dateien/' . $id . '/download')->getBody()->getContents(), true);
    }

    public function getBase64($id)
    {
        return json_decode($this->client->get($this->url . '/dateien/' . $id . '/base64')->getBody()->getContents(), true);
    }
}
