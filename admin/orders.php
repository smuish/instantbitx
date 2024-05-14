<?php 

include_once("../dashboard/config.php");
include_once("Order.php");

$orders = new Order();


$dailyOrders = $orders->getAllOrders();
?>
<style>

	.icons{


		display: none;
	}

</style>
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h3 class="title">Transactions</h3>
            <p class="category"><small>All your buy and sell orders</small></p>
        </div>
        <div class="content">

        <div class="tabbable-panel">
				<div class="tabbable-line">
					<ul class="nav nav-tabs ">
						<li class="active">
							<a href="#tab_default_1" data-toggle="tab">
							Pending</a>
						</li>
						<li>
							<a href="#tab_default_2" data-toggle="tab">
							Completed</a>
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
                                            <th>Product</th>
											<th>Order Type</th>
											<th>Payment Method</th>
                                            <th>Date</th>
                                            <th>Amount (GHS)</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 
                                        if(mysqli_affected_rows($GLOBALS['con']) > 0){
                                            foreach($dailyOrders as $daily){
                                            ?>
                                            <tr>
                                            <td><input type="checkbox"><a href=".?page=orderdetails&order=<?php echo $daily['id']; ?>">Process Order</a></td>
											<!-- <td><a href=".?page=customerdetails">Joe</a></td> -->
                                            <td><?php echo $daily['coinType']; ?></td>
                                            <td><?php echo $daily['orderType']; ?></td>
                                            <td><?php echo $daily['paymentType']; ?></td>
											<td><?php echo $daily['orderDate']; ?></td>
                                            <td><?php echo $daily['paymentAmountGHC']; ?></td>
                                        	<td><span><?php echo $daily['status'] == 0 ? "Pending" : "completed"; ?></span></td>
                                            <td></td>
                                        </tr>
                                            <?php
                                        }}else{
                                        ?>
                                         <tr>
                                            <td colspan="13">There are no sales for today</td>
                                        </tr>
                                        <?php } ?>
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
											<th>Customer</th>
                                            <th>Product</th>
											<th>Payment Method</th>
                                            <th>Date</th>
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
											<td>John</td>
                                        	<td>Bitcoin</td>
											<td>Cash</td>
                                            <td>20-08-2023</td>
                                        	<td>$36,738</td>
                                        	<td>300,459</td>
                                        	<td><span>Completed</span></td>
                                            <td></td>
                                        </tr>
										<tr>
                                            <td><input type="checkbox"></td>
                                        	<td>1</td>
											<td>John</td>
                                        	<td>Bitcoin</td>
											<td>Cash</td>
                                            <td>20-08-2023</td>
                                        	<td>$36,738</td>
                                        	<td>300,459</td>
                                        	<td><span>Completed</span></td>
                                            <td></td>
                                        </tr>
										<tr>
                                            <td><input type="checkbox"></td>
                                        	<td>1</td>
											<td>John</td>
                                        	<td>Bitcoin</td>
											<td>Cash</td>
                                            <td>20-08-2023</td>
                                        	<td>$36,738</td>
                                        	<td>300,459</td>
                                        	<td><span>Completed</span></td>
                                            <td></td>
                                        </tr>
										<tr>
                                            <td><input type="checkbox"></td>
                                        	<td>1</td>
											<td>John</td>
                                        	<td>Bitcoin</td>
											<td>Cash</td>
                                            <td>20-08-2023</td>
                                        	<td>$36,738</td>
                                        	<td>300,459</td>
                                        	<td><span>Completed</span></td>
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
                