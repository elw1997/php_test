<?php
    header("Content-Type:text/html;charset=utf-8");
    $select_op=$_GET['select_op'];
    if($select_op != ""){
        $select_op=$_GET['select_op'];
        if($select_op == "1"){
            echo "你選擇到1的選擇";
        }else if($select_op == "2"){
            echo "你選擇到2的選項";
        }else if($select_op == "3"){
            echo "你選擇到3的選項";
        }
    }else{
        echo "請選擇一個選項";
    }

    // $select_op=$_POST['select_op'];
    // if($select_op != ""){
    //     if($select_op == "1"){
    //         echo "你選擇到1的選項";
    //     }else if ($select_op == "2"){
    //         echo "你選擇到2的選項";
    //     }else if($select_op == "3"){
    //         echo "你選擇到3的選項";
    //     }
    // }else{
    //     echo "請選擇一個選項";
    // }

?>