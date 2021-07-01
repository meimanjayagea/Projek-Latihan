<?php
$mahasiswa = array
  (
  array("Meiman",20,"Pria"),
  array("Jaya",25,"Pria"),
  array("Yoskomix",30,"Pria")
  );
  
for ($baris = 0; $baris < 3; $baris++) {
  echo "<p><b>Baris No: $baris</b></p>";
  echo "<ul>";
  for ($kolom = 0; $kolom < 3; $kolom++) {
    echo "<li>".$mahasiswa[$baris][$kolom]."</li>";
  }
  echo "</ul>";
}
?>