<?php
  // Imports the navigation bar and sets the page name
  include('../cms/common.php');
  outputHeader("Home");
  outputNav();
?>

<!-- Title -->
<div class="col-md-12">
    <div class="row justify-content-center py-0">
        <h1>CMS</h1>
    </div>
</div>    

<!-- Message for Staff -->
<div class="col-md-12">
    <div class="row justify-content-center py-0">
        <p>This environment is intended for staff to manage products</p>
    </div>
</div>  
	
<?php
	//Outputs the footer and closing tags
	outputClosing();
?>