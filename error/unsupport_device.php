<?php
require_once('./lib/BrowserDetection.php');

$useragent = $_SERVER['HTTP_USER_AGENT'];

$bd = new foroco\BrowserDetection();
$isDS = strpos($useragent, 'Nintendo DS') !== false;
$isPSP = strpos($useragent, 'PlayStation Portable') !== false;
$isTizen = strpos($useragent, 'Tizen') !== false && strpos($useragent, 'SMART-TV') !== false;

if ($isDS) {
    $device = "Nintendo DS";
} elseif ($isPSP) {
    $device = "PlayStation Portable (PSP)";
} elseif ($isTizen) {
    $device = "Samsung Smart TV";
} else {
    $deviceinf = $bd->getDevice($useragent);
    $osinf = $bd->getOS($useragent);
    $ostitle = is_array($osinf) && isset($osinf['os_title']) ? $osinf['os_title'] : 'Unknown';
    $devicetype = is_array($deviceinf) && isset($deviceinf['device_type']) ? $deviceinf['device_type'] : 'Unknown';
    $device = $ostitle . " " . $devicetype;
}

$messages = [
    "Nintendo DS" => "Hey, buddy, the DS isn't powerful enough for this...",
    "PlayStation Portable (PSP)" => "The PSP? Really? You should be using a computer or a phone for this site!",
    "Samsung Smart TV" => "why are you trying to visit this on a smart tv? not a good experience.",
];

$message = $messages[$device] ?? "Your device is not supported. Please use a modern device for the best experience.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unsupported Device - The Dogernet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            background-color: #f9f9f9;
            color: #333;
        }
        h1 {
            color: #d9534f;
        }
        p {
            font-size: 18px;
            margin: 10px 0;
        }
        a {
            color: #0275d8;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Unsupported Device</h1>
    <p><?php echo isset($message) ? htmlspecialchars($message) : 'Your device is not supported.'; ?></p>
    <p>Detected device: <strong><?php echo isset($device) ? htmlspecialchars($device) : 'Unknown'; ?></strong></p>
    <p><a href="https://browsehappy.com" target="_blank" rel="noopener noreferrer">Learn more about upgrading your device</a></p>
</body>
</html>