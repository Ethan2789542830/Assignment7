<!DOCTYPE html>
<?php
    session_start();        
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <h1>
            Your order has been placed! Thank you!
        </h1>
        <?php
            session_destroy();
        ?>
        <a href="../UserInfo.html"> Return to First Page</a>
    </body>
</html>