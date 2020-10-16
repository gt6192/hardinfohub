<?php
final class connection_details
    {
        private $host = "localhost";
        private $dbuser = "root";
        private $dbpass = "toor";
        private $dbname = "hardinfohub";

        function getter_host()
        {
            return $this->host;
        }

        function getter_dbuser()
        {
            return $this->dbuser;
        }

        function getter_dbpass()
        {
            return $this->dbpass;
        }
        
        function getter_dbname()
        {
            return $this->dbname;
        }
    }
?>
