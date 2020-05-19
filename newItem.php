<?php
require("Inventory.php")
?>
<html lang="de">
<head>
    <title></title>
</head>
<body>
<form>
    <div style="width:600px" class="wmfg_layout_0">

        <form method="post" action="">

            <ul class="wmfg_questions">

                <li class="wmfg_q">
                    <label class="wmfg_label" for="strichcode">Strichcode:</label>
                    <input type="number" class="wmfg_text" name="strichcode" id="strichcode" value="" />
                </li>
                <button onclick="newStrichcode()">Strichcode generieren</button>

                <li class="wmfg_q">
                    <label class="wmfg_label" for="menge">Menge:</label>
                    <input type="text" class="wmfg_text" name="menge" id="menge" value="" />
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

            </ul>

        </form>

    </div>
</form>
<script>
    //TODO Get working
    function newStrichcode() {
        let request = new XMLHttpRequest();
        request.open("GET", "newStrichcode.php");
        request.addEventListener('load', function(event) {
            if (request.status >= 200 && request.status < 300) {
                console.log(request.responseText);
            } else {
                console.warn(request.statusText, request.responseText);
            }
        });
    }
</script>
</body>
</html>