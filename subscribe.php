<?php
    include("menu.php");
    if($_POST['submit'])
    {
        include("bin/mysql.php");
        
        $email = $_POST['email'];
        $query = "INSERT INTO subscribe (`id`, `email`) VALUES (null, '$email')";
        $ins = mysqli_query(conect(), $query);
        if($ins)
        {
            ?>
            <!DOCTYPE html>
<html lang="en">
<head>
  <title>Subscribed Succesfully</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
  <script src="js/gt-pop.js"></script>

</head>
<body>
    
    <?php
        menu();
    ?>
<br><br><br><br>
        <div class="comsoon">
            <h1>Thanks for Subscribing Us!</h1>
        </div>
      <?php
        about();
      ?>
</body>
</html>
      <?php
        }
    }
    else{
        header("location:index.php");
    }
?>