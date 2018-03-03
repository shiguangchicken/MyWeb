<html>
<head>
    <meta charset="UTF-8">
    <title>登录</title>
</head>
<body>
<script language="JavaScript">
    if(document.getElementsByName('username')==''||document.getElementsByName('usepw')=='')
        alert('请输入用户名和密码');
</script>
<div style="margin:50px;text-align: center;">
    <form action="" method="post">
        <table>
            <tr>
                <td><label>用户名</label></td>
                <td><input type="text" name="username" width="400px"></td>
            </tr>
            <tr>
                <td><label>密码</label></td>
                <td><input type="password" name="usepw" width="400px"></td>
            </tr>
            <tr>
                <td><button type="submit" name="sigin" onclick="">注册</button></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: fang
 * Date: 2017/12/18
 * Time: 17:10
 */
if (isset($_POST['sigin'])) {
    $db = mysqli_connect('localhost', 'root', '199421', 'test') or die("数据库连接失败");
    $name = $_POST['username'];
    $pw = $_POST['usepw'];
    $sq = "insert into blog_user(name,password) values('" . $name . "','" . $pw . "')";
    if (mysqli_query($db, $sq))
        echo "注册成功";
    $db->close();
    header("Location:ind.php");
}
?>