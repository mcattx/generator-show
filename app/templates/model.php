
<?php

  $baseImageURL = '//static.feifei.com/images/activity/fansday521/branch/<%= activityName %>/';
  $this->baseImageURL = $baseImageURL;

  $pageTitle = '大牌半价疯抢！<%= cnName %>分会场';
  $this->pageTitle = $pageTitle;


  //楼层SKU
  $floor_1 = array(
  //@floor_1
array('sku'=>'A5573016','mdname'=>'专柜价','mdprice'=>'309','title'=>'测试title'),
array('sku'=>'A7651271','mdname'=>'专柜价','mdprice'=>'299','title'=>'测试title'),
array('sku'=>'A8128823','mdname'=>'专柜价','mdprice'=>'399','title'=>'测试title'),
array('sku'=>'A9674171','mdname'=>'专柜价','mdprice'=>'369','title'=>'测试title'),
array('sku'=>'A8739724','mdname'=>'专柜价','mdprice'=>'159'),
array('sku'=>'A4968476','mdname'=>'专柜价','mdprice'=>'299'),
array('sku'=>'A2072473','mdname'=>'专柜价','mdprice'=>'199'),
array('sku'=>'A6345930','mdname'=>'专柜价','mdprice'=>'268'),
array('sku'=>'A4792508','mdname'=>'专柜价','mdprice'=>'529'),
array('sku'=>'A3898760','mdname'=>'专柜价','mdprice'=>'499'),
array('sku'=>'A5349405','mdname'=>'专柜价','mdprice'=>'299'),
array('sku'=>'A6073093','mdname'=>'专柜价','mdprice'=>'399'),
array('sku'=>'A6189700','mdname'=>'专柜价','mdprice'=>'199'),
array('sku'=>'A9520167','mdname'=>'专柜价','mdprice'=>'399'),
array('sku'=>'A9411652','mdname'=>'专柜价','mdprice'=>'379'),
array('sku'=>'A2127950','mdname'=>'专柜价','mdprice'=>'439'),
array('sku'=>'A7335675','mdname'=>'专柜价','mdprice'=>'549'),
array('sku'=>'A1707904','mdname'=>'专柜价','mdprice'=>'399'),
array('sku'=>'A5011851','mdname'=>'专柜价','mdprice'=>'459'),
array('sku'=>'A5023904','mdname'=>'专柜价','mdprice'=>'429'),
array('sku'=>'A4336814','mdname'=>'专柜价','mdprice'=>'439'),
array('sku'=>'A2479623','mdname'=>'专柜价','mdprice'=>'499'),
array('sku'=>'A5810275','mdname'=>'专柜价','mdprice'=>'499'),
array('sku'=>'A8053590','mdname'=>'专柜价','mdprice'=>'589'),
array('sku'=>'A2615557','mdname'=>'专柜价','mdprice'=>'699'),
array('sku'=>'A5134116','mdname'=>'专柜价','mdprice'=>'429'),
array('sku'=>'A6158034','mdname'=>'专柜价','mdprice'=>'169'),
array('sku'=>'A8614551','mdname'=>'专柜价','mdprice'=>'399'),
array('sku'=>'A9611742','mdname'=>'专柜价','mdprice'=>'429'),
array('sku'=>'A1952160','mdname'=>'专柜价','mdprice'=>'559'),
array('sku'=>'A7088655','mdname'=>'专柜价','mdprice'=>'799'),
array('sku'=>'A2593790','mdname'=>'专柜价','mdprice'=>'295'),
array('sku'=>'A1422745','mdname'=>'专柜价','mdprice'=>'496'),
array('sku'=>'A1088763','mdname'=>'专柜价','mdprice'=>'799'),
array('sku'=>'A3839387','mdname'=>'专柜价','mdprice'=>'519'),
array('sku'=>'A7756434','mdname'=>'专柜价','mdprice'=>'649'),
array('sku'=>'A7010427','mdname'=>'专柜价','mdprice'=>'149'),
array('sku'=>'A9419885','mdname'=>'专柜价','mdprice'=>'129'),
array('sku'=>'A3051283','mdname'=>'专柜价','mdprice'=>'229'),
array('sku'=>'A5829501','mdname'=>'专柜价','mdprice'=>'129'),
array('sku'=>'A4052664','mdname'=>'专柜价','mdprice'=>'199'),
array('sku'=>'A1318867','mdname'=>'专柜价','mdprice'=>'399'),
array('sku'=>'A2506666','mdname'=>'专柜价','mdprice'=>'549'),
array('sku'=>'A4311851','mdname'=>'专柜价','mdprice'=>'219'),
array('sku'=>'A9264556','mdname'=>'专柜价','mdprice'=>'159')
  //@floor_1
  );
  $floor_1 = $this->model_product->getProductRowByInCustom($floor_1);


  $floors  = array(
    array(
      'id'=>'',
      'title'=>'',
      'moreUrl'=>'http://item.feifei.com/A6857296.html',
      'banner'=>$baseImageURL . 'banner.jpg',
      'hasBanner' => true,
      'brand' => $baseImageURL . 'brand01.jpg',
      'hasBrand' => true,
      'items'=>$floor_1
    )

  );
  $this->floors = $floors;

  $result = $this->display('pages/fansday521/<%= activityName %>.tpl',true);
?>

