<?php
require_once('./lib/BrowserDetection.php');

$recommendedBrowsers = [
    "Google Chrome" => "https://www.google.com/chrome/",
    "Mozilla Firefox" => "https://www.mozilla.org/en-US/firefox/new/",
    "Opera" => "https://www.opera.com/",
];

$bd = new foroco\BrowserDetection();

$useragent = $_SERVER['HTTP_USER_AGENT'];

$browserInfo = $bd->getBrowser($useragent);
$browser = is_array($browserInfo) && isset($browserInfo['browser_title']) ? $browserInfo['browser_title'] : 'Unknown';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unsupported Browser - The Dogernet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        h1 {
            color: red;
        }
        p {
            font-size: 18px;
        }
        a {
            color: blue;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Unsupported Browser</h1>
    <p>We're sorry, but your browser is not supported. Please switch to a modern browser for the best experience.</p>
    <p>Detected browser: <strong><?php echo htmlspecialchars($browser); ?></strong></p>
    <p>Recommended browsers:</p>
    <ul>
        <?php foreach ($recommendedBrowsers as $name => $url): ?>
            <li><a href="<?php echo htmlspecialchars($url); ?>" target="_blank"><?php echo htmlspecialchars($name); ?></a></li>
        <?php endforeach; ?>
    </ul>
    <p><a href="https://browsehappy.com" target="_blank">Learn more about upgrading your browser</a></p>
</body>
</html>