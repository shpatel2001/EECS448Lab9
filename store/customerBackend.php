<?php

    echo "<link href='style.css' rel='stylesheet' type='text/css'/>";

    $username = $_POST["un"];
    $password = $_POST["pw"];
    $aloeNum = $_POST["aloeQuantity"];
    $geraniumNum = $_POST["geraniumQuantity"];
    $tomatoNum = $_POST["tomatoQuantity"];

    $aloe_Total = 0;
    $tomato_Total = 0;
    $geranium_Total = 0;
    $Total_Cost = 0;

    echo "Username: " . $username ."<br>";
    echo "Password: " . $password . "<br>";
    echo "Aloes: " . $aloeNum ."<br>";
    echo "Tomatos: " . $tomatoNum . "<br>";
    echo "Geraniums: " . $geraniumNum . "<br>";

    echo "<h1>Welcome</h1>";
    echo "<h3>User: " . $username . "</h3>";
    echo "<h3>Password: " . $password . "</h3>";
    echo "<table class='Receipt'>";
    echo "<tr>";
    echo "<th></th>";
    echo "<th>Quantity</th>";
    echo "<th>Cost per Item</th>";
    echo "<th>Sub Total</th>";
    echo "</tr>";

?>