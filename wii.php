<!DOCTYPE html>
<html>
<head>
    <title>The Dogernet</title>
    <link rel="stylesheet" href="data/css/home.css" type="text/css">
    <style>
        body {
            text-align: center;
        }
        .menu {
            padding-top: 220px;
        }
        .marquee-container {
            background-color: #000;
        }
        .marquee-text {
            color: yellow;
        }
        #tick2 {
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="menu">
        <a href="./games.php">GAMES</a> - 
        <a href="./videos">VIDEOS</a> - 
        <a href="./media">MEDIA</a> - 
        <a href="./utilities">UTILITIES</a> - 
        <a href="./others">OTHERS</a> - 
        <a href="./credits">CREDITS</a>
    </div>
    <br>
    <div class="marquee-container">
        <div class="marquee-text">Welcome to the Wii's Dogernet Channel!</div><!--The Wii is awesome-->
    </div>
    <br>
    <span id="tick2"></span>

    <script type="text/javascript">
        function show2() {
            var thelement = document.getElementById("tick2");
            var Digital = new Date();
            var hours = Digital.getHours();
            var minutes = Digital.getMinutes();
            var seconds = Digital.getSeconds();
            var dn = "PM";
            if (hours < 12) dn = "AM";
            if (hours > 12) hours = hours - 12;
            if (hours == 0) hours = 12;
            if (minutes <= 9) minutes = "0" + minutes;
            if (seconds <= 9) seconds = "0" + seconds;
            var ctime = hours + ":" + minutes + ":" + seconds + " " + dn;
            thelement.innerHTML = ctime;
            setTimeout(show2, 1000);
        }
        window.onload = show2;
    </script>
</body>
</html>
