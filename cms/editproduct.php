<?php
  // Imports the navigation bar and sets the page name
  include('../cms/common.php');
  outputHeader("Home");
  outputNav();
?>

<!-- Input fields for editing products -->
<div class="row justify-content-center py-0">
	<form action="../php_action/product_update_form.php" method="post">
		<ul>
			<h2>Edit Product</h1>
			<li>
				<label>Product ID:</label>
				<input type="text" name="search" required>
			</li>
			<br>
			<button type="submit">Search</button>
		</ul>
	</form>
</div>
	
<?php
	//Outputs the footer and closing tags
	outputClosing();
?>