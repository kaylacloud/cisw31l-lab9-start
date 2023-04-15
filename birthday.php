<?php
// fill in the missing code indicated by #####

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
    $img = "/path/to/image";

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
            <p><?= $days_to_go ?></p>
        </div>
        <!-- debug code -->
        <!-- <pre>
            <?php var_dump($_POST); ?>
        </pre>  -->
       

    </body>

</html>