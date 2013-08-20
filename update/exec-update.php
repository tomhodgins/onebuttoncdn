<?php

// Let's execute the updater script and send the viewer back to the index with a query string
$output = exec('sh update.sh');
header ('Location: ../?updated=1');

?>
