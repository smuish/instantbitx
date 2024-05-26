<?php 


class Transaction{


    public function buyCrypto($data){

        mysqli_query($GLOBALS['con'],"INSERT INTO orders (orderNumber,reference,customerId,paymentType,paymentAmountGHC,paymentAmountUSD,orderType,orderDate,network,paymentNumber,coinType,walletAddress,transactionStatus) VALUES ('$data->orderNumber',
        '$data->reference','$data->customer','$data->paymentMethod','$data->amount','$data->paymentUSD','$data->orderType',NOW(),'$data->network','$data->paymentNumber','$data->coinType','$data->address','Pending')");

    }

    public function sellCrypto($data){

        mysqli_query($GLOBALS['con'],"INSERT INTO orders (orderNumber,mobileMoneyName,bankName,accountName,bankBranchName,accountNumber,paymentNumber,customerId,paymentType,paymentAmountGHC,paymentAmountUSD,orderType,orderDate,network,coinType,transactionStatus) VALUES ('$data->orderNumber',
        '$data->mobileMoneyName','$data->bankName','$data->accountName','$data->bankBranchName','$data->accountNumber','$data->paymentNumber','$data->customer','$data->paymentMethod','$data->amount','$data->paymentUSD','$data->orderType',NOW(),'$data->network','$data->coinType','Awaiting Assets')");
    }

    public function processOrder($data){
        $process = mysqli_query($GLOBALS['con'],"UPDATE orders SET
        amountReceivedGHC = '$data[amountReceivedGHC]', amountReceivedUSD = '$data[amountReceivedUSD]', transactionStatus = '$data[orderStatus]', depositorNumber = '$data[depositorNumber]', depositorName = '$data[depositorName]', paymentDetailsReferenceId = '$data[referenceId]', paymentDetailsDatePaid = '$data[datePaid]', paymentAddedOnDate = '$data[paymentAddedDate]' 
        WHERE id = '$data[orderId]'");
    }

    public function getGHC_USDRate(){

        $ghcrate = mysqli_query($GLOBALS['con'], "SELECT ghrate from settings") or die(mysqli_error($GLOBSLS['con']));
        return $ghcrate;
    }

    public function getUSD_GHCRate(){

        $usdrate = mysqli_query($GLOBALS['con'], "SELECT usdrate from settings") or die(mysqli_error($GLOBSLS['con']));
        return $usdrate;
    }
}