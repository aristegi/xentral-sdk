<?php

namespace Deinebaustoffe\XentralSdk\Models;

use Deinebaustoffe\XentralSdk\Http\XentralClient;

class Delivery
{
    use XentralClient;

    /**
 * @return mixed
 */
    public function getDeliveryNotes()
    {
        return json_decode($this->client->get($this->url . '/belege/lieferscheine')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getDeliveryNote($id)
    {
        return json_decode($this->client->get($this->url . '/belege/lieferscheine/' . $id)->getBody()->getContents(), true);
    }

    /**
     * @return mixed
     */
    public function getDeliveryTypes()
    {
        return json_decode($this->client->get($this->url . '/versandarten')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getDeliveryType($id)
    {
        return json_decode($this->client->get($this->url . '/versandarten/' . $id)->getBody()->getContents(), true);
    }

    /**
     * @return mixed
     */
    public function getDeliveryAddressses()
    {
        return json_decode($this->client->get($this->url . '/lieferadressen')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getDeliveryAddress($id)
    {
        return json_decode($this->client->get($this->url . '/lieferadressen/' . $id)->getBody()->getContents(), true);
    }

    /**
     * @return mixed
     */
    public function getDeliveryTrackingNumbers()
    {
        return json_decode($this->client->get($this->url . '/trackingnummern')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getDeliveryTrackingNumber($id)
    {
        return json_decode($this->client->get($this->url . '/trackingnummern/' . $id)->getBody()->getContents(), true);
    }
}
