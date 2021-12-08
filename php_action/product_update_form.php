<?php

//Include libraries
require __DIR__ . '../vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->ecommerce;

//Extract the data that was sent to the server
$search_string = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING);

//Create a PHP array with our search criteria
$findCriteria = [
    '$text' => [ '$search' => $search_string ] 
 ];

//Find all of the products that match  this criteria
$cursor = $db->products->find($findCriteria);

//Output the results as forms
echo "<h1>Products</h1>";   
foreach ($cursor as $products){
    echo '<form action="replace_product.php" method="post">';
    echo 'Name: <input type="text" name="product_name" value="' . $products['product_name'] . '" required><br>';
    echo 'Description: <input type="text" name="product_description" value="' . $products['product_description'] . '" required><br>';
	echo 'Image URL: <input type="text" name="product_image" value="' . $products['product_image'] . '" required><br>';
	echo 'Width: <input type="text" name="product_width" value="' . $products['product_width'] . '" required><br>';
	echo 'Height: <input type="text" name="product_height" value="' . $products['product_height'] . '" required><br>';
	echo 'Price: <input type="text" name="product_price" value="' . $products['product_price'] . '" required><br>';
    echo '<input type="hidden" name="id" value="' . $products['_id'] . '" required>'; 
    echo '<input type="submit">';
    echo '</form><br>';
}

 