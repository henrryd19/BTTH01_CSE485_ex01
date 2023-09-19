<?php
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
    $minLength = PHP_INT_MAX;
    $maxLength = 0;
    $shortestString = "";
    $longestString = "";

    foreach ($array as $string){
        $length = strlen($string);
        if ($length < $minLength){
            $minLength = $length;
            $shortestString = $string;
        }
       
        if ($length > $maxLength){
            $maxLength = $length;
            $longestString = $string;
        }
    }
    echo "Chuoi nho nhat la ".$shortestString .' , do dai = '.$minLength.'<br>';
    echo "Chuoi lon nhat la  ".$longestString .' , do dai = '.$maxLength.'<br>';

?>