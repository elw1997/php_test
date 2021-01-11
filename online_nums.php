<?php

$db_localhost ="localhost";
$db_username = "root";
$db_password ="";
$db_name = "ithome_test";

$conn = mysql_connect ($db_localhost, $db_username, $db_password) or die ('Could not connect:' . mysql_error());
mysql_select_db($db_name) or die ('Could not select database');
mysql_query("SET NAMES UTF8");

$timeoutseconds = 300;
$online_time = time();
$timeout = $online_time-$timeoutseconds;

$check_select="SELECT `ip` FROM `online_user` WHERE `ip` ='".$_SERVER['REMOTE_ADDR']."'";
$result1=mysql_query($check_select);
$check_nums=mysql_num_rows($result1);

if($check_nums < 1){
    $insert = "INSERT INTO `online_user`(`online_time`, `ip`) VALUES ('$online_time','".$_SERVER['REMOTE_ADDR']."')";
    $result2=mysql_query($insert);
    if(!($result2)){
        echo "ERROR:語法執行失敗，請檢查是否與資料庫連結或語法是否錯誤";
    }
}
 
$select = "SELECT count(`ip`) FROM `online_user`";
$result4=mysql_query($select);
if(!($result4)){
    echo "ERROR：語法執行失敗，請檢查是否與資料庫連結或語法是否錯誤";
}
while($row=mysql_fetch_array($result4)){
    $user_nums=$row['count(`ip`)'];
}
mysql_close();

echo("目前上線人數：$user_nums 人");

?>