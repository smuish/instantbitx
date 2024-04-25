<?php 

include_once("../dashboard/config.php");
include_once("User.php");

$user = new User();

$userlist = $user->getUserList();

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
                    <h3 class="title">User List</h3>
                    <p class="">list of system users</p>
                </div>
                <div>
                    <a href=".?page=newuser" class="btn btn-info"><i class="ti-plus"></i> New User</a>
                </div>
            </div>
        </div>
        <div class="content">

        <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
											<th>Username</th>
                                            <th>E-mail</th>
                                            <th>Date created</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        if(mysqli_affected_rows($GLOBALS['con']) > 0){
                                            
                                            foreach($userlist as $list){?>
                                        
                                        <tr>
                                            <td><input type="checkbox"></td>
                                        	<td><?php echo $list['username']; ?></td>
                                            <td><?php echo $list['email']; ?></td>
                                            <td><?php echo $list['dateAdded']; ?></td>
                                        	<td><span><?php echo $list['status'] == 0 ? "Inactive" : " Active"; ?></span></td>
                                            <td></td>
                                        </tr>
                                    
                                    <?php } } ?>
                                    </tbody>
                                </table>

                            </div>
						</div>
    </div>
</div>
                