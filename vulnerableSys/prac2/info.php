<?php
session_start();
$con = mysql_connect("localhost", "root", "");
mysql_select_db("prac2");
$u = $_REQUEST['userID'];
$q = "select * from users where id=$u";
//echo $q;
$rs = mysql_query($q) or die(mysql_error());

if($rs != FALSE){
    $rows = mysql_num_rows($rs);
    if($rows > 0){
        //echo 'R: '.$rows;
        $row = mysql_fetch_array($rs);
        
        $user = $row['fullname'];
        $acc = $row['accountNumber'];
        echo $user."\t".$acc."<br>";
        
    }else{
        die("<hr/><center>wrong password or username.</center><hr/>");
    }
}