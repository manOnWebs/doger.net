<?php
$t = "Games";
?>
<head>
    <title><?= $t; ?> - WiiNet</title>
    <link rel="stylesheet" href="/data/css/games.css">
</head>
<body>
	<a href="../"><img style="padding:5px;" src="../img/HomeLogo.png" width="150px"/></a><span style="position:absolute;right:5px;top:20px;"><a href="#">GAMES</a> - <a href="../videos">VIDEOS</a> - <a href="../media">MEDIA</a> - <a href="../utilities">UTILITIES</a> - <a href="../others">OTHERS</a></span>

	<div style="text-align:center;padding-top:100px;">
		What type of game would you like to play?<br><br>

		<button onclick="document.location='/games/usb'">USB Keyboard</button> <button onclick="document.location='/games/wii'">Made for Wii</button><br>
		<button onclick="document.location='/games/pc'">PC Games</button> <button onclick="document.location='/games/javascript'">Javascript Games</button><br>
	</div>
</body>