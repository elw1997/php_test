<?php
    $db_local="127.0.0.1";
    $db_username="root";
    $db_passwd="";
    $db_select="ithome_test";

    $conn=mysql_connect($db_local,$db_username,$db_passwd);
    mysql_select_db($db_select);

    //預設的辨識名稱事term
    $query=mysql_query("SELECT * FROM `good_idea` WHERE `name` like '%" .$_GET['term'] . "%'");
    while($row=mysql_fetch_array($query)){
        $name[] = $row['name'];
    }
    mysql_close();

    echo json_encode($name); //輸出的格式必須事json

?>