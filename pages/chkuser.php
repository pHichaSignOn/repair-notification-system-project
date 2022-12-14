<?php
    if ($_POST){
        require '../config/mysql.php';
        require '../config/reg_connect.php';

        $mysql = new MySQL_Connection("$host","$user","$pw","$dbname");
        $mysql ->chaset = 'utf8';

        $user = $mysql->queryResult(
            "
            SELECT *  FROM `register`
            WHERE `username` = %s[username]  and  `password` = %s[password] 
            ",
            array(
                'username' =>$_POST['Username'],// แทนที่ %s[username]
                'password' =>($_POST['Password']),// แทนที่ %s[password]
                              
            )
        );
        

    }
?>