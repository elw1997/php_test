<?php
 # 小型計數器

 $file_name = "total_count.txt"; //檔案名稱
 $file + @file("$file_name"); //讀取檔案
 $open = @fopen("$file_name","w+");  //開啟檔案，要是沒有檔案將建立一份

 @fwrite($open,$file[0]+1); //寫入人數
 fclose($open); //關閉檔案
 echo "累計了："; 
 echo @$file[0]+1; //顯示檔案目前內容
?>