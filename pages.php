<?php
#PHP簡易分頁實作

#資料庫連結
$conn=mysql_connect('localhost','root','')or die("Error");
mysql_select_db('ithome_test');
$sql = "SELECT * FROM `good_idea` ORDER BY `id`";
$result = mysql_query($sql,$conn) or die("error");

$data_nums = mysql_num_rows($result);
$per =5;
$pages = ceil($data_nums/$per);
if(!isset($_GET["page"])){
    $page =1;
}else{
    $page = intval($_GET["page"]);
}
$start = ($page-1)*$per;
$result = mysql_query($sql.' LIMIT '.$start.', '.$per,$conn) or die("Error");
?>

<table>
<tr>
    <td style="text-align: center;">編號</td>
    <td style="text-align: center;">姓名</td>
</tr>
    <?php
        #輸出資料內容
        while($row = mysql_fetch_array ($result))
        {
            $id=$row['id'];
            $name=$row['name'];
    ?>
<tr>
    <td style="text-align: center;"><?php echo $id ?></td>
    <td style="text-align: center;"><?php echo $name ?></td>
</tr>
</table>
    <?php
        }
    ?>
<?php
    #分頁頁碼
    echo '共' .$data_nums.' 筆-在 '.$page.' 頁-共 '.$pages.'頁';
    echo "<br /><a href=?page=1>首頁</a> ";
    echo "第 ";
    for( $i=1 ; $i<=$pages ; $i++){
        if( $page-3 < $i && $i < $page+3){
            echo "<a href=?page=".$i.">".$i."</a>";
        }
    }
    echo " 頁 <a href=?page=".$pages.">末頁</a><br /><br />";
?>