<?php
$numbers = [1, 2, 3, 4, 5];
$numbers2 = [1, 2, 3, 5];

function sum($nums)
{
  $sum = 0;

  foreach ($nums as $num) {
    $sum += $num;
  }
  echo "合計: {$sum}<br>";
}

sum($numbers2);
