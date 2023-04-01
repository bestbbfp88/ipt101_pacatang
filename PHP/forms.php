<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        .name{
            font-size:4ch;
            font-weight: bold;
        }
    </style>
</head>
<body>
   <?php 
   if($_SERVER["REQUEST_METHOD"] == "POST"){?>
      <div class="name">  Hello  <?php  echo $_POST["fname"];?> <?php  echo $_POST["lname"];?>! <br>
        Your Email is  <?php  echo $_POST["email"];?><br>
        Your Password has  <?php  echo strlen($_POST["password"]);?> characters </div>
        <br>
        <?php 
        if($_POST["password"] == $_POST["cpassword"]){
            
            echo "Your password is equal to confirm password";
        }else{
            echo "Password is incorrect please try again";
        }
        ?>
    <?php
       } else{
            echo "YOU ARE NOT ALLOWED TO ACCESS THIS PART OF A WEBSITE";
        }
    ?>
    
        
</body>
</html>