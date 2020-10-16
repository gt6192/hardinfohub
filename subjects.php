<?php
    include("bin/mysql.php");
    include("menu.php");
    error_reporting(0);
    $titleq = "SELECT * FROM subjects ORDER BY id";
    $titledata = mysqli_query(conect(), $titleq);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8" />
  <title>Subjects | Free Hardware And Networking Tutorials</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">                                      
  <script src="js/gt-pop.js"></script>
</head>
<body style="background-color: rgb(235, 231, 231);">
    
<?php
    menu();
?>

      <br>
        <div class="subject-division">
            <h2>Subjects</h2><br><br>
            <hr>
            <br><br>
            <?php
                $query = "SELECT * FROM subjects ORDER BY id";
                $data = mysqli_query(conect(), $query);
                while($r = mysqli_fetch_assoc($data))
                {
                    echo "<a style='text-decoration:none;' href='topics.php?sub=".$r['base']."'><p>".$r['subject']."</p></a>";
                }
            ?>
    <br><br>
    <hr>
    <br><br>
    </div>
    
    <?php about(); ?>
</body>
</html>
