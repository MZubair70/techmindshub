<!doctype html>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/68b1745546bc0d230c3419ec/1j3qiss5r';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<html lang="en">
</head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechMindsHub</title>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  <style>
    <body {
      font-family: Arial, sans-serif;
    }

    /* Popup background */
    .popup-overlay {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.6);
      display: none; /* initially hidden */
      justify-content: center;
      align-items: center;
      z-index: 1000;
    }

    /* Popup box */
    .popup-box {
  background: #fff;
  padding: 40px;              /* space zyada ho gaya */
  width: 600px;               /* box bada ho gaya */
  border-radius: 12px;
  text-align: center;
  box-shadow: 0 6px 20px rgba(0,0,0,0.3);
}

/* content size same rahega */
.popup-box h2 {
  margin-bottom: 15px;
  color: #255c86;
  font-size: 20px;            /* same as pehle */
}

.popup-box p {
  font-size: 16px;            /* same as pehle */
  line-height: 1.4;
}

.popup-buttons {
  display: flex;
  justify-content: space-between;
  margin-top: 20px;
}

.popup-buttons button {
  flex: 1;
  margin: 0 10px;
  padding: 10px 15px;         /* same as pehle */
  border: none;
  border-radius: 6px;
  cursor: pointer;
  font-weight: bold;
  font-size: 14px;            /* same as pehle */
}

    .visit-btn {
      background: #f26a00;
      color: #fff;
    }

    .later-btn {
      background: #fff;
      color: #255c84;
    }

    .visit-btn:hover {
      background: #1d4767;
    }

    .later-btn:hover {
      background: #255c84;
      color : #fff;
    }
    /* Base style (desktop/laptop default) */
.header-social {
  display: flex;
  justify-content: center;  /* icons center aligned */
  flex-wrap: wrap;          /* agar jagah kam ho toh neeche aa jaye */
      margin-top: 8px;
}

.header-social a {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  text-decoration: none;
}

.header-social i {
  font-size: 22px;
  margin: 0 8px;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}

/* Tablet view (768px se chhoti screens) */
@media (max-width: 768px) {
  .header-social i {
    font-size: 20px;   /* thoda chhota */
    margin: 0 6px;
  }
}

/* Mobile view (480px se chhoti screens) */
@media (max-width: 480px) {
  .header-social {
    justify-content: space-around; /* icons equally spread */
  }

  .header-social i {
    font-size: 18px;   /* aur chhota */
    margin: 0 4px;
  }
}
  </style>
</head>
<body>

  <!-- Popup -->
  <div class="popup-overlay" id="popup">
    <div class="popup-box">
      <h4></h4 >
      <h6>Work is in progress, you can reach the service provider by clicking the "Visit" button.</h6>
      <div class="popup-buttons">
        <button class="visit-btn" onclick="visitSite()">Visit</button>
        <button class="later-btn" onclick="closePopup()">Later</button>
      </div>
    </div>
  </div>

  <script>
  // Function to show popup after 5 seconds
  window.onload = function () {
    setTimeout(() => {
      // check if popup was closed recently
      const lastClosed = localStorage.getItem("popupClosedTime");
      const now = new Date().getTime();

      if (!lastClosed || now - lastClosed > 3 * 60 * 1000) {
        document.getElementById("popup").style.display = "flex";
      }
    }, 5000);
  };

  // Visit button (open in new tab)
  function visitSite() {
    window.open("https://youroutright.com", "_blank");
  }

  // Later button
  function closePopup() {
    document.getElementById("popup").style.display = "none";
    localStorage.setItem("popupClosedTime", new Date().getTime());
  }
</script>

