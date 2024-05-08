<?php
    @session_start();
    include_once("../dashboard/config.php");
    include_once("Helper.php");
    $hp = new Helper();
    $ghc = $hp->getGHCRate();
    $ghid = $hp->getGHCRateId();
    $apiid = $hp->getRestAPI_id();
    $bapi = $hp->getRestAPI();
   

?>
<div class="card">
                            <div class="header">
                                <h3 class="title">Cedi to Dollar rate</h3>
                                
                            </div>
                            <div class="content">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>GHC Buy Rates</label>
                                                <input type="hidden" value="<?php echo $ghc != "" ? $ghid : ""; ?>"  id="ghcrateid" />
                                                <input type="text" class="form-control border-input" id="ghcratevl" placeholder="GHC Buy rates" value="<?php echo $ghc == "" ? "0" : $ghc; ?>">
                                                </div>
                                                <div class="form-group">
                                                <button  class="btn btn-default" id="ghcrate"><i class="ti-save" ></i>&nbsp;Save</button>
                                                </div>
                                            
                                        </div>
                                      </div>
                                    
                                    <div class="clearfix"></div>
                            </div>
                        </div>

<div class="card">
                            <div class="header">
                                <h3 class="title">Blockchain Settings</h3>
                                
                            </div>
                            <div class="content">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>API Key</label>
                                                <input type="hidden" value="<?php echo $bapi != "" ? $apiid : ""; ?>"  id="cryptoapiid" />
                                                <input type="text" class="form-control border-input" id="cryptoapivl" placeholder="API Key" value="<?php echo $bapi == "" ? "0" : $bapi; ?>">
                                                </div>
                                                <div class="form-group">
                                                <button  class="btn btn-default" id="cryptoapi"><i class="ti-save" ></i>&nbsp;Save</button>
                                                </div>
                                            
                                        </div>
                                      </div>
                                    
                                    <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="header">
                                <h3 class="title">SMTP Settings</h3>
                                
                            </div>
                            <div class="content">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>API Key</label>
                                                <input type="hidden" value="<?php echo $bsmtp != "" ? $smtpid : ""; ?>"  id="smtpid" />
                                                <input type="text" class="form-control border-input" id="smtpvl" placeholder="API Key" value="<?php echo $bapi == "" ? "0" : $bapi; ?>">
                                                </div>
                                                <div class="form-group">
                                                <button  class="btn btn-default" id="smtp"><i class="ti-save" ></i>&nbsp;Save</button>
                                                </div>
                                            
                                        </div>
                                      </div>
                                    
                                    <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h3 class="title">KYC Settings</h3>
                                
                            </div>
                            <div class="content">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Acceptable documents</label>
                                                <input type="hidden" value="<?php echo $bkyv != "" ? $kycid : ""; ?>"  id="kycid" />
                                                <input type="check" class="form-control border-input" id="smtpvl" placeholder="API Key" value="<?php echo $bkyc == "" ? "0" : $bkyc; ?>">
                                                </div>
                                                <div class="form-group">
                                                <button  class="btn btn-default" id="kyc"><i class="ti-save" ></i>&nbsp;Save</button>
                                                </div>
                                            
                                        </div>
                                      </div>
                                    
                                    <div class="clearfix"></div>
                            </div>
                        </div>



<script>
      url = "functions.php"
      data = {}                  
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

    document.getElementById('ghcrate').addEventListener('click', savesettings)
    document.getElementById('cryptoapi').addEventListener('click', savesettings)
    function savesettings(){
            data.id = document.getElementById(this.id+"id").value
            data.name = this.id
            data.value = document.getElementById(this.id+"vl").value
            query = "?action="+this.id+"&data="+JSON.stringify(data)
            httprequest(url,query)
    }

</script>