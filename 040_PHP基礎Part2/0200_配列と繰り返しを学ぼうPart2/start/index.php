<?php
$arry = [
  ['table', 1000],
  ['chair', 100],
  ['bed', 10000]
];

array_shift($arry);
foreach ($arry as $val) {
  echo "{$val[0]}は{$val[1]}円です。";
}
