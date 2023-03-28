<!DOCTYPE html>
<head>
<style> 
    body{
        background-color: antiquewhite;
        color: black;
    }

    li{
        border:solid;
        width:10%;
    }
    .title{
        font-size: 50px;
    }
</style>

</head>


    <body>
        <div class = "title">
            MULTIPLICATION TABLE
        </div>
            <?php
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

