<?php 
@session_start();
include_once("config.php");
include_once("../admin/Customer.php");
include_once("../admin/Helper.php");
include_once("../admin/Order.php");
$hp = new Helper();
$cs = new Customer();

$data['email'] = $_SESSION['email'];
$vnumbers = $cs->getVerifiedNumbers($data);

if(isset($_POST['sbtr'])){

    $data['orderNumber'] = htmlspecialchars_decode(trim($_POST['edit']));
    $data['transactionNumber'] = htmlspecialchars_decode(trim($_POST['trid']));
    $data['transactionStatus'] = "Payment Added";
    $cs -> addPayment($data);
}
if(isset($_GET['edit'])){
    $od = new Order();
    $orderId = htmlspecialchars_decode(trim($_REQUEST['edit']));
    $order = mysqli_fetch_assoc($od->getOrder($orderId));


}

?>
<input type="hidden" id="csid" value="<?php echo $_SESSION['customerId']; ?>" />
<div class="col-lg-12 col-xl-12 col-sm-12 col-md-12">
    <div class="card">
        <div class="header">
            <h3 class="title">Buy Crypto</h3>
            <p class="category"><small>Get the best rates for your currency</small></p>
        </div>
        <div class="content">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<div>
 <div class="row">
  <div class="process">
   <div class="process-row nav nav-tabs">
<?php if(!isset($_GET['edit'])){?>
    <div class="process-step">
     <button type="button" class="btn btn-info btn-circle" data-toggle="tab" href="#menu1"><i class="fa fa-info fa-2x"></i></button>
     <p><small>Buy<br />Amount</small></p>
    </div>
    <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu2"><i class="fa fa-file-text-o fa-2x"></i></button>
     <p><small>Payment<br />Method</small></p>
    </div>
    <?php } ?>
    <div class="process-step">
     <button type="button" class="btn <?php if(!isset($_GET['edit'])){ echo "btn-default"; }else{echo "btn-info";} ?> btn-circle" data-toggle="tab" href="#menu3"><i class="fa fa-ticket fa-2x"></i></button>
     <p><small>Transaction<br />Summary</small></p>
    </div>
    <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu4"><i class="fa fa-ticket fa-2x"></i></button>
     <p><small>Make <br />Payment</small></p>
    </div>
    <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu5"><i class="fa fa-cogs fa-2x"></i></button>
     <p><small>Submit<br />Payment</small></p>
    </div>
    <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu6"><i class="fa fa-cogs fa-2x"></i></button>
     <p><small>Processing<br />Transaction</small></p>
    </div>
    <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu7"><i class="fa fa-check fa-2x"></i></button>
     <p><small>Completed<br /></small></p>
    </div>
   </div>
  </div>
  <div class="tab-content">
