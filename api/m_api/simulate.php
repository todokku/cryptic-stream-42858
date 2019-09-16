<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once '../../models/initialization.php';

// 1. Obtain access token and shortcode

$consumerKey = $_POST['key']; //Fill with your app Consumer Key

$consumerSecret = $_POST['secret']; // Fill with your app Secret

// initialize mpesa auth class
$app = new Auth($consumerKey, $consumerSecret);

$access_token = $app->Access_Token();

$url = 'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/simulate';