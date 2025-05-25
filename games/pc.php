<?php
$t = "PC Games";
?>
<head>
    <title><?= $t; ?> - Doger.net</title>
    <link rel="stylesheet" href="/data/data/css/games.css">
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
    <a href="/"><img style="padding:5px" src="/img/HomeLogo.png" width="150px"></a>
    <br><br><br><br><br><br>
        
    <h2>PC Games</h2>
    <table>
        <tr>
            <td><a href="/data/games/1/game.swf"><img src="/img/games/1.jpg"></a></td>
            <td><a href="/data/games/2/game.swf"><img src="/img/games/2.jpg"></a></td>
            <td><a href="/data/games/3/game.swf"><img src="/img/games/3.jpg"></a></td>
        </tr>
        <tr>
            <th>Escaping The Prison</th>
            <th>Interactive Buddy</th>
            <th>Papa's Pizzeria</th>
        </tr>
        <tr>
            <td><a href="/data/games/4/game.swf"><img src="/img/games/4.jpg"></a></td>
            <td><a href="/data/games/5/game.swf"><img src="/img/games/5.jpg"></a></td>
            <td><a href="/data/games/6/game.swf"><img src="/img/games/6.jpg"></a></td>
        </tr>
        <tr>
            <th>Breaking the Bank</th>
            <th>McDonald's Video Game</th>
            <th>Mii Maker Flash Edition</th>
        </tr>
        <tr>
            <td><a href="/data/games/7/game.swf"><img src="/img/games/7.jpg"></a></td>
            <td><a href="/data/games/8/game.swf"><img src="/img/games/8.jpg"></a></td>
            <td><a href="/data/games/9/game.swf"><img src="/img/games/9.jpg"></a></td>
        </tr>
        <tr>
            <th>The Impossible Quiz</th>
            <th>Pico's School</th>
            <th>Windows RG</th>
        </tr>
            <td><a href="/data/games/10/gamesmenu.swf"><img src="/img/games/10.jpg"></a></td>
            <td><a href="/data/games/11/game.swf"><img src="/img/games/11.jpg"></a></td>
            <td><a href="/data/games/12/game.swf"><img src="/img/games/12.jpg"></a></td>
        </tr>
        <tr>
            <th>2008.Pumkin.com</th>
            <th>Simpsons Home Interactive</th>
            <th>3D Chess</th>
        </tr>
        </tr>
            <td><a href="/data/games/26/game.swf"><img src="/img/games/26.jpg"></a></td>
            <td><a href="/data/games/27/game.swf"><img src="/img/games/27.jpg"></a></td>
            <td><a href="/data/games/29/game.swf"><img src="/img/games/29.jpg"></a></td>
        </tr>
        <tr>
            <th>Factory Balls</th>
            <th>Oshidama</th>
            <th>Experimental Penguins</th>
        </tr>
        </tr>
            <td><a href="/data/games/30/game.swf"><img src="/img/games/30.jpg"></a></td>
        </tr>
        <tr>
            <th>Riddle School</th>
        </tr>
    </table>
</body>