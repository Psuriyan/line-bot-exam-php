<?php



require "vendor/autoload.php";

$access_token = 'dsORX2KZYrKs432P6skFyVUnYvx985XmGlYYrSIGlCqlntpOEJhBbEOptUytAWup/2v3k4+NlOcU2yTVJmlu2Vk+GQ2OTQ4x+yKpQOyAZjuGKnOjG4jXzK2YYZ0MKMhtL3xg0GZuPVFb+AKCOpQ6vgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '99749ba9d40c4b049a423cae3893876c';

$pushID = 'U8a5c93f77732ebf1485ad3d6b4495136';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







