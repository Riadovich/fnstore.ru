

<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<footer>
			<div id="footer" class="cntr_block">

				<aside>
					<a class="f_logo" href="index.html"><img src="img/logo.png" alt=""/></a>

					<p>Aliquam erat volutpat. Maecenas vehicula sapien quis erat interdum<br /> aliquam non id ante.</p>

					<p class="f_menu">
						<a href="">Guides</a>
						<a href="">Terms of Use</a>
						<a href="">Privacy Policy</a>
					</p>

					<div class="copy">&copy; 2017</div>
				</aside>

				<aside class="f_nav">
					<nav>
						<h4>Помощь</h4>
						<ul>
							<li><a href="">Order Status</a></li>
							<li><a href="">Shipping and Delivery</a></li>
							<li><a href="">Payment Options</a></li>
							<li><a href="">Contact Us</a></li>
						</ul>
					</nav>

					<nav>
						<h4>О нас</h4>
						<ul>
							<li><a href="">Careers</a></li>
							<li><a href="">Sustainability</a></li>
							<li><a href="">Service</a></li>
							<li><a href="">CA Supply Chains Act</a></li>
						</ul>
					</nav>
				</aside>

				<aside class="text-right">
					<p class="social_link">
						<a href=""><i class="ico_fb"></i></a>
						<a href=""><i class="ico_vk"></i></a>
						<a href=""><i class="ico_insta"></i></a>
						<a href=""><i class="ico_twit"></i></a>
					</p><!--social_link-->

					<br />
					<br />
					<br />

					<p class="payment">
						Payment Methods: <br /><br />
						<img src="img/ico/paypal.svg" alt=""/> &nbsp;&nbsp;&nbsp;
						<img src="img/ico/visa.svg" alt=""/>
					</p>
				</aside>

			</div> <!--#footer-->
		</footer> <!-- footer -->

	</div> <!-- #wrapper -->

	<script>
		NProgress.done();
	</script>

	<script src="js/jquery-1.12.0.min.js"></script> <!-- jQuery -->
	<script src="js/imagefill/jquery-imagefill.js"></script> <!-- imagefill js -->
	<script src="js/imagesloaded/imagesloaded.pkgd.min.js"></script> <!-- imagesloaded js -->

	<script src="js/bxslider/jquery.bxslider.js"></script> <!-- BX SLIDER -->
	<script src="js/timer/jquery.cookie.js"></script> <!-- Timer cookies -->
	<script src="js/js.js"></script> <!-- js scripts -->


	<script>

        $(document).ready(function(){
            $('.slider6').bxSlider({
                slideWidth: 500,
                minSlides: 1,
                maxSlides: 3,
                slideMargin: 0
            });
        });

		/*
		$('[data-fancybox]').fancybox({
			image : {
				protect: true
			}
		});
		*/

		//$("#last_news").imagesLoaded(function(){$(".slide figure").imagefill();});
	</script>

	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css"/> <!-- bootstrap css -->

</body>
</html>