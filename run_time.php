<?php
    #計算程式執行過程的時間
    $start_time =date("H")*3600+date("i")*60+date("s");
    $start_time2 = microtime(true);

    //執行的程式碼
    sleep(1); //延遲sleep以秒計算
    //usleep(1000); //延遲usleep以微秒計算

    $end_time = date("H")*3600+date("i")*60+date("s");
    $end_time2 = microtime(true);

    echo "start_time：" .$start_time."秒<br />";
    echo "end_time：" .$end_time. "秒<br />";
    $time_total = $end_time - $start_time;
    echo "設定值為sleep(1)，執行了：".$time_total. "秒<br />";

    //-----------------------------------------------------

    echo "<hr>";

    echo "start_time2：" .$start_time2. "秒<br />";
    echo "end_time2"  .$end_time2. "秒 <br />";
    $time_total2 = $emd_time2 - $start_time2;
    echo "設定值為sleep(1)，執行了：" .$time_total2. "秒";
?>