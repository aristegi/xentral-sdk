<?php

namespace Deinebaustoffe\XentralSdk\Models;

use Deinebaustoffe\XentralSdk\Http\XentralClient;

class Address
{
    use XentralClient;

    /**
     * @return mixed
     */
    public function getAddresses()
    {
        return json_decode($this->client->get($this->url . '/adressen')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getAddress($id)
    {
        return json_decode($this->client->get($this->url . '/adressen/' . $id)->getBody()->getContents(), true);
    }

    /**
     * @return mixed
     */
    public function getAddressTypes()
    {
        return json_decode($this->client->get($this->url . '/adresstyp')->getBody()->getContents(), true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getAddressType($id)
    {
        return json_decode($this->client->get($this->url . '/adresstyp/' . $id)->getBody()->getContents(), true);
    }

    /**
     * @param $type
     * @param $language
     * @param $name
     * @param $country
     * @param $street
     * @param $city
     * @param $zipcode
     * @param $telephone
     * @param $telefax
     * @param $email
     * @param $projectId
     * @return \Psr\Http\Message\StreamInterface
     */
    public function createAddress($type, $language, $name, $country, $street, $city, $zipcode, $telephone, $telefax, $email, $projectId)
    {
        $data = [
            'typ' => $type ?? 'person',
            'sprache' => $language ?? 'deutsch',
            'name' => $name,
            'land' => $country ?? 'DE',
            'strasse' => $street,
            'ort' => $city,
            'plz' => $zipcode,
            'telefon' => $telephone,
            'telefax' => $telefax,
            'email' => $email,
            'projekt' => $projectId
        ];

        $response = $this->client->post($this->url . '/adressen/', ['data' => $data]);

        return $response->getBody();
    }
}
