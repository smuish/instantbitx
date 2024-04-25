<style>
	.icons{

		display:none;
	}
</style>

<?php
include_once("config.php");
include_once("admin/Customer.php");
$orders['orderType'] = 0;
$orders['start'] = 0;
$orders['end'] = 30;
$cu = new Customer();

$buyorder = $cu->getBuyOrders($orders);
echo "not loading";
var_dump($buyorder);
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
											<th>Transaction ID</th>
                                            <th>Product</th>
                                            <th>Date</th>
											<th>Payment Type</th>
                                            <th>Amount (USD)</th>
                                            <th>Amount (GHS)</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php 
										
										?>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                        	<td>1</td>
											<td>41055332120</td>
                                        	<td>Bitcoin</td>
                                            <td>20-08-2023</td>
											<td>Mobile Money(MTN)</td>
                                        	<td>$36,738</td>
                                        	<td>300,459</td>
                                        	<td><span>Pending</span></td>
                                            <td></td>
                                        </tr>
										<tr>
                                            <td><input type="checkbox"></td>
                                        	<td>1</td>
											<td>41055332120</td>
                                        	<td>Bitcoin</td>
                                            <td>20-08-2023</td>
											<td>Mobile Money(MTN)</td>
                                        	<td>$36,738</td>
                                        	<td>300,459</td>
                                        	<td><span>Pending</span></td>
                                            <td></td>
                                        </tr>
										<tr>
                                            <td><input type="checkbox"></td>
                                        	<td>1</td>
											<td>41055332120</td>
                                        	<td>Bitcoin</td>
                                            <td>20-08-2023</td>
											<td>Mobile Money(MTN)</td>
                                        	<td>$36,738</td>
                                        	<td>300,459</td>
                                        	<td><span>Pending</span></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
							</p>
						</div>
						<div class="tab-pane" id="tab_default_2">
							<p>
							<div class="content table-responsive table-full-width">
							<table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>ID</th>
											<th>Transaction ID</th>
                                            <th>Product</th>
                                            <th>Date</th>
											<th>Payment Type</th>
                                            <th>Amount (USD)</th>
                                            <th>Amount (GHS)</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                        	<td>1</td>
											<td>41055332120</td>
                                        	<td>Bitcoin</td>
                                            <td>20-08-2023</td>
											<td>Mobile Money(MTN)</td>
                                        	<td>$36,738</td>
                                        	<td>300,459</td>
                                        	<td><span>Pending</span></td>
                                            <td></td>
                                        </tr>
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
                