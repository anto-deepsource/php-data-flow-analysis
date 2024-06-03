<?php
$requestedUrl = $_GET['requestedUrl']; // <-- Taint source
$finalUrl = $requestedUrl; // <-- Taint propagated to another variable

if (isset($finalUrl)) {
  curl_init($finalUrl); // <-- Taint sink
}
