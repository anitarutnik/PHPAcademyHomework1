<?php

if(isset($_POST['num_mod_sub'])) {
    $num1 = $_POST['num_mod_1'];
    $num2 = $_POST['num_mod_2'];
    $mod = $num1 % $num2;
    echo "When you divide $num1 and $num2 the modulus you get is: " . $mod;
}