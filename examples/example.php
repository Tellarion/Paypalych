<?php

// require_once(""); <= import lib or vendor auto

const SHOP_ID = "XXXXXXXXXXXXXXXXX";
const API_TOKEN = "XXXXXXXXXXXXXXX";

$test = new Paypalych(SHOP_ID, API_TOKEN);

/* FIRST TEST
$test2 = $test->testValid();
*/

$metadata = array(
    "account" => "Tellarion",
    "server" => 1,
    "type" => 1
);

$billSettings = array(
    "amount" => "100.05",
    "description" => "Test",
    "order_id" => 1,
    "type" => "normal",
    "shop_id" => SHOP_ID,
    "custom" => json_encode($metadata),
    "currency_in" => "RUB"
);

$result = $test->billCreate($billSettings);

echo $result;

?>