<?php if(!isset($_GET['edit'])){?>
   <div id="menu1" class="tab-pane fade active in">
    <div style="max-width: 450px; border: 1px dashed #ccc; padding: 10px; border-radius: 10px; margin: 0 auto;">
    <h3>How much do you want to buy?</h3>
    <small>1 USD = <?php echo $hp->getGHCRate(); ?> GHC</small>
    <input type="hidden" id="usdtoghc" value="<?php echo $hp->getGHCRate(); ?>" />
    <p>
    <div class="form-group">
                <select class="form-control" id="cointype" name="cointype">
                    <option> Select Coin </option>
                    <option>Bitcoin</option>
                    <option>Usdt</option>
                </select>
            </div> 
        
            <div class="form-group">
                <small>Amount in USD</small>
                <input type="text" class="form-control" name="usdamount" id="usdamount" placeholder="Amount in USD" />
            </div>
            
            <div class="form-group">
            <small>Your wallet address</small>
            <input type="text" class="form-control" name="cwallet" id="cwallet" placeholder="bc1q36ef8cf43ga0lwfspm68hle6ed9fytyqnz9j3t" />
            </div>

            
            <p><small>Priority Fees:</small></p>
            <div style="display:flex; justify-content:space-between;">
            <label class="buysell"><input type="radio" name="pf" id="pf" value="0" /> <span class="checkmark"></span>&nbsp;&nbsp;High</label>
            <label class="buysell"><input type="radio" name="pf" id="pf" value="1" /> <span class="checkmark"></span>&nbsp;&nbsp;Medium</label>
            <label class="buysell"><input type="radio" name="pf" id="pf" value="3" /> <span class="checkmark"></span>&nbsp;&nbsp;Low</label>
            </div>
            <div class="form-group">
                <small>You will pay</small>
                <div class="alert alert-success">
            <div style="font-weight:600; font-size: 22px; text-align: center"><span>GHc</span> <span id="paymentamount">0.00</span></div>
        </div>
                <input type="hidden" class="form-control" name="ghcamount" id="ghcamount" placeholder="Amount in GHC" />
            </div>
        </p>
    </div>
    <div class="col-lg-12">
    <ul class="list-unstyled list-inline pull-right">
     <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
    </ul>
    </div>
   </div>
   <div id="menu2" class="tab-pane fade">
   <div style="max-width: 500px; border: 1px dashed #ccc; border-radius: 10px; padding: 10px;  margin: 0 auto;">
    <h3>Payment Method</h3>
    <p>Select how you want to pay</p>
    <p>
       <label class="buysell"><input type="radio" name="paymentmethod" id="pm" value="Mobile Money"> <span class="checkmark"></span>&nbsp;&nbsp;Mobile money </label>
       <label class="buysell"> <input type="radio" name="paymentmethod" id="pm" value="Bank Transfer"> <span class="checkmark"></span>&nbsp;&nbsp;Bank transfer </label>
       <label class="buysell"> <input type="radio" name="paymentmethod" id="pm" value="Cash / In-person"> <span class="checkmark"></span>&nbsp;&nbsp;Cash </label>
    </p>
    <div class="row" id="mbm" style="display:none">
    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
        <?php 

        foreach($vnumbers as $vnum){
        ?>
        <label class="mbbuy">
           <div class="checkma"> 
            <input type="radio" name="mmoney" id="mmoney" value="<?php echo $vnum['network']; ?>" /> 
            <input type="hidden" name="ph<?php echo $vnum['network']; ?>" id="ph<?php echo $vnum['network']; ?>" value="<?php echo $vnum['number']; ?>" />
        </div>
            <div>
                <div> <?php echo $vnum['network']; ?> </div>
                
                <!--div>Mobile Money Name:</div-->
                <div><?php echo $vnum['number']; ?></div>
            </div>
</label>

       <?php }
        ?>
        
        
    </div>
    </div>

    <div id="bt" style="display:none">
    <div class="">
        <div class="alert alert-info" style="font-size: 1.5em">
        <span>Call the Office for Bank details.</span><i class="ti-info-alt" style="float:right"></i>
        </div>
        <!--div class="form-group">
            <input class="form-control" type="text" name="bankn" id="bankn" placeholder="Bank Name" />
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="aname" id="aname" placeholder="Account Name" />
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="accountn" id="accountn" placeholder="Account Number" />
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="bankb" id="bankb" placeholder="Bank Branch" />
        </div-->
    </div>
    </div>


    <div id="csin" style="display:none">
    <div class="">
        <div class="alert alert-info" style="font-size: 1.5em">
        <span>Make Cash payment at our office.</span><i class="ti-info-alt" style="float:right"></i>
        </div>
        <!--div class="form-group">
            <input class="form-control" type="text" name="bankn" id="bankn" placeholder="Bank Name" />
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="aname" id="aname" placeholder="Account Name" />
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="accountn" id="accountn" placeholder="Account Number" />
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="bankb" id="bankb" placeholder="Bank Branch" />
        </div-->
    </div>
    </div>
    
    
    </div>
    <div class="col-lg-12">
    <ul class="list-unstyled list-inline pull-right">
     <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
     <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
    </ul>
</div>
   </div>

   <?php } ?>
   <div id="menu3" class="tab-pane fade <?php if(isset($_GET['edit'])){ echo "active in"; } ?>" style="text-align:center">
    <div class="" style="max-width: 450px; text-align: left; border: 1px dashed #cccccc; margin: 0 auto; padding:20px; border-radius: 10px">
    <h3>Transaction Summary</h3>
    <div>
        
       <input type="hidden" id="ordernum" value="<?php if(isset($_GET['edit'])){ echo $order['orderNumber']; } ?>" />
        <p><strong>Order Number:</strong><span id="ordernumber"><?php if(isset($_GET['edit'])){ echo $order['orderNumber']; } ?></span></p>
       
        <p><strong>Payment Method:</strong> <span id="pmmethod"><?php if(isset($_GET['edit'])){ echo $order['paymentType']; } ?></span></p>
        
        <div id="mnumlabel">
            <p><strong>Network: </strong><span id="networkname"><?php if(isset($_GET['edit'])){ echo $order['network']; } ?></span></p>

        <p><strong>Mobile Number: </strong> <span id="mnum"> <?php if(isset($_GET['edit'])){ echo $order['paymentNumber']; } ?></span></p></div>
        <p><strong>Coin Type:</strong> <span id="tsct"><?php if(isset($_GET['edit'])){ echo $order['coinType']; } ?></span> </p>
        <p><strong>Buy Amount (USD):</strong> <span id="mpdetailsusd"> <?php if(isset($_GET['edit'])){ echo $order['paymentAmountUSD']; }else{ echo "0.00"; } ?> </span> </p>
        <p><strong>Buy Amount (GHS):</strong> <span id="mpdetailsghc"> <?php if(isset($_GET['edit'])){ echo $order['paymentAmountGHC']; }else{ echo "0.00"; } ?> </span> </p>
        <p><strong>Wallet Address:</strong><span id="tswalletaddress"><?php if(isset($_GET['edit'])){ echo $order['walletAddress']; } ?> </span></p>
        <?php if(!isset($_GET['edit'])){ ?><p><input type="button" class="btn btn-warning form-control" id="placeorderbtn" value="Place buy order" /></p><?php } ?>
        
    </div> 
    </div>
    <div class="col-lg-12">
    <ul class="list-unstyled list-inline pull-right">
     <?php if(!isset($_GET['edit'])){?><li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li><?php } ?>
     <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
    </ul>
    </div>
   </div>
   <div id="menu4" class="tab-pane fade" style="text-align:center">
    <div style="max-width: 450px; border: 1px dashed #ccc; text-align: left; padding:10px; border-radius: 10px; margin: 0 auto">
    <h3>Make Payment</h3>
    <div>
        <p>Make Momo payment using this reference Number</p>
        <p>Reference: <strong style="font-size:18px"><span id="rfnm"><?php if(isset($_GET['edit'])){ echo $order['reference']; } ?></span></strong><input type="hidden" id="rffnumber" value='<?php if(isset($_GET['edit'])){ echo ""; } ?>' /> </p>
        <p>Amount to Pay: <strong style="font-size:18px"><span><?php if(isset($_GET['edit'])){ echo $order['paymentAmountGHC']; }?></span></strong></p>
    </div> 
    </div>
    <div class="col-lg-12">
    <ul class="list-unstyled list-inline pull-right">
     <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
     <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
    </ul>
    </div>
   </div>
   <div id="menu5" class="tab-pane fade" style="text-align:center">
    <div style="max-width: 450px; border: 1px dashed #ccc; text-align: left; padding:10px; border-radius: 10px; margin: 0 auto">
    <h3>Submit Payment</h3>
    <div>
        <form action="?page=buy&edit=<?php if(isset($_GET['edit'])) echo $_GET['edit']; ?>" method="POST">
        <p>Submit your payment receipt:</p>
        <div class="form-group">
            <input type="hidden" name="edit" id="edit" value="<?php if(isset($_GET['edit'])) echo $order['orderNumber']; ?>" />
        <input type="text" name="trid" id="trid" class="form-control" placeholder="Mobile money Transaction ID" value="<?php if(isset($_GET['edit']))echo $order['transactionId']; ?>" />
        </div>
        <p><input type="submit" class="btn btn-info" name="sbtr" id="sbtr" value="Submit payment" disabled/></p>
        </form>
    </div> 
    </div>
    <div class="col-lg-12">
    <ul class="list-unstyled list-inline pull-right">
     <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
     <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
    </ul>
    </div>
   </div>
   <div id="menu6" class="tab-pane fade" style="text-align:center">
    <h3>Processing</h3>
    <p>
        <div>Please wait while we process your transaction </div>
        <i class="fa fa-cog fa-spin" style="font-size:30px;color:#d4d4d4"></i>
    </p>
    <ul class="list-unstyled list-inline pull-right">
     <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
     <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
    </ul>
   </div>
   <div id="menu7" class="tab-pane fade" style="text-align:center">
    <h3>Completed</h3>
    <p>
        <i class="fa fa-check fa-3x"></i>
        <div>Transaction confirmed. Processing now </div>
    </p>
    <ul class="list-unstyled list-inline pull-right">
     <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
     <li><button type="button" class="btn btn-success"><i class="fa fa-check"></i> Done!</button></li>
    </ul>
   </div>
  </div>
 </div>
