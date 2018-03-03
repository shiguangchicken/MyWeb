<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .ul, menu, dir {
            display: block;
            list-style-type: disc;
            -webkit-margin-before: 1em;
            -webkit-margin-after: 1em;
            -webkit-margin-start: 0px;
            -webkit-margin-end: 0px;
            -webkit-padding-start: 40px;
           margin: 0;
            padding: 0;
        }
        .base_widget_paging .paging_widget_2 {
            text-align: center;
        }
        .base_widget_paging .paging_widget_2 a {
            line-height: 28px;
            min-width: 28px;
            color: #333;
            border: 1px solid #dfdfdf;
        }
        .base_widget_paging .paging_widget_2 li, .base_widget_paging .paging_widget_2 a {
            display: inline-block;
        }
        .base_widget_paging .paging_widget_2 .selected a, .base_widget_paging .paging_widget_2 a.selected {
            border-color: #ff8b3d;
            color: #ff8b3d;
        }
    </style>
</head>
<?php

?>


<body>
<div class="base_widget_paging">
    <div class="paging_widget_2">
        <ul>
            <li class="first"><a href="?page=1" >首页</a></li>
            <li class="previous"><a href="?page=1">上一页</a></li>
            <li class="page"><a href="?page=1" >2</a></li>
            <li class="page"><a href="?page=1" >3</a></li>
            <li class="page"><a href="?page=1" >4</a></li>
            <li class="page selected "><a href="?page=1" >5</a></li>
            <li class="page"><a href="?page=1" >6</a></li>
            <li class="next"><a >下一页</a></li>
            <li class="first"><a href="?page=6"> 尾页</a></li>
        </ul>
    </div>
</div>
</body>
</html>

