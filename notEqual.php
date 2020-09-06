<?php

if(isset($_POST['num_neq_sub'])) {
    $num1 = $_POST['num_neq_1'];
    $num2 = $_POST['num_neq_2'];

    if($num1 != $num2){
        echo "First input is not the same as the second one";
    } else{
        echo "First and second input are the same";
    }
}

