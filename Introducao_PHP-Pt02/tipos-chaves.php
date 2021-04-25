<?php

$array = [
  1 => 'a',
  '1' => 'b',
  1.5 => 'd'
];

foreach($array as $tipos) {
  echo $tipos . PHP_EOL;
}
