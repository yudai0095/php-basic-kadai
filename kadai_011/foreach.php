<?php
//連想配列
$vegetable = array(
  '名前' => '玉ねぎ',
  '値段' => '200',
  '産地' => '北海道'
);

foreach($vegetable as $key => $value){
  echo $key . ":" . $value . "<br>";
}
?>