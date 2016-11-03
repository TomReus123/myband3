<?php
$sql = "SELECT * FROM history";
$result = $mysqli->query($sql);
$result = convertResultToArray($result);