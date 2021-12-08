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
	
	$deleteCriteria = [
		"_id" => new MongoDB\BSON\ObjectID($prodID)
	];
	
	$deleteRes = $db->products->deleteOne($deleteCriteria);

	//check to see if deleted 
	if($deleteRes -> getDeletedCount() == 1){
	echo 'product deleted';

	} else {
	echo "error deleting product";
	}
?>