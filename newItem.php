<html lang="de">
<head>
    <style>
        @import "index.css";
    </style>
    <title></title>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<script>
    $(document).ready(function () {
            $.get("newStrichcode.php", function (data) {
                $('#strichcode').val(data)
            });
    });
</script>
    <div class="wmfg_layout_0">
        <h2>Neuer Eintrag</h2>
        <form method="post">

            <ul class="wmfg_questions">

                <li class="wmfg_q">
                    <label class="wmfg_label" for="strichcode">Strichcode:</label>
                    <input type="number" class="wmfg_text" name="strichcode" id="strichcode" value="" />
                </li>


                <li class="wmfg_q">
                    <label class="wmfg_label" for="menge">Menge:</label>
                    <input type="number" class="wmfg_text" name="menge" id="menge" value="1" />
                </li>

                <li class="wmfg_q">
                    <label class="wmfg_label" for="name">Name:</label>
                    <input type="text" class="wmfg_text" name="name" id="name" value="" />
                </li>

                <li class="wmfg_q">
                    <label class="wmfg_label" for="hersteller">Hersteller:</label>
                    <input type="text" class="wmfg_text" name="hersteller" id="hersteller" value="" />
                </li>

                <li class="wmfg_q">
                    <label class="wmfg_label" for="lagerplatz">Lagerplatz:</label>
                    <input type="text" class="wmfg_text" name="lagerplatz" id="lagerplatz" value="" />
                </li>

                <li class="wmfg_q">
                    <input type="submit" name="new-item" value="Eintrag Abschicken"/>
                </li>

            </ul>

        </form>

    </div>
<div id="delete-item">
    <h2>Eintrag löschen</h2>
    <form method="post">
        <label for="strichcode-d">Strichcode</label>
        <input type="number" name="strichcode-d" id="strichcode-d"><br>
        <input type="submit" name="delete-item" value="Objekt löschen">
    </form>
</div>
<?php
require("Inventory.php");
if (isset($_POST["new-item"])){
    $strichcode = $_POST["strichcode"];
    $menge = $_POST["menge"];
    $name = $_POST["name"];
    $hersteller = $_POST["hersteller"];
    $lagerplatz = $_POST["lagerplatz"];
    echo $inventory->newItem($strichcode,$menge,$name,$hersteller,$lagerplatz);
}elseif(isset($_POST["delete-item"])){
    $strichcode = $_POST["strichcode-d"];
    echo $inventory->deleteItem($strichcode);
}
?>
</body>
</html>