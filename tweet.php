<?php
require_once "config.php";
require_once "vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

$twitter = new TwitterOAuth(TWITTER_CONSUMER_KEY, TWITTER_CONSUMER_SECRET, TWITTER_ACCESS_TOKEN, TWITTER_ACCESS_TOKEN_SECRET);
$response = $twitter->post('statuses/update', ['status' => file_get_contents('php://stdin')]);
if ($twitter->getLastHttpCode() != 200) {
    print_r($response);
}
