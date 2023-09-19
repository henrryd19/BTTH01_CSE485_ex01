<?php
    function array_($arr) {
        $sum = 0;
    for($i=0;$i<count($arr);$i++){
        $sum += $arr[$i];
    }
    return $sum;
}
    function array_multiply($arr) {
        $sum = 1;
    for($i=0;$i<count($arr);$i++){
        $sum *= $arr[$i];
}
    return $sum;
    }
    function array_subtr($arr) {
        $sum = 0;
    for($i=0;$i<count($arr);$i++){
        $sum -= $arr[$i];
}
    return $sum;
    }
    function array_devisi($arr) {
        $sum = $arr[0];
    for($i=1;$i<count($arr);$i++){
        $sum /= $arr[$i];
}
    return $sum;
    }
    $arrs = [2,5,6,9,2,5,6,12,5];
    echo "Tong cac phan tu = ".implode(' + ', $arrs)." = ".array_($arrs).'<br>';
    echo "Tich cac phan tu = ".implode(' * ', $arrs)." = ".array_multiply($arrs).'<br>';
    echo "Hieu cac phan tu = ".implode(' - ', $arrs)." = ".array_subtr($arrs).'<br>';
    echo "Thuong cac phan tu = ".implode(' / ', $arrs)." = ".array_devisi($arrs).'<br>';
    

?>