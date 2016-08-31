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
    <body>
        <center>
            <h1>My Hidden Bank</h1>
            <hr/>
            <form method="get" name="login" action="login.php">
                <label>username: </label> <input type="text" name="username" >
                <label> password: </label> <input type="password" name="password" >
                <input type="submit" value="Login" />
            </form>
            <hr/>
            <h2>Create Account</h2>
            <form method="get" name="register" action="register.php">
                <label>username:</label><br/><input type="text" name="username" ><br/>
                <label>fullname:</label><br/><input type="text" name="fullname" ><br/>
                <label>account number:</label><br/><input type="text" name="accountNumber" ><br/>
                <label>password:</label><br/><input type="password" name="password" ><br/>
                <label>confirm password:</label><br/><input type="password" name="password2" ><br/>
                <input type="submit" value="Register" />
            </form>
        </center>
    </body>
</html>
