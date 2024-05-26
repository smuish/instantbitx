<?php 
    include_once("../dashboard/config.php");
    include_once("Order.php");
    include_once("Helper.php");
    include_once("Customer.php");
    include_once("Transaction.php");
    $hp = new Helper();
    $ord = new Order();
    $cm = new Customer();

    $orderid = trim($_GET['order']);
    $orddetails = mysqli_fetch_assoc($ord->getOrder($orderid));
    $customer = mysqli_fetch_assoc($cm->getCustomer($orddetails['customerId']));
    

    if(isset($_POST) && $_SERVER['REQUEST_METHOD'] == "POST"){
        $tr = new Transaction();
        $orderid = trim($_GET['order']);
        $data['orderId'] = $orderid;
        $data['paymentMethod'] = $_POST['ppm'];
        $data['depositorNumber'] = $_POST['dpsn'];
        $data['depositorName'] = $_POST['dpn'];
        $data['referenceId'] = $_POST['rfid'];
        $data['bankName'] = $_POST['bkn'];
        $data['bankBranch'] = $_POST['bkb'];
        $data['amountPaid'] = $_POST['amp'];
        $data['datePaid'] = $_POST['dtp'];
        $data['paymentAddedDate'] = $_POST['pao'];
        $data['buyAccount'] = $_POST['sacc'];
        $data['payFrom'] = $_POST['pfrm'];
        $data['amountReceivedGHC'] = $_POST['aarghc'];
        $data['amountReceivedUSD'] = $_POST['aarusd'];
        $data['sellTransId'] = $_POST['selltid'];
        $data['orderStatus'] = $_POST['orstatus'];
        $processOrder = $tr->processOrder($data);
       
    }

?>

<style>

    .nav-tabs>li.active>a{
        font-weight: 900;
    }

</style>

