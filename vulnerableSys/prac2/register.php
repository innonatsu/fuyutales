<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db("prac2");
$u = $_REQUEST['username'];
$f = $_REQUEST['fullname'];
$an = $_REQUEST['accountNumber'];
$p = md5($_REQUEST['password']);

$q = "insert into users(username,fullname,accountNumber,password,userType) values('$u','$f','$an','$p',1)";
$rs = mysql_query($q);

if($rs != FALSE){
   
        die("<center>registration was successful.</center>");
    
}else{
    die("<hr/><center>registration was successful.</center><hr/>");
}