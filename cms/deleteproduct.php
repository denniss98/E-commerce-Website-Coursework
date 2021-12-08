<?php
  // Imports the navigation bar and sets the page name
  include('../cms/common.php');
  outputHeader("Home");
  outputNav();
?>

<!-- Input field for deleting products -->
<div class="row justify-content-center py-0">
    <form action="../php_action/delete_product.php" method="post">
        <ul>
            <h2>Delete Product</h1>
            <li>
                <label>Product ID:</label>
                <input type="text" name="product_ID" required>
            </li>
            <br>
            <button type="submit">Delete</button>
        </ul>
    </form>
</div>
	
<?php
	//Outputs the footer and closing tags
	outputClosing();
?>