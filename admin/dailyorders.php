<?php
include_once("../dashboard/config.php");
include_once("Order.php");
$sales = new Order();

$dailySales = $sales->getDailySales();


?>

<style>
.icons{

    display:none;
}
</style>
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <div class="inner-menu">
                <div>
                    <h3 class="title">Daily Orders</h3>
                    <p class="">Order list</p>
                </div>
                <div>
                    <a href=".?page=neworderform" class="btn btn-info"><i class="ti-plus"></i> Add Order</a>
                </div>
            </div>
        </div>
         <div class="content">

        <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Order Number</th>
                                            <th>Order Type</th>
                                            <th>Customer</th>
                                            <th>Payment Method</th>
                                            <th>Amount (GHC)</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        if(mysqli_affected_rows($GLOBALS['con']) > 0){
                                            foreach($dailySales as $daily){
                                            ?>
                                            <tr>
                                            <td><input type="checkbox"></td>
                                            <td><?php echo $daily['orderNumber']; ?></td>
                                            <td><?php echo $daily['orderType']; ?></td>
                                        	<td><a href=".?page=customerdetails">Joe</a></td>
                                            <td><?php echo $daily['paymentType']; ?></td>
                                            <td><?php echo $daily['paymentAmountGHC']; ?></td>
                                        	<td><span><?php echo $daily['status'] == 0 ? "Pending" : "completed"; ?></span></td>
                                            <td></td>
                                        </tr>
                                            <?php
                                        }}else{
                                        ?>
                                         <tr>
                                            <td colspan="13">There are no sales for today</td>
                                            <td>08900000</td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                            </div>
						</div>
    </div>
</div>
                