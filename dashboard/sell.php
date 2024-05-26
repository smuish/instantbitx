<?php 
@session_start();
include_once("config.php");
include_once("../admin/Customer.php");
include_once("../admin/Helper.php");
$hp = new Helper();
$cs = new Customer();
$data['email'] = $_SESSION['email'];


?>
<input type="hidden" id="csid" value="<?php echo $_SESSION['customerId']; ?>" />
<div class="col-lg-12 col-xl-12 col-sm-12 col-md-12">
    <div class="card">
        <div class="header">
            <h3 class="title">Sell Crypto</h3>
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
     <p><small>Sell<br />Amount</small></p>
    </div>
    <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu2"><i class="fa fa-credit-card fa-2x"></i></button>
     <p><small>Payment<br />Method</small></p>
    </div>
    <?php } ?>
    <div class="process-step">
     <button type="button" class="btn <?php echo isset($_GET['edit']) ? "btn-info" : "btn-default"; ?> btn-circle" data-toggle="tab" href="#menu3"><i class="fa <?php echo isset($_GET['edit']) ? "fa-info" : ""; ?> fa-ticket fa-2x"></i></button>
     <p><small>Transaction<br />Summary</small></p>
    </div>
    <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu4"><i class="fa fa-hourglass fa-2x"></i></button>
     <p><small>Awaiting<br />Assets</small></p>
    </div>
    <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu5"><i class="fa fa-check fa-2x"></i></button>
     <p><small>Confirmation</small></p>
    </div>
    <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu6"><i class="fa fa-cogs fa-2x"></i></button>
     <p><small>Processing</small></p>
    </div>
   </div>
  </div>
  <div class="tab-content">
    <?php if(!isset($_GET['edit'])){?>
   <div id="menu1" class="tab-pane fade active in">
    <div style="margin: 0 auto; max-width: 450px; border-radius: 10px; border: 1px dashed #ccc; padding: 10px;">
    <h3>How much do you want to sell?</h3>
    <small>1 USD = <?php echo $hp->getGHCRate(); ?> GHC</small><input type="hidden" id="usdtoghc" value="<?php echo $hp->getGHCRate(); ?>" />
    <p>
            <div class="form-group">
                <select class="form-control" id="cointype">
                    <option value="-1"> Select Coin </option>
                    <option>Bitcoin</option>
                    <option>Usdt</option>
                </select>
            </div> 
            <div class="form-group">
                <input type="text" class="form-control" name="usdamount" id="usdamount" placeholder="Amount in USD" />
            </div>
            <div class="form-group">
                <span style="display: block; font-weight: 600; background: #ffffff; border: 1px solid #cccccc; max-width: 106px; margin: 0 auto; font-size: 13px; padding: 5px; border-radius: 20px; position: relative; bottom: -20px; z-index: 45" class="text-center">You will receive</span>
                <div class="alert alert-success">
            <div style="font-weight:600; font-size: 22px; padding: 15px 0px; text-align: center"><span>GHc</span> <span id="receiveamount">0.00</span></div>
                <input type="hidden" class="form-control" name="ghcamount" id="ghcamount" placeholder="Amount in GHC" />
            </div>
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
    <div style="max-width: 500px; border: 1px dashed #ccc; border-radius: 10px; padding: 10px; margin: 0 auto;">
    <h3>Select Payment Method</h3>
    <p>Select how you want to receive payment</p>
    <p>
       <label class="buysell"><input type="radio" name="pm" id="pm" value="Mobile money"> <span class="checkmark"></span>&nbsp;&nbsp;Mobile money </label>
       <label class="buysell"> <input type="radio" name="pm" id="pm" value="Bank transfer"> <span class="checkmark"></span>&nbsp;&nbsp;Bank transfer </label>
       <label class="buysell"> <input type="radio" name="pm" id="pm" value="Cash / In-person"> <span class="checkmark"></span>&nbsp;&nbsp;Cash </label>
    </p>
    <div id="mbm" style="display: none">
    <div >
        <div class="form-group">
            <input class="form-control" type="text" name="mname" id="mname" placeholder="Mobile money name" />
        </div>
        <div class="form-group">
            <select name="mnetwork" id="mnetwork" class="form-control">
                <option value="-1">Select phone network</option>
                <option value="Telecel">Telecel</option>
                <option value="MTN">MTN</option> 
                <option value="airteltigo">Airtel Tigo</option>  
            </select>
            
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="mnumber" id="mnumber" placeholder="Mobile money number" />
        </div>
    </div>
    </div>

    <div id="bt" style="display:none">
    <div >
        <div class="form-group">
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
        </div>
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
   <div id="menu3" class="tab-pane fade <?php echo isset($_GET['edit']) ? "active in" : ""; ?>" style="text-align:center">
    <div style="max-width: 500px; border: 1px dashed #ccc; border-radius: 10px; padding: 10px; margin: 0 auto; text-align: left">
    <h3>Transaction Summary</h3>
    <div>
        <p style="text-decoration: underline"><strong>Sell Order</strong></p>
        <p><strong>Order Number:</strong><span id="tsorderNumber"></span></p>
        <p><strong>Payment Type:</strong><span id="tspaymentType"></span></p>
        <div id="momoDetails" style="display: none">
            <p><strong>Mobile Network:</strong><span id="tsmobileNetwork"></span></p>
            <p><strong>Mobile Money Name:</strong><span id="tsmobileMoneyName"></span></p>
            <p><strong>Mobile Money Number:</strong><span id="tsmobileMoneyNumber"></span></p>
        </div>
        <div id="bankDetails" style="display: none">
        <p><strong>Bank Name:</strong><span id="tsbankName"></span></p>
        <p><strong>Bank Branch Name:</strong><span id="tsbankBranchName"></span></p>
        <p><strong>Account Name:</strong><span id="tsaccountName"></span></p>
        <p><strong>Account Number:</strong><span id="tsaccountNumber"></span></p>
        </div>
        <p><strong>Coin Type:</strong><span id="tscoinType"></span></p>
        <p><strong>Selling Amount (USD):</strong><span id="tssellAmountUSD"></span></p>
        <p><strong>Selling Amount (GHS):</strong><span id="tssellAmountGHC"></span></p>
        <?php if(!isset($_GET['edit'])){?><p><input type="button" class="btn btn-warning form-control" id="placeorderbtn" value="Place sell order" /></p><?php } ?>
        
    </div> 
    </div>
    <div class="col-lg-12">
    <ul class="list-unstyled list-inline pull-right">
    <?php if(!isset($_GET['edit'])){?> <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li><?php } ?>
     <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
    </ul>
    </div>
   </div>
   <div id="menu4" class="tab-pane fade">
   <div style="border:1px dashed #ccc; margin: 0 auto; padding: 10px; border-radius: 10px; max-width:450px; text-align:center">
    <h3>Awaiting Asset</h3>
    <p><i class="fa fa-hourglass fa-7x fa-spin" style="font-size:30px;color:#d4d4d4"></i></p>
    <div>
        <p>Go to your wallet and send exactly 0.00 USD to the Bitcoin USD address</p>
        <div style="border:1px solid #eeeeee; background-color:#fcfcfc; padding:10px 30px; max-width:500px; overflow-x: scroll; margin:0 auto; border-radius:10px">
            <div style="color:#999999; text-align:left">Instantbitx Bitcoin address:</div>
            <div style="padding: 10px 0px;"><p>bc1q36ef8cf43ga0lwfspm68hle6ed9fytyqnz9j3t</p></div>
        </div> 
    </div>
</div>
    <ul class="list-unstyled list-inline pull-right">
     <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
     <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
    </ul>
   </div>
   <div id="menu5" class="tab-pane fade" style="text-align:center">
    <h3>Confirmation</h3>
    <p>
        <i class="fa fa-check fa-3x"></i>
        <div>Transaction confirmed. Processing now </div>
    </p>
    <ul class="list-unstyled list-inline pull-right">
     <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
     <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
    </ul>
   </div>
   <div id="menu6" class="tab-pane fade" style="text-align:center">
    <h3>Processing</h3>
    <p>
        <div>Please wait while we process your transaction </div>
        <i class="fa fa-cog fa-spin" style="font-size:30px;color:#d4d4d4"></i>
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
    function httprequest(url, query){
        rp = new XMLHttpRequest()
        rp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                alert(this.responseText)
            }
        }
        rp.open("GET",url+query)
        rp.send()
    }

    const randomAlphaNumeric = length => {
  let s = '';
  Array.from({ length }).some(() => {
    s += Math.random().toString(36).slice(2);
    return s.length >= length;
  });
  return s.slice(0, length);
};

    data = {}
    document.getElementById('tsorderNumber').innerHTML = randomAlphaNumeric(10)
    data.orderNumber = document.getElementById('tsorderNumber').innerHTML
    data.orderType = "sell"
    data.customer = document.getElementById('csid').value
    
   
   pm = document.querySelectorAll('#pm')
   
   for(i = 0; i < pm.length; i++){
    pm[i].addEventListener('change', togglePayment)
   }
   function togglePayment(){
   
    if(this.value == "Mobile money"){

        document.getElementById("mbm").style.display = "block"
        document.getElementById("bt").style.display = "none"
        document.getElementById('momoDetails').style.display = "block"
        document.getElementById('bankDetails').style.display = "none"
       
    }else if(this.value == "Bank transfer"){
        document.getElementById("bt").style.display = "block"
        document.getElementById("mbm").style.display = "none"
        document.getElementById('momoDetails').style.display = "none"
        document.getElementById('bankDetails').style.display = "block"
    }else{
        document.getElementById("mbm").style.display = "none"
        document.getElementById("bt").style.display = "none"
        document.getElementById('momoDetails').style.display = "none"
        document.getElementById('bankDetails').style.display = "none"

    }

    document.getElementById('tspaymentType').innerHTML = this.value
    data.paymentMethod = this.value
   }

   document.getElementById('usdamount').addEventListener("change", setGHCamount)

   function setGHCamount(){

usdam = document.getElementById('usdamount').value
usdtoghc = document.getElementById('usdtoghc').value
ghcam = usdam * usdtoghc

document.getElementById('receiveamount').innerHTML = ghcam
document.getElementById('ghcamount').value = ghcam
// document.getElementById('paymentamount').innerHTML = ghcam+".00"
document.getElementById('tssellAmountGHC').innerHTML = ghcam+".00"
document.getElementById('tssellAmountUSD').innerHTML = usdam+".00"
data.amount = ghcam
data.paymentUSD = usdam

}

