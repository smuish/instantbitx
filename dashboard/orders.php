<style>
	.icons{

		display:none;
	}
</style>

<?php
include_once("config.php");
include_once("../admin/Customer.php");
$orders['orderType'] = "buy";
$orders['start'] = 0;
$orders['end'] = 30;
$orders['customer'] = $_SESSION['customerId'];
$cu = new Customer();


?>
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h3 class="title">Orders</h3>
            <p class="category"><small>All your buy and sell orders</small></p>
        </div>
        <div class="content">

        <div class="tabbable-panel">
				<div class="tabbable-line">
					<ul class="nav nav-tabs ">
						<li class="active">
							<a href="#tab_default_1" data-toggle="tab">
							Buy Orders</a>
						</li>
						<li>
							<a href="#tab_default_2" data-toggle="tab">
							Sell Orders</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_default_1">
							<p>
							<div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>ID</th>
                                            <th>Order #</th>
											<th>Transaction ID</th>
                                            <th>Product</th>
                                            <th>Date</th>
											<th>Payment Type</th>
                                            <th>USD</th>
                                            <th>GHS</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php 
                                        $buyorder = $cu->getOrders($orders);
                                        if(mysqli_affected_rows($GLOBALS['con']) > 0){
										foreach($buyorder as $buy){
										?>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                        	<td><?php echo $buy['id']; ?></td>
                                            <td><?php echo $buy['orderNumber']; ?></td>
											<td><?php echo $buy['transactionId']; ?></td>
                                        	<td><?php echo $buy['coinType']; ?></td>
                                            <td><?php echo $buy['orderDate']; ?></td>
											<td><?php echo $buy['paymentType']."(".$buy['network'].")"; ?></td>
                                        	<td><?php echo "$".$buy['paymentAmountUSD']; ?></td>
                                        	<td><?php echo $buy['paymentAmountGHC']; ?></td>
                                        	<td><span><?php if($buy['status'] == 0) echo "Awaiting
Payment"; elseif($buy['status']==1) echo "Processing"; elseif($buy['status'] == 2) echo "Completed"; ?></span></td>
                                            <td></td>
                                        </tr>
									<?php }}else{?>
                                        <tr><td colspan="11"><div class="alert alert-info text-center">No buy orders yet...</div></td></tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                            </div>
							</p>
						</div>
						<div class="tab-pane" id="tab_default_2">
							<p>
                                <?php 

                                $orders['orderType'] = "sell";

                                $sellorder = $cu->getOrders($orders);
                              
                                ?>
							<div class="content table-responsive table-full-width">
							<table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>ID</th>
                                            <th>Order #</th>
											<th>Transaction ID</th>
                                            <th>Product</th>
                                            <th>Date</th>
											<th>Payment Type</th>
                                            <th>USD</th>
                                            <th>GHS</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        if(mysqli_affected_rows($GLOBALS['con']) > 0){
                                              foreach($sellorder as $sell){
                                                ?>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                        	<td><?php echo $sell['id']; ?></td>
                                            <td><?php echo $sell['orderNumber']; ?></td>
											<td><?php echo $sell['transactionId']; ?></td>
                                        	<td><?php echo $sell['coinType']; ?></td>
                                            <td><?php echo $sell['orderDate']; ?></td>
											<td><?php echo $sell['paymentType']."(".$sell['network'].")"; ?></td>
                                        	<td><?php echo $sell['paymentAmountUSD']; ?></td>
                                        	<td><?php echo $sell['paymentAmountGHC']; ?></td>
                                        	<td><span><?php if($sell['status'] == 0) echo "Awaiting
Assets";elseif($sell['status']==1) echo "Processing"; elseif($sell['status'] == 2) echo "Completed"; ?></span></td>
                                            <td></td>
                                        </tr>
                                        <?php }}else{?>
                                            <tr><td colspan="11"><div class="alert alert-info text-center">No sell orders yet...</div></td>
                                            <?php } ?>
                                    </tbody>
                                </table>
                            </div>
							</p>
						</div>
					</div>
				</div>
			</div>

        </div>
    </div>
</div>
                