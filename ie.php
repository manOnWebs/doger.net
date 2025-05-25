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
    <h1>ALERT: <a href="https://browsehappy.com">Upgrade your browser!</a></h1><p>Why are you using IE?</p>
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
        <div class="marquee-text">dogernet exploder</div> <!--lul-->
    </div>

    <br>
    <time id="tick2">
        <?php echo date("h:i:s A"); ?>
    </time>

    <script>
        setInterval(() => {
            const element = document.getElementById("tick2");
            const now = new Date();
            let hours = now.getHours();
            let minutes = now.getMinutes();
            let seconds = now.getSeconds();
            let ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12; // the hour '0' should be '12'
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;
            const timeString = `${hours}:${minutes}:${seconds} ${ampm}`;
            element.innerHTML = timeString;
        }, 1000);
    </script>
</body>
</html>
