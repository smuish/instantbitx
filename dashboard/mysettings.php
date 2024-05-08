<?php
include_once("config.php");
include_once("../admin/Customer.php");

$cs = new Customer();
$data['email'] = $_SESSION['email'];
$vnumbers = $cs->getVerifiedNumbers($data);


?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<style>

    .phclose{}
    .badge:hover .phclose{

        position: absolute;
        display:block!important;
        right: 0px;
        border: 1px solid #cccccc;
        border-radius: 200%;
        padding: 3px 7px 5px;
        background: #eeeeee;
        top:-10px;
    }


</style>
<div class="card">
    <div class="header">
        <h3 class="title">Verified Numbers</h3>
        <p class="">List of verified numbers</p>
     </div>
    <div class="content">
        <div class="row">
            <div class="col-lg-3">
                <div clas="form-group mb-5">
    <input type="hidden" value="<?php echo $data['email']; ?>" id="useremail" />
                <?php
                
                    
                    foreach($vnumbers as $vnum){?>

                    <div class="badge badge-primarv" id="cn<?php echo trim($vnum['number']); ?>" style="position:relative"><?php echo $vnum['number']; ?> <span id="<?php echo trim($vnum['number']); ?>" class="phclose" style="display: none"> x </span></div>
                
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
    <p>
       <label class="buysell"><input type="radio" name="kycdoc" id="kycd" value="Drivers License"> <span class="checkmark"></span>&nbsp;&nbsp;Drivers License </label>
       <label class="buysell"> <input type="radio" name="kycdoc" id="kycd" value="National Id"> <span class="checkmark"></span>&nbsp;&nbsp;National Id </label>
       <label class="buysell"> <input type="radio" name="kycdoc" id="kycd" value="Passport"> <span class="checkmark"></span>&nbsp;&nbsp;Passport </label>
    </p>            
    </div>
</div>




<script>
function create2FAapplication(){

    const data = 'to=%2B233555026671&p=%3CREQUIRED%3E&text=Dear%20customer.%20We%20want%20to%20say%20thanks%20for%20your%20trust.%20Use%20code%20MINUS10%20for%2010%20%25%20discount%20on%20your%20next%20order!';

const xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener('readystatechange', function () {
	if (this.readyState === this.DONE) {
		console.log(this.responseText);
	}
});

xhr.open('POST', 'https://sms77io.p.rapidapi.com/sms');
xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
xhr.setRequestHeader('X-RapidAPI-Key', '07c2e415e1msh7b89f071e7e928dp14204fjsn6467734bf589');
xhr.setRequestHeader('X-RapidAPI-Host', 'sms77io.p.rapidapi.com');

xhr.send(data);
}


create2FAapplication()
    function send2FA(){
const myHeaders = new Headers();
myHeaders.append("Authorization", "App 3d70dc6ccc06f0039b636444d6927aac-7e379ed4-b90d-459e-9095-adfc3b473b74");
myHeaders.append("Content-Type", "application/json");
myHeaders.append("Accept", "application/json");

const raw = JSON.stringify({
    "messages": [
        {
            "destinations": [{"to":"233555026671"}],
            "from": "ServiceSMS",
            "text": "Congratulations on sending your first message.\nGo ahead and check the delivery report in the next step."
        }
    ]
});

const requestOptions = {
    method: "POST",
    headers: myHeaders,
    body: raw,
    redirect: "follow"
};

fetch("https://2vqpll.api.infobip.com/sms/2/text/advanced", requestOptions)
    .then((response) => response.text())
    .then((result) => console.log(result))
    .catch((error) => console.error(error));

    }




    
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


    phcls = document.querySelectorAll('.phclose')
    console.log(phcls)
    for(j = 0; j<= phcls.length; j++){

        phcls[j].addEventListener("click", deleteNumber)
    }

    function deleteNumber(){
        url = "../admin/functions.php"
        data = {}
        data.number = this.id
        data.email = document.getElementById('useremail').value
        //console.log(JSON.stringify(data))
        httprequest(url,"?action=deleteNumber&data="+JSON.stringify(data))
        document.getElementById("cn"+this.id).remove()

    }

    document.getElementById("addnum").addEventListener('click', addVerified)
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