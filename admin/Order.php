<?php

class Order{

    public function getAllOrders(){

        $order = mysqli_query($GLOBALS['con'], "SELECT * FROM orders") or die(mysqli_error($GLOBALS['con']));

        return $order;
    }


    public function getTodayOrders($today){

        $order = mysqli_query($GLOBALS['con'], "SELECT * FROM orders WHERE orderDate = '$today'") or die(mysqli_error($GLOBALS['con']));

        return $order;
    }

    public function getOrdersByStatus($data){

        $order = mysqli_query($GLOBALS['con'], "SELECT * FROM orders WHERE transactionStatus = '$data[transactionStatus]'") or die(mysqli_error($GLOBALS['con']));

        return $order;
    }


    public function getOrder($id){

        $order = mysqli_query($GLOBALS['con'], "SELECT * FROM orders WHERE orderNumber = '$id'") or die(mysqli_error($GLOBALS['con']));

        return $order;
    }

    public function transactionIdStatusCheck($transId){
        $tid = mysqli_query($GLOBALS['con'],"SELECT transactionId FROM dailySales WHERE transactionId = '$transId' ") or die(mysqli_error($GLOBALS['con']));
        if(mysqli_affected_rows($GLOBALS['con']) > 0)
        return true;
        else
        return false;
    }

    public function getOrderBytransactionId($transId){
        $order = mysqli_query($GLOBALS['con'], "SELECT * FROM orders WHERE transactionId = $transId") or die(mysqli_error($GLOBALS['con']));

        return $order;

    }

    public function getDailySales(){

        
        $dailysales = mysqli_query($GLOBALS['con'], "SELECT * FROM dailysales") or die(mysqli_error($GLOBALS['con']));

        return $dailysales;

    }

    public function addDailySales($data){

        $gtor = mysqli_fetch_assoc($this->getOrderBytransactionId($data['transactionId']));
        if(mysqli_affected_rows($GLOBALS['con'])>0){

            $data['orderNumber'] = $gtor['orderNumber'];
            
        }
        $daily = mysqli_query($GLOBALS['con'], "INSERT INTO dailysales VALUES(NULL,'$data[orderNumber]',	
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
        '$data[note]',
        '$data[transactionStatus]')") or die(mysqli_error($GLOBALS['con']));

        return $data['transactionId'];

    }
}