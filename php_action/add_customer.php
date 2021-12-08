<?php

//Include libraries
require __DIR__ . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->ecommerce;

//Select a collection 
$collection = $db->customers;

//Extract the data that was sent to the server
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$name = filter_input(INPUT_POST, 'forename', FILTER_SANITIZE_STRING);
$surname = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_STRING);
$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
$number = filter_input(INPUT_POST, 'mobileNumber', FILTER_SANITIZE_STRING);

//Convert to PHP array
$dataArray = [
    "username" => $username, 
    "email" => $email, 
    "password" => $password,
    "forename" => $name, 
    "surname" => $surname, 
    "address" => $address, 
    "mobileNumber" => $number 
 ];

//Add the new product to the database
$insertResult = $collection->insertOne($dataArray);
    
//Echo result back to user
if($insertResult->getInsertedCount()==1){
    echo 'Customer added.';
    echo ' New document id: ' . $insertResult->getInsertedId();
}
else {
    echo 'Error adding customer';
}
?>
<p>
    Server response: <span id="ServerResponse"></span>
</p>






