<?php

$page = $_GET['page']; // <-- Tainted source
[$unusedVariable, $requestedPage] = ["unused", $page]; // <-- Taint propagated to another variable

function includePage($filePath) {
  include($filePath); // <-- Taint sink
}

if(isset($requestedPage)) {
  includePage($requestedPage); // <-- Taint propagated to function call
} else {
    include("default.php");
}
