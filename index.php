

<?php
/*================
Question
Write a valid HTML + PHP Page that will count numbers from 1 to 1,000,000?
i.   Display every 10th number in the series in Bold
ii.  Display every 3rd number in the series in Italics
iii. Bonus: Underline every Prime number in this series.
===========*/

$num = 100;
for($i = 1; $i <=$num; $i++ ){
    if($i % 10 == 0){
        echo "<p>Every 10th number : <b>$i</b></p>";
    }else if($i % 3 == 0){
        echo "<p>Every third number : <i>$i</i></p>";
    }
    $div = 0;
    for($j = 2; $j<$i; $j++){
        if($i % $j == 0){
            $div = 1;
            break;
        }
    }
    if($i > 1 && $div == 0){
        echo "<p>Every prime number : <u>$i</u></p>";
    }
}

?>