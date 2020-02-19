<?php
    $first_num = $_POST["first_num"];
    $second_num = $_POST["second_num"];
    $result = $second_num + $first_num;
    $result = json_encode(["result"=> $result]);
    echo $result
?>