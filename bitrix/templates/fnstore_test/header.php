<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/".SITE_TEMPLATE_ID."/header.php");
CJSCore::Init(array("fx"));
$curPage = $APPLICATION->GetCurPage(true);
$theme = COption::GetOptionString("main", "wizard_eshop_bootstrap_theme_id", "blue", SITE_ID);
//echo "<pre>".print_r($APPLICATION, true)."</pre>";



//echo $APPLICATION->ShowHead();
?>
<!DOCTYPE html>
<html  xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
	<?=$APPLICATION->ShowHead();?>
<!--	<title>--><?//$APPLICATION->ShowTitle()?><!--</title>-->

    <?=$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css");
    $APPLICATION->SetAdditionalCSS(ITE_TEMPLATE_PATH."/bitrix/wizards/bitrix/eshop/css/panel.css");
    $APPLICATION->SetAdditionalCSS(ITE_TEMPLATE_PATH."/bitrix/js/main/core/css/core.css");
    ?>

    <meta charset="utf-8"/>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link href="favicon.ico?ver=2" rel="shortcut icon" type="image/x-icon" />

    <link rel="apple-touch-icon" href="img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <link rel="stylesheet" type="text/css" href="css/style.css"/> <!--main css-->

    <script src="js/nprogress/nprogress.js"></script>

</head>
<body>
	<script>
		NProgress.start();
	</script>

    <div id="panel"><?$APPLICATION->ShowPanel();?></div>
	<div id="wrapper">

		<header class="cntr_block">
<!--            --><?//$APPLICATIO->ShowPanel()?>
			<div id="header" class="cntr_inner">

				<div class="h_left cntr_inner">
					<p>
						<a href="javascript:void(0);" class="search_but"><i><img src="img/ico/lupa.svg" alt=""/></i></a>
					</p>
					<p>
						<a href="javascript:void(0);" class="burger"><i><img src="img/ico/burger.svg" alt=""/></i></a>
					</p>
				</div><!--h_left-->

				<a href="index.html" class="h_logo"><img src="img/logo.png" alt=""></a>

				<div class="h_right cntr_inner">
					<p>
						<i><a href="javascript:void(0);" class="user_kabinet"><i><img src="img/ico/user.svg" alt=""/></i></a></i>
					</p>
					<p>
						<a href="javascript:void(0);" class="izbr_tovary"><i><img src="img/ico/serdce.png" alt=""/></i></a>
					</p>
					<p>
						<a href="javascript:void(0);" class="busket_ico"><i><img src="img/ico/basket.svg" alt=""/></i></a>
						<span class="count_int_cart">9</span>
					</p>
				</div><!--h_right-->

			</div> <!--#header-->

			<div id="search_top">
				<form class="cntr_inner">
					<p><a href="javascript:void(0);" class="cls_search"><i><img src="img/ico/cls.svg" alt=""></i></a></p>
					<p class="txt_input"><input type="text" value="" placeholder="Поиск по сайту..." required/></p>
					<p><input type="submit"  value=""/></p>
				</form>
			</div><!--search_top-->

			<div id="mega_menu">
				<nav>

					<aside>
						<h3>Clothing</h3>

						<ul>
							<li><a href="">Tops & T-Shirts</a></li>
							<li><a href="">Polos</a></li>
							<li><a href="">Hoodies & Pullovers</a></li>
							<li><a href="">Jackets & Vests</a></li>
							<li><a href="">Pants & Tights</a></li>
							<li><a href="">Shorts</a></li>
							<li><a href="">Surf & Swimwear</a></li>
							<li><a href="">Sunglasses</a></li>
						</ul>
					</aside>

					<aside>
						<h3>SHOES</h3>

						<ul>
							<li><a href="">Lifestyle</a></li>
							<li><a href="">Running</a></li>
							<li><a href="">Training & Gym</a></li>
							<li><a href="">Basketball</a></li>
							<li><a href="">Football</a></li>
							<li><a href="">Baseball</a></li>
							<li><a href="">Skateboarding</a></li>
							<li><a href="">Tennis</a></li>
							<li><a href="">Sandals & Flip Flops</a></li>
						</ul>
					</aside>

					<aside>
						<h3>Equipment</h3>

						<ul>
							<li><a href="">Tourism</a></li>
							<li><a href="">Martial arts</a></li>
							<li><a href="">Bicycles</a></li>
							<li><a href="">Water sports</a></li>
							<li><a href="">Hockey</a></li>
							<li><a href="">Football</a></li>
							<li><a href="">Athletics</a></li>
						</ul>
					</aside>

					<aside>
						<h3>Other</h3>

						<ul>
							<li><a href="">Lorem Ipsum</a></li>
							<li><a href="">Dolor sit Amet</a></li>
							<li><a href="">Aliquam Non Justo</a></li>
							<li><a href="">Etiam Consequat</a></li>
						</ul>
					</aside>

					<aside>
						<address>
							<div class="clear">
								<img src="img/ico/map.svg" alt=""/>
								<div>
									<h5>Адрес:</h5>
									<p>25, Lomonosova St.<br /> Moscow, Russia, 665087</p>
								</div>
							</div>
							<div class="clear">
								<img src="img/ico/phone.svg" alt=""/>
								<div>
									<h5>Телефон:</h5>
									<p>+7 234 949-58-83 <br /> +7 239 585-58-61</p>
								</div>
							</div>
							<div class="clear">
								<img src="img/ico/time.svg" alt=""/>
								<div>
									<h5>Работаем:</h5>
									<p>Пн - Пт: с 8:00 - 18:00</p>
								</div>
							</div>
						</address>
					</aside>

					<aside>
						<h3>Sports</h3>

						<ul>
							<li><a href="">Lorem Ipsum</a></li>
							<li><a href="">Dolor sit Amet</a></li>
							<li><a href="">Aliquam Non Justo</a></li>
							<li><a href="">Etiam Consequat</a></li>
						</ul>
					</aside>

				</nav>
			</div><!--mega_menu-->

			<div id="cart_tovar">
				<h6>В корзине: <span>2</span></h6>
				<section>
					<aside>
						<figure><a href=""><img src="img/tovar.jpg" alt=""/></a></figure>
						<div>
							<p class="t_name"><a href="">Nike Air Footscape</a></p>
							<p class="t_price">1 x 235.00 руб.</p>
							<a class="del_in_cart" title="Удалить" href=""><img src="img/ico/del.svg" alt=""/></a>
						</div>
					</aside>
					<aside>
						<figure><a href=""><img src="img/tovar.jpg" alt=""/></a></figure>
						<div>
							<p class="t_name"><a href="">Nike Air Footscape</a></p>
							<p class="t_price">1 x 235.00 руб.</p>
							<a class="del_in_cart" title="Удалить" href=""><img src="img/ico/del.svg" alt=""/></a>
						</div>
					</aside>
				</section>
				<a href="cart.html" class="go_in_cart cntr_inner"><span>Перейти в корзину</span></a>
			</div><!--cart_tovar-->

		</header> <!-- header -->

