## php 版的 jos sdk

```php
<?php

// 简单使用
use ACES\JdClient;

//测试demo
$config = [
    'appKey' => 'appKey',
    'appSecret' => 'secret',
    'redirectUrl' => 'https://localhost/?redirect url',
//    'isvSource' => null,
//    'shopNo' => null, 
//    'departmentNo' => null, 
//    'monthlyAccount' => null
];
$client = new JdClient($config);
// 设置缓存
// $client->getAccessToken()->setCache(\Illuminate\Support\Facades\Cache::store()); // laravel

// 获取 access token 字符串
dump($client->accessToken());

$req = new \ACES\Request\EclpFeeQueryFeeDetailWithPageRequest();
$req->setBillDay('2022-06-10');
$resp = $client->execute($req, $client->accessToken());
dd($resp);


// 请求城市列表， 不用授权码
//$req = new \ACES\Request\AreaProvinceGetRequest();
//$req = new \ACES\Request\AreaCityGetRequest();
//$req->setParentId(1); // 北京
//$req = new \ACES\Request\AreaCountyGetRequest();
//$req->setParentId(72); // 北京 朝阳区
//$req = new \ACES\Request\AreaTownGetRequest();
//$req->setParentId(55690); // 北京 朝阳区 小红门地区 // false
$req = new \ACES\Request\AreasProvinceGetRequest();
$resp = $client->execute($req, $client->accessToken());
dump($resp);

```
