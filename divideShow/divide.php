<?php
/**
 * Created by PhpStorm.
 * User: fang
 * Date: 2018/3/3
 * Time: 21:40
 */

class showPages
{
    private $startPage;
    private $endPage;
    private $curPage=1;
    private $realEnd;
    function __construct($total,$eachNum,$cur)
    {
        $this->curPage=$cur;
        $this->endPage=(int)ceil((float)$total/$eachNum);
        $this->realEnd=$this->endPage;
        $this->startPage=$this->curPage-2;
        $this->endPage=$this->curPage+2;
        //control show 5 pages
        if ($this->curPage<3){
            $this->endPage+=$this->curPage-$this->startPage;
            $this->startPage=1;
        }
        if ($this->curPage>10){
            $this->startPage-=$this->endPage-$this->curPage;
            $this->endPage=$this->realEnd;
        }
    }

    public function echoPage(){
        $str="";
        //echo div and url label
        $str.="<div class=\"base_widget_paging\">";
        $str.="<div class=\"paging_widget_2\">";
        $str.="<ul>";

        //echo content
        $str.=$this->firstPage();
        $str.=$this->prePage();
        $str.=$this->midPage();
        $str.=$this->nextPage();
        $str.=$this->lastPage();

        //echo div and url end label
        $str.="</ul>";
        $str.="</div>";
        $str.="</div>";
        //return
        return $str;
    }
    // echo first page
    private function firstPage(){
        $str="<li class=\"first\"><a href=\"?page=1\" >首页</a></li>";
        return $str;
    }
    private function prePage(){
        $str="<li class=\"previous\"><a href='?page=".($this->curPage-1)."'>上一页</a></li>";
        return $str;
    }
    private function midPage(){
        $str="";
        if ($this->curPage>3){
            $str.="...";
        }
        for ($i=$this->startPage;$i<=$this->endPage;$i++){
            if($i!=$this->curPage){
                $str.="<li class=\"page\"><a href=\"?page=$i\" >$i</a></li>";
            }
            else $str.="<li class=\"page selected\"><a href=\"?page=$i\" >$i</a></li>";
        }
        if ($this->curPage<$this->realEnd-2){
            $str.="...";
        }
        return $str;
    }
    private function nextPage(){
        $str=" <li class=\"next\"><a href='?page=".($this->curPage+1)."'>下一页</a></li>";
        return $str;
    }
    private function lastPage(){
        $str="<li class=\"first\"><a href='?page=".$this->realEnd."'> 尾页</a></li>";
        return $str;
    }
}