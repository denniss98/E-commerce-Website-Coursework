<?php
  // Imports the navigation bar and sets the page name
  include('common.php');
  outputHeader("Home");
  outputNav();
?>

<!-- Register Form -->
<div class="container-fluid">
    <div class="col-md-12">
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-012 registerpage">
                <form class="form-container" name="registerForm" onsubmit="return false">
                    <p><b>Please fill out all fields to register your account</b></p>
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" id="inputUsername" placeholder="Username" minlength=3 required>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password" required>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" id="inputPasswordConfirm" placeholder="Confirm password" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="forename" id="inputForename" placeholder="Forename" minlength=3 required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="surname" id="inputSurname" placeholder="Surname" minlength=3 required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="address" id="inputAddress" placeholder="Address" minlength=3 required>
                    </div>

                    <div class="form-group">
                        <input type="tel" class="form-control" name="mobileNumber" id="inputNumber" placeholder="Mobile number" pattern="^\s*\(?(020[7,8]{1}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{4})|(0[1-8]{1}[0-9]{3}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{3})\s*$" required> 
                    </div>

                    <button type="submit" onclick="register()" class="btn btn-primary regstrbtn">Register</button>
                     
                    <p>
                        <span id="ServerResponse"></span>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div> 

<script>
    function register(){
        //Create request object 
        let request = new XMLHttpRequest();

        //Create event handler that specifies what should happen when server responds
        request.onload = () => {
            //Check HTTP status code
            if(request.status === 200){
                //Get data from server
                let responseData = request.responseText;

                //Add data to page
                document.getElementById("ServerResponse").innerHTML = responseData;
            }
            else
                alert("Error communicating with server: " + request.status);
        };

        //Set up request with HTTP method and URL 
        request.open("POST", "../php_action/registration.php");
        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        
        //Extract registration data
        let usrName = document.getElementById("inputUsername").value;
        let usrEmail = document.getElementById("inputEmail").value;
        let usrPassword = document.getElementById("inputPassword").value;
        let usrForename = document.getElementById("inputForename").value;
        let usrSurname = document.getElementById("inputSurname").value;
        let usrAddress = document.getElementById("inputAddress").value;
        let usrMobile = document.getElementById("inputNumber").value;
        
        //Send request
        request.send("inputUsername=" + usrName + "&inputEmail=" + usrEmail + "&inputPassword=" + usrPassword + "&inputForename=" + usrForename + "&inputSurname=" + usrSurname + "&inputAddress=" + usrAddress + 
        "&inputNumber=" + usrMobile);
    }
</script>

<?php
	//Outputs the footer and closing tags
	outputFooter();
	outputClosing();
?>