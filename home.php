<?php
    include("menu.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <title>HardInfoHub | free hardware and networking tutorials</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

<link rel="stylesheet" href="css/hardinfohub_menu.css">
<link rel="stylesheet" href="css/hardinfohub_new_design.css">
<link rel="stylesheet" href="css/hardinfohub_templets2.css">
<script src="js/gt-pop.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  
  
</head>
<body>
        <div class="grad1">

        <?php
          menu();
        ?>
          
           <script>
            function show_popup()
            {
              document.getElementById("popup_division").style.display="inline";
            }
            function hide_popup()
            {
              document.getElementById("popup_division").style.display="none";
            }
          </script>
        
            
          <div class="new-pop" id="popup_division">
              <p style="color:white; font-size:30px; cursor:pointer; display:inline-block" onclick="hide_popup()">X</p>
            <div>
              <form action="subscribe.php" method="POST">
    			<input type="email" class="gt-form-text" name="email" placeholder="Email ...." required><br><br>
    			<input type="submit" class="gt-button gt-form-btn-green" name="submit" value="SUBSCRIBE">
                </form>
            </div>
          </div>

          <div class="menuCont">
            <div class="menuLeft">
                <h1 name="h1">HardInfoHub</h1>
              <h2 name="p1">Hardware<br>Information<br>Hub</h2>
              <p name="p2">Scroll Down to Enhance your Career.</p>
              <p name="p3">HardInhoHub provides you free hardware and networking tutorials with theory and practicals too. Our courses includes Hardware, Operating System, Networking, CCNA and many more.</p>
              <button onclick="show_popup()">Subscribe</button>
            </div>

            <div class="menuRight"><img src="images/front.png"></div>
          </div>
          <div style="clear: both; width: 100%; height: 20px;"></div>
        </div>

        <!--For giving space between uper and lower section-->
        <div style="height: 200px; width: 100%;">

        </div>

        <div class="pardiv">
            <div class="discription">
                <h2>Hardware</h2><br>
                <p>
                    Free Hardware Tutorial for Biginners.<br>
                    Learn step by step computer hardware including all the hardware components and their uses.
                </p>
                <a href="topics.php?sub=hardware_topics"><button>Learn</button></a>
            </div>
            <div style="clear: both; width: 100%; height: 20px;"></div>
        </div>

        <div class="cont">

        <div class="left"><img src="images/hard.jpg"></div>

        <div class="discription-white right">
            <h2>Hardware<br>Practicals</h2><br>
            <p>
                Free Hardware Practicals for Biginners.<br>
                Learn step by step assembling of Computer hardware, and other common issues.
            </p>
            <a href="topics.php?sub=hardware_practicals"><button>Learn</button></a>
        </div>

        </div>

<div style="clear: both; width: 100%; height: 20px;"></div>
<br>
<br>
        </div>

        <div class="pardiv">
            <div class="discription">
                <h2>Operating System Practicals</h2><br>
                <p>
                    In this tutorial we are going to study about the installation of different operating systems. Which Includes Installation of Windows 7 and other versions, also this installation of Linux versions.
                </p>
                <a href="topics.php?sub=os_practicals"><button>Learn</button></a>
            </div>
        </div>

<div class="space"></div>
            

<?php
        about();
    ?>
</body>
</html>
