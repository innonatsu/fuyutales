<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
//echo md5('open');
session_start();
if($_SESSION['type'] == 0)
{
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <center>
            <h1>Hidden Bank Admin</h1>
            <hr/>
            <h2>Create Super Users</h2>
            <table style="border: 0;">
                <tr>
                    <td style="margin: 2%;padding-right: 10px; border: 1px solid red">
                        <h2>List of Users</h2>
                        <?php
                            $con = mysql_connect("localhost", "root", "");
                            mysql_select_db("prac2");
                            $q = "select * from users";
                            //echo $q;
                            $rs = mysql_query($q) or die(mysql_error());

                            if($rs != FALSE){
                                $rows = mysql_num_rows($rs);
                                $i = 1;
                                if($rows > 0){
                                    //echo 'R: '.$rows;
                                    while($row = mysql_fetch_array($rs)){
                                        echo "<p>".$i.": ".$row['fullname']."\t".$row['accountNumber']."</p>";
                                        $i++;
                                    }
                                }
                            }
                        ?>
                    </td>
                    <td>
                        <form method="get" name="register" action="sudos.php">
                            <label>username:</label><br/><input type="text" name="username" ><br/>
                            <label>fullname:</label><br/><input type="text" name="fullname" ><br/>
                            <label>account number:</label><br/><input type="text" name="accountNumber" ><br/>
                            <label>password:</label><br/><input type="password" name="password" ><br/>
                            <label>confirm password:</label><br/><input type="password" name="password2" ><br/>
                            <input type="submit" value="Grant Access" />
                        </form>
                    </td>
                </tr>
                </table>
            <hr/>
            <h2>Get User Info</h2>
            <form method="get" name="register" action="info.php">
                <label>Enter user ID:</label><br/><input type="text" name="userID" ><br/>
                <input type="submit" value="Pull Info" />
            </form>
        </center>
    </body>
</html>

<?php } ?>
