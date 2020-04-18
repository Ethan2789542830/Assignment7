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
                $_SESSION["first-name"] = $_GET["first-name"];
                $_SESSION["last-name"] = $_GET["last-name"];
                $_SESSION["email"] = $_GET["email"];
                $_SESSION["birthday"] = $_GET["birthday"];
            ?>
            <section class="form-wrapper">
                <h1>Address Form</h1>
                <h2>Now we need your address <?= $_SESSION["first-name"] ?></h2>
                <form action="ShippingForm.php" method="GET">
                    <div class="box-wrapper">
                        <div class="form-field">
                            <label for="street">Street: </label>
                            <input id="street" required name="street" type="text">
                            <div class="clear"></div>
                        </div>
                        <div class="form-field">
                            <label for="city">City: </label>
                            <input id="city" required name="city" type="text">
                            <div class="clear"></div>
                        </div>
                        <div class="form-field">
                            <label for="province">Province: </label>
                            <select name="province" id="province">
                                <option value="">-- Select Province --</option>
                                    <option value="Ontario">Ontario</option>
                                    <option value="Nova Scotia">Nova Scotia</option>
                                    <option value="Newfoundland">Newfoundland</option>
                                    <option value="British Columbia">British Columbia</option>
                                    <option value="Saskatchewan">Saskatchewan</option>
                                    <option value="Alberta">Alberta</option>
                                    <option value="Manitoba">Manitoba</option>
                                    <option value="Quebec">Quebec</option>
                                    <option value="PEI">PEI</option>
                                    <option value="New Brunswick">New Brunswick</option>
                                    <option value="Nunavut">Nunavut</option>
                                    <option value="Northwest Territories">Northwest Territories</option>
                                    <option value="Yukon">Yukon</option>
                            </select>
                        </div>
                        <div class="form-field">
                            <label for="postalCode"></label>
                            <input id="postalCode" required name="postalCode" type="text">
                            <div class="clear"></div>
                        </div>
                        <input type="submit">
                    </div>
                </form>
            </section>
        </main>
    </body>
</html>