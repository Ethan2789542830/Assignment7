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
        <main> 
            <?php
                $_SESSION["shipping"] = $_GET["shipping"];
            ?>
            <section class="form-wrapper">
                <h1>Summary:</h1>
                <div class="box-wrapper">
                    <div id="name"><p>Name: <?= $_SESSION["first-name"].$_SESSION["last-name"] ?></p></div>
                    <br>
                    <div id="email"><p>Email: <?= $_SESSION["email"] ?></p></div>
                    <br>
                    <div id="birthday"><p>Birthday: <?= $_SESSION["birthday"] ?></p></div>
                    <br>
                    <div id="address"><p>Address: <?= $_SESSION["street"].$_SESSION["city"].$_SESSION["province"] ?></p></div>
                    <br>
                    <div id="shipping"><p>Shipping Choice: <?= $_SESSION["shipping"] ?></p></div>
                    <br>
                    <form action="CompletedForm.php" method="GET">
                        <input type="submit">
                    </form>
                </div>
            </section>
        </main>
    </body>
</html>