

<?php

$msg = $_POST['msg'];
$msg = trim($msg);

require 'twilio-php-master/Twilio/autoload.php';

use Twilio\Rest\Client;

$sid = 'AC8834db39f3edfd050ea9c0b644f241cd';
$token = 'a5eeeef94c3f4acbb584f3300d853bef';
$twilio = new Client($sid, $token);

// $message = $twilio->messages
//                   ->create("+918369521845", // to
//                            array(
//                                "body" => $msg,
//                                "from" => "+19414622961"
//                            )
//                   );

// print($message->sid);
// echo $msg;
echo json_encode(array("status"=>'success'));