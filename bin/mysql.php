<?php
    include("conn.php");

    function conect()
    {
        $do_connect = new connection();
        $done = $do_connect->conn();
        return $done;
    }
?>