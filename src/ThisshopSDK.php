<?php

namespace PHPThisshop;

use PHPThisshop\Exception\SdkException;

/**
 * @property-read Business $business
 * @property-read AccessToken $accessToken
 * @property-read TokenCheck $tokenCheck
 *
 * @method Business business()
 * @method AccessToken accessToken()
 * @method TokenCheck tokenCheck()
 */
class ThisshopSDK
{
    protected array $resources = [
        'business',
        'accessToken',
        'tokenCheck'
    ];

    public array $config = [
        'thisshopkUrl' => '',
        'appId'        => '',
        'appSecret'    => '',
        'signSecret'   => '',
        'token'        => '',
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
        if (!in_array($resourceName, $this->resources)) {
            throw new SdkException(sprintf('Invalid resource name %s. Pls check the API Reference to get the appropriate resource name.', $resourceName));
        }

        $resourceClassName = __NAMESPACE__ . "\\" . \ucfirst($resourceName);

        $resource = new $resourceClassName($this);

        return $resource;
    }

    public static function config($config): static
    {
        return new ThisshopSDK($config);
    }
}
