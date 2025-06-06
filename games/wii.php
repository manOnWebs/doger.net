<head>
        <title>Games | Doger.net</title>
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
        <h2>Made for Wii</h2>
        <table>
            <tr>
                <td><a href="16/game.swf"><img src="../img/games/16.jpg"></a></td>
                <td><a href="22/game.swf"><img src="../img/games/22.jpg"></a></td>
                <td><a href="23/game.swf"><img src="../img/games/23.jpg"></a></td>
            </tr>
            <tr>
                <th>Ski Simulator</th>
                <th>Duck Hunt</th>
                <th>Bubble Shooter</th>
            </tr>
            <tr>
                <td><a href="25/game.swf"><img src="../img/games/25.jpg"></a></td>
                <td><a href="31/game.swf"><img src="../img/games/31.jpg"></a></td>
                <td><a href="24/game.swf"><img src="../img/games/24.jpg"></a></td>
            </tr>
            <tr>
                <th>Double Wires</th>
                <th>Back To Nature</th>
                <th>Curveball</th>
            </tr>
        </table>
</body>
