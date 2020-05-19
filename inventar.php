
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


if ($inventory->reload()) {
    echo $inventory->getTable();
}else{
    echo "error";
}




?>
</body>
</html>