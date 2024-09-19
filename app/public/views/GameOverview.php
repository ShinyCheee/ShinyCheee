
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GameOn</title>
    <link rel="stylesheet" href="../css/GameOverview.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../js/GameOverview.js"></script>
</head>
<body>
<div id="gameOverviewOverlay"></div>
<h1>BeerTool</h1>
<button id="editGameTable">edit</button>
<table id="gameTable">
    <thead>
    </thead>
    <tbody>
    <?php
//    foreach ($players as $player) {
//        print_r("<div>" . $player . "</div>");
//    }
    print_r($points);
    ?>
    </tbody>
</table>
<button id="startRound">Start</button>
</body>
</html>
