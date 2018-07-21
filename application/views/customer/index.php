<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>Shopping</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="<?php echo base_url(); ?>assets/fronted/assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="<?php echo base_url(); ?>assets/fronted/style1.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="<?php echo base_url(); ?>assets/fronted/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/fronted/assets/ico/favicon.ico">
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">

	<div class="topNav">

		<div class="container">

			<div class="alignR">

				<div class="pull-left socialNw">
					<a href="#"><span class="icon-twitter"></span></a>
					<a href="#"><span class="icon-facebook"></span></a>
					<a href="#"><span class="icon-youtube"></span></a>
					<a href="#"><span class="icon-tumblr"></span></a>
				</div>
				<a class="" href="<?php echo base_url('index.php/toko/'); ?>"> <span class="icon-home"></span> Home</a>
				<a href="<?php echo base_url('index.php/toko/myprofil'); ?>"><span class="icon-user"></span> My Account</a> 
				<a href="<?php echo base_url('index.php/toko/register'); ?>"><span class="icon-edit"></span> Free Register </a> 
				<a href="<?php echo base_url('index.php/toko/kontak'); ?>"><span class="icon-envelope"></span> Contact us</a>
				<a href="<?php echo base_url('index.php/toko/keranjang'); ?>"><span class="icon-shopping-cart"></span>  Item(s) - <span class="badge badge-warning"> Rp. 0 </span></a>
				<a href="<?php echo base_url('index.php/login/logout'); ?>">Logout</a>

			</div>

		</div>

	</div>

</div>

<div class="container"><!-- container -->

<div id="gototop"> </div>

<header id="header">

	<div class="row">

		<div class="span4">
			<h1>
				<a class="logo" href="<?php echo base_url('index.php/toko/'); ?>"><span>Twitter Bootstrap ecommerce template</span><img src="<?php echo base_url(); ?>assets/fronted/assets/img/logo-bootstrap-shoping-cart.png" alt="bootstrap sexy shop"></a>
			</h1>
		</div>

		<div class="span4"></div>

		<div class="span4 alignR">
			<p><br> <strong> Support (24/7) :  0800 1234 678 </strong><br><br></p>
			<span class="btn btn-mini">[ 0 ] <span class="icon-shopping-cart"></span></span>
			<span class="btn btn-warning btn-mini">$</span>
			<span class="btn btn-mini">&pound;</span>
			<span class="btn btn-mini">&euro;</span>
		</div>

	</div>

</header>

<div class="navbar">

	<div class="navbar-inner">

		<div class="container">

			<a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
		  	</a>

		  	<div class="nav-collapse">

				<ul class="nav">
			  		<li class=""><a href="<?php echo base_url('index.php/toko/'); ?>">Home</a></li>
			  		<li class=""><a href="<?php echo base_url('index.php/toko/daftar'); ?>">List View</a></li>
			  		<li class=""><a href="<?php echo base_url('index.php/toko/grid'); ?>">Grid View</a></li>
			  		<li class=""><a href="<?php echo base_url('index.php/toko/three'); ?>">Three Column</a></li>
			  		<li class=""><a href="<?php echo base_url('index.php/toko/four'); ?>">Four Column</a></li>
			  		<li class=""><a href="<?php echo base_url('index.php/toko/about'); ?>">About</a></li>
				</ul>

				<form action="<?php echo base_url('index.php/toko/search'); ?>" class="navbar-search pull-left" method="POST">

			  		<input type="text" placeholder="Search" name="search" id="search" onkeyup="search();" class="search-query span2">
			  		<input type="submit" name="" class="kirim">

				</form>

				<ul class="nav pull-right">
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>
						<div class="dropdown-menu">

							<form class="form-horizontal loginFrm" action="<?php echo base_url('index.php/login/loginmer'); ?>" method="POST">

				  				<div class="control-group">
									<input type="text" class="span2" name="email" id="inputEmail" placeholder="Email">
				  				</div>
				  				<div class="control-group">
									<input type="password" class="span2" name="password" id="inputPassword" placeholder="Password">
				  				</div>
				  				<div class="control-group">
									<label class="checkbox">
										<input type="checkbox"> Remember me
									</label>
									<button type="submit" class="shopBtn btn-block">Sign in</button>
				  				</div>

							</form>

						</div>
					</li>
				</ul>

		  	</div>

		</div>

	</div>

</div>

<?php echo $content; ?>

<footer class="footer">

	<div class="row-fluid">

		<div class="span2">

			<h5>Your Account</h5>

			<a href="#">YOUR ACCOUNT</a><br>
			<a href="#">PERSONAL INFORMATION</a><br>
			<a href="#">ADDRESSES</a><br>
			<a href="#">DISCOUNT</a><br>
			<a href="#">ORDER HISTORY</a><br>

 		</div>

		<div class="span2">

			<h5>Iinformation</h5>

			<a href="contact.html">CONTACT</a><br>
			<a href="#">SITEMAP</a><br>
			<a href="#">LEGAL NOTICE</a><br>
			<a href="#">TERMS AND CONDITIONS</a><br>
			<a href="#">ABOUT US</a><br>

 		</div>

		<div class="span2">

			<h5>Our Offer</h5>

			<a href="#">NEW PRODUCTS</a> <br>
			<a href="#">TOP SELLERS</a><br>
			<a href="#">SPECIALS</a><br>
			<a href="#">MANUFACTURERS</a><br>
			<a href="#">SUPPLIERS</a> <br/>

 		</div>

 		<div class="span6">

			<h5>The standard chunk of Lorem</h5>

			The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
 			those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et 
 			Malorum" by Cicero are also reproduced in their exact original form, 
			accompanied by English versions from the 1914 translation by H. Rackham.
 		</div>

 	</div>

</footer>

</div><!-- /container -->

<div class="copyright">

	<div class="container">

		<p class="pull-right">
			<a href="#"><img src="<?php echo base_url(); ?>assets/fronted/assets/img/maestro.png" alt="payment"></a>
			<a href="#"><img src="<?php echo base_url(); ?>assets/fronted/assets/img/mc.png" alt="payment"></a>
			<a href="#"><img src="<?php echo base_url(); ?>assets/fronted/assets/img/pp.png" alt="payment"></a>
			<a href="#"><img src="<?php echo base_url(); ?>assets/fronted/assets/img/visa.png" alt="payment"></a>
			<a href="#"><img src="<?php echo base_url(); ?>assets/fronted/assets/img/disc.png" alt="payment"></a>
		</p>

		<span>Copyright &copy; 2013<br> bootstrap ecommerce shopping template</span>

	</div>

</div>

<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/fronted/assets/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/fronted/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/fronted/assets/js/jquery.easing-1.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/fronted/assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/fronted/assets/js/shop.js"></script>
    <script type="text/javascript">
            function search()
            {
                var input_data = $('#search').val();

                if (input_data.length === 0)
                {
                    $('.thumbnails').hide();
                }
                else
                {

                    var post_data = {
                        'search': input_data,
                        '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                    };

                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>toko/search/",
                        data: post_data,
                        success: function (data) {
                            // return success
                            if (data.length > 0) {
                                $('.thumbnails').show();
                                $('.span4').addClass('auto_list');
                                $('.span4').html(data);
                            }
                        }
                    });

                }
            }
    </script>
</body>
</html>