<html>
<head>
    <meta charset="UTF-8">
    <title>downl</title>
    <link href="blog.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php session_start()?>
    您是第<img src="imge.php">
        位访问的用户
    <div class="login">
        <a href="#">首页</a>
        <?php
        if (@$_COOKIE['blog_user']==null) {echo "<a href=\"login.php\">登陆</a><a href=\"sigin.php\">注册</a>";}
        else {echo "欢迎".$_COOKIE['blog_user'];echo "<a href=\"unsign.php\">注销</a>";
                $t=time()-$_COOKIE['time'];echo "您的在线时间".date("H:i:s",$t);echo "<br>ip".getenv('REMOTE_ADDR');
        }
        ?>
    </div>
   <div class="first">
       <div><h2 id="blogname">丝丝心语博客</h2></div>
   </div>
    <div class="second">
        <a href="#">我的文章</a>
        <a href="#">我的相册</a>
        <a href="#">我的资料</a>
        <a href="#">我的论坛</a>
    </div>
    <div class="clear"></div>
    <div class="content">
        <P>
            <?php
            //$db=mysqli_connect('localhost','root','199421','test');
            $article=file_get_contents("langtuteng.txt");
           /* for ($i=0;$i<strlen($article)/3000;$i++){
                $start=($i+1)*3000+1;
                $sq="insert into article(ar_index) values('".$start."')";
            }
            if (isset($_POST['nextpage'])){

            }*/
                    $artcontent= mb_substr($article,0,1000);
                    echo iconv("gb2312","utf-8",$artcontent);

            ?>
        </P>
    </div>
    <div class="next">
        <form action="" method="post">
           <button type="submit" name="nextpage">下一页</button>
           <button type="submit" name="beforepage">上一页</button>
        </form>
    </div>
</body>
</html>