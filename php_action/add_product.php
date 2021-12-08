<?php
    //Include libraries
    require __DIR__ . '../vendor/autoload.php';
    
    //Create instance of MongoDB client
    $mongoClient = (new MongoDB\Client);

    //Select a database
    $db = $mongoClient->ecommerce;

    //Select a collection
	$collection =  $db->products;

	//Extract the data that was sent to the server
	$name = filter_input(INPUT_POST, 'product_name', FILTER_SANITIZE_STRING);
	$description = filter_input(INPUT_POST, 'product_description', FILTER_SANITIZE_STRING);
	$imageurl = filter_input(INPUT_POST, 'product_image', FILTER_SANITIZE_STRING);
	$width = filter_input(INPUT_POST, 'product_width', FILTER_SANITIZE_STRING);
	$height = filter_input(INPUT_POST, 'product_height', FILTER_SANITIZE_STRING);
	$price = filter_input(INPUT_POST, 'product_price', FILTER_SANITIZE_STRING);
	$stockcount = filter_input(INPUT_POST, 'product_stockcount', FILTER_SANITIZE_STRING);
	
	//Convert to PHP array for mongo db 
	$dataArray = [
		"product_name" => $name, 
		"product_description" => $description, 
		"product_image" => $imageurl,
		"product_width" => $width, 
		"product_height" => $height, 
		"product_price" => $price,
		"product_stockcount" => $stockcount
	];

	//Add the new product to the database
    $insertResult = $collection->insertOne($dataArray);
    
    if($insertResult->getInsertedCount()==1) {
        echo 'Product added.';
        echo ' New document id: ' . $insertResult->getInsertedID();
    }
    else {
        echo 'Error adding product';
    }
?>