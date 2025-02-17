<?php
    // Include the Composer autoloader for dependencies
    include_once("vendor/autoload.php");
    // Import the Carbon library for date and time manipulation
    use Carbon\Carbon;

    include_once("helperUtility.php");

    $startDatetime = Carbon::now();
    echo "Start datetime: ".$startDatetime->toDateTimeString()."<br /><br />";
    
    $endDatetime = $startDatetime->copy()->addDay();
    echo "End datetime: ".$endDatetime->toDateTimeString()."<br /><br />";
    
    $endDatetime = $startDatetime->copy()->addDays(29);
    echo "End datetime: ".$endDatetime->toDateTimeString()."<br /><br />";
    
    $endDatetime = $startDatetime->copy()->subDay();
    echo "End datetime: ".$endDatetime->toDateTimeString()."<br /><br />";
    
    $endDatetime = $startDatetime->copy()->subDays(29);
    echo "End datetime: ".$endDatetime->toDateTimeString()."<br /><br />";
    
    exit;
?>