<?php
#切割與組合函式
    $string ="hello world!";

    $cutchar = explode(" ",$string);
    $addchar = implode(" ", $cutchar);

    echo "本文:" .$string;
    echo "<br /><br />";

    echo "explode後: <br />";

    $nums=count($cutchar);
    for($x=0; $x < $nums; $x++){
        echo "\$cutchar[".$x."]:".$cutchar[$x]."<br />";
    }

    echo "<br />";
    echo "implode後:".$addchar;
?>