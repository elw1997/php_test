<?php 
    // Conneting, selecting databese


    $db_link = mysql_connect("127.0.0.1","root","");
    if(!$db_link){
        die("Could not connect: " . mysql_error());
    }

    mysql_select_db("ithome_test") or die("Could not select database");
    
    // Performing SWL query
    $sql = "SELECT `username` FROM `member_account`";
    $result=mysql_query($sql);

    echo"<table>";
    while($row=mysql_fetch_array($result)){
        $username=$row['username'];
        if(strlen($username) != strlen(trim($username))){
            echo "<tr>";
            echo "<td>前後有加入空白的問題字串：" .$username. "</td>";
            echo "<td>原來字數：" .strlen($username). "</td>";
            echo "<td>去除前後空白字數：" .strlen(trim($username)). "</td>";
            echo"</tr>";
        }
    }
?>