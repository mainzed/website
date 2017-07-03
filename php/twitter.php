<?php
require_once('TwitterAPIExchange.php');

const ACCESS_TOKEN = "280489195-hTUhP3cJq2BeS6vCVUMST4DwRPisffat1kQhuFeL";
const ACCESS_TOKEN_SECRET = "CECUAIoMNjHboo7J0W3o036qvo27yhU771r60cQPwxad7";
const CONSUMER_KEY = "v9PruNoldArYOU3dwWcgv6IfS";
const CONSUMER_SECRET = "B2w1FTBGK5w4Cj7uqST5jo2IHaoH7NAW1VTitKWWCIUJlphIiY";
const URL = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
const SCREEN_NAME = '_mainzed';
const COUNT = 15;

// uses the twitter api to get the latest tweets of a user and  returns an array
// of tweets
function getTweets() {
  $settings = array(
    'oauth_access_token' => ACCESS_TOKEN,
    'oauth_access_token_secret' => ACCESS_TOKEN_SECRET,
    'consumer_key' => CONSUMER_KEY,
    'consumer_secret' => CONSUMER_SECRET
  );

  $getfield = '?screen_name=' . SCREEN_NAME . '&count=' . COUNT;
  $twitter = new TwitterAPIExchange($settings);
  $json = $twitter->setGetfield($getfield)
    ->buildOauth(URL, 'GET')
    ->performRequest();

  if (isOAuthError($json)) {
    echo 'Could not authenticate you! Timestamp out of bounds (check your system clock)';
  }
  $tweets = json_decode($json);
  return $tweets;
}

function isOAuthError($json) {
  return strpos($json, '{"code":135,"message":"Timestamp out of bounds."}') > 0;
}
