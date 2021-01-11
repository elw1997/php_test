<?php
    if(!isset($_SESSION)){session_start();} //檢查SESSION是否啟動
    $_SESSION['check_word'] = ''; //設置存放檢查碼的SESSION

    header("Content-type: image/PNG"); //設置定義為圖片

    /*
        imgcode($nums,$width,$high)
        設置產生驗證碼圖示的參數
        $nums 生成驗證碼個數
        $width 圖片寬
        $high 圖片高
    */
    imgcode(5,120,30);

    //imgcode的function
    function imgcode($nums,$width,$height){
        //去除數字0和1 字母小寫O和L ，避免辨識不清楚
        $str = "23456789abcdefghijkmnpqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWSYZ";
        $code = '';
        for($i = 0; $i < $nums ; $i++ ){
            $code .= $str[mt_rand(0, strlen($str)-1)];
        }
        $_SESSION['check_word'] = $code;

        //建立圖示，設置寬度及高度與顏色等條件
        $image = imagecreate($width, $height ); //建立一幅空白圖像
        $black = imagecolorallocate($image, mt_rand(0,200), mt_rand(0,200), mt_rand(0,200)); //分配圖像顏色
        $border_color = imagecolorallocate($image, 21, 106, 235);
        $background_color = imagecolorallocate($image, 235, 236, 237);
        //建立圖示背景 (產生一個矩形圖像並填滿指定顏色) imagefilledrectangle ( $image , $x1 , $y1 , $x2 , $y2 , $color )
        imagefilledrectangle($image, 0, 0, $width, $height , $background_color); 
        //建立圖示邊框(產生一個指定顏色的矩形)
        imagerectangle($image, 0, 0, $width-1, $height -1, $border_color);
        //在圖示布上隨機產生大量躁點
        for($i = 0; $i < 80 ; $i++){
            imagesetpixel($image, rand(0, $width), rand(0, $height ), $black); //設定單一像素
        }
        $strx = rand(3, 8);
        for($i = 0; $i < $nums ; $i++){
            $strpos = rand(1, 6);
            imagestring($image, 5, $strx, $strpos, substr($code, $i, 1), $black);
            $strx += rand(10,30);
        }
        imagepng($image); //以PNG格式將圖像輸出
        imagedestroy($image); //釋放與圖像相關的任何資源
    }
?>