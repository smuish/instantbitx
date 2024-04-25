<?php

include_once("../dashboard/config.php");

$action = $_GET['action'];

switch($action){


    case "setverified":

    include_once("Customer.php");
    $cn = new Customer();
    $customer = json_decode($_GET['customer']);
    $setn = $cn->setVerifiedNumbers($customer);
    break;

    case "placeorder":
    include_once("Transaction.php");
    $cn = new Transaction();
    $data = json_decode($_GET['data']);
    if($data->orderType == "buy")
    $setn = $cn->buyCrypto($data);
    else
    $setn = $cn->sellCrypto($data);
    break;

    case "ghcrate":
        include_once("Helper.php");
        $hp = new Helper();
        $data = json_decode($_GET['data']);
        $st = $hp->setSettings($data);
    break;

    case "cryptoapi":
        include_once("Helper.php");
        $hp = new Helper();
        $data = json_decode($_GET['data']);
        $st = $hp->setSettings($data);
    break;

    case "newuser":
        include_once("User.php");
        $user = new User();
        $data = json_decode($_GET['data']);
        $newuser = $user->newUser($data);
    break;

}