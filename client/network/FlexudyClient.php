<?php


namespace FlexudyClient\client\network;


interface FlexudyClient
{
    public function post($uriPath, $requestParameters);
}