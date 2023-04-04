<?php


namespace PHPThisshop;

use PHPThisshop\ThisshopSDK;

abstract class ThisshopResource
{
    protected $thisshopSDK;

    public function __construct(ThisshopSDK $thisshopSDK)
    {
        $this->thisshopSDK = $thisshopSDK;
        $this->setHttpClient();
    }

    /**
     * @Author: hwj
     * @DateTime: 2022/4/25 12:14
     * @param $resourceName
     * @return static
     */
    public function __get($resourceName)
    {
        return $this->$resourceName();
    }

    /**
     * @Author: hwj
     * @DateTime: 2022/4/25 12:02
     * @param $resourceName
     * @param $arguments
     * @return staitc
     */
    public function __call($resourceName, $arguments)
    {
        return $this->api($resourceName);
    }

    /**
     * @Author: hwj
     * @DateTime: 2023/4/4 10:40
     * @return $this
     */
    public function api()
    {
        return $this;
    }

    public abstract function setHttpClient();
}
