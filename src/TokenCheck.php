<?php


namespace PHPThisshop;


use PHPThisshop\Traits\OauthApi;

class TokenCheck extends ThisshopResource
{
    use OauthApi;

    public $path = '/api/oauth/token/check';
}
