<?php
require("invItem.php");

class Inventory
{
    private $inventory = array();

    public function reload()
    {
        //MySQL Variablen
        $servername = "localhost";
        $username = "d0326886";
        $password = "8K6qhAHw63Qv72nx";
        $dbname = "d0326886";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        //Get Data from Table
        $sql = "SELECT * FROM inventar";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                //Create Item Objekt
                $item = new invItem();
                $item->setId($row["id"]);
                $item->setStrichcode($row["strichcode"]);
                $item->setName($row["name"]);
                $item->setHersteller($row["hersteller"]);
                $item->setLagerplatz($row["lagerplatz"]);

                //Item Objekt zu Array
                $this->inventory[] = $item;
            }
            $ouput = true;
        } else {
            $ouput = false;
        }
        $conn->close();
        return $ouput;
    }

    public function getTable(){
        $ouput = "";
        $ouput = $ouput . "<table id='inventar-table'>";
        $ouput = $ouput . "<tr>";
        $ouput = $ouput . "<th> Strichcode </th>";
        $ouput = $ouput . "<th> Name </th>";
        $ouput = $ouput . "<th> Hersteller </th>";
        $ouput = $ouput . "<th> Lagerplatz </th>";
        $ouput = $ouput . "</tr>";

        foreach ($this->inventory as $item){
            $ouput = $ouput . $item->getTableRow();
        }

        $ouput = $ouput . "</table>";
        return $ouput;
    }
}