<?php

namespace Deinebaustoffe\XentralSdk\Models;

use Deinebaustoffe\XentralSdk\Http\XentralClient;

class FollowUp
{
    use XentralClient;

    /**
     * @return mixed
     */
    public function getFollowUps()
    {
        return json_decode($this->client->get($this->url . '/wiedervorlagen')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getFollowUp($id)
    {
        return json_decode($this->client->get($this->url . '/wiedervorlagen/' . $id)->getBody()->getContents(), true);
    }
}
