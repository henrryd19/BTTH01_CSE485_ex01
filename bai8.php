<?php
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
    $arr = array_map('strlen', $array);
    
    echo "Chuoi lon nhat co do dai = ".max($arr).'<br>';
    echo "Chuoi nho nhat co do dai = ".min($arr);

?>