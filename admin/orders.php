<?php 

include_once("../dashboard/config.php");
include_once("Order.php");
include_once("Helper.php");

$orders = new Order();
$hp = new Helper();


?>
<style>

	.icons{


		display: none;
	}
    .nav-tabs>li.active>a{


        font-weight: 900;
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
							<a href="#tab_default_5" data-toggle="tab">
							New Orders</a>
						</li>
                        <li>
							<a href="#tab_default_2" data-toggle="tab">
							Payment Added(BO's)</a>
						</li>
                        <li>
							<a href="#tab_default_3" data-toggle="tab">
							Confirmed SO's</a>
						</li>
                        <li>
							<a href="#tab_default_1" data-toggle="tab">
							Pending</a>
						</li>
						<li>
							<a href="#tab_default_4" data-toggle="tab">
							Completed Orders</a>
						</li>
                        <li>
							<a href="#tab_default_6" data-toggle="tab">
							All Orders</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane" id="tab_default_1">
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
                                        $data['transactionStatus'] = "pending";
                                        $dailyOrders = $orders->getOrdersByStatus($data); 
                                        if(mysqli_affected_rows($GLOBALS['con']) > 0){
                                            foreach($dailyOrders as $daily){
                                            ?>
                                            <tr>
                                            <td><a href=".?page=orderdetails&order=<?php echo $daily['orderNumber']; ?>" class="btn btn-info">Process Order</a></td>
											<!-- <td><a href=".?page=customerdetails">Joe</a></td> -->
                                            <td><?php echo $daily['coinType']; ?></td>
                                            <td><?php echo $daily['orderType']; ?></td>
                                            <td><?php echo $daily['paymentType']; ?></td>
											<td><?php echo $daily['orderDate']; ?></td>
                                            <td><?php echo $hp->formatGHC($daily['paymentAmountGHC'],"GHC"); ?></td>
                                        	<td><span><?php echo $daily['transactionStatus']; ?></span></td>
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
                                            <th>Order Number</th>
											
                                            <th>Product</th>
											<th>Payment Method</th>
                                            <th>Date</th>
                                            <th>Amount (USD)</th>
                                            <th>Amount (GHS)</th>
                                            <th>Wallet Address</th>
                                            <th>Status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
                                        $data['transactionStatus'] = "Payment Added";
                                        $dailyOrders = $orders->getOrdersByStatus($data); 
                                        if(mysqli_affected_rows($GLOBALS['con']) > 0){
                                            foreach($dailyOrders as $daily){
                                            ?>
                                            <tr>
                                            <td><a href=".?page=orderdetails&order=<?php echo $daily['orderNumber']; ?>" class="btn btn-info">Process Order</a></td>
											<td><?php echo $daily['orderNumber']; ?></td>
                                            <td><?php echo $daily['coinType']; ?></td>
                                            <td><?php echo $daily['paymentType']; ?></td>
											<td><?php echo $daily['orderDate']; ?></td>
                                            <td><?php echo $hp->formatGHC($daily['paymentAmountUSD'],"USD"); ?></td>
                                            <td><?php echo $hp->formatGHC($daily['paymentAmountGHC'],"GHC"); ?></td>
                                            <td><?php echo $daily['walletAddress']; ?></td>
                                        	<td><span><?php echo $daily['transactionStatus']; ?></span></td>
                                            
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
                        <div class="tab-pane" id="tab_default_3">
							<p>
                                <div>Confirmed SO's</div>
							<div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Order Number</th>
                                            <th>Product</th>
                                            
											<th>Payment Method</th>
                                            <th>Date</th>
                                            <th>Amount (USD)</th>
                                            <th>Amount (GHS)</th>
                                            <th>Status</th>
                                            <th>API Value USD</th>
                                            <th>Satoshie Value USD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
                                        $data['transactionStatus'] = "BTC Confirmed";
                                        $dailyOrders = $orders->getOrdersByStatus($data); 
                                        if(mysqli_affected_rows($GLOBALS['con']) > 0){
                                            foreach($dailyOrders as $daily){
                                            ?>
                                            <tr>
                                            <td><a href=".?page=orderdetails&order=<?php echo $daily['orderNumber']; ?>" class="btn btn-info">Process Order</a></td>
											<td><?php echo $daily['orderNumber']; ?></td>
                                            <td><?php echo $daily['coinType']; ?></td>
                                            <td><?php echo $daily['paymentType']; ?></td>
											<td><?php echo $daily['orderDate']; ?></td>
                                            <td><?php echo $hp->formatGHC($daily['paymentAmountUSD'],"USD"); ?></td>
                                            <td><?php echo $hp->formatGHC($daily['paymentAmountGHC'],"GHC"); ?></td>
                                        	<td><span><?php echo $daily['transactionStatus']; ?></span></td>
                                            <td><?php echo ""; ?></td>
                                            <td><?php echo ""; ?></td>
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
                        <div class="tab-pane" id="tab_default_4">
							<p>
                                <div>Completed Orders</div>
							<div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Product</th>
											<th>Payment Method</th>
                                            <th>Date</th>
                                            <th>Order Type</th>
                                            <th>Amount (USD)</th>
                                            <th>Amount (GHS)</th>
                                            <th>Status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
                                        $data['transactionStatus'] = "Complete";
                                        $dailyOrders = $orders->getOrdersByStatus($data); 
                                        if(mysqli_affected_rows($GLOBALS['con']) > 0){
                                            foreach($dailyOrders as $daily){
                                            ?>
                                            <tr>
                                            <td><a href=".?page=orderdetails&order=<?php echo $daily['orderNumber']; ?>" class="btn btn-info">Process Order</a></td>
											<!-- <td><a href=".?page=customerdetails">Joe</a></td> -->
                                            <td><?php echo $daily['coinType']; ?></td>
                                            <td><?php echo $daily['paymentType']; ?></td>
                                            <td><?php echo $daily['orderDate']; ?></td>
                                            <td><?php echo $daily['orderType']; ?></td>
                                            <td><?php echo $hp->formatGHC($daily['paymentAmountUSD'],"USD"); ?></td>
                                            <td><?php echo $hp->formatGHC($daily['paymentAmountGHC'],"GHC"); ?></td>
                                        	<td><span><?php echo $daily['transactionStatus']; ?></span></td>
                                            
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
                        <div class="tab-pane active" id="tab_default_5">
							<p>
                                <div>New Orders</div>
							<div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
            
											
                                            <th>Product</th>
                                            <th>Order Type</th>
                                            <th>Payment Method</th>
                                            <th>Order Date</th>
                                            <th>Amount (USD)</th>
                                            <th>Amount (GHS)</th>
                                            <th>Status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
                                        $data['transactionStatus'] = "";
                                        $dailyOrders = $orders->getOrdersByStatus($data); 
                                        if(mysqli_affected_rows($GLOBALS['con']) > 0){
                                            foreach($dailyOrders as $daily){
                                            ?>
                                            <tr>
                                            <td><a href=".?page=orderdetails&order=<?php echo $daily['orderNumber']; ?>" class="btn btn-info">Process Order</a></td>
											<!-- <td><a href=".?page=customerdetails">Joe</a></td> -->
                                            <td><?php echo $daily['coinType']; ?></td>
                                            <td><?php echo $daily['orderType']; ?></td>
                                            <td><?php echo $daily['paymentType']; ?></td>
											<td><?php echo $daily['orderDate']; ?></td>
                                            <td><?php echo $hp->formatGHC($daily['paymentAmountUSD'],"USD"); ?></td>
                                            <td><?php echo $hp->formatGHC($daily['paymentAmountGHC'],"GHC"); ?></td>
                                        	<td><span><?php echo $daily['transactionStatus']; ?></span></td>
                                            
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
                        <div class="tab-pane" id="tab_default_6">
							<p>
                                <div>All Orders</div>
							<div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
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
									<?php
                                        $dailyOrders = $orders->getAllOrders(); 
                                        if(mysqli_affected_rows($GLOBALS['con']) > 0){
                                            foreach($dailyOrders as $daily){
                                            ?>
                                            <tr>
                                            <td><a href=".?page=orderdetails&order=<?php echo $daily['orderNumber']; ?>" class="btn btn-info">Process Order</a></td>
											<td></td>
                                            <td><?php echo $daily['coinType']; ?></td>
                                            <td><?php echo $daily['paymentType']; ?></td>
                                            <td><?php echo $daily['orderDate']; ?></td>
                                            <td><?php echo $hp->formatGHC($daily['paymentAmountUSD'],"USD"); ?></td>
                                            <td><?php echo $hp->formatGHC($daily['paymentAmountGHC'],"GHC"); ?></td>
                                        	<td><span><?php echo $daily['transactionStatus']; ?></span></td>
                                            <td></td>
                                            <td></td>
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
					</div>
				</div>
			</div>

        </div>
    </div>
</div>
                