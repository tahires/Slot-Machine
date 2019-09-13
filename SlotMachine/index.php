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
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h1>The Virtual Slot Machine!</h1>

        <table>
            <?php
            $img = array("apple", "cherry", "grapes", "lemon", "orange", "pear", "watermelon");
            $name = $_POST["name"];
            $bet = $_POST["bet"];
            $credit = $_POST["credit"];
//            $creditNew = $credit - $bet;

            $a = rand(0, 5);



            $apple;
            $cherry;
            $grapes;
            $lemon;
            $orange;
            $pear;
            $water;
            for ($i = 0; $i <= 2; $i++) {
                $a = rand(0, 5);
                $card = $img[$i];
                echo "<td><img src='image/$img[$a].png'></td>";
                if ($img[$a] === "apple") {
                    $apple++;
                } elseif ($img[$a] === "cherry") {
                    $cherry++;
                } elseif ($img[$a] === "grapes") {
                    $grapes++;
                } elseif ($img[$a] === "lemon") {
                    $lemon++;
                } elseif ($img[$a] === "orange") {
                    $orange++;
                } elseif ($img[$a] === "pear") {
                    $pear++;
                } else {
                    $water++;
                }
            }
            ?>

        </table>
        <form action="index.php" method="POST" name="form1">

            <?php
            echo "<div>Name
            <input type='text' name='name' value =$name></div> ";
            if ($apple >= 2 or $water >= 2 or $orange >= 2 or $cherry >= 2or $grapes >= 2or $lemon >= 2 or $pear >= 2) {
                $creditNew = $credit + $bet;
            } else
                $creditNew = $credit - $bet;
            echo "<div>bet
            <input type='text' name='bet' value = $bet > Credit
            <input type='text' name='credit' value= $creditNew readonly='true'> ";
            echo "<div ><input type = 'submit' Value='spinit' id='spin'></div>";

            if ($apple >= 2 or $water >= 2 or $cherry >= 2or $grapes >= 2or $lemon >= 2 or $pear >= 2 or $orange >= 2) {
                echo "<h2>you win $" . $bet . " </h2>";
            }
            ?>


        </div>
    </form>
</body>
</html>
