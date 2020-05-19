<?php
if (!session_id()) session_start();
?>
<html lang="de">
<head>
    <style>
        @import "index.css";
    </style>
    <title></title>
</head>
<body>
<?php
require("Inventory.php");

$inventory = new Inventory();
if ($inventory->reload()) {
    echo $inventory->getTable();
}else{
    echo "error";
}
if(!isset($_SESSION['inventory'])) {
    $_SESSION['inventory'] = $inventory;
}



?>
</body>
</html>