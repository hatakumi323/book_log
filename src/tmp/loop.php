<?php

$currencies = [
  'japan' => 'yen',
  'us' => 'dollar',
  'england' => 'pound',
];
foreach ($currencies as $country => $currency) {
  echo $country . ':' . $currency . PHP_EOL;
}
