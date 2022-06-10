## php 版的 jos sdk

```php
<?php

// 简单使用
use ACES\JdClient;

//测试demo
$c = new JdClient("appKey",  "secret");

dump($c->getAccessToken()->getCache()->set('xxx', 123, 10));
dump($c->getAccessToken()->getCache()->get('xxx'));
dd(1);

//$c->accessToken = "1f1d3048-220a-484d-ad93-f3808d9aacc1";
//$c->serverUrl = "http://gw.api.360buy.net/routerjson";
$req = new \ACES\Request\EclpFeeQueryFeeDetailWithPageRequest();
$req->setBillDay('2022-06-10');
$resp = $c->execute($req, $c->accessToken());
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
$resp = $c->execute($req, $c->accessToken());
dump($resp);

```
