<?php
    //Include libraries
    require __DIR__ . '../vendor/autoload.php';
        
    //Create instance of MongoDB client
    $mongoClient = (new MongoDB\Client);

    //Select a database
    $db = $mongoClient->ecommerce;

    //Select a collection 
    $collection = $db->customers;

    //Get name and address strings - need to filter input to reduce chances of SQL injection etc.
    $username= filter_input(INPUT_POST, 'inputUsername', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'inputEmail', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'inputPassword', FILTER_SANITIZE_STRING);
    $forename = filter_input(INPUT_POST, 'inputForename', FILTER_SANITIZE_STRING);
    $surname = filter_input(INPUT_POST, 'inputSurname', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'inputAddress', FILTER_SANITIZE_STRING);
    $number = filter_input(INPUT_POST, 'inputNumber', FILTER_SANITIZE_STRING);

    //Convert to PHP array
    $dataArray = [
        "username" => $username, 
        "email" => $email, 
        "password" => $password,
        "forename" => $forename, 
        "surname" => $surname, 
        "address" => $address, 
        "number" => $number 
    ];

    if($username != "" && $email != "" && $password != "" && $forename != "" && $surname != "" && $address != "" && $number != "") { //Check query parameters 
        //Storing registration data in MongoDB
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

        //Output message confirming registration
        echo '<br></br>Thank you for registering ' . $forename;
    }
    else { //A query string parameter cannot be found
        echo 'Registration data missing';
    }