</body>
</html>
<!--End of Tawk.to Script-->
<html class="no-js" lang="zxx">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>TechmindsHub - Online Courses & Education HTML Template - Home One</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
		<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/favicons/apple-icon-57x57.png') }}">
		<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/favicons/apple-icon-60x60.png') }}">
		<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/favicons/apple-icon-72x72.png') }}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/favicons/apple-icon-76x76.png') }}">
		<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/favicons/apple-icon-114x114.png') }}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/favicons/apple-icon-120x120.png') }}">
		<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/favicons/apple-icon-144x144.png') }}">
		<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/favicons/apple-icon-152x152.png') }}">
		<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-icon-180x180.png') }}">
		<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/img/favicons/android-icon-192x192.png') }}">
		<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
		<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicons/favicon-96x96.png') }}">
		<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
		{{-- 
		<link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
		--}}
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
		<meta name="theme-color" content="#ffffff">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
		<link href="../../../css2?family=Baloo+2:wght@400;500;600;700;800&family=Jost:wght@300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	</head>
	<body>
		<div class="preloader">
			<button class="th-btn style3 preloaderCls">Cancel Preloader</button>
			<div class="preloader-inner"><span class="loader"></span></div>
		</div>
		<div class="sidemenu-wrapper d-none d-lg-block">
			<div class="sidemenu-content">
				<button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
				<div class="widget woocommerce widget_shopping_cart">
					<h3 class="widget_title">Shopping cart</h3>
					<div class="widget_shopping_cart_content">
						<ul class="woocommerce-mini-cart cart_list product_list_widget">
							<li class="woocommerce-mini-cart-item mini_cart_item"><a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a> <a href="#"><img src="{{ asset('assets/img/product/product_thumb_1_1.jpg') }}" alt="Cart Image">Plastic Book Bags</a> <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>940.00</span></span></li>
							<li class="woocommerce-mini-cart-item mini_cart_item"><a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a> <a href="#"><img src="{{ asset('assets/img/product/product_thumb_1_2.jpg') }}" alt="Cart Image">The Genie Mind</a> <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>899.00</span></span></li>
							<li class="woocommerce-mini-cart-item mini_cart_item"><a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a> <a href="#"><img src="{{ asset('assets/img/product/product_thumb_1_3.jpg') }}" alt="Cart Image">The Energy Book</a> <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>756.00</span></span></li>
							<li class="woocommerce-mini-cart-item mini_cart_item"><a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a> <a href="#"><img src="{{ asset('assets/img/product/product_thumb_1_4.jpg') }}" alt="Cart Image">Pencil Bag</a> <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>723.00</span></span></li>
							<li class="woocommerce-mini-cart-item mini_cart_item"><a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a> <a href="#"><img src="{{ asset('assets/img/product/product_thumb_1_5.jpg') }}" alt="Cart Image">Sharpner</a> <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>1080.00</span></span></li>
						</ul>
						<p class="woocommerce-mini-cart__total total"><strong>Subtotal:</strong> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>4398.00</span></p>
						<p class="woocommerce-mini-cart__buttons buttons"><a href="cart.html" class="th-btn wc-forward">View cart</a> <a href="checkout.html" class="th-btn checkout wc-forward">Checkout</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="popup-search-box d-none d-lg-block">
			<button class="searchClose"><i class="fal fa-times"></i></button>
			<form action="#"><input type="text" placeholder="What are you looking for?"> <button type="submit"><i class="fal fa-search"></i></button></form>
		</div>
		<div class="th-menu-wrapper">
			<div class="th-menu-area text-center">
				<button class="th-menu-toggle"><i class="fal fa-times"></i></button>
				<div class="mobile-logo" style= "padding-left: 20px; padding-right: 10px;"><a href="index.html"><img src="{{ asset('assets/img/logo.png') }}" alt="TechMindsHub"></a></div>
				<div class="th-mobile-menu">
					<ul>
						{{--<li class="menu-item-has-children">
							<a href="index.html">Home</a>
							<ul class="sub-menu">
								<li class="menu-item-has-children">
									<a href="#">Multipage</a>
									<ul class="sub-menu">
										<li><a href="index.html">Home University</a></li>
										<li><a href="home-2.html">Home Online Education</a></li>
										<li><a href="home-3.html">Home University Admission</a></li>
										<li><a href="home-4.html">Home Digital Education</a></li>
										<li><a href="home-5.html">Home Academy <span class="new-label">New</span></a></li>
										<li><a href="home-6.html">Home Online Training <span class="new-label">New</span></a></li>
										<li><a href="home-7.html">Home Online Mentors <span class="new-label">New</span></a></li>
										<li><a href="home-8.html">Home Online Courses <span class="new-label">New</span></a></li>
										<li><a href="home-9.html">Home Kindergarten <span class="new-label">New</span></a></li>
										<li><a href="home-10.html">Home University <span class="new-label">New</span></a></li>
										<li><a href="home-11.html">Online Education <span class="new-label">New</span></a></li>
										<li><a href="home-12.html">Online Instructor <span class="new-label">New</span></a></li>
										<li><a href="home-13.html">Skill Development <span class="new-label">New</span></a></li>
										<li><a href="home-14.html">Home Trainer <span class="new-label">New</span></a></li>
										<li><a href="home-15.html">Home Admission <span class="new-label">New</span></a></li>
									</ul>
								</li>
								<li class="menu-item-has-children">
									<a href="#">Onepage</a>
									<ul class="sub-menu">
										<li><a href="home1-onepage.html">University Onepage</a></li>
										<li><a href="home2-onepage.html">Online Education Onepage</a></li>
										<li><a href="home3-onepage.html">University Admission Onepage</a></li>
										<li><a href="home4-onepage.html">Digital Education Onepage</a></li>
										<li><a href="home5-onepage.html">Academy Onepage <span class="new-label">New</span></a></li>
										<li><a href="home6-onepage.html">Online Training Onepage <span class="new-label">New</span></a></li>
										<li><a href="home7-onepage.html">Online Mentors Onepage <span class="new-label">New</span></a></li>
										<li><a href="home8-onepage.html">Online Courses Onepage <span class="new-label">New</span></a></li>
										<li><a href="home9-onepage.html">Kindergarten Onepage <span class="new-label">New</span></a></li>
										<li><a href="home10-onepage.html">University Onepage <span class="new-label">New</span></a></li>
										<li><a href="home11-onepage.html">Online Education Onepage <span class="new-label">New</span></a></li>
										<li><a href="home12-onepage.html">Online Instructor Onepage <span class="new-label">New</span></a></li>
										<li><a href="home13-onepage.html">Skill Development Onepage <span class="new-label">New</span></a></li>
										<li><a href="home14-onepage.html">Trainer Onepage <span class="new-label">New</span></a></li>
										<li><a href="home15-onepage.html">Admission Onepage <span class="new-label">New</span></a></li>
									</ul>
								</li>
								<li class="menu-item-has-children">
									<a href="#">RTL</a>
									<ul class="sub-menu">
										<li><a href="home1-rtl.html">University RTL</a></li>
										<li><a href="home2-rtl.html">Online Education RTL</a></li>
										<li><a href="home3-rtl.html">University Admission RTL</a></li>
										<li><a href="home4-rtl.html">Digital Education RTL</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#">Courses</a>
							<ul class="sub-menu">
								<li><a href="course.html">Courses With Sidebar</a></li>
								<li><a href="course-2.html">Courses Without Sidebar</a></li>
								<li><a href="course-3.html">Courses Videos</a></li>
								<li><a href="course-details.html">Course Details</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#">Teachers</a>
							<ul class="sub-menu">
								<li><a href="team.html">Instructors</a></li>
								<li><a href="team-details.html">Instructors Details</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#">Pages</a>
							<ul class="sub-menu">
								<li><a href="about.html">About Us</a></li>
								<li class="menu-item-has-children">
									<a href="#">Shop</a>
									<ul class="sub-menu">
										<li><a href="shop.html">Shop</a></li>
										<li><a href="shop-details.html">Shop Details</a></li>
										<li><a href="cart.html">Cart Page</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="wishlist.html">Wishlist</a></li>
									</ul>
								</li>
								<li><a href="event.html">Events</a></li>
								<li><a href="event-details.html">Event Details</a></li>
								<li><a href="gallery.html">Gallery</a></li>
								<li><a href="error.html">Error Page</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#">Blog</a>
							<ul class="sub-menu">
								<li><a href="blog.html">Blog</a></li>
								<li><a href="blog-details.html">Blog Details</a></li>
							</ul>
						</li>--}}
						<li><a href="#about-sec">About Us</a></li>
						<li><a href="#course-sec">courses</a></li>
						<li><a href="#why-choose">Why Choose Us</a></li>
						<li><a href="#team-sec">Professionals</a></li>
						<li><a href="#Testimonials">Testimonials</a></li>
					</ul>
				</div>
			</div>
		</div>
		<header class="th-header header-layout1 onepage-nav" style="background: #bad6ff; !important" >
			<div  style="background: #bad6ff; !important; padding-top: 6px; padding-bottom: 7px;"  >
				<div class="container" >
					<div class="row justify-content-center justify-content-lg-between align-items-center gy-2" style="background: #fff; margin-top: 1px;">
						<div class="col-auto d-none d-lg-block">
							<div class="header-links">
								<ul style="padding-bottom: 4px; list-style:none; margin:0; padding:0;">
									<!-- Phone & WhatsApp -->
									<li style="margin-bottom:6px;">
										<span style="display:inline-flex; justify-content:center; align-items:center; width:32px; height:32px; 
											border-radius:50%; background:#25D366; box-shadow:0 3px 6px rgba(0,0,0,0.25); margin-right:6px;">
										<i class="fab fa-whatsapp" style="color:#fff; font-size:16px;"></i>
										</span>
										<span style="display:inline-flex; justify-content:center; align-items:center; width:32px; height:32px; 
											border-radius:50%; background:#0a66c2; box-shadow:0 3px 6px rgba(0,0,0,0.25); margin-right:6px;">
										<i class="fas fa-phone" style="color:#fff; font-size:14px;"></i>
										</span>
										<a href="tel:+918847507316" style="color:#000; font-weight:500; text-decoration:none;">+91 884 750 7316</a>
									</li>
									<!-- Emails -->
									<li class="d-none d-xl-inline-block" style="margin-bottom:6px;">
										<span style="display:inline-flex; justify-content:center; align-items:center; width:32px; height:32px; 
											border-radius:50%; background:#EA4335; box-shadow:0 3px 6px rgba(0,0,0,0.25); margin-right:6px;">
										<i class="far fa-envelope" style="color:#fff; font-size:14px;"></i>
										</span>
										<a href="mailto:trainings@techmindshub.in" style="color:#000; font-weight:500; text-decoration:none;">trainings@techmindshub.in</a>
									</li>
									<li class="d-none d-xl-inline-block" style="margin-bottom:6px;">
										<span style="display:inline-flex; justify-content:center; align-items:center; width:32px; height:32px; 
											border-radius:50%; background:#EA4335; box-shadow:0 3px 6px rgba(0,0,0,0.25); margin-right:6px;">
										<i class="far fa-envelope" style="color:#fff; font-size:14px;"></i>
										</span>
										<a href="mailto:techmindshub123@gmail.com" style="color:#000; font-weight:500; text-decoration:none;">techmindshub123@gmail.com</a>
									</li>
									<!-- Clock -->
									<li style="color:#000;">
										<span style="display:inline-flex; justify-content:center; align-items:center; width:32px; height:32px; 
											border-radius:50%; background:#FF9800; box-shadow:0 3px 6px rgba(0,0,0,0.25); margin-right:6px;">
										<i class="far fa-clock" style="color:#fff; font-size:14px;"></i>
										</span>
										Mon - Sat: 10 AM - 7 PM
									</li>
								</ul>
							</div>
						</div>
						<div class="col-auto">
							<div class="header-links header-right">
								<ul>
									<li style="padding-bottom: 10px;">
										<div class="header-social" style="margin-top: 2px !important;">
											<span class="social-title" style="margin-left: 0px;"></span> 
											<!-- Instagram -->
											<a href="https://www.instagram.com/techmindshub1/" 
												style="display:inline-flex; justify-content:center; align-items:center; width:35px; height:35px; 
												border-radius:12px; background:linear-gradient(45deg,#feda75,#fa7e1e,#d62976,#962fbf,#4f5bd5); 
												box-shadow:0 3px 6px rgba(0,0,0,0.25); margin-right:6px;">
											<i class="fab fa-instagram" style="color:#fff; font-size:20px;"></i>
											</a>
											<!-- LinkedIn -->
											<a href="https://www.linkedin.com/company/training-techmindshub/" 
												style="display:inline-flex; justify-content:center; align-items:center; width:35px; height:35px; 
												border-radius:12px; background:#0077B5; 
												box-shadow:0 3px 6px rgba(0,0,0,0.25); margin-right:6px;">
											<i class="fab fa-linkedin-in" style="color:#fff; font-size:20px;"></i>
											</a>
											<!-- YouTube -->
											<a href="https://www.youtube.com/@training_techmindshub" 
												style="display:inline-flex; justify-content:center; align-items:center; width:35px; height:35px; 
												border-radius:12px; background:#FF0000; 
												box-shadow:0 3px 6px rgba(0,0,0,0.25); margin-right:6px;">
											<i class="fab fa-youtube" style="color:#fff; font-size:20px;"></i>
											</a>
											<!-- Facebook -->
											<a href="https://www.facebook.com/people/Techmindshub/61576670873787/" 
												style="display:inline-flex; justify-content:center; align-items:center; width:35px; height:35px; 
												border-radius:12px; background:#1877F2; 
												box-shadow:0 3px 6px rgba(0,0,0,0.25); margin-right:6px;">
											<i class="fab fa-facebook-f" style="color:#fff; font-size:20px;"></i>
											</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="sticky-wrapper">
				<div class="menu-area" style="background: #fff; !important">
					<div class="container">
						<div class="row align-items-center justify-content-between" >
							<div class="col-auto">
								<div class="header-logo" style="height:88px; width:200px; margin-top: 2px; margin-bottom: 0px; "><a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="TechMindsHub" style= "margin-left: 20px;"></a></div>
							</div>
							<div class="col-auto">
								<div class="row">
									<div class="col-auto">
										<nav class="main-menu d-none d-lg-inline-block">
											<ul>
												{{--
												<li class="menu-item-has-children">
													<a href="#hero">Home</a>
													<ul class="sub-menu">
														<li class="menu-item-has-children">
															<a href="#">Multipage</a>
															<ul class="sub-menu">
																<li><a href="index.html">Home University</a></li>
																<li><a href="home-2.html">Home Online Education</a></li>
																<li><a href="home-3.html">Home University Admission</a></li>
																<li><a href="home-4.html">Home Digital Education</a></li>
																<li><a href="home-5.html">Home Academy</a></li>
																<li><a href="home-6.html">Home Online Training</a></li>
																<li><a href="home-7.html">Home Online Mentors</a></li>
																<li><a href="home-8.html">Home Online Courses</a></li>
																<li><a href="home-9.html">Home Kindergarten</a></li>
																<li><a href="home-10.html">Home University <span class="new-label">New</span></a></li>
																<li><a href="home-11.html">Online Education <span class="new-label">New</span></a></li>
																<li><a href="home-12.html">Online Instructor <span class="new-label">New</span></a></li>
																<li><a href="home-13.html">Skill Development <span class="new-label">New</span></a></li>
																<li><a href="home-14.html">Home Trainer <span class="new-label">New</span></a></li>
																<li><a href="home-15.html">Home Admission <span class="new-label">New</span></a></li>
															</ul>
														</li>
														<li class="menu-item-has-children">
															<a href="#">Onepage</a>
															<ul class="sub-menu">
																<li><a href="home1-onepage.html">University Onepage</a></li>
																<li><a href="home2-onepage.html">Online Education Onepage</a></li>
																<li><a href="home3-onepage.html">University Admission Onepage</a></li>
																<li><a href="home4-onepage.html">Digital Education Onepage</a></li>
																<li><a href="home5-onepage.html">Academy Onepage</a></li>
																<li><a href="home6-onepage.html">Online Training Onepage</a></li>
																<li><a href="home7-onepage.html">Online Mentors Onepage</a></li>
																<li><a href="home8-onepage.html">Online Courses Onepage</a></li>
																<li><a href="home9-onepage.html">Kindergarten Onepage</a></li>
																<li><a href="home10-onepage.html">University Onepage <span class="new-label">New</span></a></li>
																<li><a href="home11-onepage.html">Online Education Onepage <span class="new-label">New</span></a></li>
																<li><a href="home12-onepage.html">Online Instructor Onepage <span class="new-label">New</span></a></li>
																<li><a href="home13-onepage.html">Skill Development Onepage <span class="new-label">New</span></a></li>
																<li><a href="home14-onepage.html">Trainer Onepage <span class="new-label">New</span></a></li>
																<li><a href="home15-onepage.html">Admission Onepage <span class="new-label">New</span></a></li>
															</ul>
														</li>
														<li class="menu-item-has-children">
															<a href="#">RTL</a>
															<ul class="sub-menu">
																<li><a href="home1-rtl.html">University RTL</a></li>
																<li><a href="home2-rtl.html">Online Education RTL</a></li>
																<li><a href="home3-rtl.html">University Admission RTL</a></li>
																<li><a href="home4-rtl.html">Digital Education RTL</a></li>
															</ul>
														</li>
													</ul>
												</li>
												--}}
												<li><a href="#about-sec">About Us</a></li>
												<li><a href="#course-sec">courses</a></li>
												<li><a href="#why-choose">Why Choose Us</a></li>
												<li><a href="#team-sec">Professionals</a></li>
												<li><a href="#Testimonials">Testimonials</a></li>
											</ul>
										</nav>
										<button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
									</div>
									<div class="col-auto d-none d-xl-block">
										<div class="header-button">  <a href="#contact-sec" class="th-btn ml-25">Contact Us <i class="fas fa-arrow-right ms-1"></i></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="th-hero-wrapper hero-1" id="hero">
			<div class="hero-slider-1 th-carousel" data-fade="true" data-slide-show="1" data-md-slide-show="1" data-dots="true">
				<div class="th-hero-slide">
					<div class="th-hero-bg" data-overlay="title" data-opacity="8" data-bg-src="{{ asset('assets/img/hero/hero_bg_1_1.jpg') }}"></div>
					<div class="container">
						<div class="row align-items-center justify-content-center">
							<div class="col-md-6">
								<div class="hero-style1">
									<span class="hero-subtitle" data-ani="slideinleft" data-ani-delay="0.1s"><span>LEARN FROM TODAY</span></span>
									<h1 class="hero-title text-white" data-ani="slideinleft" data-ani-delay="0.4s">One of the Best Demanding Advanced Web Development <span class="text-theme">Training Company of India</span></h1>
									<p class="hero-text" data-ani="slideinleft" data-ani-delay="0.6s">Have questions or need guidance? Contact us today and take the first step towards your learning journey!</p>
									<div class="btn-group" data-ani="slideinleft" data-ani-delay="0.8s"><a href="#contact-sec" class="th-btn style3">Contact Us<i class="fas fa-arrow-right ms-2"></i></a></div>
								</div>
							</div>
							<div class="col-md-6 text-lg-end text-center">
								<div class="hero-img1"><img src="{{ asset('assets/img/hero/hero_thumb_1_1.jpg') }}" alt="hero"></div>
							</div>
						</div>
					</div>
					<div class="hero-shape shape1"><img src="{{ asset('assets/img/hero/shape_1_1.png') }}" alt="shape"></div>
					<div class="hero-shape shape2"><img src="{{ asset('assets/img/hero/shape_1_2.png') }}" alt="shape"></div>
					<div class="hero-shape shape3"></div>
					<div class="hero-shape shape4 shape-mockup jump-reverse" data-right="3%" data-bottom="7%"><img src="{{ asset('assets/img/hero/shape_1_3.png') }}" alt="shape"></div>
					<div class="hero-shape shape5 shape-mockup jump-reverse" data-left="0" data-bottom="0"><img src="{{ asset('assets/img/hero/shape_1_4.png') }}" alt="shape"></div>
				</div>
				<div class="th-hero-slide">
					<div class="th-hero-bg" data-overlay="title" data-opacity="8" data-bg-src="{{ asset('assets/img/hero/hero_bg_1_2.jpg') }}"></div>
					<div class="container">
						<div class="row align-items-center justify-content-center">
							<div class="col-md-6">
								<div class="hero-style1">
									<span class="hero-subtitle" data-ani="slideinleft" data-ani-delay="0.1s"><span>LEARN FROM TODAY</span></span>
									<h1 class="hero-title text-white" data-ani="slideinleft" data-ani-delay="0.4s">"Learn, Build, Succeed <span class="text-theme"> With US"</span></h1>
									<p class="hero-text" data-ani="slideinleft" data-ani-delay="0.6s">Have questions or need guidance? Contact us today and take the first step towards your learning journey!</p>
									<div class="btn-group" data-ani="slideinleft" data-ani-delay="0.8s"><a href="#contact-sec" class="th-btn style3">Contact Us<i class="fas fa-arrow-right ms-2"></i></a></div>
								</div>
							</div>
							<div class="col-md-6 text-lg-end text-center">
								<div class="hero-img1"><img src="{{ asset('assets/img/hero/hero_thumb_1_2.jpg') }}" alt="hero"></div>
							</div>
						</div>
					</div>
					<div class="hero-shape shape1"><img src="{{ asset('assets/img/hero/shape_1_1.png') }}" alt="shape"></div>
					<div class="hero-shape shape2"><img src="{{ asset('assets/img/hero/shape_1_2.png') }}" alt="shape"></div>
					<div class="hero-shape shape3"></div>
					<div class="hero-shape shape4 shape-mockup jump-reverse" data-right="3%" data-bottom="7%"><img src="{{ asset('assets/img/hero/shape_1_3.png') }}" alt="shape"></div>
					<div class="hero-shape shape5 shape-mockup jump-reverse" data-left="0" data-bottom="0"><img src="{{ asset('assets/img/hero/shape_1_4.png') }}" alt="shape"></div>
				</div>
				<div class="th-hero-slide">
					<div class="th-hero-bg" data-overlay="title" data-opacity="8" data-bg-src="{{ asset('assets/img/hero/hero_bg_1_3.jpg') }}"></div>
					<div class="container">
						<div class="row align-items-center justify-content-center">
							<div class="col-md-6">
								<div class="hero-style1">
									<span class="hero-subtitle" data-ani="slideinleft" data-ani-delay="0.1s"><span>LEARN FROM TODAY</span> </span>
									<h1 class="hero-title text-white" data-ani="slideinleft" data-ani-delay="0.4s">"Your Growth Partner in IT & HR <span class="text-theme">Training Innovation"</span></h1>
									<p class="hero-text" data-ani="slideinleft" data-ani-delay="0.6s">Have questions or need guidance? Contact us today and take the first step towards your learning journey!</p>
									<div class="btn-group" data-ani="slideinleft" data-ani-delay="0.8s"><a href="#contact-sec" class="th-btn style3">Contact Us<i class="fas fa-arrow-right ms-2"></i></a></div>
								</div>
							</div>
							<div class="col-md-6 text-lg-end text-center">
								<div class="hero-img1"><img src="{{ asset('assets/img/hero/hero_thumb_1_3.jpg') }}" alt="hero"></div>
							</div>
						</div>
					</div>
					<div class="hero-shape shape1"><img src="{{ asset('assets/img/hero/shape_1_1.png') }}" alt="shape"></div>
					<div class="hero-shape shape2"><img src="{{ asset('assets/img/hero/shape_1_2.png') }}" alt="shape"></div>
					<div class="hero-shape shape3"></div>
					<div class="hero-shape shape4 shape-mockup jump-reverse" data-right="3%" data-bottom="7%"><img src="{{ asset('assets/img/hero/shape_1_3.png') }}" alt="shape"></div>
					<div class="hero-shape shape5 shape-mockup jump-reverse" data-left="0" data-bottom="0"><img src="{{ asset('assets/img/hero/shape_1_4.png') }}" alt="shape"></div>
				</div>
			</div>
		</div>
		{{-- <div class="space-top">
			<div class="container">
				<div class="category-sec-wrap">
					<div class="shape-mockup category-shape-arrow d-xl-block d-none"><img src="{{ asset('assets/img/normal/category-arrow.svg') }}" alt="img"></div>
					<div class="row">
						<div class="col-xl-4">
							<div class="title-area mb-25 mb-lg-0 text-xl-start text-center">
								<span class="sub-title"><i class="fal fa-book me-2"></i> Courses Categories</span>
								<h2 class="sec-title">Explore Top Categories</h2>
								<a href="course.html" class="th-btn">View All Category<i class="fa-regular fa-arrow-right ms-2"></i></a>
							</div>
						</div>
						<div class="col-xl-8">
							<div class="row slider-shadow th-carousel category-slider" data-slide-show="4" data-ml-slide-show="3" data-md-slide-show="3" data-sm-slide-show="2" data-arrows="true" data-xl-arrows="true">
								<div class="col-md-6 col-xl-4">
									<div class="category-card">
										<div class="category-card_icon"><img src="{{ asset('assets/img/icon/cat-1_1.svg') }}" alt="image"></div>
										<div class="category-card_content">
											<h3 class="category-card_title"><a href="course.html">Web Development</a></h3>
											<p class="category-card_text">56+ Courses</p>
											<a href="course-details.html" class="th-btn">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-xl-4">
									<div class="category-card">
										<div class="category-card_icon"><img src="{{ asset('assets/img/icon/cat-1_2.svg') }}" alt="image"></div>
										<div class="category-card_content">
											<h3 class="category-card_title"><a href="course.html">Digital Marketing</a></h3>
											<p class="category-card_text">50+ Courses</p>
											<a href="course-details.html" class="th-btn">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-xl-4">
									<div class="category-card">
										<div class="category-card_icon"><img src="{{ asset('assets/img/icon/cat-1_3.svg') }}" alt="image"></div>
										<div class="category-card_content">
											<h3 class="category-card_title"><a href="course.html">UI/UX Design</a></h3>
											<p class="category-card_text">36+ Courses</p>
											<a href="course-details.html" class="th-btn">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-xl-4">
									<div class="category-card">
										<div class="category-card_icon"><img src="{{ asset('assets/img/icon/cat-1_4.svg') }}" alt="image"></div>
										<div class="category-card_content">
											<h3 class="category-card_title"><a href="course.html">Graphic Design</a></h3>
											<p class="category-card_text">24+ Courses</p>
											<a href="course-details.html" class="th-btn">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-xl-4">
									<div class="category-card">
										<div class="category-card_icon"><img src="{{ asset('assets/img/icon/cat-1_1.svg') }}" alt="image"></div>
										<div class="category-card_content">
											<h3 class="category-card_title"><a href="course.html">Web Development</a></h3>
											<p class="category-card_text">56+ Courses</p>
											<a href="course-details.html" class="th-btn">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-xl-4">
									<div class="category-card">
										<div class="category-card_icon"><img src="{{ asset('assets/img/icon/cat-1_2.svg') }}" alt="image"></div>
										<div class="category-card_content">
											<h3 class="category-card_title"><a href="course.html">Digital Marketing</a></h3>
											<p class="category-card_text">50+ Courses</p>
											<a href="course-details.html" class="th-btn">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-xl-4">
									<div class="category-card">
										<div class="category-card_icon"><img src="{{ asset('assets/img/icon/cat-1_3.svg') }}" alt="image"></div>
										<div class="category-card_content">
											<h3 class="category-card_title"><a href="course.html">UI/UX Design</a></h3>
											<p class="category-card_text">36+ Courses</p>
											<a href="course-details.html" class="th-btn">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-xl-4">
									<div class="category-card">
										<div class="category-card_icon"><img src="{{ asset('assets/img/icon/cat-1_4.svg') }}" alt="image"></div>
										<div class="category-card_content">
											<h3 class="category-card_title"><a href="course.html">Graphic Design</a></h3>
											<p class="category-card_text">24+ Courses</p>
											<a href="course-details.html" class="th-btn">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		<div class="space overflow-hidden" id="about-sec">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-6">
						<div class="img-box1 mb-40 mb-xl-0">
							<div class="img1"><img class="tilt-active" src="{{ asset('assets/img/normal/about_1_1.png') }}" alt="About"></div>
							<div class="about-grid" data-bg-src="{{ asset('assets/img/normal/about_1_3.png') }}">
								<h3 class="about-grid_year"><span class="counter-number">20</span>k<span class="text-theme">+</span></h3>
								<p class="about-grid_text">Placements</p>
							</div>
							<div class="img2"><img class="tilt-active" src="{{ asset('assets/img/normal/about_1_2.png') }}" alt="About"></div>
							<div class="shape-mockup about-shape1 jump" data-left="-67px" data-bottom="0"><img src="{{ asset('assets/img/normal/about_1_shape1.png') }}" alt="img"></div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="title-area mb-30">
							<span class="sub-title"><i class="fal fa-book me-2"></i> About Us</span>
							<h2 class="sec-title">Welcome to TechMindsHub</h2>
						</div>
						<p class="mt-n2 mb-25">
							<strong>TechMindsHub</strong> is a Digital Web Technology Training cum Development Company which
							focused on delivering value-driven services to businesses and individuals. We specialize in Web
							& App Development, Cloud integration, Digital marketing, Human Resource Management and
							professional training programs. Our mission is to empower clients through innovative, salable,
							and cost-effective solutions with a strong commitment to quality, transparency, and continuous
							learning; our expert team ensures every project is executed with precision.
						</p>
						<p class="mb-30">We believe in building lasting relationships and driving real impact through technology with a
							blend of creativity, expertise, and practical knowledge. Our team ensures that businesses achieve
							sustainable growth and individuals achieve career success. We believe in transforming ideas into
							impactful results.
						</p>
						<div class="row align-items-center">
							<div class="col-md-auto">
								<div class="about-grid_img mb-30 mb-md-0"><img src="{{ asset('assets/img/normal/about_1_4.png') }}" alt="img"></div>
							</div>
							<div class="col-md-7">
								<div class="checklist">
									<ul>
										<li>Outcome-Oriented</li>
										<li>Expert-Led & Interactive</li>
										<li>Structured & Practical Learning</li>
									</ul>
								</div>
							</div>
						</div>
						{{--
						<div class="btn-group mt-40"><a href="about.html" class="th-btn">About More<i class="fa-regular fa-arrow-right ms-2"></i></a></div>
						--}}
					</div>
				</div>
			</div>
		</div>
		<section class="space bg-smoke" id="course-sec">
			<div class="container">
				<div class="title-area text-center">
					<span class="sub-title">Our Training Courses</span>
					<h2 class="sec-title fw-medium">Building Skills/Building Futures</h2>
				</div>
				<div class="tab-menu1 filter-menu-active" id="courseTabs" style="display:flex; flex-wrap:wrap; gap:8px;">
					<button data-filter=".cat1" class="filter-btn active">Web/Software Development</button>
					<button data-filter=".cat2" class="filter-btn">Digital Marketing</button>
					<button data-filter=".cat3" class="filter-btn">Data Science & Machine Learning</button>
					<button data-filter=".cat4" class="filter-btn">Artificial Intelligence</button>
					<button data-filter=".cat5" class="filter-btn">Cybersecurity</button>
					<button data-filter=".cat6" class="filter-btn">App Development</button>
					<button data-filter=".cat7" class="filter-btn">Stack/Programming</button>
					<button data-filter=".cat8" class="filter-btn">Emerging Technologies</button>
					<button data-filter=".cat9" class="filter-btn">Big Data & Analytics</button>
					<button data-filter=".cat10" class="filter-btn">Testing & QA</button>
					<button data-filter=".cat11" class="filter-btn">HR Management</button>
				</div>
				{{--
				<div class="row gy-4 filter-active" id="courseGrid">
					<!-- Example items -->
					<div class="col-lg-4 col-md-6 cat1">Cat1 Item</div>
					<div class="col-lg-4 col-md-6 cat2">Cat2 Item</div>
					<div class="col-lg-4 col-md-6 cat3">Cat3 Item</div>
					<div class="col-lg-4 col-md-6 cat1">Another Cat1 Item</div>
				</div>
				--}}
				<style>
					.filter-btn{
					border:1px solid #255c84;
					background:#fff;
					color:#255c84;
					padding:8px 12px;
					border-radius:8px;
					cursor:pointer;
					font-weight:600;
					transition:all .2s ease;
					}
					#courseGrid{
					display:flex;
					flex-wrap:wrap;
					gap:24px 0;
					margin-bottom:0 !important;
					padding-bottom:0 !important;
					align-content:flex-start;
					min-height:1500px !important;   /* Mobile default */
					}
					@media (min-width: 992px){         /* Desktop (Bootstrap lg and up) */
					#courseGrid{
					min-height:600px !important;
					}
					}
					#courseGrid > .hide-item{ display:none !important; }
					/* Bootstrap cols ko flex environment me respect karne do */
					#courseGrid > [class*="col-"]{ display:block; }
					.filter-btn:hover{ background:#255c84; color:#fff; }
					.filter-btn.active{ background:#f26a00; border-color:#f26a00; color:#fff; }
					.hide-item{ display:none !important; }
				</style>
				<div class="row gy-4 filter-active" id="courseGrid" >
					<div class="col-md-6 col-xl-4 filter-item cat1" >
						<div class="course-box2">
							<div class="course-img"><img src="assets/img/update1/course/development.jpg" alt="course"> <span class="tag">Web/Software Development</span></div>
							<div class="course-content">
								<h3 class="course-title"><a ></a></h3>
								<div class="course-author">
									<div class="author-info">
										<div class="info"><a href="course.html" class="author-name"></a> <span class="desig" style= "font-size: 30px; color: #000">Course Duration </span></div>
									</div>
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								<div class="course-meta"><span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>45 Days</span> <span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>3 Months</span> <span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>6 Months</span></div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat1">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag">Web/Software Development</span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title" style= "font-size: 20px;"><a>Web Technologies – HTML, CSS, JavaScript, Bootstrap</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat1">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag">Web/Software Development</span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title" style= "font-size: 20px;"><a >Backend Development – Java, Python, PHP, Node.js, APIs</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a  class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat1">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag">Web/Software Development</span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title" style= "font-size: 20px;"><a >Database Management – SQL, MySQL, MongoDB</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a  class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat1">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag">Web/Software Development</span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title" style= "font-size: 20px;"><a >Frameworks – React, Angular, Django, Springboot</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a  class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat1">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/development.jpg" alt="course"> <span class="tag">Web/Software Development</span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title" style= "font-size: 20px;"><a >Software Engineering Concepts – SDLC, Agile, Git/GitHub</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a  class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat1">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag">Web/Software Development</span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title" style= "font-size: 20px;"><a >Testing & Debugging – Manual, Automation, QA Tools</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a  class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat2">
						<div class="course-box2">
							<div class="course-img"><img src="assets/img/update1/course/marketing.jpg" alt="course"> <span class="tag">Digital Marketing</span></div>
							<div class="course-content">
								<h3 class="course-title"><a ></a></h3>
								<div class="course-author">
									<div class="author-info">
										<div class="info"><a href="course.html" class="author-name"></a> <span class="desig"style= "font-size: 30px; color: #000">Course Duration </span></div>
									</div>
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								<div class="course-meta"><span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>45 Days</span> <span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>3 Months</span> <span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>6 Months</span></div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat2">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a >SEO – On-page, Off-page & Technical</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat2">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a >SEM & Ads– Google Ads, PPC, Display</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat2">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a >SMM – Facebook, Instagram, LinkedIn, YouTube</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat2">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a >Content & Email Marketing – Blogs, Campaigns, Automation</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat2">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a >Analytics & Strategy – GA4, Search Console, ROI Planning</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat3">
						<div class="course-box2">
							<div class="course-img"><img src="assets/img/update1/course/dsml.jpg" alt="course"> <span class="tag">Data Science & Machine Learning</span></div>
							<div class="course-content">
								<h3 class="course-title"><a ></a></h3>
								<div class="course-author">
									<div class="author-info">
										<div class="info"><a href="course.html" class="author-name"></a> <span class="desig"style= "font-size: 30px; color: #000">Course Duration </span></div>
									</div>
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								<div class="course-meta"><span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>45 Days</span> <span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>3 Months</span> <span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>6 Months</span></div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat3">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a >Introduction to Data Science – Lifecycle, Tools, Applications</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat3">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a >Data Handling – Data Cleaning, Preprocessing, Visualization</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat3">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a >Statistics & Mathematics – Probability & More</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat3">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a >Machine Learning – Supervised & Unsupervised Algorithms</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat3">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a >Advanced ML – Ensemble Methods, Feature Engineering</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat3">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a >Deep Learning Intro – Neural Networks, CNN, RNN basics</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat3">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a >Tools & Frameworks – Python, R, TensorFlow, Scikit-learn</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat3">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a >Projects & Case Studies – Real-world Data Science</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat4">
						<div class="course-box2">
							<div class="course-img"><img src="assets/img/update1/course/artin.jpg" alt="course"> <span class="tag">Artificial Intelligence</span></div>
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a ></a></h3>
								<div class="course-author">
									<div class="author-info">
										<div class="info"><a href="course.html" class="author-name"></a> <span class="desig"style= "font-size: 30px; color: #000">Course Duration </span></div>
									</div>
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								<div class="course-meta"><span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>45 Days</span> <span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>3 Months</span> <span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>6 Months</span></div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat4">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Introduction to AI – Basics, Applications, AI vs ML vs DL</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat4">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Machine Foundations – Supervised, Unsupervised</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat4">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Neural Networks – Perceptron, Backpropagation, Activation</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat4">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Deep Learning Models – CNN, RNN, LSTM, GANs</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat4">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Natural Language Processing (NLP) – Text Mining, Chatbots</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat4">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">AI Tools & Frameworks – TensorFlow, Keras, PyTorch</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat4">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">AI in Practice– Computer Vision, Speech Recognition</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat4">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Ethics & Future of AI – Responsible AI, Explainability</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat5">
						<div class="course-box2">
							<div class="course-img"><img src="assets/img/update1/course/cyber.jpg" alt="course"> <span class="tag">Cybersecurity</span></div>
							<div class="course-content">
								<h3 class="course-title"><a ></a></h3>
								<div class="course-author">
									<div class="author-info">
										<div class="info"><a href="course.html" class="author-name"></a> <span class="desig"style= "font-size: 30px; color: #000">Course Duration </span></div>
									</div>
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								<div class="course-meta"><span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>45 Days</span> <span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>3 Months</span> <span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>6 Months</span></div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat5">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Cybersecurity – Threats, Attacks, Security Principles</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat5">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Networking & Security Basics – Firewalls, VPNs, Protocols</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat5">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">System & Application Security – OS Hardening</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat5">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Cryptography – Encryption, Hashing, Digital Signatures</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat5">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Ethical Hacking & Penetration Testing – Tools & Techniques</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat5">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Cloud & Network Security – Securing AWS/Azure, IDS/IPS</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat5">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Incident Response & Forensics – Monitoring, Detection</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat5">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Compliance & Emerging Trends – GDPR, Zero Trust</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat6">
						<div class="course-box2">
							<div class="course-img"><img src="assets/img/update1/course/app.jpg" alt="course"> <span class="tag">App Development</span></div>
							<div class="course-content">
								<h3 class="course-title"><a ></a></h3>
								<div class="course-author">
									<div class="author-info">
										<div class="info"><a href="course.html" class="author-name"></a> <span class="desig"style= "font-size: 30px; color: #000">Course Duration </span></div>
									</div>
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								<div class="course-meta"><span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>45 Days</span> <span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>3 Months</span> <span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>6 Months</span></div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat6">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Mobile App Development – Platforms (iOS, Android)</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat6">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Frontend Development – UI/UX, XML, Widgets</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat6">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Backend Development – Java/Kotlin (Android), Swift</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat6">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Cross-Platform Development – Flutter, React Native</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat6">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Database & Storage – SQLite, Firebase, Cloud Integration</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat6">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">App Testing & Debugging – Manual & Automated Testing</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat6">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Publishing & Deployment – Google & Apple App Store</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat6">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Projects & Case Studies – Real-World Mobile Apps</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat7">
						<div class="course-box2">
							<div class="course-img"><img src="assets/img/update1/course/stack.jpg" alt="course"> <span class="tag">Stack/Programming</span></div>
							<div class="course-content">
								<h3 class="course-title"><a ></a></h3>
								<div class="course-author">
									<div class="author-info">
										<div class="info"><a href="course.html" class="author-name"></a> <span class="desig"style= "font-size: 30px; color: #000">Course Duration </span></div>
									</div>
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								<div class="course-meta"><span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>45 Days</span> <span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>3 Months</span> <span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>6 Months</span></div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat7">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Programming Basics – Logic, Algorithms, Flowcharts</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat7">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">C & C++ – Data Types, OOPs, Pointers</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat7">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Java & Python – Core Concepts, Libraries, OOPs</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat7">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Web Foundations – HTML, CSS, JavaScript, DOM</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat7">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Database & SQL – Queries, Joins, Transactions</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat7">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Data Structures & Algorithms (DSA) – Arrays, Lists, Trees</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat7">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Version Control & IDEs – Git/GitHub, VS Code, Eclipse</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat7">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Mini Projects – Problem-Solving & Real-World Applications</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat8">
						<div class="course-box2">
							<div class="course-img"><img src="assets/img/update1/course/emerging.jpg" alt="course"> <span class="tag">Emerging Technologies</span></div>
							<div class="course-content">
								<h3 class="course-title"><a ></a></h3>
								<div class="course-author">
									<div class="author-info">
										<div class="info"><a href="course.html" class="author-name"></a> <span class="desig"style= "font-size: 30px; color: #000">Course Duration </span></div>
									</div>
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								<div class="course-meta"><span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>45 Days</span> <span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>3 Months</span> <span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>6 Months</span></div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat8">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Artificial Intelligence (AI) & Machine Learning (ML)</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat8">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Data Science & Big Data Analytics– Data Handling</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat8">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Cloud Computing & DevOps – AWS, Azure, CI/CD, Containers</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat8">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Blockchain & Cybersecurity – Smart Contracts</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat8">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Internet of Things (IoT) & 5G – Connected Devices</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat8">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">AR/VR & Metaverse – Immersive Technologies</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat8">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Robotics & Automation (RPA) – Industry 4.0 Applications</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat8">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Future Tech Trends – Quantum Computing, Green Tech</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat9">
						<div class="course-box2">
							<div class="course-img"><img src="assets/img/update1/course/bigdata.jpg" alt="course"> <span class="tag">Big Data & Analytics</span></div>
							<div class="course-content">
								<h3 class="course-title"><a ></a></h3>
								<div class="course-author">
									<div class="author-info">
										<div class="info"><a href="course.html" class="author-name"></a> <span class="desig"style= "font-size: 30px; color: #000">Course Duration </span></div>
									</div>
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								<div class="course-meta"><span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>45 Days</span> <span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>3 Months</span> <span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>6 Months</span></div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat9">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/artin.jpg" alt="course"> <span class="tag">Artificial Intelligence</span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Introduction to Big Data– Concepts, Hadoop Ecosystem</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat9">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/artin.jpg" alt="course"> <span class="tag">Artificial Intelligence</span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Data Processing – HDFS, MapReduce, Spark</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat9">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/artin.jpg" alt="course"> <span class="tag">Artificial Intelligence</span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Data Management – NoSQL (MongoDB, Cassandra), Hive</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat9">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/artin.jpg" alt="course"> <span class="tag">Artificial Intelligence</span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Data Analytic – Data Mining, Predictive Analytics, ML Basics</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat9">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/artin.jpg" alt="course"> <span class="tag">Artificial Intelligence</span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Data Visualization – Tableau, Power BI, Python/R</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat9">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/artin.jpg" alt="course"> <span class="tag">Artificial Intelligence</span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Real-Time Processing – Kafka, Spark Streaming, Flume</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat9">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/artin.jpg" alt="course"> <span class="tag">Artificial Intelligence</span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Cloud & Big Data – AWS, Azure, Google BigQuery</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat9">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/artin.jpg" alt="course"> <span class="tag">Artificial Intelligence</span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Projects & Case Studies – Industry Applications</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat10">
						<div class="course-box2">
							<div class="course-img"><img src="assets/img/update1/course/testing.jpg" alt="course"> <span class="tag">Testing & QA</span></div>
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a ></a></h3>
								<div class="course-author">
									<div class="author-info">
										<div class="info"><a href="course.html" class="author-name"></a> <span class="desig"style= "font-size: 30px; color: #000">Course Duration </span></div>
									</div>
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								<div class="course-meta"><span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>45 Days</span> <span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>3 Months</span> <span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>6 Months</span></div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat10">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Basics of Software Testing – SDLC, STLC, QA vs QC</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat10">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Manual Testing– Test Cases, Test Plans, Bug Reporting</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat10">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Automation Testing – Selenium, TestNG, JUnit, Frameworks</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat10">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Performance Testing – JMeter, Load Testing, Stress Testing</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat10">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">API & Mobile Testing – Postman, REST API & Testing</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat10">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Tools & Bug Tracking – Jira, Bugzilla, QC Tools</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat10">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Agile & DevOps Testing – CI/CD, Automation Pipelines</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat10">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Advanced QA – Security Testing, Cloud & AI in Testing</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat11">
						<div class="course-box2">
							<div class="course-img"><img src="assets/img/update1/course/hr.jpg" alt="course"> <span class="tag">HR Management</span></div>
							<div class="course-content">
								<h3 class="course-title"><a ></a></h3>
								<div class="course-author">
									<div class="author-info">
										<div class="info"><a href="course.html" class="author-name"></a> <span class="desig"style= "font-size: 30px; color: #000">Course Duration </span></div>
									</div>
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								<div class="course-meta"><span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>45 Days</span> <span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>3 Months</span> <span style= "font-size: 20px; color: #000"><i class="fal fa-clock"></i>6 Months</span></div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat11">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">HRM Basics – Functions, Roles & Importance</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat11">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Recruitment & Selection – Job Analysis, Hiring, Interviews</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat11">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Training & Development– Employee Onboarding</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat11">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Performance Management – Appraisal, Feedback, KPIs</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat11">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Compensation & Benefits – Payroll, Rewards, Incentives</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat11">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Employee Relations – Engagement, Motivation</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat11">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">Labor Laws & Compliance–Employment Acts, Policies</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 filter-item cat11">
						<div class="course-box2">
							{{--
							<div class="course-img"><img src="assets/img/update1/course/course_3_1.jpg" alt="course"> <span class="tag"></span></div>
							--}}
							<div class="course-content">
								<h3 class="course-title"style= "font-size: 20px;"><a href="course-details.html">HR Analytics & HR Tech – HRIS, Data-driven decisions</a></h3>
								<div class="course-author">
									{{--
									<div class="author-info">
										<img src="assets/img/update1/course/author_2.jpg" alt="author">
										<div class="info"><a href="course.html" class="author-name">Kevin Perry</a> <span class="desig">Instructor</span></div>
									</div>
									--}}
									{{--
									<div class="course-rating">
										<div class="star-rating" role="img" aria-label="Rated 4.5 out of 5"><span style="width:90%">Rated <strong class="rating">4.5</strong> out of 5</span></div>
										(4.5)
									</div>
									--}}
								</div>
								{{--
								<div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i class="fal fa-user"></i>Students 50</span> <span><i class="fal fa-eye"></i>View: 12K</span></div>
								--}}
							</div>
						</div>
					</div>
				</div>
			</div>
			<script>
				(function(){
				  const tabs = document.getElementById('courseTabs');
				  const grid = document.getElementById('courseGrid');
				
				  function applyFilter(selector){
				    const items = Array.from(grid.children);
				    const cls = selector && selector.startsWith('.') ? selector.slice(1) : null;
				    items.forEach(el => {
				      if (!cls || selector === '*') el.classList.remove('hide-item');
				      else el.classList.toggle('hide-item', !el.classList.contains(cls));
				    });
				    /* Reflow/cleanup: ensure container shrinks */
				    grid.style.minHeight = '0';
				    grid.style.height = 'auto';
				    // force reflow (optional)
				    void grid.offsetHeight;
				  }
				
				  document.addEventListener('DOMContentLoaded', function(){
				    applyFilter('.cat1');  // default
				    grid.classList.remove('prefilter'); // if you used prefilter trick
				    // Remove any empty placeholder items that reserve space
				    Array.from(grid.children).forEach(el=>{
				      if(!el.textContent.trim() && el.querySelectorAll('img,video,iframe').length===0){
				        el.remove();
				      }
				    });
				  });
				
				  tabs.addEventListener('click', function(e){
				    const btn = e.target.closest('.filter-btn');
				    if(!btn) return;
				    tabs.querySelectorAll('.filter-btn').forEach(b=>b.classList.remove('active'));
				    btn.classList.add('active');
				    applyFilter(btn.getAttribute('data-filter') || '*');
				  });
				})();
			</script>
		</section>
		<div class="space" id="why-choose">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-6 mb-45 mb-xl-0">
						<div class="title-area text-center text-xl-start mb-35">
							<span class="sub-title">Why Choose Us</span>
							<h2 class="sec-title fw-semibold">Learn & Grow with TechMindsHub</h2>
						</div>
						<p class="mt-n2 mb-35 text-center text-xl-start">At TechMindsHub, we simplify technology and career growth with expert-led training, real-world projects, and continuous support.</p>
						<div class="row gy-30">
							<div class="col-md-6">
								<div class="feature-block">
									<div class="feature-block_icon"><img src="{{ asset('assets/img/update1/icon/feature_3_1.svg') }}" alt="icon"></div>
									<div class="media-body">
										<h3 class="feature-block_title">Highly Experienced</h3>
										<p class="feature-block_text">Industry experts with proven skills.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="feature-block">
									<div class="feature-block_icon"><img src="{{ asset('assets/img/update1/icon/feature_3_2.svg') }}" alt="icon"></div>
									<div class="media-body">
										<h3 class="feature-block_title">Dedicated Support</h3>
										<p class="feature-block_text">Personal guidance at every step.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="feature-block">
									<div class="feature-block_icon"><img src="{{ asset('assets/img/update1/icon/feature_3_3.svg') }}" alt="icon"></div>
									<div class="media-body">
										<h3 class="feature-block_title">Question, Quiz & Test</h3>
										<p class="feature-block_text">Practical learning with real tests.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="feature-block">
									<div class="feature-block_icon"><img src="{{ asset('assets/img/update1/icon/feature_3_4.svg') }}" alt="icon"></div>
									<div class="media-body">
										<h3 class="feature-block_title">Live Coaching</h3>
										<p class="feature-block_text">Interactive sessions & mentorship.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="ps-xxl-5 ms-xl-2">
							<div class="video-box2"><img src="{{ asset('assets/img/update1/normal/whychoose.jpg') }}" alt="video"> {{--<a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i class="fas fa-play"></i></a>--}}</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="counter-area-1 bg-theme" data-bg-src="{{ asset('assets/img/bg/counter-bg_1.png') }}">
				<div class="row justify-content-between">
					<div class="col-sm-6 col-xl-3 counter-card-wrap">
						<div class="counter-card">
							<h2 class="counter-card_number"><span class="counter-number">900</span><span class="fw-normal">+</span></h2>
							<p class="counter-card_text"><strong>Successfully</strong> Trained</p>
						</div>
					</div>
					<div class="col-sm-6 col-xl-3 counter-card-wrap">
						<div class="counter-card">
							<h2 class="counter-card_number"><span class="counter-number">2</span>k<span class="fw-normal">+</span></h2>
							<p class="counter-card_text"><strong>Classes</strong> Completed</p>
						</div>
					</div>
					<div class="col-sm-6 col-xl-3 counter-card-wrap">
						<div class="counter-card">
							<h2 class="counter-card_number"><span class="counter-number">98.5</span>k<span class="fw-normal">+</span></h2>
							<p class="counter-card_text"><strong>Satisfaction</strong> Rate</p>
						</div>
					</div>
					<div class="col-sm-6 col-xl-3 counter-card-wrap">
						<div class="counter-card">
							<h2 class="counter-card_number"><span class="counter-number">100</span><span class="fw-normal">+</span></h2>
							<p class="counter-card_text"><strong>Training</strong> Courses</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section class="cta-area-2 position-relative space-bottom">
			<div class="cta-bg-img" data-bg-src="{{ asset('assets/img/bg/cta-bg2.png') }}"></div>
			<div class="cta-bg-img2" data-bg-src="{{ asset('assets/img/bg/cta-bg2-shape.png') }}"></div>
			<div class="shape-mockup cta-shape1 jump d-md-block d-none" data-left="-2%" data-bottom="-7%"><img src="{{ asset('assets/img/normal/cta_2_shape1.png') }}" alt="img"></div>
			<div class="shape-mockup cta-shape2 jump-reverse d-md-block d-none" data-right="-1%" data-top="-3%"><img src="{{ asset('assets/img/normal/cta_2_shape2.png') }}" alt="img"></div>
			<div class="shape-mockup cta-shape3 spin d-md-block d-none" data-right="20%" data-top="30%"><img src="{{ asset('assets/img/normal/cta_2_shape3.png') }}" alt="img"></div>
			<div class="container text-center">
				<div class="cta-wrap2">
					<div class="title-area text-center mb-35">
						<span class="sub-title"><i class="fal fa-book me-2"></i>Empower Digital Future with TechMindsHub</span>
						<h2 class="sec-title text-white">Book Your Seat for Summer/Winter <span class="text-theme2">Training Batches</span> <br><span class="fw-normal"></span></h2>
						<p class="cta-text"></p>
					</div>
					<div class="btn-group justify-content-center"><a href="#contact-sec" class="th-btn style3">Contact us Now<i class="fas fa-arrow-right ms-2"></i></a> {{--<a href="contactus" class="th-btn style2">Become A Teacher<i class="fas fa-arrow-right ms-2"></i></a>--}}</div>
				</div>
			</div>
		</section>
		<section class="space bg-smoke overflow-hidden" id="team-sec">
			<div class="shape-mockup team2-bg-shape1 jump-reverse d-lg-block d-none" data-left="-2%" data-top="0"><img src="{{ asset('assets/img/team/team-shape_1_1.png') }}" alt="img"></div>
			<div class="shape-mockup team2-bg-shape2 jump d-lg-block d-none" data-left="30%" data-top="7%"><img src="{{ asset('assets/img/team/team-shape_1_2.png') }}" alt="img"></div>
			<div class="shape-mockup team2-bg-shape3 jump d-md-block d-none" data-left="4%" data-bottom="3%"><img src="{{ asset('assets/img/team/team-shape_1_3.png') }}" alt="img"></div>
			<div class="shape-mockup team2-bg-shape4 spin d-md-block d-none" data-left="40%" data-bottom="4%"><img src="{{ asset('assets/img/team/team-shape_1_4.png') }}" alt="img"></div>
			<div class="shape-mockup team2-bg-shape5 jump d-xxl-block d-none" data-right="-7%" data-top="10%"><img src="{{ asset('assets/img/team/team-shape_1_5.png') }}" alt="img"></div>
			<div class="container">
				<div class="title-area text-center">
					<span class="sub-title"><i class="fal fa-book me-2"></i> TechMindsHub Professionals</span>
					<h2 class="sec-title">Meet Our Expert Members</h2>
				</div>
				<div class="row th-carousel slider-shadow" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="1">
					<div class="col-lg-6">
						<div class="team-card style2">
							<div class="team-img-wrap">
								<svg class="team-shape" xmlns="http://www.w3.org/2000/svg" width="327" height="337" viewbox="0 0 327 337" fill="none">
									<path d="M158.167 331C158.167 333.946 160.555 336.333 163.5 336.333C166.446 336.333 168.833 333.946 168.833 331C168.833 328.054 166.446 325.667 163.5 325.667C160.555 325.667 158.167 328.054 158.167 331ZM158.167 6C158.167 8.94552 160.555 11.3333 163.5 11.3333C166.446 11.3333 168.833 8.94552 168.833 6C168.833 3.05448 166.446 0.666667 163.5 0.666667C160.555 0.666667 158.167 3.05448 158.167 6ZM325 167.5C325 257.254 253.238 330 163.5 330V332C254.359 332 327 258.343 327 167.5H325ZM2.00012 167.5C2.00012 77.7618 73.7458 7 163.5 7V5C72.6574 5 0.00012207 76.6411 0.00012207 167.5H2.00012Z" fill="#0D5EF4"></path>
								</svg>
								<div class="team-img"><img src="{{ asset('assets/img/team/team_2_1.jpg') }}" alt="Team"></div>
								{{--<div class="team-social">
									<a href="#" class="icon-btn"><i class="far fa-plus"></i></a>
									<div class="th-social"><a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a> <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a></div>
								</div>--}}
							</div>
							<div class="team-content">
								<h3 class="team-title"><a href="team-details.html">Gurvinder Singh</a></h3>
								<span class="team-desig">Business Partner</span>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="team-card style2">
							<div class="team-img-wrap">
								<svg class="team-shape" xmlns="http://www.w3.org/2000/svg" width="327" height="337" viewbox="0 0 327 337" fill="none">
									<path d="M158.167 331C158.167 333.946 160.555 336.333 163.5 336.333C166.446 336.333 168.833 333.946 168.833 331C168.833 328.054 166.446 325.667 163.5 325.667C160.555 325.667 158.167 328.054 158.167 331ZM158.167 6C158.167 8.94552 160.555 11.3333 163.5 11.3333C166.446 11.3333 168.833 8.94552 168.833 6C168.833 3.05448 166.446 0.666667 163.5 0.666667C160.555 0.666667 158.167 3.05448 158.167 6ZM325 167.5C325 257.254 253.238 330 163.5 330V332C254.359 332 327 258.343 327 167.5H325ZM2.00012 167.5C2.00012 77.7618 73.7458 7 163.5 7V5C72.6574 5 0.00012207 76.6411 0.00012207 167.5H2.00012Z" fill="#0D5EF4"></path>
								</svg>
								<div class="team-img"><img src="{{ asset('assets/img/team/team_2_4.jpg') }}" alt="Team"></div>
								{{--<div class="team-social">
									<a href="#" class="icon-btn"><i class="far fa-plus"></i></a>
									<div class="th-social"><a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a> <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a></div>
								</div>--}}
							</div>
							<div class="team-content">
								<h3 class="team-title"><a href="team-details.html">Pooja Thakur</a></h3>
								<span class="team-desig">Business Partner</span>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="team-card style2">
							<div class="team-img-wrap">
								<svg class="team-shape" xmlns="http://www.w3.org/2000/svg" width="327" height="337" viewbox="0 0 327 337" fill="none">
									<path d="M158.167 331C158.167 333.946 160.555 336.333 163.5 336.333C166.446 336.333 168.833 333.946 168.833 331C168.833 328.054 166.446 325.667 163.5 325.667C160.555 325.667 158.167 328.054 158.167 331ZM158.167 6C158.167 8.94552 160.555 11.3333 163.5 11.3333C166.446 11.3333 168.833 8.94552 168.833 6C168.833 3.05448 166.446 0.666667 163.5 0.666667C160.555 0.666667 158.167 3.05448 158.167 6ZM325 167.5C325 257.254 253.238 330 163.5 330V332C254.359 332 327 258.343 327 167.5H325ZM2.00012 167.5C2.00012 77.7618 73.7458 7 163.5 7V5C72.6574 5 0.00012207 76.6411 0.00012207 167.5H2.00012Z" fill="#0D5EF4"></path>
								</svg>
								<div class="team-img"><img src="{{ asset('assets/img/team/team_2_1.jpg') }}" alt="Team"></div>
								{{--<div class="team-social">
									<a href="#" class="icon-btn"><i class="far fa-plus"></i></a>
									<div class="th-social"><a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a> <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a></div>
								</div>--}}
							</div>
							<div class="team-content">
								<h3 class="team-title"><a href="team-details.html">Hirmar Ubunti</a></h3>
								<span class="team-desig">Instructor</span>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="team-card style2">
							<div class="team-img-wrap">
								<svg class="team-shape" xmlns="http://www.w3.org/2000/svg" width="327" height="337" viewbox="0 0 327 337" fill="none">
									<path d="M158.167 331C158.167 333.946 160.555 336.333 163.5 336.333C166.446 336.333 168.833 333.946 168.833 331C168.833 328.054 166.446 325.667 163.5 325.667C160.555 325.667 158.167 328.054 158.167 331ZM158.167 6C158.167 8.94552 160.555 11.3333 163.5 11.3333C166.446 11.3333 168.833 8.94552 168.833 6C168.833 3.05448 166.446 0.666667 163.5 0.666667C160.555 0.666667 158.167 3.05448 158.167 6ZM325 167.5C325 257.254 253.238 330 163.5 330V332C254.359 332 327 258.343 327 167.5H325ZM2.00012 167.5C2.00012 77.7618 73.7458 7 163.5 7V5C72.6574 5 0.00012207 76.6411 0.00012207 167.5H2.00012Z" fill="#0D5EF4"></path>
								</svg>
								<div class="team-img"><img src="{{ asset('assets/img/team/team_2_1.jpg') }}" alt="Team"></div>
								{{--<div class="team-social">
									<a href="#" class="icon-btn"><i class="far fa-plus"></i></a>
									<div class="th-social"><a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a> <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a></div>
								</div>--}}
							</div>
							<div class="team-content">
								<h3 class="team-title"><a href="team-details.html">Hirmar Ubunti</a></h3>
								<span class="team-desig">Instructor</span>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="team-card style2">
							<div class="team-img-wrap">
								<svg class="team-shape" xmlns="http://www.w3.org/2000/svg" width="327" height="337" viewbox="0 0 327 337" fill="none">
									<path d="M158.167 331C158.167 333.946 160.555 336.333 163.5 336.333C166.446 336.333 168.833 333.946 168.833 331C168.833 328.054 166.446 325.667 163.5 325.667C160.555 325.667 158.167 328.054 158.167 331ZM158.167 6C158.167 8.94552 160.555 11.3333 163.5 11.3333C166.446 11.3333 168.833 8.94552 168.833 6C168.833 3.05448 166.446 0.666667 163.5 0.666667C160.555 0.666667 158.167 3.05448 158.167 6ZM325 167.5C325 257.254 253.238 330 163.5 330V332C254.359 332 327 258.343 327 167.5H325ZM2.00012 167.5C2.00012 77.7618 73.7458 7 163.5 7V5C72.6574 5 0.00012207 76.6411 0.00012207 167.5H2.00012Z" fill="#0D5EF4"></path>
								</svg>
								<div class="team-img"><img src="{{ asset('assets/img/team/team_2_1.jpg') }}" alt="Team"></div>
								{{--<div class="team-social">
									<a href="#" class="icon-btn"><i class="far fa-plus"></i></a>
									<div class="th-social"><a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a> <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a></div>
								</div>--}}
							</div>
							<div class="team-content">
								<h3 class="team-title"><a href="team-details.html">Hirmar Ubunti</a></h3>
								<span class="team-desig">Instructor</span>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="team-card style2">
							<div class="team-img-wrap">
								<svg class="team-shape" xmlns="http://www.w3.org/2000/svg" width="327" height="337" viewbox="0 0 327 337" fill="none">
									<path d="M158.167 331C158.167 333.946 160.555 336.333 163.5 336.333C166.446 336.333 168.833 333.946 168.833 331C168.833 328.054 166.446 325.667 163.5 325.667C160.555 325.667 158.167 328.054 158.167 331ZM158.167 6C158.167 8.94552 160.555 11.3333 163.5 11.3333C166.446 11.3333 168.833 8.94552 168.833 6C168.833 3.05448 166.446 0.666667 163.5 0.666667C160.555 0.666667 158.167 3.05448 158.167 6ZM325 167.5C325 257.254 253.238 330 163.5 330V332C254.359 332 327 258.343 327 167.5H325ZM2.00012 167.5C2.00012 77.7618 73.7458 7 163.5 7V5C72.6574 5 0.00012207 76.6411 0.00012207 167.5H2.00012Z" fill="#0D5EF4"></path>
								</svg>
								<div class="team-img"><img src="{{ asset('assets/img/team/team_2_1.jpg') }}" alt="Team"></div>
								{{--<div class="team-social">
									<a href="#" class="icon-btn"><i class="far fa-plus"></i></a>
									<div class="th-social"><a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a> <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a></div>
								</div>--}}
							</div>
							<div class="team-content">
								<h3 class="team-title"><a href="team-details.html">Hirmar Ubunti</a></h3>
								<span class="team-desig">Instructor</span>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="team-card style2">
							<div class="team-img-wrap">
								<svg class="team-shape" xmlns="http://www.w3.org/2000/svg" width="327" height="337" viewbox="0 0 327 337" fill="none">
									<path d="M158.167 331C158.167 333.946 160.555 336.333 163.5 336.333C166.446 336.333 168.833 333.946 168.833 331C168.833 328.054 166.446 325.667 163.5 325.667C160.555 325.667 158.167 328.054 158.167 331ZM158.167 6C158.167 8.94552 160.555 11.3333 163.5 11.3333C166.446 11.3333 168.833 8.94552 168.833 6C168.833 3.05448 166.446 0.666667 163.5 0.666667C160.555 0.666667 158.167 3.05448 158.167 6ZM325 167.5C325 257.254 253.238 330 163.5 330V332C254.359 332 327 258.343 327 167.5H325ZM2.00012 167.5C2.00012 77.7618 73.7458 7 163.5 7V5C72.6574 5 0.00012207 76.6411 0.00012207 167.5H2.00012Z" fill="#0D5EF4"></path>
								</svg>
								<div class="team-img"><img src="{{ asset('assets/img/team/team_2_1.jpg') }}" alt="Team"></div>
								{{--<div class="team-social">
									<a href="#" class="icon-btn"><i class="far fa-plus"></i></a>
									<div class="th-social"><a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a> <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a></div>
								</div>--}}
							</div>
							<div class="team-content">
								<h3 class="team-title"><a href="team-details.html">Hirmar Ubunti</a></h3>
								<span class="team-desig">Instructor</span>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="team-card style2">
							<div class="team-img-wrap">
								<svg class="team-shape" xmlns="http://www.w3.org/2000/svg" width="327" height="337" viewbox="0 0 327 337" fill="none">
									<path d="M158.167 331C158.167 333.946 160.555 336.333 163.5 336.333C166.446 336.333 168.833 333.946 168.833 331C168.833 328.054 166.446 325.667 163.5 325.667C160.555 325.667 158.167 328.054 158.167 331ZM158.167 6C158.167 8.94552 160.555 11.3333 163.5 11.3333C166.446 11.3333 168.833 8.94552 168.833 6C168.833 3.05448 166.446 0.666667 163.5 0.666667C160.555 0.666667 158.167 3.05448 158.167 6ZM325 167.5C325 257.254 253.238 330 163.5 330V332C254.359 332 327 258.343 327 167.5H325ZM2.00012 167.5C2.00012 77.7618 73.7458 7 163.5 7V5C72.6574 5 0.00012207 76.6411 0.00012207 167.5H2.00012Z" fill="#0D5EF4"></path>
								</svg>
								<div class="team-img"><img src="{{ asset('assets/img/team/team_2_4.jpg') }}" alt="Team"></div>
								{{--<div class="team-social">
									<a href="#" class="icon-btn"><i class="far fa-plus"></i></a>
									<div class="th-social"><a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a> <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a></div>
								</div>--}}
							</div>
							<div class="team-content">
								<h3 class="team-title"><a href="team-details.html">Jennifer Patricia</a></h3>
								<span class="team-desig">Senior Instructor</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="overflow-hidden space">
			<div class="container">
				<div class="title-area text-center">
					<span class="sub-title"><i class="fal fa-book me-2"></i> Career Opportunities</span>
					<h2 class="sec-title">Build Your Career in the Digital World</h2>
				</div>
				<div class="row gy-4 justify-content-center">
					<div class="col-md-6 col-lg-4">
						<div class="service-card style3">
							<div class="service-card-content">
								<div class="service-card-icon"><img src="{{ asset('assets/img/icon/service-icon-3-1.svg') }}" alt="Icon"></div>
								<h3 class="box-title">High Demand Digital Era</h3>
								<p class="service-card-text">Technology drives every industry and skilled professionals are the backbone of innovation. </p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="service-card style3">
							<div class="service-card-content">
								<div class="service-card-icon"><img src="{{ asset('assets/img/icon/service-icon-3-2.svg') }}" alt="Icon"></div>
								<h3 class="box-title">Growth Oriented Career</h3>
								<p class="service-card-text">Work with brands, create campaigns, analyze results, and grow businesses—while growing your own career at the same time.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="service-card style3">
							<div class="service-card-content">
								<div class="service-card-icon"><img src="{{ asset('assets/img/icon/service-icon-3-3.svg') }}" alt="Icon"></div>
								<h3 class="box-title">Work Anywhere</h3>
								<p class="service-card-text">Whether you dream of a corporate job, starting your own agency, or freelancing from home, digital skills.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="testi-area-2 space overflow-hidden" id= "Testimonials">
			<div class="shape-mockup testi2-bg-shape1 jump" data-right="10%" data-top="20%"><img src="{{ asset('assets/img/testimonial/testi-bg-shape_2_1.png') }}" alt="img"></div>
			<div class="shape-mockup testi2-bg-shape2 spin d-xl-block d-none" data-left="0" data-bottom="15%"><img src="{{ asset('assets/img/testimonial/testi-bg-shape_1_2.png') }}" alt="img"></div>
			<div class="shape-mockup testi2-bg-shape3 spin d-lg-block d-none" data-right="2%" data-top="15%"><img src="{{ asset('assets/img/testimonial/testi-bg-shape_1_2.png') }}" alt="img"></div>
			<div class="container">
				<div class="title-area text-center">
					<span class="sub-title"><i class="fal fa-book me-2"></i> Our Students Testimonials</span>
					<h2 class="sec-title">Students Say’s About TechMindsHub</h2>
				</div>
				<div class="row gx-5">
					<div class="col-xl-5">
						<div class="testi-thumb mb-xl-0 mb-5"><img src="{{ asset('assets/img/testimonial/testi-thumb.png') }}" alt="img"></div>
					</div>
					<div class="col-xl-7">
						<div class="row testi-slider2 th-carousel" data-slide-show="1" data-lg-slide-show="1" data-md-slide-show="1" data-arrows="true">
							<div class="col-lg-6">
								<div class="testi-card">
									<div class="testi-card_quote"><img src="{{ asset('assets/img/icon/testi-quote.svg') }}" alt="quote"></div>
									<p class="testi-card_text">“TechMindHub is an excellent platform for learning programming! I started with C and C++, and now I’m currently enrolled in their full Python course, which is very well-structured and easy to follow. The teaching quality and practical approach make learning simple and effective. Highly recommend TechMindHub to anyone who wants to build strong coding skills!”</p>
									<div class="testi-card_profile">
										<div class="testi-card_avater"><img src="{{ asset('assets/img/testimonial/testi_1_1.jpg') }}" alt="testimonial" style="height: 110px; width: 110px;"></div>
										<div class="media-body">
											<h3 class="testi-card_name" style= "text-align: left;">Rabnoor Kaur</h3>
											<span class="testi-card_desig" style= "text-align: left;">IT Student</span>
											<div class="testi-box_review"><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i> (5.0)</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="testi-card">
									<div class="testi-card_quote"><img src="{{ asset('assets/img/icon/testi-quote.svg') }}" alt="quote"></div>
									<p class="testi-card_text">“I had a great experience during my summer training with mentor kanika ma'am. The program was very well-structured and covered both theoretical concepts and practical applications in detail. The trainers were knowledgeable, approachable, and always ready to clear doubts, which made the learning process smooth and engaging.”</p>
									<div class="testi-card_profile">
										<div class="testi-card_avater"><img src="{{ asset('assets/img/testimonial/testi_1_2.jpg') }}" alt="testimonial"  style="height: 110px; width: 110px;"></div>
										<div class="media-body">
											<h3 class="testi-card_name" style= "text-align: left;">Himanshu</h3>
											<span class="testi-card_desig" style= "text-align: left;">IT Student</span>
											<div class="testi-box_review"><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i> (5.0)</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="testi-card">
									<div class="testi-card_quote"><img src="{{ asset('assets/img/icon/testi-quote.svg') }}" alt="quote"></div>
									<p class="testi-card_text">“I recently completed my Core Java course from Techmindshub Institute, Mohali (Sector 73), and it was a great learning experience. They explained every concept in a clear and practical way, making it easy to understand even the tougher topics. The institute provides good guidance, real-time examples, and hands-on practice which helped me build a strong foundation in Java. The learning environment is very supportive, and doubts are resolved properly. Overall, Techmindshub is a great place to learn programming and enhance skills.”</p>
									<div class="testi-card_profile">
										<div class="testi-card_avater"><img src="{{ asset('assets/img/testimonial/gurbaaz.jpg') }}" alt="testimonial" style="height: 110px; width: 110px;"></div>
										<div class="media-body">
											<h3 class="testi-card_name" style= "text-align: left;">Gurbaaz Singh</h3>
											<span class="testi-card_desig" style= "text-align: left;">Core Java Student</span>
											<div class="testi-box_review"><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i> (5.0)</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="bg-title position-relative" data-bg-src="{{ asset('assets/img/bg/admission-bg1.png') }}" id="contact-sec">
			<div class="img-left admission-thumb"><img src="{{ asset('assets/img/update1/normal/admission_left.png') }}" alt="mockup"></div>
			<div class="container space z-index-common">
				<div class="row justify-content-end">
					<div class="col-xl-6">
						<div class="title-area mb-30">
							<span class="sub-title">Contact Us</span>
							<h2 class="sec-title fw-medium text-white">Have Questions? Let’s Connect</h2>
						</div>
						<p class="mb-30 text-light">Whether it’s about courses, career paths, or enrollment details – we’re just a message away.</p>
						<form class="course-form mb-2" action="{{ route('contact.send') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="row">
								<div class="col-md-6">
									<div class="form-group"><input type="text" name="name" placeholder="Full Name*" required></div>
								</div>
								<div class="col-md-6">
									<div class="form-group"><input type="email" name="email" placeholder="Email Address*" required></div>
								</div>
								<div class="col-md-12">
									<div class="form-group"><input name="message" placeholder="Your Message*" required></input></div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label class="text-white mb-2">Upload Resume (PDF/DOC)</label>
										<input type="file" name="resume" accept=".pdf,.doc,.docx" class="form-control" style="padding-top: 15px;" required>
									</div>
								</div>
							</div>
							<button type="submit" class="th-btn style3">Submit Now<i class="fas fa-arrow-right ms-2"></i></button>
						</form>
					</div>
				</div>
			</div>
		</section>
		<footer class="footer-wrapper footer-layout8" data-bg-src="assets/img/update1/bg/footer_bg_3.jpg') }}">
			<div class="footer-top">
				<div class="container">
					<div class="footer-contact-wrap">
						<div class="footer-contact">
							<div class="footer-contact_icon icon-btn"><i class="fas fa-phone"></i></div>
							<div class="media-body">
								<p class="footer-contact_text">For Enrollment Call/WhatsApp us</p>
								<a href="tel+11234567890" class="footer-contact_link">+91 884 750 7316</a>
							</div>
						</div>
						<div class="divider"></div>
						<div class="footer-contact">
							<div class="footer-contact_icon icon-btn"><i class="fas fa-envelope"></i></div>
							<div class="media-body">
								<p class="footer-contact_text">Email us</p>
								<a href="mailto: trainings@techmindshub.in" class="footer-contact_link">trainings@techmindshub.in</a>
							</div>
						</div>
						<div class="divider"></div>
						<div class="footer-contact">
							<div class="footer-contact_icon icon-btn"><i class="fas fa-share"></i></div>
							<div class="media-body">
								<p class="footer-contact_text" style= "margin-bottom: 10px;">Follow Us On Social Media</p>
								<div class="header-social" style="margin-top: 2px !important;">
										    <span class="social-title" style="margin-left: 0px;"></span> 

										    <!-- Instagram -->
										    <a href="https://www.instagram.com/techmindshub1/" 
										       style="display:inline-flex; justify-content:center; align-items:center; width:35px; height:35px; 
										              border-radius:12px; background:linear-gradient(45deg,#feda75,#fa7e1e,#d62976,#962fbf,#4f5bd5); 
										              box-shadow:0 3px 6px rgba(0,0,0,0.25); margin-right:6px;">
										      <i class="fab fa-instagram" style="color:#fff; font-size:20px;"></i>
										    </a>

										    <!-- LinkedIn -->
										    <a href="https://www.linkedin.com/company/training-techmindshub/" 
										       style="display:inline-flex; justify-content:center; align-items:center; width:35px; height:35px; 
										              border-radius:12px; background:#0077B5; 
										              box-shadow:0 3px 6px rgba(0,0,0,0.25); margin-right:6px;">
										      <i class="fab fa-linkedin-in" style="color:#fff; font-size:20px;"></i>
										    </a>

										    <!-- YouTube -->
										    <a href="https://www.youtube.com/@training_techmindshub" 
										       style="display:inline-flex; justify-content:center; align-items:center; width:35px; height:35px; 
										              border-radius:12px; background:#FF0000; 
										              box-shadow:0 3px 6px rgba(0,0,0,0.25); margin-right:6px;">
										      <i class="fab fa-youtube" style="color:#fff; font-size:20px;"></i>
										    </a>

										    <!-- Facebook -->
										    <a href="https://www.facebook.com/people/Techmindshub/61576670873787/" 
										       style="display:inline-flex; justify-content:center; align-items:center; width:35px; height:35px; 
										              border-radius:12px; background:#1877F2; 
										              box-shadow:0 3px 6px rgba(0,0,0,0.25); margin-right:6px;">
										      <i class="fab fa-facebook-f" style="color:#fff; font-size:20px;"></i>
										    </a>

										  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<style>
			.newsletter-logo img {
			    background: #ffffff;   /* White background forcefully */
			    padding: 5px;          /* Thoda spacing add hoga */
			    border-radius: 5px;    /* Optional: corners rounded */
			    display: inline-block; /* Safe rendering */
			}
			</style>
			<div class="widget-area">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-md-6 col-xl-3">
							<div class="widget newsletter-widget footer-widget style2">
								<div class="newsletter-logo mb-30"><a href="home"><img src="{{ asset('assets/img/logo.jpg') }}" alt="Edura"></a></div>
								<p class="footer-text">With a blend of creativity, expertise, and practical knowledge, our team ensures that businesses achieve sustainable growth and individuals achieve career success. We believe in transforming ideas into impactful results.</p>
								{{--<form class="newsletter-form form-group"><input class="form-control" type="email" placeholder="Email Email" required=""> <i class="far fa-envelope"></i> <button type="submit" class="th-btn style3">Subscribe Now <i class="far fa-arrow-right ms-1"></i></button></form>--}}
							</div>
						</div>
						<div class="col-md-6 col-xl-auto">
							<div class="widget widget_nav_menu footer-widget style2">
								<h3 class="widget_title">Short Links</h3>
								<div class="menu-all-pages-container">
									<ul class="menu">
										<li><a href="#about-sec">About Us</a></li>
										<li><a href="#course-sec">Courses</a></li>
										<li><a href="#why-choose">Why Choose Us</a></li>
										<li><a href="#team-sec">Professionals</a></li>
										<li><a href="#Testimonials">Testimonials</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-xl-auto">
							<div class="widget widget_nav_menu footer-widget style2">
								<h3 class="widget_title">Courses</h3>
								<div class="menu-all-pages-container">
									<ul class="menu">
										<li><a href="#course-sec">Web/Software Development</a></li>
										<li><a href="#course-sec">Digital Marketing</a></li>
										<li><a href="#course-sec">Data Science & Machine Learning</a></li>
										<li><a href="#course-sec">Artificial Intelligence</a></li>
										<li><a href="#course-sec">Cybersecurity</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-xl-auto">
							<div class="widget widget_nav_menu footer-widget style2">
								<h3 class="widget_title">Courses</h3>
								<div class="menu-all-pages-container">
									<ul class="menu">
										<li><a href="#course-sec">App Development</a></li>
										<li><a href="#course-sec">Stack/Programming</a></li>
										<li><a href="#course-sec">Emerging Technologies</a></li>
										<li><a href="#course-sec">Big Data & Analytics</a></li>
										<li><a href="#course-sec">Testing & QA</a></li>
										<li><a href="#course-sec">HR Management</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright-wrap">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6">
							<p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2025 <a href="https://themeforest.net/user/themeholy">TechMindsHub</a>. All Rights Reserved.</p>
						</div>
						<div class="col-lg-6 text-end d-none d-lg-block" >
							<div class="footer-links">
								<ul>
									<li><a href="https://youroutright.com/">Made by Your Outright Global</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<div class="scroll-top">
			<svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
				<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
			</svg>
		</div>
		<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/app.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script>
			@if (session('success'))
				Swal.fire({
					icon: 'success',
					title: 'Success!',
					text: '{{ session('success') }}',
					timer: 3000,
					showConfirmButton: false
				});
			@endif

			@if (session('error'))
				Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: '{{ session('error') }}',
					timer: 4000,
					showConfirmButton: false
				});
			@endif

			@if ($errors->any())
				Swal.fire({
					icon: 'error',
					title: 'Please Fix the Following Errors',
					html: `{!! implode('<br>', $errors->all()) !!}<br><br><strong>Resume Requirements:</strong><ul style="text-align: left;"><li>File must be a PDF, DOC, or DOCX.</li><li>File size must not exceed 2MB.</li></ul>`,
					showConfirmButton: true,
					confirmButtonText: 'OK',
					confirmButtonColor: '#3b82f6'
				});
			@endif
		</script>
	</body>
</html>