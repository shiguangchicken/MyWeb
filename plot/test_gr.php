<?php
/**
 * Created by PhpStorm.
 * User: fang
 * Date: 2017/12/20
 * Time: 19:21
 */
include_once "jpgraph_plot.php";
$datay=array(11,12,31,14,15,26,17);
$datay2=array(40,62,53,47,65,42,66);
$datax=array(1,2,3,4,5,6,7);
$graph=new ez_barplot();
//$graph->ez_barplot1($datay,$datax,"green","下雨量","月份","毫升");
$graph->ez_barplot2($datax,$datay,$datay2,"下雨量","月份","毫升");