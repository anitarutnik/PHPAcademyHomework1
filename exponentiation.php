<?php

if(isset($_POST['num_exp_sub'])) {
    $num1 = $_POST['num_exp_1'];
    $num2 = $_POST['num_exp_2'];
    $exp = $num1 ** $num2;
    echo "When you put the exponent $num2  to the number $num1, you get: " . $exp;
}