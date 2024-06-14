<?php
// Required if your environment does not handle autoloading
require 'twilio-php-main/src/Twilio/autoload.php';


// Your Account SID and Auth Token from console.twilio.com
$sid = "ACa212e0943bb19896ee062a54fe854698";
$token = "4930c0d18e0e61a7a6a81da3aea0333a";
$client = new Twilio\Rest\Client($sid, $token);

// Use the Client to make requests to the Twilio REST API
$message=$client->messages->create(
    // The number you'd like to send the message to
    '+919766509114',
    [
        // A Twilio phone number you purchased at https://console.twilio.com
        'from' => '+12514514676',
        // The body of the text message you'd like to send
        'body' => "Hey Amar! your documents are ready collect it from gramPanchayat. Thank you!"
    ]
);
if($message)
{
    echo 'message sent';
}
else
{
    echo 'error';
}
?>
