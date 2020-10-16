<?php
    session_start();
    include("bin/mysql.php");
    include("menu.php");
    error_reporting(0);
    $id = $_GET['id'];
    $table = $_GET['sub'];
    $titleq = "SELECT * FROM ".$table." WHERE id = $id";
    $titledata = mysqli_query(conect(), $titleq);
    while($titler = mysqli_fetch_assoc($titledata))
    {
      $title = $titler['topic'];
      $tags = $titler['tags'];
      $discription = $titler['discription'];
      $video = $titler['vid'];
    }
?>

<!DOCTYPE html> 
<html>
	<head>

      <meta charset="utf-8">
      <title><?php echo $title; ?></title>
      
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">  
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
				<script src="js/gt-pop.js"></script>
				<style> 
				    img{
				        width:50%;
				    }
				    @media screen and (max-width:780px){
				        img{
				            width:70%;
				        }
				    }
				</style>
				 
		</head>
				<body id="body" onload="but2()" style="background-color: rgb(235, 231, 231);">
				    
      <?php
        menu();
      ?>
				        <br>
				        <div class="content-outer">
                  <div class="left-div"> 
				            <div class="content-inner">
                                <?php
                                    $query = "SELECT * FROM $table WHERE id=$id";
                                    $data = mysqli_query(conect(), $query);
                                    while($r = mysqli_fetch_assoc($data))
                                    {
                                        $id2 = $r['id'];
                                        $topic = $r['topic'];
                                        $data = $r['data'];
                                        echo "<h1>".$topic."</h1><br><br>";
                                        if($video != null)
                                        {
                                          iframe($video);
                                        }
				                        echo "<br><div>".$data;
                                    }
                                ?>
                            </div><br>
				        </div> 
            </div>
            <div class="right-div">
              <div class="content-inner-right">
                <p>Topics</p>
                <ul>
                <?php
                  $query = "SELECT * FROM $table ORDER BY id";
                  $data = mysqli_query(conect(), $query);
                  while($r = mysqli_fetch_assoc($data))
                  {
                    echo "<li><a style='color:black;' href='content.php?id=".$r['id']."&sub=".$table."'>".$r['topic']."</a></li>";
                  }
                ?>
                </ul>
              </div><br>
              <div class="content-inner-right">
                <p>Subjects</p>
                <ul>
                <?php
                  $query = "SELECT * FROM subjects ORDER BY id";
                  $data = mysqli_query(conect(), $query);
                  while($r = mysqli_fetch_assoc($data))
                  {
                      echo "<li><a style='color:black;' href='topics.php?sub=".$r['base']."'>".$r['subject']."</a></li>";
                  }
                ?>
                </ul>
              </div>
            </div>
            <div style="clear:both;margin:00px;padding:00px;"></div>
          </div>
<br><br>
    </div> 
    <?php
        about();
    ?>
			    </body> 
</html>

<?php
function iframe($video_r)
    {
        echo "<style>iframe{width:90%; height:480px;}
        @media screen and (max-width:480px){
          iframe{width:90%; height:280px;}
        }
        @media screen and (max-width:380px){
          iframe{width:90%; height:280px;}
        }
        @media screen and (max-width:360px){
          iframe{width:90%; height:280px;}
        }
        @media screen and (max-width:320px){
          iframe{width:90%; height:280px;}
        }
        @media screen and (max-width:240px){
          iframe{width:90%; height:280px;}
        }
        </style>
        <center>".$video_r."</center>";  
    }
?>