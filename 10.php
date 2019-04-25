<?php
$liczba1 =  $_POST["l1"];
$liczba2 =  $_POST["l2"];
$znak =  $_POST["znak"];
switch ($znak) {
    case "+":
        echo $liczba1+$liczba2;
        break;
    case "-":
        echo $liczba1+$liczba2;
        break;
    case "*":
        echo $liczba1*$liczba2;
        break;
    case "/":
        if ($liczba2 == 0) {
            echo "DZIELENIE PRZEZ 0";
        }
        else {
            echo $liczba1/$liczba2;
        }
        break;
    default:
        echo "podaj normalny znak";
}
?>