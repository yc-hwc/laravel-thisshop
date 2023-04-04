# laravel-thisshop
thisshop SDK

#### 安装教程
````
composer require yc-hwc/laravel-thisshop
````

### 用法
***

#### 配置
````
    $config = [
       'thisshopkUrl' => '',
       'appId'        => '',
       'appSecret'    => '',
       'signSecret'   => '',
       'token'        => '',
    ];

    $thisshopSDK = \PHPThisshop\ThisshopSDK::config($config);
````
#### [token获取](https://help.thisshop.com/article/detail/tiakiseg)
````
    $config = [
        'thisshopkUrl' => '',
        'appId'        => '',
        'appSecret'    => '',
    ];

    $thisshopSDK = \PHPThisshop\ThisshopSDK::config($config);
    $response = $thisshopSDK->accessToken()->post();
    print_r($response);
````
#### [token校验](https://help.thisshop.com/article/detail/tiakiseg)
````
    $config = [
        'thisshopkUrl' => '',
        'appId'        => '',
        'appSecret'    => '',
        'token'        => ''
    ];

    $thisshopSDK = \PHPThisshop\ThisshopSDK::config($config);
    $response = $thisshopSDK->tokenCheck()->post();
    print_r($response);
````
#### [订单列表Order list ](https://help.thisshop.com/article/detail/fvkctjne)
````
    $config = [
        'thisshopkUrl' => '',
        'appId'        => '',
        'signSecret'   => '',
        'token'        => '',
    ];

    $thisshopSDK = \PHPThisshop\ThisshopSDK::config($config);
    $response = $thisshopSDK->business()
        ->withMethod('thisshop.order.list.get')
        ->withData([
            'orderStatus' => 0,
        ])
        ->post();
    print_r($response);
````
