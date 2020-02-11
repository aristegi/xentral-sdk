<?php

namespace Deinebaustoffe\XentralSdk\Models;

use Deinebaustoffe\XentralSdk\Http\XentralClient;

class Group
{
    use XentralClient;

    /**
     * @return mixed
     */
    public function getGroups()
    {
        return json_decode($this->client->get($this->url . '/gruppen')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getGroup($id)
    {
        return json_decode($this->client->get($this->url . '/gruppen/' . $id)->getBody()->getContents(), true);
    }

    /**
     * @return mixed
     */
    public function getSubscriptionGroups()
    {
        return json_decode($this->client->get($this->url . '/abogruppen')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getSubscriptionGroup($id)
    {
        return json_decode($this->client->get($this->url . '/abogruppen/' . $id)->getBody()->getContents(), true);
    }
}
