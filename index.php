<?php
  // Imports the navigation bar and sets the page name
  include('common.php');
  outputHeader("Home");
  outputNav();
?>

<!-- Carousel -->
<div class="container carousel">
    <div class="row">
        <div class="col-md-12">
            <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">

                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-2" data-slide-to="1"></li>
                    <li data-target="#carousel-example-2" data-slide-to="2"></li>
                </ol>

                <!-- Slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="view">
                            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg"
                            alt="First slide">
                            </img>

                            <div class="mask rgba-black-light"> </div>
                            </div>

                            <div class="carousel-caption">
                                <h3 class="h3-responsive">First promo</h3>
                                <p>First text</p>
                            </div>

                            </div>
                            
                            <div class="carousel-item">
                                <div class="view">
                                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg"
                                    alt="Second slide">
                                <div class="mask rgba-black-strong"></div>
                            </div>

                            <div class="carousel-caption">
                                <h3 class="h3-responsive">Second promo</h3>
                                <p>Secondary text</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="view">
                                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
                                    alt="Third slide">
                                <div class="mask rgba-black-slight"></div>
                            </div>

                            <div class="carousel-caption">
                                <h3 class="h3-responsive">Third promo</h3>
                                <p>Third text</p>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Top row of phones -->
<div class="container phonestop">
    <div class="row">
      <div class="col-md-3">
        <div class="img-box">
          <img src="../images/iphone11.png" alt="Purchase iPhone11" />
        </div>
        <div class="details">
          <div class="content">
            <h2>iPhone 11 Pro</h2>
            <span>Manufacturer - <b>Apple</b></span>
            <span>Release Date - <b>20th September, 2019</b></span>
            <h3>£999</h3>
            <button>Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="img-box">
          <img src="../images/pixel4.png" alt="Purchase Google Pixel" />
        </div>
        <div class="details">
          <div class="content">
            <h2>Google Pixel 4</h2>
            <span>Manufacturer - <b>Google</b></span>
            <span>Release Date - <b>24th October, 2019</b></span>
            <h3>£799</h3>
            <button>Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="img-box">
          <img src="../images/huaweiP20Pro.png" alt="Purchase huaweiP20Pro" />
        </div>
        <div class="details">
          <div class="content">
            <h2>Huawei P20 Pro</h2>
            <span>Manufacturer - <b>Huawei</b></span>
            <span>Release Date - <b>14th April, 2018</b></span>
            <h3>£649</h3>
            <button>Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="img-box">
          <img src="../images/galaxyS10e.png" alt="Purchase Galaxy S10e" />
        </div>
        <div class="details">
          <div class="content">
            <h2>Galaxy S10e</h2>
            <span>Manufacturer - <b>Samsung</b></span>
            <span>Release Date - <b>8th March, 2019</b></span>
            <h3>£899</h3>
            <button>Add to Cart</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bottom row of phones -->
<div class="container phonesbottom">
    <div class="row">
      <div class="col-md-3">
        <div class="img-box">
          <img src="../images/iphone11.png" alt="Purchase iPhone11" />
        </div>
        <div class="details">
          <div class="content">
            <h2>iPhone 11 Pro</h2>
            <span>Manufacturer - <b>Apple</b></span>
            <span>Release Date - <b>20th September, 2019</b></span>
            <h3>£999</h3>
            <button>Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="img-box">
          <img src="../images/pixel4.png" alt="Purchase Google Pixel" />
        </div>
        <div class="details">
          <div class="content">
            <h2>Google Pixel 4</h2>
            <span>Manufacturer - <b>Google</b></span>
            <span>Release Date - <b>24th October, 2019</b></span>
            <h3>£799</h3>
            <button>Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="img-box">
          <img src="../images/huaweiP20Pro.png" alt="Purchase huaweiP20Pro" />
        </div>
        <div class="details">
          <div class="content">
            <h2>Huawei P20 Pro</h2>
            <span>Manufacturer - <b>Huawei</b></span>
            <span>Release Date - <b>14th April, 2018</b></span>
            <h3>£649</h3>
            <button>Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="img-box">
          <img src="../images/galaxyS10e.png" alt="Purchase Galaxy S10e" />
        </div>
        <div class="details">
          <div class="content">
            <h2>Galaxy S10e</h2>
            <span>Manufacturer - <b>Samsung</b></span>
            <span>Release Date - <b>8th March, 2019</b></span>
            <h3>£899</h3>
            <button>Add to Cart</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
	
<?php
	//Outputs the footer and closing tags
	outputFooter();
	outputClosing();
?>