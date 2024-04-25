<?php 

include_once("../dashboard/config.php");
include_once("Customer.php");

$ct = new Customer();

$customerslist = $ct->getCustomers();

?>
<style>
.icons{

    display:none;
}
</style>
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h3 class="title">Customers</h3>
            <p class="">Customers list</p>
        </div>
         <div class="content">

        <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
											<th>Username</th>
                                            <th> E-mail</th>
                                            <th>Date created</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(mysqli_affected_rows($GLOBALS['con']) > 0){
                                            
                                            
                                            foreach($customerslist as $customer){?>

                                            <tr>
                                            <td><input type="checkbox"></td>
                                        	<td><a href=".?page=customerdetails"><?php echo $customer['userName']; ?></a></td>
                                            <td><?php echo $customer['email']; ?></td>
                                            <td><?php echo $customer['dateJoined']; ?></td>
                                        	<td><td><?php echo $customer['status'] == 0 ? "<span>Pending</span>" : "<span>Verified</span>"; ?></td></td>
                                            <td></td>
                                        </tr>
                                        
                                        
                                       <?php } }else{?>
                                    
                                    <?php } ?>
                                    </tbody>
                                </table>

                            </div>
						</div>
    </div>
</div>
                