<html>
<head>
    <meta charset="UTF-8">
    <title>show</title>
    <style>
        body{background:url(images/girl_03.jpg) no-repeat;
        font-size: 18px;
        color: black;}
    </style>
</head>
<body >
<form action="" method="post" >
    <label>上传文件：</label>
    <textarea name="text"></textarea>
    <input type="submit" name="sut" value="创建">
    <br>
    <?php
    session_start();
    if (!empty($_POST['sut'])) {
        if ($_POST['text'] =='')
            echo "<script>alert('输入为空');location.href='learn.php'</script>";
        else {$_SESSION['arry']=$_POST['text'];echo "<script>alert('session数组创建成功');location.href='MyFunction.php';</script>";}
   }
   ?>
</form>
</body>
</html>
