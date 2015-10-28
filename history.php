<?php

date_default_timezone_set('Europe/Amsterdam');

$history = json_decode(file_get_contents('history kir.json'));
foreach($history as $entry) {
	$entry->date = date("Y-m-d H:i:s", $entry->lastVisitTime / 1000);
}

echo "<pre>";
print_r($history);
echo"<pre>";

?>