<?php 
class Customer{

    public function register($data){

       return mysqli_query($GLOBALS['con'], "INSERT INTO customer (password,email,dateJoined,status) VALUES(PASSWORD('$data[password]'),'$data[email]',NOW(),0)") or die(mysqli_error($GLOBALS['con']));
    }


    public function signin($data){
        $sn = mysqli_query($GLOBALS['con'],"SELECT * FROM customer WHERE email  = '$data[email]' AND password = PASSWORD('$data[password]')") or die(mysqli_error($GLOBALS['con']));
        $a_sn = mysqli_affected_rows($GLOBALS['con']);
        if($a_sn > 0){
            return $sn;
        }else{
            return "false";
        }
          
    }
        
    public function getKYCDocs($customer){

        
    }

    public function setKYCDocs($customer){

        
    }

    public function getVerifiedNumbers($customer){

        $vnumber = mysqli_query($GLOBALS['con'], "SELECT * FROM customer_numbers WHERE email = '$customer[email]' and verifiedStatus = 1");

        return $vnumber;

        
    }

    public function setVerifiedNumbers($customer){
        $setv = mysqli_query($GLOBALS['con'], "INSERT INTO customer_numbers (email, number, network, verifiedStatus, thirdPartyStatus) VALUES('$customer->email', '$customer->phonenumber', '$customer->network',1, 0)") or die(mysqli_error($GLOBALS['con']));
        return;
    }

    public function deleteNumber($customer){

        $delnumber = mysqli_query($GLOBALS['con'], "DELETE FROM customer_numbers WHERE email = '$customer->email' AND number = '$customer->number'") or die(mysqli_error($GLOBAL['con']));
        return;
    }

    public function getThirdParty($customer){

        
    }

    public function setThirdParty($customer){

        $setv = mysqli_query($GLOBALS['con'], "INSERT INTO customer_numbers (email, number, verifiedStatus, thirdPartyStatus) VALUES('$customer[email]', '$customer[phonenumber]', 1, 1)") or die(mysqli_error($GLOBALS['con']));
        return;
        
    }

    public function getOrders($orders){
        $geto = mysqli_query($GLOBALS['con'], "SELECT * FROM orders where orderType = '$orders[orderType]' AND customerId = '$orders[customer]' ORDER BY id DESC ") or die(mysqli_error($GLOBALS['con']));
        return $geto;
        
    }

      public function getDailytransactionId($transId){
        $order = mysqli_query($GLOBALS['con'], "SELECT * FROM dailysales WHERE transactionId = $transId") or die(mysqli_error($GLOBALS['con']));

        return $order;

    }

    public function addPayment($data){
        $transidcheck = mysqli_fetch_assoc($this->getDailytransactionId($data['transactionNumber']));
        if(mysqli_affected_rows($GLOBALS['con']) > 0){

            $setorderNumber = mysqli_query($GLOBALS['con'],"UPDATE dailysales SET orderNumber = '$data[orderNumber]' WHERE transactionId = '$data[transactionNumber]'");
        }
        $addpayment = mysqli_query($GLOBALS['con'], "UPDATE orders set transactionId = '$data[transactionNumber]', transactionStatus = '$data[transactionStatus]' WHERE orderNumber = '$data[orderNumber]'") or die(mysqli_error($GLOBALS['con']));
        return;
    }

    public function getCustomers(){

        $ct = mysqli_query($GLOBALS['con'], "SELECT * FROM customer");
        return $ct;
    }

    public function getCustomer($customerId){

        $ct = mysqli_query($GLOBALS['con'], "SELECT * FROM customer WHERE id = '$customerId'");
        return $ct;
    }


}