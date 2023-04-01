<!-- nama : Rofi Ardiatno
nim : G.231.21.0203 -->
<?php
class Monyet {
 public function berjalan() {
    echo "Monyet Bisa Berjalan";
 }
 
 public function makan() {
    echo "Monyet Bisa Makan";
 }
 
 public function bersuara() {
    echo "Monyet Bisa Ngomong";
 }
}

class MonyetDilatih extends Monyet {
 public function berkendara() {
  echo "Monyet Naik Sepeda";
 }
}


?> 