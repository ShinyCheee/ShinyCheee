<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BeerTool</title>
    <link rel="stylesheet" href="../css/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../js/index.js"></script>

</head>
<body>
    <h1>BeerTool</h1>
    <h1> <?= $title ?> </h1>
    <form action="/" method="post">
        <button type="button" id="settings">settings</button>
        <fieldset id="additionalGameSettings" hidden>
            <label for="timerLength">Timer Length in seconds: </label>
            <input type="number" id="timerLength" value="300"/>
            <label for="tableAmount">Amount of tables: </label>
            <input type="number" id="tableAmount" value="1">
            <label for="teamSize">Team size: </label>
            <input type="number" id="teamSize" value="1">
            <div class="popup_footer">
                <button type="button" id="commitSettings">Commit</button>
                <button type="button" id="cancelSettings">Cancel</button>
            </div>
        </fieldset>
        <input type="text" id="newPlayerName" placeholder="Enter Player Name...">

        <button type="button" id="addNewPlayer">+</button>
        <button type="button" id="confirmGameSettings">start</button>
    </form>
</body>
</html>