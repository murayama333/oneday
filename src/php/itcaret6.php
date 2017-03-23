<?php
$name = ["John", "Paul", "George", "Ringo"];
for ($i = 0; $i < 4; $i++) {
  if ($i < 2) {
    echo "Hello";
  } else {
    echo "Goodbye";
  }
  echo strtoupper($name[$i]);
}
