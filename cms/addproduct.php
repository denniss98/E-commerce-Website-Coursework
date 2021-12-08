<?php
  // Imports the navigation bar and sets the page name
  include('../cms/common.php');
  outputHeader("Home");
  outputNav();
?>

<!-- Input fields for adding products -->
<div class="row justify-content-center py-0">
    <form action="../php_action/add_product.php" method="post">
        <ul>
            <h2>Add Product</h1>
            <li>
                <label>Name:</label>
                <input type="text" name="product_name">
            </li>
            <br>
            <li>
                <label>Description:</label>
                <input type="text"  name="product_description">
            </li>
            <br>
            <li>
                <label>Image URL: </label>
                <input type="text" name="product_image">
            </li>
            <br>
            <li>
                <label>Width:</label>
                <input type="text" name="product_width">
            </li>
            <br>
            <li>
                <label>Height:</label>
                <input type="text" name="product_height">
            </li>
            <br>
            <li>
                <label>Price:</label>
                <input type="text" name="product_price">
            </li>
            <br>
            <li>
                <label>Stock count:</label>
                <input type="text" name="product_stockcount">
            </li>
            <br>
            <button type="submit">Add Product</button>
        </ul>
    </form>
</div>