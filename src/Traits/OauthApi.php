<?php


namespace PHPThisshop\Traits;


trait OauthApi
{
    use Api;

    protected function setApiCommonParameters()
    {
        $this->httpClient()->withBody(json_encode(array_merge([
            'appId'     => $this->thisshopSDK->config['appId'],
            'appSecret' => $this->thisshopSDK->config['appSecret'],
            'timestamp' => $this->timestamp,
            'token'     => $this->thisshopSDK->config['token']
        ])), 'application/json');
    }
}
