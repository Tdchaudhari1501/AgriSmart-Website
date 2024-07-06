<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/Agrismart/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Inter:wght@100;200;300;400;500;531;600;700;800;900&family=Lobster&family=Montserrat:wght@1,500;600;700&family=Oxygen:wght@300;400;700&family=Raleway:ital,wght@0,100;0,500;1,400;1,500&family=Roboto:ital,wght@0,400;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
  <link rel="stylesheet" href="/Agrismart/css/style.css">
  <title>Products</title>
  <style>


  </style>
</head>

<body>
 
<!--?php print_r($_SESSION['cart']);
  ?--> 

  <div class="container">

    <!-- /main row -->
    <div class="row carousel-row py-3">
      <div class="col-md-12">
        <h2 class="h2-responsive shadow py-3">Featured <b>Products</b></h2>
        <div id="myCarousel" class="carousel store-carousel slide" data-ride="carousel" data-interval="0">
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
            <div class="item carousel-item active">
              <div class="row">
                <div class="col-sm-3">
                  <form action="manage_store.php" method="post">
                    <div class="thumb-wrapper">
                      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                      <div class="img-box">
                        <img src="/Agrismart/images/uriya.jpg" class="img-responsive img-fluid" alt="">
                      </div>
                      <div class="thumb-content">
                        <h4>Uriua Fertilizer</h4>
                        <div class="star-rating">
                          <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                          </ul>
                        </div>
                        <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Uriua Fertilizer">
                        <input type="hidden" name="Price" value="369">
                        <!-- <a href="#" class="btn btn-primary">Add to Cart</a> -->
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-sm-3">
                  <form action="manage_store.php" method="post">
                    <div class="thumb-wrapper">
                      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                      <div class="img-box">
                        <img src="/Agrismart/images/dap.jpg" class="img-responsive img-fluid" alt="">
                      </div>
                      <div class="thumb-content">
                        <h4>D.A.P</h4>
                        <div class="star-rating">
                          <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                          </ul>
                        </div>
                        <p class="item-price"><strike>$2500.00</strike> <b>$2300</b></p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="D.A.P">
                        <input type="hidden" name="Price" value="2300">
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-sm-3">
                  <form action="manage_store.php" method="post">
                    <div class="thumb-wrapper">
                      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                      <div class="img-box">
                        <img src="/Agrismart/images/sprayer.jpg" class="img-responsive img-fluid" alt="">
                      </div>
                      <div class="thumb-content">
                        <h4>Spreyair</h4>
                        <div class="star-rating">
                          <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                          </ul>
                        </div>
                        <p class="item-price"><strike>$899.00</strike> <b>$649.00</b></p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value=" Spreyair">
                        <input type="hidden" name="Price" value="649">
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-sm-3">
                  <form action="manage_store.php" method="post">
                    <div class="thumb-wrapper">
                      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                      <div class="img-box">
                        <img src="/Agrismart/images/humirrot.jpg" class="img-responsive img-fluid" alt="">
                      </div>
                      <div class="thumb-content">
                        <h4>Humiroot</h4>
                        <div class="star-rating">
                          <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                          </ul>
                        </div>
                        <p class="item-price"><strike>$315.00</strike> <b>$250.00</b></p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value=" Humiroot">
                        <input type="hidden" name="Price" value="250">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item carousel-item">
              <div class="row">
                <div class="col-sm-3">
                  <form action="manage_store.php" method="post">
                    <div class="thumb-wrapper">
                      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                      <div class="img-box">
                        <img src="../img/liquidfirtilizer.webp" class="img-responsive img-fluid" alt="">
                      </div>
                      <div class="thumb-content">
                        <h4>Liquid Firtilizer</h4>
                        <p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
                        <div class="star-rating">
                          <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                          </ul>
                        </div>
                        <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value=" Liquid Fietilizer">
                        <input type="hidden" name="Price" value="269">
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-sm-3">
                  <form action="manage_store.php" method="post">

                    <div class="thumb-wrapper">
                      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                      <div class="img-box">
                        <img src="/Agrismart/images/sprayer.jpg" class="img-responsive img-fluid" alt="">
                      </div>
                      <div class="thumb-content">
                        <h4>Spreyair</h4>
                        <p class="item-price"><strike>$3099.00</strike> <span>$2869.00</span></p>
                        <div class="star-rating">
                          <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                          </ul>
                        </div>
                        <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value=" Spreyair ">
                        <input type="hidden" name="Price" value="2869">
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    <div class="img-box">
                      <img src="/Agrismart/images/uriya.jpg" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Fertilizer</h4>
                      <p class="item-price"><strike>$1109.00</strike> <span>$1099.00</span></p>
                      <div class="star-rating">
                        <ul class="list-inline">
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    <div class="img-box">
                      <img src="../img/ferilizer1.jpg" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4> Fertilizer</h4>
                      <p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
                      <div class="star-rating">
                        <ul class="list-inline">
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item carousel-item">
              <div class="row">
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    <div class="img-box">
                      <img src="/Agrismart/images/humirrot.jpg" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Fertilizer</h4>
                      <p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
                      <div class="star-rating">
                        <ul class="list-inline">
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    <div class="img-box">
                      <img src="/Agrismart/images/uriya.jpg" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>AgriTools</h4>
                      <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                      <div class="star-rating">
                        <ul class="list-inline">
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    <div class="img-box">
                      <img src="/Agrismart/images/humirrot.jpg" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Fertilizer2</h4>
                      <p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
                      <div class="star-rating">
                        <ul class="list-inline">
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                        </ul>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    <div class="img-box">
                      <img src="/Agrismart/images/sprayer.jpg" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>AgriEquipments</h4>
                      <p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
                      <div class="star-rating">
                        <ul class="list-inline">
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Carousel controls -->
          <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- /main store row -->



    <div class="col-md-12 store-items-col">
      <h2 class="store-items-heading h2-responsive shadow py-2">Just <b>In</b></h2>
      <!-- wrapper -->

      <div class="store-items">
        <div class="row store-row-2 py-3">

          <div class="col-sm-3">
            <div class="thumb-wrapper">
              <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
              <div class="img-box">
                <img src="/Agrismart/images/beet.png" class="img-responsive img-fluid" alt="">
              </div>
              <div class="thumb-content">
                <h4 class="h4-responsive">Beetroot</h4>
                <div class="star-rating">
                  <ul class="list-inline">
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                  </ul>
                </div>
                <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <!-- /card 1 -->

          <div class="col-sm-3">
            <div class="thumb-wrapper">
              <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
              <div class="img-box">
                <img src="/Agrismart/images/broccoli.png" class="img-responsive img-fluid" alt="">
              </div>
              <div class="thumb-content">
                <h4 class="h4-responsive">Broccoli</h4>
                <div class="star-rating">
                  <ul class="list-inline">
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                  </ul>
                </div>
                <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <!-- /card 2 -->

          <div class="col-sm-3">
            <div class="thumb-wrapper">
              <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
              <div class="img-box">
                <img src="/Agrismart/images/cabbage_PNG8815.png" class="img-responsive img-fluid" alt="">
              </div>
              <div class="thumb-content">
                <h4 class="h4-responsive">Cabbage</h4>
                <div class="star-rating">
                  <ul class="list-inline">
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                  </ul>
                </div>
                <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <!-- /card3 -->

          <div class="col-sm-3">
            <div class="thumb-wrapper">
              <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
              <div class="img-box">
                <img src="/Agrismart/images/cabbage_PNG8823.png" class="img-responsive img-fluid" alt="">
              </div>
              <div class="thumb-content">
                <h4 class="h4-responsive">Cauliflower</h4>
                <div class="star-rating">
                  <ul class="list-inline">
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                  </ul>
                </div>
                <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <!-- /card 4-->
        </div>
        <!-- /store-row-2 -->

        <!-- Store 3 -->
        <div class="row store-row-3 py-3">

          <div class="col-sm-3">
            <div class="thumb-wrapper">
              <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
              <div class="img-box">
                <img src="/Agrismart/images/carrot_PNG4988.png" class="img-responsive img-fluid" alt="">
              </div>
              <div class="thumb-content">
                <h4 class="h4-responsive">Carrot</h4>
                <div class="star-rating">
                  <ul class="list-inline">
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                  </ul>
                </div>
                <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <!-- /card 1 -->

          <div class="col-sm-3">
            <div class="thumb-wrapper">
              <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
              <div class="img-box">
                <img src="/Agrismart/images/corn_PNG5286.png" class="img-responsive img-fluid" alt="">
              </div>
              <div class="thumb-content">
                <h4 class="h4-responsive">Corn</h4>
                <div class="star-rating">
                  <ul class="list-inline">
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                  </ul>
                </div>
                <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <!-- /card 2 -->

          <div class="col-sm-3">
            <div class="thumb-wrapper">
              <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
              <div class="img-box">
                <img src="/Agrismart/images/garlic_PNG12801.png" class="img-responsive img-fluid" alt="">
              </div>
              <div class="thumb-content">
                <h4 class="h4-responsive">Garlic</h4>
                <div class="star-rating">
                  <ul class="list-inline">
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                  </ul>
                </div>
                <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <!-- /card3 -->

          <div class="col-sm-3">
            <div class="thumb-wrapper">
              <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
              <div class="img-box">
                <img src="/Agrismart/images/ginger_PNG16800.png" class="img-responsive img-fluid" alt="">
              </div>
              <div class="thumb-content">
                <h4 class="h4-responsive">Ginger</h4>
                <div class="star-rating">
                  <ul class="list-inline">
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                  </ul>
                </div>
                <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <!-- /card 4-->
        </div>
        <!-- /store-row-3 -->

        <!-- Store 3 (a) -->
        <div class="row store-row-3 py-3">

          <div class="col-sm-3">
            <div class="thumb-wrapper">
              <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
              <div class="img-box">
                <img src="/Agrismart/images/mushroom_PNG3219.png" class="img-responsive img-fluid" alt="">
              </div>
              <div class="thumb-content">
                <h4 class="h4-responsive">Mushroom</h4>
                <div class="star-rating">
                  <ul class="list-inline">
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                  </ul>
                </div>
                <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <!-- /card 1 -->

          <div class="col-sm-3">
            <div class="thumb-wrapper">
              <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
              <div class="img-box">
                <img src="/Agrismart/images/onion_PNG3821.png" class="img-responsive img-fluid" alt="">
              </div>
              <div class="thumb-content">
                <h4 class="h4-responsive">Beetroot</h4>
                <div class="star-rating">
                  <ul class="list-inline">
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                  </ul>
                </div>
                <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <!-- /card 2 -->

          <div class="col-sm-3">
            <div class="thumb-wrapper">
              <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
              <div class="img-box">
                <img src="/Agrismart/images/palm_tree_PNG93356.png" class="img-responsive img-fluid" alt="">
              </div>
              <div class="thumb-content">
                <h4 class="h4-responsive">Plm trees</h4>
                <div class="star-rating">
                  <ul class="list-inline">
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                  </ul>
                </div>
                <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <!-- /card3 -->

          <div class="col-sm-3">
            <div class="thumb-wrapper">
              <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
              <div class="img-box">
                <img src="/Agrismart/images/wheat_PNG108.png" class="img-responsive img-fluid" alt="">
              </div>
              <div class="thumb-content">
                <h4 class="h4-responsive">Wheat</h4>
                <div class="star-rating">
                  <ul class="list-inline">
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                  </ul>
                </div>
                <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <!-- /card 4-->
        </div>
        <!-- /store-row-3(a)-->

      </div>
      <!-- /store items -->
    </div>
    <!-- /col-md-12-->
  </div>
  <!-- /container -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>