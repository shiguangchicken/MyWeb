<?php
/**
 * Created by PhpStorm.
 * User: fang
 * Date: 2018/1/22
 * Time: 19:23
 */
$name=$_GET['code'];
$str="收到的微信数据是<br>".$name;
//$temp=simplexml_load_string($str);
echo json_encode($str);