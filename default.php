<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Dogernet</title>
    <link rel="stylesheet" href="data/css/home.css"/>
    <style>
        body {
            text-align: center;
        }

        /* Marquee effect using CSS animations */
        .marquee-container {
            overflow: hidden;
            background-color: black;
            color: yellow;
            white-space: nowrap;
            width: 100%;
        }

        @keyframes marquee-scroll {
            from { transform: translateX(100%); }
            to { transform: translateX(-100%); }
        }
    </style>
</head>
<body>

    <div style="padding-top: 220px;">
        <a href="./games.php">GAMES</a> - 
        <a href="./videos">VIDEOS</a> - 
        <a href="./media">MEDIA</a> - 
        <a href="./utilities">UTILITIES</a> - 
        <a href="./others">OTHERS</a> - 
        <a href="./credits">CREDITS</a><br>
    </div><br>

    <div class="marquee-container">
        <marquee class="marquee-text" id="marqueeText">Welcome to the Dogernet</marquee>
    </div><br>

    <!--search via google-->
    <script async src="https://cse.google.com/cse.js?cx=42f872eb334d247ad">
    </script>
    <div class="gcse-searchbox-only"></div>

    <br>
    
    <span id="clock" style="font-size: 24px;"></span>

    <script>
        // JavaScript Digital Clock
        function updateClock() {
            let now = new Date();
            let hours = now.getHours();
            let minutes = now.getMinutes();
            let seconds = now.getSeconds();
            let ampm = hours >= 12 ? "PM" : "AM";

            hours = hours % 12 || 12;
            minutes = minutes.toString().padStart(2, "0");
            seconds = seconds.toString().padStart(2, "0");

            document.getElementById("clock").textContent = `${hours}:${minutes}:${seconds} ${ampm}`;
        }
        setInterval(updateClock, 1000);
        updateClock();

        // Detect browser
        const ua = navigator.userAgent;
        const isChrome = /Chrome/.test(ua) && !/Edg|OPR/.test(ua); // exclude Edge and Opera
        const isFirefox = /Firefox/.test(ua);
        const isEdge = /Edg/.test(ua);
        const isOpera = /OPR/.test(ua);
        const isTor = /TorBrowser/.test(ua);
        const is3DS = /3DS/.test(ua);
        const isWiiU = /Wii U/.test(ua);

        // Base messages
        const messages = [
            "Welcome to the Dogernet",
            "Now with 100% more terribleness",
            "stay a while, please! :)",
            "did you know: <a href='https://www.youtube.com/playlist?list=PLtVNv5LHqiUMkdxa0eFlpZJEKxhyBzzr1'>Gwain Saga</a> is pretty underrated"
        ];

        // Add browser-specific messages
        if (isChrome) {
            messages.push("Running on Chrome (read: <i>shitty</i> chrome)");
        } else if (isFirefox) {
            messages.push("Hey hey hey, Firefox time");
        } else if (isEdge){
            messages.push("Why Edge? Why not <a href='https://www.mozilla.org/en-US/firefox/new/'>Firefox</a>?");
        } else if (isOpera) {
            messages.push("Opera? <i>Seriously</i>!? Eh, at least it isn't Chrome");
        } else if (isTor) {
            messages.push("You're using Tor. I don't know whether to salute you or be afraid.")
        } else if (is3DS) {
            messages.push("You're using a 3DS! Hats off to you using the last good portable Nintendo console.");
        } else if (isWiiU) {
            messages.push("You're using a Wii U. Why?");
        }
        const isDS = /DS/.test(ua);
        const isDSi = /DSi/.test(ua);
        if (isDSi) {
            messages.push("You're using a DSi? Cool!");
        } else if (isDS) {
            messages.push("You're using a DS... How are you seeing this?");
        }

        // Marquee logic
        const marquee = document.getElementById("marqueeText");
        let lastLeft = marquee.offsetLeft;

        function updateMarqueeMessage() {
            const newMessage = messages[Math.floor(Math.random() * messages.length)];
            marquee.innerHTML = newMessage;
        }

        function trackMarquee() {
            const currentLeft = marquee.offsetLeft;

            // Detect loop
            if (currentLeft > lastLeft) {
                updateMarqueeMessage();
            }

            lastLeft = currentLeft;
            requestAnimationFrame(trackMarquee);
        }

        trackMarquee();
    </script>
</body>
</html>