</div>
        </div>
    </div>
</div>
<script>
url = "../admin/functions.php"
    data = {};
    data.reference = document.getElementById('rffnumber').value
    function httprequest(url, query){
        rp = new XMLHttpRequest()
        rp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){

                if(document.getElementById('trnidbox')){
                    if(this.responseText != 0){
                        document.getElementById('trnidbox').innerHTML = this.responseText
                    document.getElementById('sbtr').disabled = true
                    return
                    }
                    
                    document.getElementById('sbtr').disabled = false
                    
                }
           
            }
        }
        rp.open("GET",url+query)
        rp.send()
    }
    </script>
<?php if(!isset($_GET['edit'])){?>
<script>

const randomAlphaNumeric = length => {
  let s = '';
  Array.from({ length }).some(() => {
    s += Math.random().toString(36).slice(2);
    return s.length >= length;
  });
  return s.slice(0, length);
};

    monm = document.querySelectorAll('#mmoney')
    for(n = 0; n < monm.length; n++){

        monm[n].addEventListener('click',toggleMobilemoney)
    }

    function toggleMobilemoney(){
    document.getElementById('mnum').innerHTML = document.getElementById('ph'+this.value).value
    document.getElementById('networkname').innerHTML = this.value
    data.paymentNumber = document.getElementById('ph'+this.value).value
    data.network = this.value
    }

   pm = document.querySelectorAll('#pm')
   
   for(i = 0; i < pm.length; i++){
    pm[i].addEventListener('change', togglePayment)
   }
   function togglePayment(){
    if(this.value == "Mobile Money"){

        document.getElementById("mbm").style.display = "block"
        document.getElementById('mnumlabel').style.display = "block"
        document.getElementById("bt").style.display = "none"
        document.getElementById("csin").style.display = "none"
    }else if(this.value == "Bank Transfer"){
        document.getElementById("bt").style.display = "block"
        document.getElementById("mbm").style.display = "none"
        document.getElementById('mnumlabel').style.display = "none"
        document.getElementById("csin").style.display = "none" 
    }else{
        document.getElementById("mbm").style.display = "none"
        document.getElementById("bt").style.display = "none"
        document.getElementById('mnumlabel').style.display = "none"
        document.getElementById("csin").style.display = "block"
        

    }
    document.getElementById('pmmethod').innerHTML = this.value
    data.paymentMethod = this.value
   
   }

   document.getElementById('usdamount').addEventListener('change', setGHCamount)
   function setGHCamount(){

    usdam = document.getElementById('usdamount').value
    usdtoghc = document.getElementById('usdtoghc').value
    ghcam = usdam * usdtoghc

    document.getElementById('ghcamount').value = ghcam
    document.getElementById('paymentamount').innerHTML = ghcam+".00"
    document.getElementById('mpdetailsghc').innerHTML = ghcam+".00"
    document.getElementById('mpdetailsusd').innerHTML = usdam+".00"
    data.amount = ghcam
    data.paymentUSD = usdam
    
   }

   document.getElementById('cointype').addEventListener('change', setCoin)

   function setCoin(){

    document.getElementById("tsct").innerHTML = this.value

    data.coinType = this.value
   }

    document.getElementById('ordernum').value = randomAlphaNumeric(8) 
    document.getElementById('edit').value = document.getElementById('ordernum').value
    document.getElementById('rffnumber').value = randomAlphaNumeric(10)
    document.getElementById('rfnm').innerHTML = document.getElementById('rffnumber').value
    document.getElementById('ordernumber').innerHTML = document.getElementById('ordernum').value
   
   document.getElementById('placeorderbtn').addEventListener('click', placeorder)
   function placeorder(){

    document.getElementById('tswalletaddress').innerHTML = document.getElementById('cwallet').value
    data.reference = document.getElementById('rffnumber').value 
    data.orderType = "buy"
    data.customer = document.getElementById('csid').value
    data.address = document.getElementById('cwallet').value
    data.orderNumber = document.getElementById('ordernum').value

    httprequest(url, "?action=placeorder&data="+JSON.stringify(data))
    //console.log(data)
   }


   document.getElementById('cwallet').addEventListener("change", setWalletAddress)

   function setWalletAddress(){
    document.getElementById('tswalletaddress').innerHTML = this.value

   }
</script>
<?php } ?>
<script>
   
   document.getElementById('trid').addEventListener("focus", activatecheck)

   function activatecheck(){
    if(!document.getElementById('trnidbox')){
        msgdiv = document.createElement('div')
    msgdiv.id = "trnidbox"
    msgdiv.innerHTML = this.responseText
    this.appendChild(msgdiv)  
    this.addEventListener("blur", checkTransaction)
    }
   
   } 

   function checkTransaction(){
    //if()
    chk = httprequest(url, "?action=checktransid&transid="+this.value)

   }
</script>



                