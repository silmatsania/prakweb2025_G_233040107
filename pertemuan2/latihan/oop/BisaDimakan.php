<?php

interface BisaDimakan {
  public function makan();
}

class Apel implements BisaDimakan {
  
    public function makan() {
  
        return "apel dimakan: Langsung kunyah";
  }
}

class Jeruk implements BisaDimakan {
  
    public function makan() {
    
        return "jeruk dimakan: Kupas dulu, baru kunyah";
  }
}

$apel = new Apel();
$jeruk = new Jeruk();

echo $apel->makan();
echo "<br>";
echo $jeruk->makan();
?>