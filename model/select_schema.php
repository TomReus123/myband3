<?php
$sql = "SELECT * FROM bus_schedule";
$result = $mysqli->query($sql);
$result = convertResultToArray($result);