<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\BottomAsset;
use common\widgets\Alert;

BottomAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html class="no-js" lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
	<?= Html::csrfMetaTags() ?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?= Html::encode($this->title)?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="dev/img/favicon.ico">
    <!-- all css here -->
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <div class="sticky-wrapper">
        <header>			
			<!-- header-bottom-area start -->            
			<div class="header-bottom-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="logo">
								<a href="/"><span>e</span> Online Shop</a>
							</div>
						</div>
						<div class="col-lg-6 col-md-5 col-sm-5 col-xs-6 hidden-xs">
							<div class="header-search">
								<select>
                    	            <option value="0">All Categories</option>
                                    <option value="1">Women's Clothing &amp; Accessories</option>
                                    <option value="2">Men's Clothing &amp; Accessories</option>
                                    <option value="0">Phones &amp; Telecommunications</option>
                                    <option value="0">Computer &amp; Office</option>
                                    <option value="0">Consumer Electronics</option>
                                    <option value="0">Jewelry &amp; Accessories</option>
                                    <option value="0">Home &amp; Garden</option>
                                    <option value="0">Luggage &amp; Bags</option>
                                    <option value="0">Shoes</option>
                                    <option value="0">Mother &amp; Kids</option>
                                    <option value="0">Sports &amp; Entertainment</option>
                                    <option value="0">Health &amp; Beauty</option>
                                    <option value="0">Watches</option>
                                    <option value="0">Toys &amp; Hobbies</option>
                                    <option value="0">Weddings &amp; Events</option>
                                    <option value="0">Novelty &amp; Special Use</option>
                                    <option value="0">Automobiles &amp; Motorcycles</option>
                                    <option value="0">Lights &amp; Lighting</option>
                                    <option value="0">Furniture</option>
                                    <option value="0">Industry &amp; Business</option>
                                    <option value="0">Electronic Components &amp; Supplies</option>
                                    <option value="0">Office &amp; School Supplies</option>
                                    <option value="0">Electrical Equipment &amp; Supplies</option>
                                    <option value="0">Gifts &amp; Crafts</option>
                                    <option value="0">Home Improvement</option>
                                    <option value="0">Food</option>
                                    <option value="0">Travel and Coupons</option>
                                    <option value="0">Security &amp; Protection</option>
                                    <option value="0">In All Categories</option>
                                </select>
                                <input type="text" placeholder="search product..." />
								<button><i class="fa fa-search"></i></button>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 account-wrap">
							<!-- Header shopping cart -->
                            <div class="my-account-holder">                
                	            <div class="my-account-title">
                    	            <div class="user-icon float-left">
	                                    <i class="fa fa-exchange" aria-hidden="true"></i>
    					            </div>                                   
                                    <div class="clearfix"></div>                     
                                </div>
                            </div>
                            <!-- Header shopping cart -->
                            <div class="my-account-holder">                
                	            <div class="my-account-title">
                    	            <div class="user-icon float-left">
	                                    <i class="fa fa-heart" aria-hidden="true"></i>
    					            </div>                                   
                                    <div class="clearfix"></div>                     
                                </div>
                            </div>                             
							<div class="my-account-holder">                
                                <div class="total-cart my-account-title" data-toggle="my-cart">
                    	            <div class="user-icon float-left">
	                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
    					            </div>
                                    <div class="float-left cart-link">
                        	            <a href="#">2 Item(s)</a>
                                    </div>
                                    <div class="clearfix"></div>  
                                    <ul>
									    <li>
										    <div class="cart-img">
											    <a href="#"><img src="dev/img/cart/total-cart.jpg" alt="" /></a>											    
										    </div>
										    <div class="cart-info">
											    <h4><a href="#">Vestibulum suscipit</a></h4>
											    <span>£165.00 <span>x 1</span></span>
										    </div>
										    <div class="del-icon">
											    <i class="fa fa-times-circle"></i>
										    </div>
									    </li>
									    <li>
										    <div class="cart-img">
											    <a href="#"><img src="dev/img/cart/total-cart.jpg" alt="" /></a>											    
										    </div>
										    <div class="cart-info">
											    <h4><a href="#">Vestibulum suscipit</a></h4>
											    <span>£165.00 <span>x 1</span></span>
										    </div>
										    <div class="del-icon">
											    <i class="fa fa-times-circle"></i>
										    </div>
									    </li>
									    <li>
										    <div class="subtotal-text">Subtotal: </div>
										    <div class="subtotal-price">£300.00</div>
									    </li>
                                         <li>
										    <a href="#" class="button float-right">Checkout</a>										    
									    </li>
								    </ul>                   
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
			<!-- header-bottom-area end -->
			<!-- main-menu-area start -->
			<div class="main-menu-area hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="main-menu">
								<nav>
									<ul>
										<li><a href="/">home</a></li>
										<li><a href="/tentang">About</a></li>
										<li><a href="#">Clothing</a>
											<div class="mega-menu">
												<span>
													<a class="mega-title" href="#">WOMEN CLOTH </a>
													<a href="/baju/baju-wanita/casual-tshirt">casual shirt</a>
													<a href="/baju/baju-wanita/formal-tshirt">formal shirt</a>
												</span>
												<span>
													<a class="mega-title" href="#">MEN CLOTH </a>
													<a href="/baju/baju-pria/casual-tshirt">casual shirt</a>
													<a href="/baju/baju-pria/formal-tshirt">formal shirt</a>
												</span>
											</div>										
										</li>
										<li><a href="/kontak">contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>            
			<!-- main-menu-area end -->
			<!-- mobile-menu-area start -->
			<div class="mobile-menu-area visible-xs">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mobile-menu">
								<nav id="dropdown">
									<ul>
										<li><a href="index.html">home</a>
											<ul>
												<li><a href="index.html">Homepage Version 1</a></li>
												<li><a href="index-2.html">Homepage Version 2</a></li>												
											</ul>
										</li>
										<li><a href="about.html">About</a></li>
										
                                        <li><a href="index.html">Shop</a>
											<ul>
												<li><a href="shop.html">Shop Sidebar Left</a></li>
												<li><a href="shop-right.html">Shop Sidebar Right</a></li>
												<li><a href="shop-list.html">Shop List View</a></li>
                                                <li><a href="single-product.html">single-product</a></li>
											</ul>
										</li>
                                        <li><a href="blog.html">Blog</a>
                                            <ul>
												<li><a href="single-blog.html">single-blog</a></li>
												<li><a href="single-blog-video.html">single-blog-video</a></li>
											</ul>
                                        </li>
										<li><a href="#">Clothing</a>
											<div class="mega-menu">
												<span>
													<a class="mega-title" href="#">WOMEN CLOTH </a>
													<a href="shop.html">casual shirt</a>
													<a href="shop.html">rikke t-shirt</a>
													<a href="shop.html">mia top </a>
													<a href="shop.html">muscle tee </a>
												</span>
												<span>
													<a class="mega-title" href="#">MEN CLOTH </a>
													<a href="shop.html">casual shirt</a>
													<a href="shop.html">rikke t-shirt</a>
													<a href="shop.html">mia top </a>
													<a href="shop.html">muscle tee </a>
												</span>
												<span>
													<a class="mega-title" href="#">WOMEN JEWELRY </a>
													<a href="shop.html">necklace </a>
													<a href="shop.html">chunky short striped </a>
													<a href="shop.html">samhar cuff</a>
													<a href="shop.html">nail set </a>
												</span>
												<span class="mega-menu-img">
													<a href="shop.html"><img src="dev/img/5_hover_2.jpg" alt="" /></a>
												</span>
											</div>										
										</li>
										<li><a href="shop.html">Footwear </a></li>
										<li><a href="#">pages</a>
											<ul>
												<li><a href="about.html">about us</a></li>
												<li><a href="cart.html">shopping cart</a></li>
												<li><a href="checkout.html">checkout</a></li>
												<li><a href="wishlist.html">wishlist</a></li>
												<li><a href="login.html">login</a></li>												
												<li><a href="contact.html">contact us</a></li>
											</ul>											
										</li>
										<li><a href="contact.html">contact</a></li>
									</ul>
								</nav>
							</div>					
						</div>
					</div>
				</div>
			</div>
			<!-- mobile-menu-area end -->			
		</header>
    </div>
	<?= $content ?>
    <!-- footer start -->
    <footer>
			<!-- footer-top-area start -->
			<div class="footer-top-area">
				<div class="container">
					<div class="row">
						<!-- footer-widget start -->
						<div class="col-lg-3 col-md-3 col-sm-4">
							<div class="footer-widget">
                            <div class="footer-logo"><a href="#"><span>e</span> Online Shop</a></div>								
								<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. .</p>
								<address class="box-address">
										<span class="fa fa-home"></span>123 Pall Mall, London England<br>
										<span class="fa fa-phone"></span> <b class="color-dark">+12345 67890 </b><br>										
										<span class="fa fa-envelope"></span> <a class="color" href="mailto:admin@yourdomain.com">admin@yourdomain.com</a>
								</address>                                
							</div>
						</div>
						<!-- footer-widget end -->
						<!-- footer-widget start -->
						<div class="col-lg-3 col-md-3 hidden-sm">
							<div class="footer-widget">
								<h3>Information</h3>
								<ul class="footer-menu">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Customer Service</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Site Map</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
						</div>
						<!-- footer-widget end -->
						<!-- footer-widget start -->
						<div class="col-lg-3 col-md-3 col-sm-4">
							<div class="footer-widget">
								<h3>Our services</h3>
								<ul class="footer-menu">
									<li><a href="#">Shipping & Returns</a></li>
									<li><a href="#">Secure Shopping</a></li>
									<li><a href="#">International Shipping</a></li>
									<li><a href="#">Affiliates</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
						<!-- footer-widget end -->
						<!-- footer-widget start -->
						<div class="col-lg-3 col-md-3 col-sm-4">
							<div class="footer-widget">		
                                <h3>NEWSLETTER SIGNUP</h3>
                                <div class="subscribe-title">                               
                                <form action="#">
                                <div class="subscribe-form">
                                    <input type="text" placeholder="Your Email.........">
                                    <button>
                                        subscribe</button>
                                </div>
                                </form>
                                </div>						
                                <div class="widget-icon">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube-square"></i></a>
								</div>
							</div>
						</div>
						<!-- footer-widget end -->
					</div>
				</div>
			</div>
			<!-- footer-top-area end -->
			<!-- footer-bottom-area start -->
			<div class="footer-bottom-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="copyright">
								<p>Copyright © <a href="#" target="_blank">Online Shop</a>. All Rights Reserved</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="payment-img">
								<img src="dev/img/payment.png" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer-bottom-area end -->
		</footer>
    <!-- footer end -->
    <!-- all js here -->
<?php $this->endBody() ?>   
</body>

</html>
<?php $this->endPage() ?>