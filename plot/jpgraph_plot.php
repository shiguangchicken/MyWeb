<?php
/**
 * Created by PhpStorm.
 * User: fang
 * Date: 2017/12/20
 * Time: 19:10
 */

class ez_barplot
{
    public function ez_barplot1($x_arr,$y_arr,$bar_color,$g_title,$x_title="X轴",$y_title="Y轴"){
        include_once "src/jpgraph.php";
        require_once "src/jpgraph_bar.php";
        $data=$y_arr;
        $datas=$x_arr;
        $graph=new Graph(600,300);
        $graph->SetScale('textlin');
        $graph->SetShadow();
        $graph->img->SetMargin(40,30,20,40);
        $graph->SetMarginColor("white");
        $barplot=new BarPlot($data);
        $barplot->SetFillColor($bar_color);
        $barplot->SetShadow();
        $barplot->value->Show();
        $graph->Add($barplot);
        $graph->title->Set(iconv("utf-8",'gb2312',$g_title));
        $graph->xaxis->title->Set(iconv("utf-8","gb2312",$x_title));
        $graph->xaxis->SetTickLabels($datas);
        $graph->yaxis->title->Set(iconv("utf-8","gb2312",$y_title));
        $graph->title->SetFont(FF_SIMSUN,FS_BOLD);
        $graph->xaxis->title->SetFont(FF_SIMSUN,FS_BOLD);
        $graph->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD);
        $graph->Stroke();
    }
    public function ez_barplot2($x_arr,$y_arr1,$y_arr2,$g_title,$x_title="X轴",$y_title="Y轴"){
        include_once "src/jpgraph.php";
        require_once "src/jpgraph_bar.php";
        $data=$y_arr1;
        $data1=$y_arr2;
        $datazero=array(0,0,0,0,0);
        $datas=$x_arr;
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
        $graph->title->Set(iconv("utf-8",'gb2312',$g_title));
        $graph->xaxis->title->Set(iconv("utf-8","gb2312",$x_title));
        $graph->xaxis->SetTickLabels($datas);
        $graph->yaxis->title->Set(iconv("utf-8","gb2312",$y_title));
        $graph->title->SetFont(FF_SIMSUN,FS_BOLD);
        $graph->xaxis->title->SetFont(FF_SIMSUN,FS_BOLD);
        $graph->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD);
        $graph->Stroke();

    }
}