<?php

namespace Deinebaustoffe\XentralSdk\Models;

use Deinebaustoffe\XentralSdk\Http\XentralClient;

class Assignment
{
    use XentralClient;

    /**
     * @return mixed
     */
    public function getAssignments()
    {
        return json_decode($this->client->get($this->url . '/belege/auftraege')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getAssignment($id)
    {
        return json_decode($this->client->get($this->url . '/belege/auftraege/' . $id)->getBody()->getContents(), true);
    }
}
