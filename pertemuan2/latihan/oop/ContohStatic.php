<?php

class ContohStatic {

  public static $angka = 1; 
  public static function hallo() {
    
    return 'Hallo'. self::$angka;
  }
}

echo ContohStatic::$angka;

// menjalankan  static method
echo ContohStatic::hallo();
?>