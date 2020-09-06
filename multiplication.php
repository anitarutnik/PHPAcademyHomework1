<?php

if(isset($_POST['num_mult_sub'])) {
    $num1 = $_POST['num_mult_1'];
    $num2 = $_POST['num_mult_2'];
    $prod = $num1 * $num2;
    echo "The product of $num1 and $num2 is: " . $prod;
}