<?php

class Order{

    public function getAllOrders(){

        $order = mysqli_query($GLOBALS['con'], "SELECT * FROM orders") or die(mysqli_error($GLOBALS['con']));

        return $order;
    }

    function getDailySales(){

        
        $dailysales = mysqli_query($GLOBALS['con'], "SELECT * FROM dailySales") or die(mysqli_error($GLOBALS['con']));

        return $dailysales;

    }

    public function addDailySales($data){
        $daily = mysqli_query($GLOBALS['con'], "INSERT INTO dailySales VALUES(NULL,'$data[orderNumber]',	
        '$data[reference]',	
        '$data[transactionId]',	
        '$data[customerId]',	
        '$data[paymentType]',	
        '$data[paymentAmountGHC]',	
        '$data[paymentAmountUSD]',	
        '$data[orderType]',	
        NOW(),
        '$data[network]',	
        '$data[mobileMoneyName]',	
        '$data[bankName]',	
        '$data[accountName]',	
        '$data[bankBranchName]',
        '$data[accountNumber]',	
        '$data[paymentNumber]',	
        '$data[coinType]',	
        '$data[walletAddress]',	
        '$data[status]',	
        '$data[note]')") or die(mysqli_error($GLOBALS['con']));

    }
}