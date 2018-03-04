<?php
/**
 * Created by PhpStorm.
 * User: fang
 * Date: 2018/3/4
 * Time: 10:47
 */
$db=new mysqli('localhost','root','','test');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
for ($i=0;$i<100;$i++){
    $name="test$i";
    $nuber=$i;
    $info="test divide show page! ".$i;
    $sq="insert into `testdivide` (`id`,`name`,`number`,`info`) VALUES ('".$i." ','".$name."','".$nuber."','".$info."')";
    if(!$db->query($sq)) {echo "insert error"; break;}
}
echo "插入完毕";
