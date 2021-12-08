<?php
  // Imports the navigation bar and sets the page name
  include('common.php');
  outputNav();
?>

<link type="text/css" rel="stylesheet" href="../css/styles.css"/>', 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="images/favicon.ico" type="image/icon"/>'
<script src="../js/basket.js"></script>

<!-- Basket -->
<?php
	//Connect to MongoDB and select database
	require __DIR__ . '/vendor/autoload.php';
	$mongoClient = (new MongoDB\Client);
	$db = $mongoClient->ecommerce;

	//Find all products
	$products = $db->products->find();

	//Output results onto page
	echo '<table>';
	echo '<br><br><br><br><tr><th>Name</th><th>Description</th><th>Image</th><th>Width</th><th>Height</th><th>Price</th><th>Stock</th><th></th></tr>';
	foreach ($products as $document) {
		echo '<tr>';
		echo '<td>' . $document["product_name"] . "</td>";
		echo '<td>' . $document["product_description"] . "</td>";
		echo '<td>' . $document["product_image"] . "</td>";
		echo '<td>' . $document["product_width"] . "</td>";
		echo '<td>' . $document["product_height"] . "</td>";
		echo '<td>' . $document["product_price"] . "</td>";
		echo '<td>' . $document["product_stockcount"] . "</td>";
		echo '<td><button onclick=\'addToBasket("' . $document["product_name"] . '")\'>';
		echo '<img class="addButtonImg" width=20 src="../images/basket-add-icon.png"></button></td>';
		echo '</tr>';
	}
	echo '</table>';

?>

	<!-- Displays contents of basket -->    
	<h2>Basket</h2>
	<div id="basketDiv"></div>
    </div>
</div>

<!-- Redirect to checkout form on checkout button click -->
<script type="text/javascript">
    document.getElementById("checkoutButton").onclick = function () {
        location.href = "checkout.php";
    };
</script>
	
<?php
	//Outputs the footer and closing tags
	outputFooter();
	outputClosing();
?>