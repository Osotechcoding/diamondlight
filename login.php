<!DOCTYPE html>
<html lang="en">
>
<head>
    <?php include_once ("Templates/MetaTag.php");?>
	<!-- meta tag -->
	<title> </title>
    <?php include ("Templates/HeaderScript.php");?>
</head>
<body class="defult-home">

<!--Preloader area start here-->
<?php include_once ("Templates/Preloader.php");?>
<!--Preloader area End here-->

<!-- Main content Start -->
<div class="main-content">
	<!--Full width header Start-->
	<div class="full-width-header home8-style4 main-home">
		<!--Header Start-->
		<header id="rs-header" class="rs-header">
			<!-- Menu Start -->
        <?php include_once ("Templates/Header.php");?>
			<!-- Canvas Menu end -->
		</header>
		<!--Header End-->
	</div>
	<!--Full width header End-->

		<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">My Account</h1>
                    <ul>
                        <li>
                            <a class="active" href="index-2.html">Home</a>
                        </li>
                        <li>My Account</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

    		<!-- My Account Section Start -->
    		<div class="rs-login pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="noticed">
                        <div class="main-part">                           
                            <div class="method-account">
                                <h2 class="login">Login</h2>
                                <form>
                                    <input type="email" name="E-mail" placeholder="E-mail" required="">
                                    <input type="text" name="text" placeholder="Password" required="">
                                    <button type="submit" class="readon submit-btn">login</button>
                                    <div class="last-password">
                                        <p>Not registered? <a href="#">Create an account</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- My Account Section End -->  

        </div> 
        <!-- Main content End -->
	<!-- Newsletter section start -->
    <?php include_once ("Templates/NewsletterForm.php");?>
	<!-- Newsletter section end -->
</div>
<!-- Main content End -->
<!-- Footer Start -->
<footer id="rs-footer" class="rs-footer home9-style main-home">
    <?php include_once ("Templates/Footer.php");?>
</footer>
<!-- Footer End -->
<!-- Search Modal Start -->
<?php include_once ("Templates/SearchBar.php") ?>
<!-- Search Modal End -->
<?php include_once ("Templates/FooterScript.php") ?>
</body>
</html>