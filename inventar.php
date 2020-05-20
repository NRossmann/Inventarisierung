
<?php
require("Inventory.php");


if ($inventory->reload()) {
    echo $inventory->getTable();
}else{
    echo "Keine Objekte in der Datenbank.";
}
