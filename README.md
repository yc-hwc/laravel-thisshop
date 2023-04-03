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
        'thisshopkUrl'  => '',
        'appId'         => '',
        'appSecret'     => '',
        'token'         => '',
        'method'        => '',
    ];
    
    $thisshopSDK = \PHPThisshop\ThisshopSDK::config($config);
````
