<?php
// Get the full request URI
$uri = $_SERVER['REQUEST_URI'];

// Parse the URL to extract the path after flash.php
$parsedUrl = parse_url($uri);
$purl = explode(" . ", implode(" . ", $parsedUrl));
$path = isset($purl[1]) ? $purl[1] : '';

if (!$path) {
    echo "Invalid Flash file URL.";
    exit;
}

// Remove `flashfile=` manually since we aren't using GET (case insensitive)
$path = preg_replace('/^flashfile=/i', '', $path);
$path = ltrim($path, '/'); // Remove leading slashes
$path = preg_replace('/[^a-zA-Z0-9_\-\/.]/', '', $path); // Allow only safe characters
$path = str_replace(['..', '\\'], '', $path); // Block directory traversal

// Define the Flash file directory
$fdir_og = "../data/games/";
$flashDir = realpath("../data/games/"); // Root directory
$flashFilePath = realpath($flashDir . DIRECTORY_SEPARATOR . $path);

// Ensure the file exists and is within the allowed directory
if (!$flashFilePath || !file_exists($flashFilePath) || !str_starts_with($flashFilePath, $flashDir)) {
    echo "Flash file not found.";
    exit;
}

// Get the correct public URL for the file
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$fullFileUrl = "{$protocol}://{$host}/doger.net/data/games/{$path}";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash | Doger.net</title>
    <link rel="stylesheet" href="../data/css/games.css">
    <script src="../js/ruffle.js"></script>
</head>
<body>
    <a href="../"><img style="padding:5px;text-align:center;" src="../img/HomeLogo.png" width="150px"/></a>
    <span style="position:absolute;right:5px;top:20px;">
        <a href="#">GAMES</a> - <a href="../videos">VIDEOS</a> - <a href="../media">MEDIA</a> - <a href="../utilities">UTILITIES</a> - <a href="../others">OTHERS</a>
    </span>
    <div style="text-align:center;padding-top:100px;">
        <!-- Flash Embed using Ruffle.js for Flash emulation -->
        <div id="flash-container">
            <script>
                const flashFileUrl = "<?php echo htmlspecialchars($fullFileUrl, ENT_QUOTES, 'UTF-8'); ?>";
                const ruffle = window.RufflePlayer.newest();
                const player = ruffle.createPlayer();
                document.getElementById("flash-container").appendChild(player);
                player.load(flashFileUrl);
            </script>
        </div>
    </div>
</body>
</html>
