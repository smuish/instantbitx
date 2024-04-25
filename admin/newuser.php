<div class="container-fluid">
    <div class="row" style="display: flex; justify-content: center">
        <div class="col-lg-3 col-md-7 col-sm-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">New User</h4>
                    <p class="category">Add New user</p>
                </div>
                <div class="content">
                    
                            <div class="form-group">
                                <label>E-mail: </label>
                                <input type="email" id="email" class="form-control border-input" placeholder="e-mail" required/>
                            </div>
                            <div class="form-group">
                                <label>Username: </label>
                                <input type="text" id="username" class="form-control border-input" placeholder="username" required/>
                            </div>
                            <div class="form-group">
                                <label>Password: </label>
                                <input type="password" id="password" class="form-control border-input" placeholder="password" required/>
                            </div>
                            <div class="form-group">
                                <label>Re-type password: </label>
                                <input type="password" id="rpassword" class="form-control border-input" placeholder="confirm password" required/>
                            </div>
                            <div class="form-group">
                                <label>Role: </label>
                                <select id="role" class="form-control">
                                    <option value="-1"> Select User Role </option>
                                    <option value="Admin"> Admin </option>
                                    <option value="Sales"> Sales </option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" id="nuser" class="btn btn-info btn-fill btn-wd">New User</button>
                            </div>
                            <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

    document.getElementById('nuser').addEventListener("click", saveUser)

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


    function saveUser(e){
        val = 1
        url = "functions.php"
        query = "?action=newuser&data="
        rl = document.getElementById('role')
        em = document.getElementById('email')
        us = document.getElementById('username')
        ps = document.getElementById('password')
        rps = document.getElementById('rpassword')
        data = {}
        data.email = em.value
        data.username = us.value
        data.avatar = ""
        if((ps.value == rps.value) && ps.value != ""){

            data.password = ps.value

        }else{
            ps.focus()
            ps.value= ""
            rps.value = ""
            val = 0
        }
        
        if(rl.value == "-1"){
            rl.focus()
            val = 0
        }else{

            data.role = rl.value
        }

        if(val == 1){

            query += JSON.stringify(data)
            httprequest(url, query)

        }
        
    }


</script>
                