<?php 
    include_once("../dashboard/config.php");
    include_once("Customer.php");

?>


<div class="tabbable-panel">
				<div class="tabbable-line">
					<ul class="nav nav-tabs ">
						<li class="active">
							<a href="#tab_default_1" data-toggle="tab">
							Order Details</a>
						</li>
						<li>
							<a href="#tab_default_2" data-toggle="tab">
							Payment Details</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_default_1">
							<p>
                            <div style="margin:0px auto; max-width: 750px;">
                             <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Order #:</label>
                                        <input type="text" class="form-control" placeholder="Order #" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Status:</label>
                                        <input type="text" class="form-control" placeholder="Order Status" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Ecurrency:</label>
                                        <input type="text" class="form-control" placeholder="Ecurrency" />
                                    </div>
                                </div>
                             </div>
                            
                             <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label> Wallet Address:</label>
                                        <input type="text" class="form-control" placeholder="Wallet Address" />
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
                                        <input type="text" class="form-control" placeholder="Amount in USD" />
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
                                        <label> PM Batch:</label>
                                        <input type="text" class="form-control" placeholder="PM Batch" />
                                        <a href="#">View Transaction on PM</a>
                                    </div>
                                </div>
                             </div>
                             <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Total Pay:</label>
                                        <input type="text" class="form-control" placeholder="Payment Amount" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Payment Option:</label>
                                        <input type="text" class="form-control" placeholder="Payment option" />
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
                                        <input type="text" class="form-control" placeholder="Oder Date" />
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
                                        <input type="text" class="form-control" placeholder="Payment method" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Depositor's Number:</label>
                                        <input type="text" class="form-control" placeholder="Deposit Phone Number" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Depositor Name:</label>
                                        <input type="text" class="form-control" placeholder="Depositor Name" />
                                    </div>
                                </div>
                             </div>
                            
                             <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Reference ID:</label>
                                        <input type="text" class="form-control" placeholder="Reference" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Bank Name:</label>
                                        <input type="text" class="form-control" placeholder="Bank Name" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Bank Branch:</label>
                                        <input type="text" class="form-control" placeholder="Branch Name" />
                                    </div>
                                </div>
                             </div>
                             <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Amount Paid:</label>
                                        <input type="text" class="form-control" placeholder="Amount paid" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Date Paid:</label>
                                        <input type="text" class="form-control" placeholder="Date Paid" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label> Payment Added On:</label>
                                        <input type="text" class="form-control" placeholder="Payment Added On date" />
                                    </div>
                                </div>
                             </div>
                             <div class="alert alert-success ">Update Order Status</div>
                             <div class=""></div>
                             <div class="alert alert-danger"> TransactionID/Order No.: Not Found wth sale status: On:</div>
                             <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Buy Account:</label>
                                        <input type="text" class="form-control" placeholder="API Sell value" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label> Paying From:</label>
                                        <input type="text" class="form-control" placeholder="Secondary Sell Value" />
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label> Actual Amount Received(GHC):</label>
                                        <input type="text" class="form-control" placeholder="Amount Received(GHC)" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Actual Amount Sent(USD) :</label>
                                        <input type="text" class="form-control" placeholder="Amount Sent(USD)" />
                                       
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label> Sell TransactionID:</label>
                                        <input type="text" class="form-control" placeholder="Reference/TransID" />
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Select Order Status:</label>
                                        <input type="text" class="form-control" placeholder="Payment Amount" />
                                    </div>
                                </div>
                             </div>

                             </div>
							</p>
						</div>
					</div>
				</div>
			</div>