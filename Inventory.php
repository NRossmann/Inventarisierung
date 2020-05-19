<?php
require("invItem.php");
$inventory = new Inventory();
class Inventory
{
    private $inventory = array();

    public function reload()
    {

        $conn = $this->getMYSQLConn();

        //Get Data from Table
        $sql = "SELECT * FROM inventar";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                //Create Item Objekt
                $item = new invItem();
                $item->setId($row["id"]);
                $item->setStrichcode($row["strichcode"]);
                $item->setMenge($row["menge"]);
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

    private function getMYSQLConn(){
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

        return $conn;
    }

    public function getTable(){
        $ouput = "";
        $ouput = $ouput . "<table id='inventar-table'>";
        $ouput = $ouput . "<tr class='inventar-table-tr'>";
        $ouput = $ouput . "<th class='inventar-table-th'> Strichcode </th>";
        $ouput = $ouput . "<th class='inventar-table-th'> Menge </th>";
        $ouput = $ouput . "<th class='inventar-table-th'> Name </th>";
        $ouput = $ouput . "<th class='inventar-table-th'> Hersteller </th>";
        $ouput = $ouput . "<th class='inventar-table-th'> Lagerplatz </th>";
        $ouput = $ouput . "</tr>";

        foreach ($this->inventory as $item){
            $ouput = $ouput . $item->getTableRow();
        }

        $ouput = $ouput . "</table>";
        return $ouput;
    }

    public function newStrichcode(){
        $conn = $this->getMYSQLConn();
        $sql = "select strichcode from inventar ORDER BY id DESC LIMIT 1;";
        $result = $conn->query($sql);
        $lastCode =  $result->fetch_assoc()["strichcode"];
        return $lastCode + 1;
    }
}