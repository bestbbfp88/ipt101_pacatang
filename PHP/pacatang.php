<!DOCTYPE html>
<head>
<style> 
    body{
        background-color: antiquewhite;
        color: black;
    }
</style>

</head>


    <body>
            <?php
            echo "Biancent F. Pacatang";
            $number = 5;
            echo "<ul style='list-style: none;' > ";
            for($i = 1; $i <= 10; $i++){
                $result = $number * $i;
                echo "<li> $number x $i = $result </li>";
            }
            echo "</ul>";
        ?>

    </body>

</html>

