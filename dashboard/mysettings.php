<?php
include_once("config.php");
include_once("../admin/Customer.php");

$cs = new Customer();

$data['email'] = $_SESSION['email'];
$vnumbers = $cs->getVerifiedNumbers($data);

?>

<div class="card">
    <div class="header">
        <h3 class="title">Verified Numbers</h3>
        <p class="">List of verified numbers</p>
     </div>
    <div class="content">
        <div class="row">
            <div class="col-lg-3">
                <div clas="form-group mb-5">

                <?php
                
                    
                    foreach($vnumbers as $vnum){?>
                    <div class="badge badge-primarv"><?php echo $vnum['number']; ?> <span> x </span></div>
                
                <?php } ?>
                </div>
                <div>&nbsp;</div>
            <form>
                <div class="form-group">
                    <select id="tnw" name="tnw" class="form-control">
                        <option value="-1"> Select Network </option>
                        <option value="MTN">MTN</option>
                        <option value="Airteltigo">Airtel tigo</option>
                        <option value="Telecel">Telecel</option>
                </select>
                    </div>
                    <div class="form-group">
                    <input type="text" maxlength="10" class="form-control" name="csnumber" id="csnumber" class="form-control" placeholder="Add new number" required />
                    <input type="hidden" id="csemail" name="csemail" value="<?php echo $_SESSION['email']; ?>" />
                </div>
                <div class="form-group">
                    <input type="button" value="Add Phone Number" name="addnum" id="addnum" class="btn btn-danger" /> 
                </div>
            </form>
        </div>
            </div>
    </div>
</div>

<div class="card">
    <div class="header">
        <h3 class="title">KYC Documents</h3>
        <p class="">Verified documents</p>
     </div>
    <div class="content">
                            
    </div>
</div>




<script>

    document.getElementById("addnum").addEventListener('click', addVerified)

        function httprequest(url, query){

            rp = new XMLHttpRequest()
            rp.onreadystatechange = function(){
                if(this.readyState = 4 && this.status == 200){
                        alert(this.responseText)

                }

        }

        rp.open("GET",url+query)
        rp.send()
    }

    function addVerified(){


        phn = document.getElementById('csnumber').value
        em = document.getElementById('csemail').value
        mnt = document.getElementById('tnw').value
        if(mnt != "-1" && phn.length > 9){
        data = JSON.stringify({
            "email" : em,
            "phonenumber" : phn,
            "network" : mnt,

        })


        httprequest("../admin/functions.php","?action=setverified&customer="+data)
    }else{

        alert("Check Phone number and Make sure mobile network is selected")
    }

    }

</script>