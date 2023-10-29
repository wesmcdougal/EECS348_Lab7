<?php
if($_POST) {
    $num = $_POST["number"];
    echo '<link rel="stylesheet" href="style.css">';
    echo '<h2 style="text-align: center;">Multiplication Table for 1 to $num:</h2>';
    echo "<table border='2'>";

    echo "<tr><th></th>";
    for ($col = 1; $col <= $num; $col++) {
        echo "<th>$col</th>";
    }
    echo "</tr>";

    for ($row = 1; $row <= $num; $row++) {
        echo "<tr><th>$row</th>";
        for ($col = 1; $col <= $num; $col++) {
            echo "<td>" . ($row * $col) . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    echo"<br>";
    echo '<a href="practice4.html">Do more multiplication</a>';
    echo"<br>";
    echo"<br>";
    echo '<a href="index.html">Return to Home Page</a>';
}
?>
