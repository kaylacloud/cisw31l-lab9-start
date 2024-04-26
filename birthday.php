<?php
// fill in the missing code indicated by #####

// Create a variable for your name in the footer


// set today's date in the Y-m-d format
$today = #####

// get the birthday from POST and convert it from a string
// using strtotime()
$bday = #####

// convert the bday to birthday in the Y-m-d format
$birthday = date("Y-m-d", $bday);

// check if today is the birthday
if ( ##### ) {
    $message = "<h1>Happy Birthday!</h1>";
    $img = "/path/to/image";
} else {
    $message = "<h1>Today is not your birthday.</h1>";
    $img = "/path/to/image"; // use your own image, not the screenshot from the assignment

    // calculate the $days_to_go until the birthday
    $origin = date_create($today);
    $target = date_create($birthday);
    $interval = date_diff($origin, $target);
    $days_to_go = $interval->format('Only %a days to go!');
}

?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/styles.css">
        <title>Is It Your Birthday?</title>
    </head>

    <body>
        <div id="results">
            <?= $message ?>
            <img src="<?= $img ?>">
            <p><?php 
                // This will only display if $days_to_go has been set above
                if (isset($days_to_go) && !empty($days_to_go)) {
                    $days_to_go;
                } ?></p>
        </div>

    <footer>
        <?php $date = date('n-j-y'); ?>
        <?= ##### ?> | CISW 31 | <?= $date ?>
    </footer>  

    </body>

</html>