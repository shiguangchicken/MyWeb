<html>
<head>
    <meta charset="UTF-8">
    <title>登录</title>
</head>
<body>
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
                <td><button type="submit" name="loginok">登录</button></td>
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
 * Time: 17:09
 */
if (isset($_POST['loginok'])) {
    $db = mysqli_connect('localhost', 'root', '199421', 'test') or die("数据库连接失败");
    $sq = "select * from blog_user";
    $result = mysqli_query($db, $sq);
    $temp=0;
    while ($rs = $result->fetch_array()) {
        if ($rs[1] == $_POST['username'] && $rs[2] == $_POST['usepw'])
        {echo "登录成功";
        setcookie('blog_user',$_POST['username']);
        setcookie('blog_password',$_POST['usepw']);
        $temp=1;
        $str=time();
        setcookie("time",$str);
        break;}
    }
    $db->close();
    if ($temp==0) echo "用户名或密码错误";
    else
    header("Location:ind.php");
}
?>
