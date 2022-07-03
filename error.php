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

            <!-- Erro 404 Page Start Here -->
            <div id="rs-page-error" class="rs-page-error">
                <div class="error-text">
                    <h1 class="error-code">404</h1>
                    <h3 class="error-message">Page Not Found</h3>
                    <form>
                        <input type="search" placeholder="Search..." name="s" class="search-input" value="">
                        <button type="submit" value="Search"><i class="fa fa-search"></i></button>
                    </form>
                    <a class="readon orange-btn" href="index-2.html" title="HOME">Back to Homepage</a>
                </div>
            </div>
            <!-- Erro 404 Page End Here -->
        </div> 
        <!-- Main content End -->
	<!-- Newsletter section start -->
    <?php //include_once ("Templates/NewsletterForm.php");?>
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