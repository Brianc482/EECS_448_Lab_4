<!DOCTYPE HTML>
<html>
<head>
<h2>Multiplication table:</h2>
</head>
<body>
    <?php
	$rows = 100;
	$columns = 100;
    echo "<table border=\"1\">";
        for ($i = 1;$i <= $rows;$i++){
            echo'<tr>';
            for ($j = 1;$j <= $columns;$j++)
                echo '<td>' .$i*$j.'</td>';
           echo '</tr>';
        }
	echo"</table>";
    ?>
</body>
</html>