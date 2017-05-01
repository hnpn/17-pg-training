<?php
//試験の合否判定をするプログラムを書こう
$math = 29;
$science = 80;

// - mathが30以上
// - scienceが30以上
// - math+scienceが80以上

$condition = [
  $math >= 30,
  $science >=30,
  $math + $science >= 80,
];

if ($condition[0] && $condition[1] && $condition[2]) {
  print "合格おめでとう！";
} else {
  print "不合格です";
}

 ?>
