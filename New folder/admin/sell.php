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
    <div class="process-step">
     <button type="button" class="btn btn-info btn-circle" data-toggle="tab" href="#menu1"><i class="fa fa-info fa-2x"></i></button>
     <p><small>Sell<br />Amount</small></p>
    </div>
    <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu2"><i class="fa fa-credit-card fa-2x"></i></button>
     <p><small>Payment<br />Method</small></p>
    </div>
    <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu3"><i class="fa fa-ticket fa-2x"></i></button>
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
   <div id="menu1" class="tab-pane fade active in">
    <div class="col-lg-8 col-md-6 col-sm-12">
    <h3>How much do you want to sell?</h3>
    <small>1 USD = 12.8 GHC</small>
    <p>
            <div class="form-group">
                <select class="form-control">
                    <option> Select Coin </option>
                    <option>Bitcoin</option>
                    <option>Usdt</option>
                </select>
            </div> 
            <div class="form-group">
                <input type="text" class="form-control" name="usdamount" id="usdamount" placeholder="Amount in USD" />
            </div>
            <div class="form-group">
                <span style="position:relative; margin:0 auto">You will receive</span>
                <input type="text" class="form-control" name="ghcamount" id="ghcamount" placeholder="Amount in GHC" />
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
   <div class="col-lg-8 col-md-6 col-sm-12">
    <h3>Select Payment Method</h3>
    <p>Select how you want to receive payment</p>
    <p>
       <label class="buysell"><input type="radio" name="pm" id="pm" checked value="mbm"> <span class="checkmark"></span>&nbsp;&nbsp;Mobile money </label>
       <label class="buysell"> <input type="radio" name="pm" id="pm" value="bt"> <span class="checkmark"></span>&nbsp;&nbsp;Bank transfer </label>
       <label class="buysell"> <input type="radio" name="pm" id="pm" value="cs"> <span class="checkmark"></span>&nbsp;&nbsp;Cash </label>
    </p>
    <div class="row" id="mbm">
    <div class="col-lg-8 col-xl-12 col-md-4 col-sm-4">
        <div class="form-group">
            <input class="form-control" type="text" name="mname" id="mname" placeholder="Mobile money name" />
        </div>
        <div class="form-group">
            <select name="mnetwork" id="mnetwork" class="form-control">
                <option>Select phone network</option>
                <option>Telecel</option>
                <option>MTN</option> 
                <option>Airtel Tigo</option>  
            </select>
            
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="mnumber" id="mnumber" placeholder="Mobile money number" />
        </div>
    </div>
    </div>

    <div class="row" id="bt" style="display:none">
    <div class="col-lg-8 col-xl-12 col-md-4 col-sm-4">
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
   <div id="menu3" class="tab-pane fade" style="text-align:center">
    <div class="col-lg-12">
    <h3>Transaction Summary</h3>
    <div>
        <p>Sell Order.</p>
        <p>Payment Type:</p>
        <p>Payment Details:</p>
        <div><oblique>payment details here</oblique></div>
        <p>Coin Type: </p>
        <p>Selling Amount (USD): </p>
        <p>Selling Amount (GHS): </p>
        <p><input type="button" class="btn btn-warning" value="Place sell order" /></p>
        
    </div> 
    </div>
    <div class="col-lg-12">
    <ul class="list-unstyled list-inline pull-right">
     <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
     <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
    </ul>
    </div>
   </div>
   <div id="menu4" class="tab-pane fade" style="text-align:center">
    <h3>Awaiting Asset</h3>
    <p><i class="fa fa-hourglass fa-7x fa-spin" style="font-size:30px;color:#d4d4d4"></i></p>
    <div>
        <p>Go to your wallet and send exactly 0.00 USD to the Bitcoin USD address</p>
        <div style="border:1px solid #eeeeee; background-color:#fcfcfc; padding:10px 30px; max-width:500px; overflow-x: scroll; margin:0 auto; border-radius:10px">
            <div style="color:#999999; text-align:left">Instantbitx Bitcoin address:</div>
            <div style="padding: 10px 0px;"><p>bc1q36ef8cf43ga0lwfspm68hle6ed9fytyqnz9j3t</p></div>
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

   pm = document.querySelectorAll('#pm')
   
   for(i = 0; i < pm.length; i++){
    pm[i].addEventListener('change', togglePayment)
   }
   function togglePayment(){
    if(this.value == "mbm"){

        document.getElementById(this.value).style.display = "block"
        document.getElementById("bt").style.display = "none"
    }else if(this.value == "bt"){
        document.getElementById(this.value).style.display = "block"
        document.getElementById("mbm").style.display = "none"
    }else{
        document.getElementById("mbm").style.display = "none"
        document.getElementById("bt").style.display = "none"

    }
   }
</script>


                