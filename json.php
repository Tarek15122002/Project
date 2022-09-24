<?php
$name=["mo","amir","hal"];
$json_data=json_encode($name);

header('content-type:json/pdf');
echo $json_data;
