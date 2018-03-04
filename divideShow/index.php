<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        ul {
            display: block;
            list-style-type: disc;
            -webkit-margin-before: 1em;
            -webkit-margin-after: 1em;
            -webkit-margin-start: 0px;
            -webkit-margin-end: 0px;
            -webkit-padding-start: 40px;
           margin: 0;
            padding: 10px;
        }
        .base_widget_paging .paging_widget_2 {
            text-align: center;
        }
        .base_widget_paging .paging_widget_2 a {
            line-height: 28px;
            min-width: 28px;
            color: #333;
            border: 1px solid #dfdfdf;
            margin: 0 5px;
        }
        .base_widget_paging .paging_widget_2 li, .base_widget_paging .paging_widget_2 a {
            display: inline-block;
        }
        .base_widget_paging .paging_widget_2 .selected a, .base_widget_paging .paging_widget_2 a.selected {
            border-color: #ff8b3d;
            background-color: #ff8b3d;
        }
    </style>
</head>

<body>
<?php
include_once 'divide.php';
//total数据库中的总条数 eachNum 每一页显示的条数
$eachNum=9;
if (isset($_GET['page'])){
    $cur=$_GET['page'];
}
else $cur=1;

$start=($cur-1)*9;
//连接数据库
$db=new mysqli('localhost','root','','test');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//
$sq="select * from testdivide ";
$reslut=$db->query($sq);
$total=$reslut->num_rows;

$sq="select * from testdivide limit  $start,9";
$reslut=$db->query($sq);
//echo $total."</br>";
for ($i=0;$i<$eachNum&&($row=$reslut->fetch_row());$i++){
    echo $row[1]."----".$row[2]."------".$row[3]."</br>";
}
$reslut->close();
$showPage=new showPages($total,$eachNum,$cur);
echo  $showPage->echoPage();
?>
</body>
</html>

