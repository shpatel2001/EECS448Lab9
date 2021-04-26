<?php

    echo "<link href='style.css' rel='stylesheet' type='text/css'/>";

    $username = $_POST["un"];
    $password = $_POST["pw"];
    $aloeNum = $_POST["aloeQuantity"];
    $geraniumNum = $_POST["geraniumQuantity"];
    $tomatoNum = $_POST["tomatoQuantity"];
    $shipping = $_POST["ship"];

    $aloe_Total = 0;
    $tomato_Total = 0;
    $geranium_Total = 0;
    $shippingCost = 0;
    $Total_Cost = 0;

    if($shipping == "7 Day"){
        $shippingCost = 0.0;
    }
    else if($shipping == "5 Day"){
        $shippingCost = 5.0;
    }
    else
    {
        $shippingCost = 50.0;
    }

    $aloe_Total = $aloeNum*5.00;
    $tomato_Total = $tomatoNum*16.00;
    $geranium_Total = $geraniumNum*9.00;
    $Total_Cost = $aloe_Total+$tomato_Total+$geranium_Total+$shippingCost;  

    echo "<h1>Welcome</h1>";
    echo "<h3>User: " . $username . "</h3>";
    echo "<h3>Password: " . $password . "</h3>";
    
    echo "<table class='receipt'>";

    echo "<col width='200'>";
    echo "<col width='200'>";
    echo "<col width='200'>";
    echo "<col width='200'>";

    echo "<tr class='receipt'>";
    echo "<th class='receipt text'></td>";
    echo "<th class='receipt text'>Quantity</td>";
    echo "<th class='receipt text'>Cost Per Item</td>";
    echo "<th class='receipt text'>Sub Total</td></tr>";


    echo "<tr class='receipt'>";
    echo "<td class='receipt text'>Aloe</td>";
    echo "<td class='receipt number'>" . $aloeNum . "</td>";
    echo "<td class='receipt number'>$5.00</td>";
    echo "<td class='receipt number'>$" . $aloe_Total . "</td></tr>";


    echo "<tr class='receipt'>";
    echo "<td class='receipt text'>Tomato</td>";
    echo "<td class='receipt number'>" . $tomatoNum . "</td>";
    echo "<td class='receipt number'>$16.00</td>";
    echo "<td class='receipt number'>$" . $tomato_Total . "</td></tr>";


    echo "<tr class='receipt'>";
    echo "<td class='receipt text'>Geranium</td>";
    echo "<td class='receipt number'>" . $geraniumNum . "</td>";
    echo "<td class='receipt number'>$9.00</td>";
    echo "<td class='receipt number'>$" . $geranium_Total . "</td></tr>";


    echo "<tr class='receipt'>";
    echo "<td class='receipt text'>Shipping</td>";
    echo "<td colspan=2 class='receipt text'>" . $shipping . "</td>";
    echo "<td class='receipt number'>$" . $shippingCost . "</td></tr>";


    echo "<tr class='receipt'>";
    echo "<td colspan=3 class='receipt text'>Total Cost</td>";
    echo "<td class='receipt total'>$" . $Total_Cost . "</td></tr></table>";

?>