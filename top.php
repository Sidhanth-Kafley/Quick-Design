<?php
$phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");

$path_parts = pathinfo($phpSelf);

 ?>	
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Quick Design</title>

        <meta charset="utf-8">
        <meta name="author" content="Sidhanth Kafley, Tong Liu, Wenbo He">
        <meta name="description" content="A website for a quick guide to html and css with cheat sheets and a feedback form.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="custom.css?version=1.0" type="text/css" media="screen">
<?php
$debug=false;

//This if statement allows us in the classroom to see what our variables are
//This is NEVER done on a live site
if(isset($_GET["debug"])) {
    $debug = true;
}

//%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// PATH SETUP

$domain = '//';

$server = htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, 'UTF-8');

$domain .= $server;

if($debug){
    print'<p>php Self: ' . $phpSelf;
    print'<pdomain: ' . $domain;
    print'<p>Path Parts<pre>';
    print_r($path_parts);
    print'</pre></p>';
}

//%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// include all libraries.
//

print PHP_EOL . '<!-- include librareis -->' . PHP_EOL;

require_once 'lib/security.php';

include_once 'lib/validation-function.php';
include_once 'lib/mail-message.php';


print PHP_EOL . '<!-- finished including libraries -->' . PHP_EOL;
?>
    </head>
<!-- ########################### Body section   ################################ -->
<?php
print '<body id="' . $path_parts['filename'] . '">' . PHP_EOL;

include'header.php';
print PHP_EOL;

include'nav.php';
print PHP_EOL;

if ($debug) {
    print'<p>DEBUG MODE IS ON</p>';
}

print"<!-- End of top .php -->";
    ?>

<!-- ##########################    Main Section    ######################### -->