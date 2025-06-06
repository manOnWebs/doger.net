<head>
    <title>USB Keyboard Games | Doger.net</title>
    <link rel="stylesheet" href="../data/css/games.css">
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Check if the user agent is not Wii
            if (!navigator.userAgent.includes("Wii")) {
                // Find all game links
                const gameLinks = document.querySelectorAll('a[href$=".swf"]');
                gameLinks.forEach(link => {
                    const flashFile = link.getAttribute("href");
                    link.href = `./ruffle.php?flashFile=${flashFile}`;
                });
            }
        });
    </script>
</head>
<body>
    <a href="../"><img style="padding:5px" src="../img/HomeLogo.png" width="150px"></a>
    <br><br><br><br><br><br>
    <h2>USB Keyboard Games</h2>
    <table>
        <tr>
            <td><a href="17/game.swf"><img src="../img/games/17.jpg"></a></td>
            <td><a href="18/game.swf"><img src="../img/games/18.jpg"></a></td>
            <td><a href="19/game.swf"><img src="../img/games/19.jpg"></a></td>
        </tr>
        <tr>
            <th>Shopping Cart Hero</th>
            <th>Territory War</th>
            <th>Super Mario Flash</th>
        </tr>
        <tr>
            <td><a href="21/game.swf"><img src="../img/games/21.jpg"></a></td>
            <td><a href="28/game.swf"><img src="../img/games/28.jpg"></a></td>
            <td><a href="29/game.swf"><img src="../img/games/29.jpg"></a></td>
        </tr>
        <tr>
            <th>Ultimate Flash Sonic</th>
            <th>Wubbzy's Amazing Adventure</th>
            <th>Experimental Penguins</th>
        </tr>
    </table>
</body>
