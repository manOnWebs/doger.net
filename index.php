<?php
function edge() {
    // fuck off, msedge
   // no one likes you
  include("./error/edge.htm");
}

function unsupported($browser) {
    // Function to handle unsupported browsers
    include("./error/unsupport_browser.php");
    exit;
}

$isEdge = strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== false;
if ($isEdge) {                     // this is arbitrary, but
    edge();                       // you know
    exit;                        // edge sucks
}

function unsupported_device($device) {
    include("./error/unsupport_device.php");
    exit;
}

$isPSP = strpos($_SERVER['HTTP_USER_AGENT'], 'PlayStation Portable') !== false;
if ($isPSP) {
    unsupported_device("PlayStation Portable (PSP)");
}

$isDS = strpos($_SERVER['HTTP_USER_AGENT'], 'Nintendo DS') !== false;
if ($isDS) {
    unsupported_device("Nintendo DS");
}

$isTizen = strpos($_SERVER['HTTP_USER_AGENT'], 'Tizen') !== false && strpos($_SERVER['HTTP_USER_AGENT'], 'SMART-TV') !== false;
if ($isTizen) {
    unsupported_device("Samsung Smart TV");
}

// Detect if the browser is the Wii Internet Channel
$isWii = strpos($_SERVER['HTTP_USER_AGENT'], "Opera") !== false && strpos($_SERVER['HTTP_USER_AGENT'], "Nintendo") !== false;

if ($isWii) {
    // Serve the old version for the Wii
    include("wii.php");
    exit;
}

// finally, we include the actual page
include("default.php");
exit;
?>