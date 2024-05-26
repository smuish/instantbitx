<?php 

include_once("../dashboard/config.php");
include_once("Order.php");
if(isset($_POST['submit'])){

    $data['orderNumber'] = "";	
    $data['reference'] = "";	
    $data['transactionId'] = $_POST['transactionId'];	
    $data['customerId'] = 0;	
    $data['paymentType'] = $_POST['paymentMode'];	
    $data['paymentAmountGHC'] = $_POST['paymentAmount'];	
    $data['paymentAmountUSD'] = 0;	
    $data['orderType'] = "";	
    $data['orderDate'] = "";	
    $data['network'] = "";	
    $data['mobileMoneyName'] = "";	
    $data['bankName'] = "";	
    $data['accountName'] = "";	
    $data['bankBranchName'] = "";	
    $data['accountNumber'] = 0000;	
    $data['paymentNumber'] =$_POST['mnumber'];	
    $data['coinType'] = "";	
    $data['walletAddress'] = "";	
    $data['status'] = "";	
    $data['note'] = $_POST['note'];
    $data['transactionStatus'] = "";
    $sales = new Order();
   $msg =  $sales->addDailySales($data);
    //$msg = "Order Added";

}





?>
<div class="container-fluid">
                <div class="row" style="display: flex; justify-content: center">
                    <div class="col-lg-3 col-md-7 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">New Order</h4>
                            </div>
                            <div class="content">
                                <form method="POST">
                                    <div>
                                        <div><?php if(isset($msg)) echo $msg.$_POST['transactionId']; ?></div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Payment Mode:</label>
                                                <select class="form-control border-input" name="paymentMode">
                                                    <option value="-1">Select Payment Mode</option>
                                                    <option value="MTN1">MTN</option>
                                                    <option value="Telecel">Telecel</option>
                                                    <option value="Airtel Tigo">AirtelTigo</option>
                                                    <option value="Bank Transfer">Bank Transfer</option>
                                                    <option value="Cash">Cash</option>
                                                </select>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Transaction ID:</label>
                                                <input type="text" class="form-control border-input"  name="transactionId" placeholder="Transaction ID" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="mnumber">Mobile Money / Account Number:</label>
                                                <input type="number" name="mnumber" id="mnumber" class="form-control border-input" placeholder="Number">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Amount:</label>
                                                <input type="text" class="form-control border-input" name="paymentAmount" placeholder="Payment amount" value="">
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Note:</label>
                                                <textarea rows="5" class="form-control border-input" name="note" placeholder="General comments about this order" value=""></textarea>
                                            </div>
                                        </div>
                                    <div class="text-center">
                                        <button type="submit" name="submit" class="btn btn-info btn-fill btn-wd">Add Sales</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>