<?php
include_once "src/jpgraph.php";
require_once "src/jpgraph_bar.php";
$data=array(80,73,89,85,92);
$data1=array(180,173,189,145,202);
$datazero=array(0,0,0,0,0);
$datas=array("C#","JAVA","C++","PHP","ASP.NET");
$graph=new Graph(600,300);
$graph->SetScale('textlin');
$graph->SetY2Scale("lin");
$graph->SetShadow();
$graph->img->SetMargin(40,30,20,40);
$graph->yaxis->scale->SetGrace(20);
$graph->y2axis->scale->SetGrace(20);
$graph->SetMarginColor("white");
$graph->y2axis->SetColor('darkred');
$barplotzero=new BarPlot($datazero);
$barplot=new BarPlot($data);
$barplot->SetFillColor('blue');
$barplot->SetShadow();
$barplot->value->Show();
$barplot_g=new GroupBarPlot(array($barplot,$barplotzero));
$barplot1=new BarPlot($data1);
$barplot1->SetFillColor('red');
$barplot1->SetShadow();
$barplot1_g=new GroupBarPlot(array($barplotzero,$barplot1));
$barplot1->value->Show();
$graph->Add($barplot_g);
$graph->AddY2($barplot1_g);
$graph->title->Set(iconv("utf-8",'gb2312',"编程词典销量分析"));
$graph->xaxis->title->Set(iconv("utf-8","gb2312","类别"));
$graph->xaxis->SetTickLabels($datas);
$graph->yaxis->title->Set(iconv("utf-8","gb2312","总数量"));
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);
$graph->xaxis->title->SetFont(FF_SIMSUN,FS_BOLD);
$graph->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD);
$graph->Stroke();

?>