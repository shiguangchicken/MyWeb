<?php
/**
 * Created by PhpStorm.
 * User: fang
 * Date: 2017/12/12
 * Time: 14:38
 */

class ConnDb
{
private $host;
private $user;
private $psword;
private $database;
public function __construct($host,$user,$psword,$database)
{
    $this->host=$host;
    $this->user=$user;
    $this->psword=$psword;
    $this->database=$database;
}
public function getConnId(){
    @$connId=mysqli_connect($this->host,$this->user,$this->psword,$this->database);

    return $connId;
}
}
class get_avrage{
    public static function averge($arry){
        $sum=0.0;
        for ($i=0;$i<count($arry);$i++){
            $sum+=$arry[$i];
        }
        return $sum/count($arry);
    }
}
class Circle{
     const p='3.14';
     private $radius;
     public function __construct($radius)
     {
         $this->radius=$radius;
     }
     public function __toString()
     {
      return "圆的面积是".(string)number_format(self::p*pow($this->radius,2),4);   // TODO: Implement __toString() method.
     }

}