<?php


$access_token = 'dsORX2KZYrKs432P6skFyVUnYvx985XmGlYYrSIGlCqlntpOEJhBbEOptUytAWup/2v3k4+NlOcU2yTVJmlu2Vk+GQ2OTQ4x+yKpQOyAZjuGKnOjG4jXzK2YYZ0MKMhtL3xg0GZuPVFb+AKCOpQ6vgdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

