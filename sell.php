<style>

.process-step .btn:focus{outline:none}
.process{display:table;width:100%;position:relative}
.process-row{display:table-row}
.process-step button[disabled]{opacity:1 !important;filter: alpha(opacity=100) !important}
.process-row:before{top:30px;bottom:0;position:absolute;content:" ";width:100%;height:1px;background-color:#ccc;z-order:0}
.process-step{display:table-cell;text-align:center;position:relative}
.process-step p{margin-top:4px}
.btn-circle{width:60px;height:60px;text-align:center;font-size:12px;background-color:#ffffff;}

</style>

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
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu2"><i class="fa fa-file-text-o fa-2x"></i></button>
     <p><small>Payment<br />Method</small></p>
    </div>
    <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu3"><i class="fa fa-image fa-2x"></i></button>
     <p><small>Transaction<br />Summary</small></p>
    </div>
    <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu4"><i class="fa fa-cogs fa-2x"></i></button>
     <p><small>Configure<br />display</small></p>
    </div>
    <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu5"><i class="fa fa-check fa-2x"></i></button>
     <p><small>Save<br />result</small></p>
    </div>
   </div>
  </div>
  <div class="tab-content">
   <div id="menu1" class="tab-pane fade active in">
    <div class="col-lg-4 col-md-6 col-sm-12">
    <h3>How much do you want to sell?</h3>
    <small>1 USD = 12.8 GHC</small>
    <p>
        
            <div class="form-group">
                <input type="text" class="form-control" name="usdamount" id="usdamount" placeholder="Amount in USD" />
            </div>
            <div class="form-group">
                <small style="margin:0 auto">You will receive</small>
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
   <div class="col-lg-4 col-md-6 col-sm-12">
    <h3>Select Payment Method</h3>
    <small>Select how you want to receive payment</small>
    <p>
       <label class=""> <input type="radio" name="pm" id="pm" style="opacity:0; position:absolute"> Mobile money</label>
       <label  class=""> <input type="radio" name="pm" id="cpm" style="opacity:0; position:absolute">Cash Wallet
    </label>
    </p>
    </div>
    <div class="col-lg-12">
    <ul class="list-unstyled list-inline pull-right">
     <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
     <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
    </ul>
</div>
   </div>
   <div id="menu3" class="tab-pane fade">
    <h3>Menu 3</h3>
    <p>Some content in menu 3.</p>
    <ul class="list-unstyled list-inline pull-right">
     <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
     <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
    </ul>
   </div>
   <div id="menu4" class="tab-pane fade">
    <h3>Menu 4</h3>
    <p>Some content in menu 4.</p>
    <ul class="list-unstyled list-inline pull-right">
     <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
     <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
    </ul>
   </div>
   <div id="menu5" class="tab-pane fade">
    <h3>Menu 5</h3>
    <p>Some content in menu 5.</p>
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



                