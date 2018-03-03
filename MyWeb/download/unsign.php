<?php
/**
 * Created by PhpStorm.
 * User: fang
 * Date: 2017/12/18
 * Time: 19:23
 */
setcookie("blog_user",null,time()-1);
header("Location:ind.php");
?>