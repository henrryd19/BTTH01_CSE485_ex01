<?php
    $a = [
    'a' => [
      'b' => 0,
      'c' => 1
    ],
    'b' => [
      'e' => 2,
      'o' => [
        'b' => 3
      ]
    ]
  ];
  echo 'Giá trị = 3 mà có key là b là: ' . $a['b']['o']['b'] . '<br/>';
  echo 'Giá trị = 1 mà có key là c là: ' . $a['a']['c'] . '<br/>';
  echo 'Hãy lấy thông tin của phần tử có key là a' . '<br>';
  print_r($a['a']);
?>