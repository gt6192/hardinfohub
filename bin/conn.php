<?php
    include("conn_details.php");
    
    class connection
    {
        function conn()
        {
            $details = new connection_details();
            $conn = mysqli_connect($details->getter_host(), $details->getter_dbuser(), $details->getter_dbpass(), $details->getter_dbname());
            return $conn;
        }
    }
?>