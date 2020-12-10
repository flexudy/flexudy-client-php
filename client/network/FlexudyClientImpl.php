<?php


namespace FlexudyClient\client\network;

use GuzzleHttp\Client as guzzleClient;


class FlexudyClientImpl implements FlexudyClient
{

    const BASE_URI_PATH = "https://api.flexudy.com";

    private $flexudyLicenseKey;

    private $client;

    public function __construct($flexudyLicenseKey)
    {
        // Get your license key form https://license.flexudy.com/register
        $this->flexudyLicenseKey = $flexudyLicenseKey;

        $this->client = new guzzleClient();
    }

    public function post($uriPath, $requestParameters)
    {
        return $this->client->request("POST", $this->resolveUriPath($uriPath), $requestParameters);
    }

    private function resolveUriPath($uriPath)
    {
        return self::BASE_URI_PATH . $uriPath;

    }
}