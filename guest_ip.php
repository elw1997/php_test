<?php
#取得訪客IP方法與應用
    $guest_ip=$_SERVER['REMOTE_ADDR'];
    echo "您的IP是：".$guest_ip."<br />";

    $conn= mysql_connect('127.0.0.1','root','') or die("Error");
    mysql_select_db('ithome_test');

    $sql = "SELECT `guest_ip` FROM `guest_ip` WHERE `guest_ip`='$guest_ip'";
    $result=mysql_query($sql);
    $nums=mysql_num_rows($result);

    if($nums <= 0){
        $sql2 = "INSERT INTO `guest_ip`(guest_ip, number) VALUE ('$guest_ip', '1')";
        $result2=mysql_query($sql2);
        if($result2){
            echo "IP已經寫入";
        }else{
            echo "IP寫入失敗";
        }
    }else{
        $sql3="UPDATE `guest_ip` SET `number`=`number`+1,`view_date`=now() WHERE `guest_ip`='$guest_ip'";
        $result3=mysql_query($sql3);
        if($result3){
            echo "IP次數已更新";
        }else{
            echo "IP次數更新失敗";
        }
    }
?>