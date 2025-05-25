<?php
    $isWii = strpos($_SERVER['HTTP_USER_AGENT'], 'Nintendo Wii') !== false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paintshop</title>
    <style>
        body {
            background-color: #000;
            margin: 0;
            padding: 0;
            text-align: center;
            color: #fff;
        }
        #player-container {
            width: 550px;
            height: 400px;
            margin: 20px auto;
        }
    </style>
    <?php if (!$isWii): ?>
    <script src="../../js/ruffle.js"></script>
    <?php endif; ?>
</head>
<body>
    <?php
    if ($isWii): ?>
        <!-- Fallback for Nintendo Wii -->
        <object type="application/x-shockwave-flash" data="tool.swf" width="550" height="400">
            <param name="wmode" value="transparent">
            <param name="allowScriptAccess" value="sameDomain">
            <param name="quality" value="low">
        </object>
    <?php else: ?>
        <!-- Modern browsers use Ruffle -->
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const ruffle = window.RufflePlayer.newest();
                const container = document.getElementById("player-container");
                const player = ruffle.createPlayer();
                container.appendChild(player);
                player.load("tool.swf");
            });
        </script>
        <div id="player-container"></div>
    <?php endif; ?>
	<a href="../../">HOME</a>
</body>
</html>