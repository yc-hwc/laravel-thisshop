<?php

namespace PHPThisshop;

use PHPThisshop\Exception\SdkException;

/**
 * @property-read Api $api
 *
 * @method Api api()
 */
class ThisshopSDK
{
    public array $config = [
        'thisshopkUrl' => '',
        'appId'        => '',
        'appSecret'    => '',
        'token'        => '',
        'method'       => '',
    ];

    public function __construct(array $config)
    {
        $this->config = array_merge($this->config, $config);
    }

    public function __get($resourceName)
    {
        return $this->$resourceName();
    }

    public function __call($resourceName, $arguments)
    {
        if ($resourceName !== 'api') {
            throw new SdkException(sprintf('Invalid resource name %s. Pls check the API Reference to get the appropriate resource name.', $resourceName));
        }

        return new Api($this);
    }

    public static function config($config): static
    {
        return new ThisshopSDK($config);
    }
}
