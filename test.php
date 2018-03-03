<?php
//微信小登录
 class ToDataBase{
    public function connection($host='localhost',$uer='root',$pw='',$database='test'){
       $db= mysqli_connect($host,$uer,$pw,$database) or die("数据库连接失败");
       return $db;
    }

}
//获取post信息
$c_number=$_GET['c_number'];
 $password=$_GET['password'];
$DataBase=new ToDataBase();
 $db=$DataBase->connection();
$sq="select * from lab_member where cnumber='".$c_number."'";
 $reslt=mysqli_query($db,$sq);
 $res_row=mysqli_fetch_row($reslt);
 if ($res_row[2]==$password)
     echo "ok";
 else echo "fail"
?>