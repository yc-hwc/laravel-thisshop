<?php


namespace PHPThisshop;


use PHPThisshop\Traits\OauthApi;

class AccessToken extends ThisshopResource
{
    use OauthApi;

    public $path = '/api/oauth/access/token';
}
