<?php
    function menu()
    {
        echo "<link rel='stylesheet' href='css/hardinfohub_new_design.css'>
        <script src='js/gt-pop.js'></script>
        <div class='navigation-bar'>
        <a href='index.php'><p>HardInfoHub</p></a>
        <img src='images/menu.png' style='width:30px' onclick='menu_popup()'>
      </div><br><br><br>

      <div class='navigation-bar-menu-hid' id='nev_menu'>
        <img src='images/close.png' style='width:30px; float:right;' onclick='menu_popup_hide()'><br><br>
        <a href='index.php'>Home</a>
        <a href='subjects.php'>Subjects</a>
      </div>";
    }
    
    function about()
    {
        echo "<div class='footer_menu'>
        <footer>
        <a href=''>About us</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a>private policies</a>
        <br><br>
          <strong>
          &#169; GT's Production Technologies 2020 | Made With Love
          </strong>
        </footer>
      </div>";
    }
?>