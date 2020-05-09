<?php
// show error reporting
error_reporting(E_ALL);

// set your default time-zone
date_default_timezone_set('Asia/Manila');
 
// variables used for jwt
$key = "example_key";         //value must be your own and unique secret key
$iss = "http://example.org";  //claim identifies the principal that issued the JWT.
$aud = "http://example.com";  //claim identifies the recipients that the JWT is intended for.
$iat = 1356999524;            //claim identifies the time at which the JWT was issued.
$nbf = 1357000000;            //claim identifies the time before which the JWT MUST NOT be accepted for processing.
?>
