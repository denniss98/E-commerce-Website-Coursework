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
	$prodID = filter_input(INPUT_POST, 'product_ID', FILTER_SANITIZE_STRING);
	$description = filter_input(INPUT_POST, 'product_description', FILTER_SANITIZE_STRING);
	$imageurl = filter_input(INPUT_POST, 'product_image', FILTER_SANITIZE_STRING);
	$width = filter_input(INPUT_POST, 'product_width', FILTER_SANITIZE_STRING);
	$height = filter_input(INPUT_POST, 'product_height', FILTER_SANITIZE_STRING);
	$price = filter_input(INPUT_POST, 'product_price', FILTER_SANITIZE_STRING);
	$stockcount = filter_input(INPUT_POST, 'product_stockcount', FILTER_SANITIZE_STRING);
	
	//Criteria for finding document to replace
	$replace_criteria  = ["_id" => new mongoDB\BSON\ObjectID($product_ID)];
	
	//Convert to PHP array for mongo db 
	$productData = [
		"product_ID" => $prodID, 
		"product_name" => $name, 
		"product_description" => $description, 
		"product_image" => $imageurl,
		"product_width" => $width, 
		"product_height" => $height, 
		"product_price" => $price,
		"product_stockcount" => $stockcount
	];

	$updateres = $db->products->replaceOne($replace_criteria,$productData)

	if($updateres -> getModifiedCount() == 1){
		echo 'customer document replaced';
	
	} else {
		echo "error replacing  document";
	}
	
	$replace_criteria  = ["_id" => new mongoDB\BSON\ObjectID($product_ID)];

	$updateres = $db->customers->replaceOne($replace_criteria,$productsArray )

		
		if($updateres -> getModifiedCount() == 1){
		echo 'customer document replaced';
		
		
	}else{
		echo "error replacing  document";
	}
   
	
?>