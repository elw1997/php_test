<?php
#使用$_SERVER擷取網址個別值
    echo "HTTP_HOST:".$_SERVER['HTTP_HOST']."<hr />";
    echo "SERVER_NAME:".$_SERVER['SERVER_NAME']."<hr />";
    echo "REQUEST_URI:".$_SERVER['REQUEST_URI']."<hr />";
    echo "PHP_SELF:".$_SERVER['PHP_SELF']."<hr />";
    echo "QUERY_STRING:".$_SERVER['QUERY_STRING']."<hr />";
?>