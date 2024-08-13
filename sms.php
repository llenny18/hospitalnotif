<?php
    // Update the path below to your autoload.php,
    // see https://getcomposer.org/doc/01-basic-usage.md
    require_once './vendor/autoload.php';
    use Twilio\Rest\Client;

    $sid    = "ACe7fa93f3a6c4d46671f765648e8e5122";
    $token  = "009a1ccb90d41cb1d4878a4bcb2faa48";
    $twilio = new Client($sid, $token);

    $message = $twilio->messages
      ->create("+639764844029", // to
        array(
          "from" => "+12563673951",
          "body" => "heheheh"
        )
      );

print($message->sid);