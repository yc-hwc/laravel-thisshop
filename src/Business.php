<?php


namespace PHPThisshop;

use PHPThisshop\Traits\Api;

class Business extends ThisshopResource
{
    use Api;

    public $path = '/api/shop/router/rest';
}
