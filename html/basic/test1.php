<?php

//한줄 주석

/*
여러줄 주석
*/

?>

<?php

$value = "1";

var_dump($value); // string

$value = 1;
var_dump($value); // int

$value = 1 + 1;
var_dump($value); //int

$value = 1.1;
var_dump($value); //float

$value = "1"."1";
var_dump($value); //string 11

?>

<?php
    function function_name($number) // 함수선언
    {
        return $number*2;
    }
    echo function_name(function_name(10)); 
    // echo 를 해줘야 결과값이 나온다. 위에서 해주면 아래에서 해주지 않아도 결과가나옴
?>