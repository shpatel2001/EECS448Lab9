<?php
    function multiply($x,$y){
        $z = $x * $y;
        return $z;
    }


    echo "<table class='multiply', border='1px'>";
    echo "<tr>";
    echo "<th>   </th>";
    for($z=1;$z<=100;$z+=1){
        echo "<th>" . $z . "</th>";
    }
    echo "</tr>";
    for($x=1;$x<=100;$x+=1){
        echo "<tr>";
        for($y=1;$y<=100;$y+=1){
            if($y==1){
                echo "<th>" . $x . "</th>";
            }
            echo "<td>".multiply($x,$y)."</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    
?>
