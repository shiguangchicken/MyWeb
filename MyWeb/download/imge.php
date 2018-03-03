
<?php
            session_start();
            if (@$_SESSION['temp']==""){
                $fp=fopen("number.txt","r");
                $counter=fgets($fp,1024);
                fclose($fp);
                $counter++;
                $fp=fopen("number.txt","w");
                fputs($fp,$counter);
                fclose($fp);
            }
            else {$_SESSION['temp']=1;
                $fp=fopen("number.txt","r");
                $counter=fgets($fp,1024);
                fclose($fp);}
                ob_clean();
           $im=imagecreate(240,24);
            $gray=imagecolorallocate($im,255,255,255);
            $color=imagecolorallocate($im,0,0,255);
            $text="网站访问量：";
            imagestring($im,5,16,2,$counter,$color);
            imagepng($im);
            imagedestroy($im);
        ?>