<?php

if(isset($_POST['num_iden_sub'])) {
    $num1 = $_POST['num_iden_1'];
    $num2 = $_POST['num_iden_2'];

    if($num1 === $num2){
        echo "Identical input";
    } else{
        echo "Input is not identical";
    }
}

