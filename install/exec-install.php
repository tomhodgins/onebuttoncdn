<?php

// Let's execute the installer script and send the viewer back to the index with a query string
$output = exec('sh install.sh');
header ('Location: ../?installed=1');

?>