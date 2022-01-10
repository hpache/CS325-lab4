<?php
$gift_days = array( "a partridge in a pear tree.", "two turtle doves,", "three french hens,",
    "four calling birds,", "five golden rings,", "six geese a-laying,", "seven swans a-swimming,",
    "eight maids a-milking,", "nine ladies dancing,", "ten lords a-leaping,", 
    "eleven pipers piping,", "twelve drummers drumming,"
);

function dayString($i) {

    if ($i == 1){
        return $i . "st";
    }
    elseif ($i == 2){
        return $i . "nd";
    }

    elseif ($i == 3) {
        return $i . "rd";
    }

    else {
        return $i . "th";
    }
}
?>
<?php
function countDown($i, $numDays){
    
    if ($i == 0 and $numDays > 1){ ?>
        <p> and <?= $GLOBALS['gift_days'][$i] ?> </p>
                <div> 
                    <img src='gift1.jpg' alt='an xmas gift'/>
                </div>
    <?php    
    }
    
    if ($i == 0 and $numDays == 1){ ?>
<p> <?= $GLOBALS['gift_days'][$i] ?> </p>
                <div>
                    <img src='gift1.jpg' alt='an xmas gift'/>
                </div>
    <?php
    }
    ?>

    <?php
    if ($i != 0){ ?>

                <p> <?= $GLOBALS['gift_days'][$i] ?> </p>
                <div>
        
        <?php
        for ($a = 0; $a <= $i; $a++){ ?>
            <img src='gift<?= $i+1 ?>.jpg' alt='an xmas gift'/>

        <?php
        }
        ?>
        </div>

        <?php
        return countDown($i - 1, $numDays);
    }
} ?>
<!DOCTYPE html>
<!-- 
    File: Lab4_hpache22.php
    Name: Henry Pacheco Cachon
    Class: CS325, January 2022
    Lab: 04
    Due: 10 January 2022
-->
<html lang="EN">

    <head>
        <title> This is a test </title>
        <link href="12days.css" type="text/css" rel="stylesheet"/>
    </head>


    <body>

    <h1>
        <img src="tree.gif" alt="xmas tree"/>
        12 Days of Christmas
        <img src="tree.gif" alt="xmas tree"/>
    </h1>

        <div class='box'>

            <?php

            for ($i = 0; $i <= 11; $i++) { 

            ?>

            <div class='day'>
                <p>
                    On the 
                    <strong> <?= dayString($i + 1) ?> </strong>
                    day of Christmas my true love gave to me... 
                </p>
                
                <?= countDown($i, $i + 1) ?>
        </div>
                <?php 
                } 
                ?>
            

        </div>

    </body>


</html>

        
