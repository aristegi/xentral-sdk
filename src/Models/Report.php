<?php

namespace Deinebaustoffe\XentralSdk\Models;

use Deinebaustoffe\XentralSdk\Http\XentralClient;

class Report
{
    use XentralClient;

    /**
     * @return mixed
     */
    public function getReports()
    {
        return json_decode($this->client->get($this->url . '/belege/reports')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getReport($id)
    {
        return json_decode($this->client->get($this->url . '/belege/reports/' . $id)->getBody()->getContents(), true);
    }
}
