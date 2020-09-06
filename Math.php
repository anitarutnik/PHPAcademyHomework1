<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<?php
require "nav.html";
?>
<br>
<!--Addition-->
    <div class="grid-container">
        <p><strong>1. Add two numbers.</strong></p>
    </div>
     <form action="addition.php" name="addition" method="post">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="medium-6 cell">
                    <label for="num_add_1">Number 1
                        <input type="number" name="num_add_1" placeholder="Enter a number">
                    </label>
                </div>
                <div class="medium-6 cell">
                    <label for="num_add_2">Number 2
                    <input type="number" name="num_add_2" placeholder="Enter a number">
                    </label>
                </div>
                <div class="medium-2 cell">
                    <button type="submit" class="success button" name="num_add_sub">Calculate</button>
                </div>
            </div>
        </div>
    </form>
    <hr>
    <!--Subtraction-->
    <div class="grid-container">
        <p><strong>2. Subtract two numbers.</strong></p>
    </div>
    <form action="subtraction.php" name="subtraction" method="post">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="medium-6 cell">
                    <label for="num_sub_1">Number 1
                    <input type="number" name="num_sub_1" placeholder="Enter a number">
                    </label>
                </div>
                <div class="medium-6 cell">
                    <label for="num_sub_2">Number 2
                    <input type="number" name="num_sub_2" placeholder="Enter a number">
                    </label>
                </div>
                <div class="medium-2 cell">
                    <button type="submit" class="success button" name="num_sub_sub">Calculate</button>
                </div>
            </div>
        </div>
    </form>
    <hr>
    <!--Multiplication-->
    <div class="grid-container">
        <p><strong>3. Multiply two numbers.</strong></p>
    </div>
    <form action="multiplication.php" name="multiplication" method="post">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="medium-6 cell">
                    <label for="num_mult_1">Number 1
                    <input type="number" name="num_mult_1" placeholder="Enter a number">
                    </label>
                </div>
                <div class="medium-6 cell">
                    <label for="num_mult_2">Number 2
                    <input type="number" name="num_mult_2" placeholder="Enter a number">
                    </label>
                </div>
                <div class="medium-2 cell">
                    <button type="submit" class="success button" name="num_mult_sub">Calculate</button>
                </div>
            </div>
        </div>
    </form>
    <hr>
    <!--Division-->
    <div class="grid-container">
        <p><strong>4. Divide sum of grades with number of subjects and get the average.</strong></p>
    </div>
    <div class="grid-container">
        <table class="hover">
            <thead>
            <tr>
                <th style="width=100%; text-align: center;">English</th>
                <th style="width=100%; text-align: center;">Art</th>
                <th style="width=100%; text-align: center;">Maths</th>
                <th style="width=100%; text-align: center;">History</th>
                <th style="width=100%; text-align: center;">Physics</th>
                <th style="width=100%; text-align: center;">Geography</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td style="text-align: center; vertical-align: middle;">5</td>
                <td style="text-align: center; vertical-align: middle;">4</td>
                <td style="text-align: center; vertical-align: middle;">4</td>
                <td style="text-align: center; vertical-align: middle;">3</td>
                <td style="text-align: center; vertical-align: middle;">5</td>
                <td style="text-align: center; vertical-align: middle;">4</td>
            </tr>
            </tbody>
        </table>
    </div>
    <form action="division.php" name="division" method="post">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="medium-6 cell">
                    <label for="num_div_1">Sum of grades
                    <input type="number" name="num_div_1" placeholder="Enter a number">
                    </label>
                </div>
                <div class="medium-6 cell">
                    <label for="num_div_2">Number of subjects
                    <input type="number" name="num_div_2" placeholder="Enter a number">
                    </label>
                </div>
                <div class="medium-2 cell">
                    <button type="submit" class="success button" name="num_div_sub">Calculate</button>
                </div>
            </div>
        </div>
    </form>
    <hr>
    <!--Exponentiation-->
    <div class="grid-container">
        <p><strong>5. Exponentiate some number.</strong></p>
    </div>
    <form action="exponentiation.php" name="exponentiation" method="post">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="medium-6 cell">
                    <label for="num_exp_1">Number
                    <input type="number" name="num_exp_1" placeholder="Enter a number">
                    </label>
                </div>
                <div class="medium-6 cell">
                    <label for="num_exp_2">Exponent
                    <input type="number" name="num_exp_2" placeholder="Enter an exponent">
                    </label>
                </div>
                <div class="medium-2 cell">
                    <button type="submit" class="success button" name="num_exp_sub">Calculate</button>
                </div>
            </div>
        </div>
    </form>
    <hr>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>

</body>
<?php
include "footer.html";
?>
</html>
