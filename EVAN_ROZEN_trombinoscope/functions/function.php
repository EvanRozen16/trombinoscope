<?php

    function get_tableau ($table)

    {

        $conn = new mysqli("localhost", "root", "", "trombinoscope");
        $result = $conn->query("SELECT * FROM `".$table."`");

        $tab = [];

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($tab, $row) ;
            }
        } 

        return $tab;

    }

 




 

    function get_ID ($table, $id) 

    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "trombinoscope";

        $conn = new mysqli($servername, $username, $password, $dbname);

        $result = $conn->query("SELECT id FROM `".$table."` ORDER BY id DESC LIMIT 1;");

        $tab = [];

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($tab, $row) ;
            }
        } 

        if ($tab == []) 
        
        {
            return 0;
        }

        else 

        {
            return $tab[0][$id];
        }
        
    }

 


