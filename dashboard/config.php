<?php


define("HOST", "localhost");

define("USER", "root");

define("DATABASE", "instantbitx");

define("PASSWORD" , "");

$GLOBALS['con'] = mysqli_connect(HOST,USER,PASSWORD,DATABASE);


//SMS Configuration

// require_once 'HTTP/Request2.php';
// $request = new HTTP_Request2();
// $request->setUrl('https://2vqpll.api.infobip.com/sms/2/text/advanced');
// $request->setMethod(HTTP_Request2::METHOD_POST);
// $request->setConfig(array(
//     'follow_redirects' => TRUE
// ));
// $request->setHeader(array(
//     'Authorization' => 'App 361f49a85b92183a16c2c467589d8f47-75a46e23-e578-4247-be38-026fc9070cbc',
//     'Content-Type' => 'application/json',
//     'Accept' => 'application/json'
// ));
// $request->setBody('{"messages":[{"destinations":[{"to":"233509527937"}],"from":"ServiceSMS","text":"Hello,\\n\\nThis is a test message from Infobip. Have a nice day!"}]}');
// try {
//     $response = $request->send();
//     if ($response->getStatus() == 200) {
//         echo $response->getBody();
//     }
//     else {
//         echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
//         $response->getReasonPhrase();
//     }
// }
// catch(HTTP_Request2_Exception $e) {
//     echo 'Error: ' . $e->getMessage();
// }