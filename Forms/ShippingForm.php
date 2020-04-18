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
                $_SESSION["street"] = $_GET["street"];
                $_SESSION["city"] = $_GET["city"];
                $_SESSION["province"] = $_GET["province"];
                $_SESSION["postalCode"] = $_GET["postalCode"];
            ?>
            <section class="form-wrapper">
                <h1>Shipping Method</h1>
                <form action="ConfirmationForm.php" method="GET">
                    <div class="box-wrapper">
                        <div class="form-field">
                            <fieldset id="shipping">
                                <legend>Select a shipping method</legend>
                                <input type="radio" id="CanadaPost" name="shipping" value="Canada Post"><label for="CanadaPost">Canada Post</label> <br>
                                <input type="radio" id="FedEx" name="shipping" value="FedEx"><label for="FedEx">FedEx</label> <br>
                                <input type="radio" id="UPS" name="shipping" value="UPS"><label for="UPS">UPS</label> <br>
                            </fieldset>
                        </div>
                        <input type="submit">
                    </div>
                </form>
            </section>
        </main>
    </body>
</html>