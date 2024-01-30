<?php
    if ($_POST){
        require '../config/mysql.php';
        require '../config/reg_connect.php';

        $mysql = new MySQL_Connection("$host","$user","$pw","$dbname");
        $mysql ->chaset = 'utf8';

        $user = $mysql->queryResult(
            "
            SELECT *  FROM `register`
            WHERE `username` = %s[username]  and  `password` = md5(%s[password])  
            ",
            array(
                'username' =>$_POST['Username'],// แทนที่ %s[username]
                'password' =>($_POST['Password']),// แทนที่ %s[password]
                              
            )
        );
        

        $total = $user->numRows;
        $rs = $user->fetch();

        if ($total === 1){

            //นำค่ามาเก็บใน SESSION

            $_SESSION['id'] = $rs['REGISTER_ID'];
            $_SESSION['username'] = $rs['USERNAME'];
            $_SESSION['password'] = $rs['PASSWORD'];
            $_SESSION['fullname'] = $rs['FULLNAME'];
            $_SESSION['position'] = $rs['POSITION'];
            $_SESSION['tel'] = $rs['PHONE'];
            $_SESSION['email'] = $rs['EMAIL'];
            $_SESSION['d_code'] = $rs['D_CODE'];
            $_SESSION['s_code'] = $rs['S_CODE'];
            $_SESSION['reg'] = $rs['STATUS_REG'];


            if($_SESSION['reg'] == '1'){
                echo("<script>");
                echo("window.location='app/?menu=main';");
                echo("</script>");
            }
            if($_SESSION['reg'] == '2'){
                echo("<script>");
                echo("window.location='app/?menu=main';");
                echo("</script>");

            }
            if($_SESSION['reg'] == '3'){
                echo("<script>");
                echo("window.location='app/?menu=main';");
                echo("</script>");
            }
            
        }else{
            ?>
            <div class="alert alert-danger">
                <a class="clos" data-dismiss="alert" aria-hidden="true">x</a>
                <center><strong>Username หรือ Password ไม่ภูกต้อง!!!</strong></center>
            </div>    
            <?php
        }
        $mysql->close();
    }
?>