document.getElementById('mname').addEventListener("change", setMname)

function setMname(){

    document.getElementById('tsmobileMoneyName').innerHTML = this.value
}

document.getElementById('mnetwork').addEventListener("change", setMnetwork)

function setMnetwork(){

    document.getElementById('tsmobileNetwork').innerHTML = this.value
}
document.getElementById('mnumber').addEventListener("change", setMnumber)

function setMnumber(){

    document.getElementById('tsmobileMoneyNumber').innerHTML = this.value
}


document.getElementById('cointype').addEventListener("change", setCointype)

function setCointype(){

    document.getElementById('tscoinType').innerHTML = this.value
    data.coinType = this.value
}

document.getElementById('bankn').addEventListener("change", setBankName)

function setBankName(){

    document.getElementById('tsbankName').innerHTML = this.value
}

document.getElementById('aname').addEventListener("change", setAccountName)

function setAccountName(){

    document.getElementById('tsaccountName').innerHTML = this.value
}

document.getElementById('accountn').addEventListener("change", setAccountNumber)

function setAccountNumber(){

    document.getElementById('tsaccountNumber').innerHTML = this.value
}

document.getElementById('bankb').addEventListener("change", setBankBranch)

function setBankBranch(){

    document.getElementById('tsbankBranchName').innerHTML = this.value
}


document.getElementById('placeorderbtn').addEventListener('click', placeorder)
   function placeorder(){   
    url = "../admin/functions.php"
   data.mobileMoneyName = document.getElementById('mname') ? document.getElementById('mname').value : ""
   data.network = document.getElementById('mnetwork') ? document.getElementById('mnetwork').value : ""
   data.bankName = document.getElementById('bankn') ? document.getElementById('bankn').value : ""
   data.accountName = document.getElementById('aname') ? document.getElementById('aname').value : ""
   data.bankBranchName = document.getElementById('bankb') ? document.getElementById('bankb').value : ""
   data.accountNumber = document.getElementById('accountn') ? document.getElementById('accountn').value : ""
   data.paymentNumber = document.getElementById('mnumber') ? document.getElementById('mnumber').value : ""
   httprequest(url, "?action=placeorder&data="+JSON.stringify(data))
   //console.log(data)
    

   }
</script>


                