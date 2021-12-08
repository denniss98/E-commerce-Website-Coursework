<?php
// Sets the title for each page, links the style sheet, bootstrap and favicon.
function outputHeader($title) {
  echo '<!DOCTYPE html>', '<html lang="en">', '<head>', '<title>E-Commerce Web page</title>', '<meta charset="utf-8" name="viewport">', 
  '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">', '<link type="text/css" rel="stylesheet" href="../css/cms_styles.css"/>', 
  '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">', 
  '<link rel="shortcut icon" href="images/favicon.ico" type="image/icon"/>', '<script type="text/javascript" src="../js/js.js"></script>', 
  '</head>', '<body>';  
  echo '<title>' . $title . '</title>';
}

//  Navigation bar 
function outputNav() {
  print '
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row justify-content-center py-0">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="addproduct.php">Add Product</a></li>
                    <li><a href="listproduct.php">Product List</a></li>
                    <li><a href="editproduct.php">Edit Product</a></li>
                    <li><a href="deleteproduct.php">Delete Product</a></li>
                </ul>
            </div>
        </div>
    </div>
  ';
}

// Importing various Javascript components, jQuery, Popper.js, BootstraP and closing page
function outputClosing() {
  echo '<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>',
  '<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>',
  '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>',
  '</body>', '</html>';
}