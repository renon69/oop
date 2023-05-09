<?php

class Myclass{

  public static $price = 2;
  public  $color = 'red';

  public static function random() {
    return rand(0, 999);
  }

  public function get_total(){
    $this->total = 10 * 30;
  }
  public function result(){
    return $this->total;
  }
}



echo $random ;
