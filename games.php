<?php
$t = "Games";
?>
<head>
    <title><?= $t; ?> - Doger.net</title>
    <link rel="stylesheet" href="./data/css/games.css">
</head>
<body>
	<a href="../"><img style="padding:5px;" src="../img/HomeLogo.png" width="150px"/></a><span style="position:absolute;right:5px;top:20px;"><a href="#">GAMES</a> - <a href="../videos/index.php">VIDEOS</a> - <a href="../media/index.php">MEDIA</a> - <a href="../utilities/index.php">UTILITIES</a> - <a href="../others/index.php">OTHERS</a></span>

	<div style="text-align:center;padding-top:100px;">
		What type of game would you like to play?<br><br>

		<button onclick="document.location='./games/usb.php'">USB Keyboard</button> <button onclick="document.location='./games/wii.php'">Made for Wii</button><br>
		<button onclick="document.location='./games/pc.php'">PC Games</button> <button onclick="document.location='./games/javascript.php'">Javascript Games</button><br>
	</div>
</body>