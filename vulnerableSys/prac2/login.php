<?php
session_start();
$con = mysql_connect("localhost", "root", "");
mysql_select_db("prac2");
$u = $_REQUEST['username'];
$p = md5($_REQUEST['password']);
$q = "select * from users where username='$u' and password='$p'";
//echo $q;
$rs = mysql_query($q) or die(mysql_error());

if($rs != FALSE){
    $rows = mysql_num_rows($rs);
    if($rows > 0){
        //echo 'R: '.$rows;
        $row = mysql_fetch_array($rs);
        $_SESSION['type'] = $row['userType'];
        $_SESSION['sid'] = $row['id'];
        if($_SESSION['type'] == 0){
            header("Location: sudome.php");
        }
        else {
            $balance = rand(0, 1000000);
            $user = $row['fullname'];
            $acc = $row['accountNumber'];
        die("<center><strong>Welcome ".$user."</strong><br/><p>Account Number: ".$acc."</p><p>Your account balance is: R".$balance."</p></center>");
        
        }
        
    }else{
        die("<hr/><center>wrong password or username.</center><hr/>");
    }
}