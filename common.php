<?php
// Sets the title for each page, links the style sheet, bootstrap and favicon.
function outputHeader($title) {
  echo '<!DOCTYPE html>', '<html lang="en">', '<head>', '<title>E-Commerce Web page</title>', '<meta charset="utf-8" name="viewport">', 
  '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">', '<link type="text/css" rel="stylesheet" href="../css/styles.css"/>', 
  '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>', '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">', 
  '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">', '<link rel="shortcut icon" href="images/favicon.ico" type="image/icon"/>', '</head>', '<body>';  
  echo '<title>' . $title . '</title>';
}

//  Navigation bar with a search bar
function outputNav() {
  print '
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid" id="navcontainer">
            <a href="index.php" class="navbar-brand">E-Commerce</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbcollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-stretch" id="navbcollapse">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">Home</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Phones</a>
                        <div class="dropdown-menu">
                            <a href="products.php" class="dropdown-item">All</a>
                            <a href="" class="dropdown-item">Apple</a>
                            <a href="#" class="dropdown-item">Samsung</a>
                            <a href="#" class="dropdown-item">Huawei</a>
                            <div class="dropdown-divider"></div>
                            <a href="#"class="dropdown-item">Other</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Deals</a>
                    </li>
                </ul>
                <form class="ml-3 my-auto d-inline w-100">
                    <div class="input-group">
                    <input type="text" class="form-control border-right-0" placeholder="Search..."> 
                    <span class="input-group-append">
                        <button class="btn btn-outline-light border border-left-0" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                    </div>
                </form> 
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="basket.php" id="basket" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-cog fa-lg"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="cms/login.php">Admin</a>
                            <a class="dropdown-item" href="login.php">Login</a>
                            <a class="dropdown-item" href="register.php">Register</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  ';
}

// Prints out the footer with rights and social links
function outputFooter() {
  print '
  <div class="row">
    <div class="footer">
      <div class="col-md-6">
        <p id="footerrights">&copy; All rights reserved | E-Commerce</p>
      </div>
      <div class="col-md-6">
        <a href="http://www.facebook.com"><img src="../images/facebook.svg" id="social" /></a>
        <a href="http://www.twitter.com"><img src="../images/twitter.svg" id="social" /></a>
        <a href="http://www.youtube.com"><img src="../images/youtube.svg" id="social" /></a>
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