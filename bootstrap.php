<?php

set_error_handler(function(Exception $e1){
    date_default_timezone_get('Africa/Cairo');

    $time= date('Y m h');
    $message="$time $e1->getMessage()"."<br>";
    error_log($message,3,'logs/error.php');
    echo "some thing went wronge";



});


