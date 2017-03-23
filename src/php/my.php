<?php
$fileName = "notes.txt";
$year = "2018";
$months = ["01", "02", "03"];
mkdir($year);
for ($i = 0; $i < count($months); $i++) {
  mkdir($year . "/" . $months[$i]);
  copy($fileName, $year . "/" . $months[$i] . "/" . $fileName);
}
