
<?php
require("Inventory.php");


if ($inventory->reload()) {
    echo $inventory->getTable(0);
}else{
    echo "Keine Objekte in der Datenbank.";
}
