<head>
	<title>Media | Doger.net</title>
	<link rel="stylesheet" href="../data/css/media.css">
	<script>
        document.addEventListener("DOMContentLoaded", function () {
            // Check if the user agent is not Wii
            if (!navigator.userAgent.includes("Wii")) {
                // Find all game links
                const links = document.querySelectorAll('a[href$=".swf"]');
                links.forEach(link => {
                    const flashFile = link.getAttribute("href");
                    link.href = `./ruffle.php?flashFile=${encodeURIComponent(flashFile)}`;
                });
            }
        });
    </script>
</head>
<body>
	<a href="../"><img style="padding:5px;" src="../img/HomeLogo.png" width="150px"/></a><span style="position:absolute;right:5px;top:20px;"><a href=".../games">GAMES</a> - <a href="../videos">VIDEOS</a> - <a href="#">MEDIA</a> - <a href="../utilities">UTILITIES</a> - <a href="../others">OTHERS</a></span>
	<br><br><br><br><br><br>
	<span>Music and Animations from the Internet Channel.</span><br><br>
	<h2>Flash Animations</h2>
		<table>
			<tr>
				<td><a href="1/file.swf"><img src="../img/media/1.jpg"></a></td>
			</tr>
			<tr>
				<th>The Ultimate Showdown</span></th>
			</tr>
		</table>
</body>
