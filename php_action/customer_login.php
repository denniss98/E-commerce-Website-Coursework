<?php
	//Include libraries
	require '../vendor/autoload.php';
	
	session_start();
	
    //Get name and address strings - need to filter input to reduce chances of SQL injection etc.
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);    
	
	//Create instance of MongoDB client
	$mongoClient = (new MongoDB\Client);
	
    //Select database
    $db = $mongoClient->ecommerce;
	
    //Create a PHP array with our search criteria
    $findCriteria = [
        "username" => $username, 
    ];
	
	//Find all of the customers that match this criteria
	$cursor = $db->customers->find($findCriteria);
	
	//Convert search results to array
	$searchResultArray = $cursor->toArray();
	
	//Check that there is exactly one customer
	if(count($searchResultArray) == 0) {
			echo 'Username not recognised.';
			return;
	}
	else if(count($searchResultArray) > 1) {
		echo 'Database error; Multiple customer have the same username';
		return;
	}
   
    //Get customer
    $customer = $searchResultArray[0];
    
    //Check password
    if($customer['password'] != $password){
        echo 'Password incorrect.';
        return;
    }
        
    //Start session for this user
    $_SESSION['loggedInUserUsername'] = $username;
    
    //Inform web page that login is successful
    echo 'Login has been successful';
    