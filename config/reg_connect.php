<?php
    $host="localhost";
    $user="root";
    $pw="";
    $dbname="com_repair";
    //date_default_timezone_set("Asia/Bangkok");
    $mysql=new MySQL_Connection("$host","$user","$pw","$dbname");
    $mysql->charset='utf8';
?>    
