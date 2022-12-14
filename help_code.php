
<?php
//// chkuser.php
?>
    <?php
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
    ?>
<?php
  //// 
?>

<?php
  /// location.php
?>
  <?php
       include '../../config/db_connect.php';
       $mysqli = connect();
       $sql="SET CHARACTER SET UTF8";
       query($sql);
   
       $data = $_GET['data'];
       $val = $_GET['val'];
       
       //var_dump($data);
       //var_dump($val);
       
        if ($data=="div_name") {            
            $mysql_dev = "SELECT * FROM division ORDER BY DIVISION_ID ASC";
            $objQuery = mysqli_query($mysqli,$mysql_dev)           
    ?>
            <select class="select form-control input-sm" id="div_nameVal" name="div_name" onChange="dochange('sec_name', this.value)">";
            <option value='0'>กรุณาเลือกแผนก :</option>
    <?php
            while($objResult = mysqli_fetch_array($objQuery))
            {                              
    ?>
            <option value='<?=$objResult["DIVISION_CODE"] ?>'><?=$objResult["DIVISION_NAME"];?></option>
    <?php 
            }
    ?>
            </select> 
    <?php        
            
            }else if($data == "sec_name"){
            $mysql_sec = "SELECT * FROM section WHERE DIVISION_CODE  = $val ORDER BY SECTION_ID  ASC";
            $objQuery = mysqli_query($mysqli,$mysql_sec);       
    ?>
            <select class="select form-control input-sm" id="sec_nameVal" name="sec_name">";
            <option value='0'>กรุณาเลือกฝ่าย :</option>
    <?php
            while($objResult = mysqli_fetch_array($objQuery))
            { 
    ?>
            <option value='<?=$objResult["SECTION_ID"] ?>'><?=$objResult["SECTION_NAME"];?></option>
    <?php 
            }
    ?>        
            </select>
    <?php
            }
    ?>
<?php
  /// 
?>
<?php
  /// location_chang.php
?>
<script language=Javascript>
        function Inint_AJAX() {
          try { return new ActiveXObject("Msxml2.XMLHTTP");  } catch(e) {} //IE
          try { return new ActiveXObject("Microsoft.XMLHTTP"); } catch(e) {} //IE
          try { return new XMLHttpRequest(); } catch(e) {} //Native Javascript
          alert("XMLHttpRequest not supported");
          return null;
        };

        function dochange(src, val) {
             var req = Inint_AJAX();
             req.onreadystatechange = function () { 
                  if (req.readyState==4) {
                       if (req.status==200) {
                            document.getElementById(src).innerHTML=req.responseText; 
                       } 
                  }
            };
            req.open("GET", "location.php?data="+src+"&val="+val);
            req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8");
            req.send(null); //ส่งค่า
        }

        window.onLoad=dochange('div_name', -1);     
</script>
<?php
 /// 
?>