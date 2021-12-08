<!DOCTYPE html>
<html>
    <head>
        <title>Basket Demo</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <script src="../js/basket.js"></script>
    </head>
    <body>
        <h1>Shopping Website</h1>

        <!-- PHP loads product information -->        
        <?php

        //Connect to MongoDB and select database
        require __DIR__ . '/vendor/autoload.php';
        $mongoClient = (new MongoDB\Client);
        $db = $mongoClient->ecommerce;
        
        //Find all products
        $products = $db->products->find();

        //Output results onto page
        echo '<table>';
        echo '<tr><th>Name</th><th>Description</th><th>Image</th><th>Width</th><th>Height</th><th>Price</th><th>Stock</th><th></th></tr>';
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
            echo '<img class="addButtonImg" width=20 src="basket-add-icon.png"></button></td>';
            echo '</tr>';
        }
        echo '</table>';

        ?>
        
        <!-- Displays contents of basket -->    
        <h2>Basket</h2>
        <div id="basketDiv"></div>
    
    </body>
</html>
        