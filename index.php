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
        <link rel="stylesheet" type="text/css" href="main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body><div class="content">
            <h1>Please login or sign up</h1>
            <form id="login_form" action="login.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="username" value="" placeholder="Username" required="required"/>
                
                <input type="password" name="password" value="" placeholder="Password" required="required"/>
                
                <input type="checkbox"/> Login as administrator<br/>
               
                <input type="submit" value="Login" name="login" />
            </form>
            
            <form id="logon_form" action="login.php" method="POST" enctype="multipart/form-data">
               <input type="text" name="firstName" value="" placeholder="First Name" required="required"/>
               
               <input type="text" name="lastName" value="" placeholder="Last Name" required="required"/>
              
               <input type="text" name="username" value="" placeholder="Username" required="required"/>
               
               <input type="password" name="password" value="" placeholder="Password" required="required"/>
               
               <input type="submit" value="Sign Up" name="logon" />
           </form>
        </div>
    </body>
</html>