<div class="tabbable-panel">
				<div class="tabbable-line">
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#tab_default_1" data-toggle="tab">
							Order Details</a>
						</li>
						<li>
							<a href="#tab_default_2" data-toggle="tab">
							Payment Details</a>
						</li>
                        <li>
							<a href="#tab_default_3" data-toggle="tab">
							Customer Details</a>
						</li>
					</ul><form action="?page=orderdetails&order=<?php echo $orderid; ?>" method="POST">
					<div class="tab-content">
                        
						<div class="tab-pane active" id="tab_default_1">
							<p>
                            <div style="margin:0px auto; max-width: 750px;">
                             <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Order #:</label>
                                        <input type="text" class="form-control" placeholder="Order #" value="<?php echo $orddetails['orderNumber']; ?>" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Status:</label>
                                        <input type="text" class="form-control" placeholder="Order Status" value="<?php echo $orddetails['transactionStatus']; ?>" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Ecurrency:</label>
                                        <input type="text" class="form-control" placeholder="Ecurrency" value="<?php echo $orddetails['coinType']; ?>" />
                                    </div>
                                </div>
                             </div>
                            
                             <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label> Wallet Address:</label>
                                        <input type="text" class="form-control" placeholder="Wallet Address" value="<?php echo $orddetails['walletAddress']; ?>" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label> Actual Send Address:</label>
                                        <input type="text" class="form-control" placeholder="Send Address" />
                                    </div>
                                </div>
                             </div>
                             <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Amount(USD):</label>
                                        <input type="text" class="form-control" placeholder="Amount in USD"  value="<?php echo $hp->formatGHC($orddetails['paymentAmountUSD'],"USD"); ?>"/>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Fee(USD):</label>
                                        <input type="text" class="form-control" placeholder="Transaction Fee" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Fee Type:</label>
                                        <input type="text" class="form-control" placeholder="Transaction Fee type" />
                                    </div>
                                </div>
                             </div>
                             <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>BTC API Sell Value:</label>
                                        <input type="text" class="form-control" placeholder="API Sell value" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> BTC API Sell Value2:</label>
                                        <input type="text" class="form-control" placeholder="Secondary Sell Value" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> BTC API Sell Time:</label>
                                        <input type="text" class="form-control" placeholder="Sell Time" />
                                    </div>
                                </div>
                             </div>
                             <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>BTC Harsh:</label>
                                        <input type="text" class="form-control" placeholder="Harsh" />
                                        <a href="#">View Transaction on Blockchain</a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label> USDT Batch:</label>
                                        <input type="text" class="form-control" placeholder="USDT Batch" />
                                        <a href="#">View Transaction on PM</a>
                                    </div>
                                </div>
                             </div>
                             <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Total Pay:</label>
                                        <input type="text" class="form-control" placeholder="Payment Amount" value="<?php echo  $hp->formatGHC($orddetails['paymentAmountGHC'],"GHC"); ?>" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Payment Option:</label>
                                        <input type="text" class="form-control" placeholder="Payment option" value="<?php echo $orddetails['paymentType']; ?>" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Selling Channel:</label>
                                        <input type="text" class="form-control" placeholder="Selling channel" />
                                    </div>
                                </div>
                             </div>
                             <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Order Date:</label>
                                        <input type="text" class="form-control" placeholder="Order Date" value="<?php echo $orddetails['orderDate']; ?>" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Order Completed:</label>
                                        <input type="text" class="form-control" placeholder="Order completed date" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Satoshie:</label>
                                        <input type="text" class="form-control" placeholder="Satoshie" />
                                    </div>
                                </div>
                             </div>

                             </div>

							</p>
						</div>
						<div class="tab-pane" id="tab_default_2">
						
                            <p>
                            <div style="margin:0px auto; max-width: 750px;">
                             <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Payment Option:</label>
                                        <input type="text" class="form-control" name="ppm" placeholder="Payment method" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Depositor's Number:</label>
                                        <input type="text" class="form-control" name="dpsn" placeholder="Deposit Phone Number" value="<?php echo $orddetails['depositorNumber']; ?>" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Depositor Name:</label>
                                        <input type="text" class="form-control" name="dpn" placeholder="Depositor Name" />
                                    </div>
                                </div>
                             </div>
                            
                             <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Reference ID:</label>
                                        <input type="text" class="form-control" name="rfid" placeholder="Reference" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Bank Name:</label>
                                        <input type="text" class="form-control" name="bkn" placeholder="Bank Name" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Bank Branch:</label>
                                        <input type="text" class="form-control" name="bkb" placeholder="Branch Name" />
                                    </div>
                                </div>
                             </div>
                             <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Amount Paid:</label>
                                        <input type="text" class="form-control" name="amp" placeholder="Amount paid" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Date Paid:</label>
                                        <input type="text" class="form-control" name="dtp" placeholder="Date Paid" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Payment Added On:</label>
                                        <input type="text" class="form-control" name="pao" placeholder="Payment Added On date" />
                                    </div>
                                </div>
                             </div>
                             <div class="alert alert-success ">Update Order Status</div>
                             <div class=""></div>
                             <div class="alert alert-danger"> <?php if($ord->transactionIdStatusCheck($orddetails['transactionId'])) echo "TransactionID/Order No.:".$orddetails['transactionId']." Found wth sale status:".$orddetails['transactionStatus']." On:"; else echo "TransactionID/Order No.: Not Found wth sale status: On:"; ?></div>
                             <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Buy Account:</label>
                                        <select class="form-control" name="sacc">
                                            <option> Select Buy Account </option>
                                            <option> Buy BTC </option>
                                            <option> Buy USDT </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label> Paying From:</label>
                                        <select class="form-control" name="pfrm">
                                            <option> Select Pay From </option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label> Actual Amount Received(GHC):</label>
                                        <input type="text" class="form-control" name="aarghc" placeholder="Amount Received(GHC)" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group" >
                                        <label>Actual Amount Sent(USD) :</label>
                                        <input type="text" class="form-control" name="aarusd" placeholder="Amount Sent(USD)" />
                                       
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label> Sell TransactionID:</label>
                                        <input type="text" class="form-control" name="selltid" placeholder="Reference/TransID" />
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Select Order Status:</label>
                                        <select class="form-control" name="orstatus">
                                            <option value="">Select Status</option>
                                            <option value="Refund">Refund</option>
                                            <option value="Complete">Complete</option>
                                            <option value="Cancelled">Cancelled</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Payment Added">Payment Added</option>
                                            <option value="Expired">Expired</option>
                                            <option value="Debit Prepaid">Debit Prepaid</option>
                                            <option value="On Credit">On Credit</option>
                                            <option value="BTC Confirmed">BTC Confirmed</option>
                                            <option value="On hold">On hold</option>
                                            <option value="On Hold - Wallet Issue">On Hold - Wallet Issue</option>
                                            <option value="On Hold - Awaiting Payment">On Hold - Awaiting Payment</option>
                                            <option value="On Hold - Administrative">On Hold - Administrative</option>
                                            <option value="On Hold-Contact Us">On Hold-Contact Us</option>
                                            <option value="Awaiting Stock">Awaiting Stock</option>
                                        </select>
                                    </div>
                                </div>
                             </div>
                                
                                <div class="form-group" style="text-align:center"><input type="submit" class="btn btn-info" value="Process Sale" /></div>
                            </div>
							</p>
                        
						</div>
                        <div class="tab-pane" id="tab_default_3">
							<p>
                            <div style="margin:0px auto; max-width: 750px;">
                             <div class="">
                                Customer Details
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>Customer Name:</label>
                                        <input type="text" class="form-control" placeholder="Customer name" value="<?php echo $customer['firstName']." ".$customer['lastName']; ?>" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>Customer Email:</label>
                                        <input type="text" class="form-control" placeholder="Customer email"  value="<?php echo $customer['email']; ?>"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>Customer Phone:</label>
                                        <input type="text" class="form-control" placeholder="Customer Phone number" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>Prepaid Balance GHC:</label>
                                        <input type="text" class="form-control" placeholder="Customer name" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>Customer level:</label>
                                        <input type="text" class="form-control" placeholder="Customer email" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>Order Buy/Sell rate:</label>
                                        <input type="text" class="form-control" placeholder="Customer Phone number" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <input type="button" class="btn btn-danger" value="General ID verification Status" placeholder="Customer Phone number" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <input type="button" class="btn btn-danger" value="ID Card Payment Verification" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <input type="button" class="btn btn-danger" value="View User Details" placeholder="Customer email" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>Current Status:</label>
                                        <input type="text" class="form-control" placeholder="Customer name" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>No. of Completed Orders:</label>
                                        <input type="text" class="form-control" placeholder="Customer email" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>Total No. of Orders:</label>
                                        <input type="text" class="form-control" placeholder="Customer Phone number" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>Sell Order Harsh:</label>
                                        <input type="text" class="form-control" placeholder="Customer name" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>Sell Order Wallet Address:</label>
                                        <input type="text" class="form-control" placeholder="Customer email" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>Customer Notices:</label>
                                        <input type="text" class="form-control" placeholder="Customer Phone number" />
                                        </div>
                                    </div>
                                    </div>
                                    <div class="alert alert-info">Customers Verified Numbers</div>

                                    <div>Verified Numbers Section</div>
                                    <div class="alert alert-info">Payment Verification Info</div>
                                    </div>
                                    <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>Payment Channel:</label>
                                        <input type="text" class="form-control" placeholder="Customer name" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>Verified Payment Amount:</label>
                                        <input type="text" class="form-control" placeholder="Customer email" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>Network:</label>
                                        <input type="text" class="form-control" placeholder="Customer Phone number" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>Sheet Pay#:</label>
                                        <input type="text" class="form-control" placeholder="Customer name" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>Verified Momo No:</label>
                                        <input type="text" class="form-control" placeholder="Customer email" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>Verified Momo Account Name:</label>
                                        <input type="text" class="form-control" placeholder="Customer Phone number" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>Bank Branch:</label>
                                        <input type="text" class="form-control" placeholder="Customer name" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>Bank Account No:</label>
                                        <input type="text" class="form-control" placeholder="Customer email" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>Verified Payment Status:</label>
                                        <input type="text" class="form-control" placeholder="Customer Phone number" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                            </div>
                            </p>
                        </div>
                        
					</div>
                </form>
				</div>
			</div>