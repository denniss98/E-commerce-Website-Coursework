<?php
  // Imports the navigation bar and sets the page name
  include('common.php');
  outputHeader("Home");
?>

<!-- Login Form -->
<div class="container-fluid">
    <div class="col-md-12 py-4">
        <div class="row justify-content-center">
            <div class="cmslogin">
                <form class="form-container" id="LoginPara">
                <p><b>CMS Login</b></p>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                </div>
                <button onclick="login()" type="submit" class="btn btn-primary lgnbtn">Login</button>
                </form>
                <p id="ErrorMessages" style="color:red;"></p>
            </div>
        </div>
    </div>
</div>

<script>
	//Global variables 
	var loggedInStr = "To <a href=../cms/index.php> <input type=button value='CMS'></a> or <button onclick='logout()'>Logout</button>";
	var loginStr = document.getElementById("LoginPara").innerHTML;
	var request = new XMLHttpRequest();
	
	//Check login when page loads
	window.onload = checkLogin;
	
	//Checks whether user is logged in.
	function checkLogin(){
		//Create event handler that specifies what should happen when server responds
		request.onload = function(){
			if(request.responseText === "ok"){
				document.getElementById("LoginPara").innerHTML = loggedInStr;
			}
			else{
				console.log(request.responseText);
				document.getElementById("LoginPara").innerHTML  = loginStr;
			}
		};
		//Set up and send request
		request.open("GET", "check_login.php");
		request.send();
	}
	
	//Attempts to log in user to server
	function login(){
		//Create event handler that specifies what should happen when server responds
		request.onload = function(){
			//Check HTTP status code
			if(request.status === 200){
				//Get data from server
				var responseData = request.responseText;

				//Add data to page
				if(responseData === "ok"){
					document.getElementById("LoginPara").innerHTML = loggedInStr;
					document.getElementById("ErrorMessages").innerHTML = "";//Clear error messages
				}
				else
					document.getElementById("ErrorMessages").innerHTML = request.responseText;
			}
			else
				document.getElementById("ErrorMessages").innerHTML = "Error communicating with server";
		};

		//Extract login data
		var usrUsername = document.getElementById("username").value;
		var usrPassword = document.getElementById("password").value;
		
		//Set up and send request
		request.open("POST", "../cms/customer_login.php");
		request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		request.send("username=" + usrUsername + "&password=" + usrPassword);
	}
	
	//Logs the user out.
	function logout(){
		//Create event handler that specifies what should happen when server responds
		request.onload = function(){
			checkLogin();
		};
		//Set up and send request
		request.open("GET", "logout.php");
		request.send();
	}
</script>
