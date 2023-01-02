﻿<?php
include "header.php";
?>

<div class="container">
	<div class="clearfix"></div>
	<div class="lines"></div>
	<?php include "slider.php"; ?>
</div>
<div class="f-widget featpro">
	<div class="container">
		<div class="title-widget-bg">
			<div class="title-widget">Öne Çıkan Ürünler</div>
			<div class="carousel-nav">
				<a class="prev"></a>
				<a class="next"></a>
			</div>
		</div>
		<div id="product-carousel" class="owl-carousel owl-theme">

			<?php

			$urunsor = $db->prepare("SELECT * FROM urun WHERE urun_durum=:urun_durum AND urun_onecikar=:urun_onecikar");
			$urunsor->execute(array(
				'urun_onecikar' => 1,
				'urun_durum' => 1
			));

			while ($uruncek = $urunsor->fetch(PDO::FETCH_ASSOC)) { 
				$urun_id = $uruncek['urun_id'];

				$urunfotosor = $db->prepare("SELECT * FROM urunfoto WHERE urun_id=:urun_id ORDER BY urunfoto_sira ASC LIMIT 1");
				$urunfotosor->execute(array(
					'urun_id' => $urun_id,
				));

				$urunfotocek = $urunfotosor->fetch(PDO::FETCH_ASSOC);
				?>

				<div class="item">
					<div class="productwrap">
						<div class="pr-img">
							<div class="hot"></div>
							<a href="urun-<?=seo($uruncek["urun_ad"]).'-'.$uruncek["urun_id"]?>"><img  height="150" src="<?php echo $urunfotocek['urunfoto_resimyol']; ?>" alt="" class="img-responsive"></a>
							<div class="pricetag blue">
								<div class="inner"><span><?php echo $uruncek['urun_fiyat']; ?>TL</span></div>
							</div>
						</div>
						<span class="smalltitle"><a href="urun-<?=seo($uruncek["urun_ad"]).'-'.$uruncek["urun_id"]?>"><?php echo $uruncek['urun_ad']; ?></a></span>
					</div>
				</div>
			<?php }	
			?>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<!--Main content-->
			<div class="title-bg">
				<div class="title">About Shopping</div>
			</div>
			<p class="ct">
				<?php echo substr($hakkimizdacek['hakkimizda_icerik'],0,500); ?>
			</p>
			<a href="hakkimizda.php" class="btn btn-default btn-red btn-sm">Devamını Oku</a>

			<div class="title-bg">
				<div class="title">Lastest Products</div>
			</div>
			<div class="row prdct">
				<!--Products-->
				<div class="col-md-4">
					<div class="productwrap">
						<div class="pr-img">
							<a href="product.htm"><img src="images\sample-2.jpg" alt="" class="img-responsive"></a>
							<div class="pricetag on-sale">
								<div class="inner on-sale"><span class="onsale"><span class="oldprice">$314</span>$199</span></div>
							</div>
						</div>
						<span class="smalltitle"><a href="product.htm">Black Shoes</a></span>
						<span class="smalldesc">Item no.: 1000</span>
					</div>
				</div>
				<div class="col-md-4">
					<div class="productwrap">
						<div class="pr-img">
							<a href="product.htm"><img src="images\sample-1.jpg" alt="" class="img-responsive"></a>
							<div class="pricetag">
								<div class="inner">$199</div>
							</div>
						</div>
						<span class="smalltitle"><a href="product.htm">Nikon Camera</a></span>
						<span class="smalldesc">Item no.: 1000</span>
					</div>
				</div>
				<div class="col-md-4">
					<div class="productwrap">
						<div class="pr-img">
							<a href="product.htm"><img src="images\sample-3.jpg" alt="" class="img-responsive"></a>
							<div class="pricetag">
								<div class="inner">$199</div>
							</div>
						</div>
						<span class="smalltitle"><a href="product.htm">Red T- Shirt</a></span>
						<span class="smalldesc">Item no.: 1000</span>
					</div>
				</div>
				<div class="col-md-4">
					<div class="productwrap">
						<div class="pr-img">
							<a href="product.htm"><img src="images\sample-1.jpg" alt="" class="img-responsive"></a>
							<div class="pricetag">
								<div class="inner">$199</div>
							</div>
						</div>
						<span class="smalltitle"><a href="product.htm">Nikon Camera</a></span>
						<span class="smalldesc">Item no.: 1000</span>
					</div>
				</div>
				<div class="col-md-4">
					<div class="productwrap">
						<div class="pr-img">
							<a href="product.htm"><img src="images\sample-2.jpg" alt="" class="img-responsive"></a>
							<div class="pricetag">
								<div class="inner">$199</div>
							</div>
						</div>
						<span class="smalltitle"><a href="product.htm">Black Shoes</a></span>
						<span class="smalldesc">Item no.: 1000</span>
					</div>
				</div>
				<div class="col-md-4">
					<div class="productwrap">
						<div class="pr-img">
							<a href="product.htm"><img src="images\sample-3.jpg" alt="" class="img-responsive"></a>
							<div class="pricetag">
								<div class="inner">$199</div>
							</div>
						</div>
						<span class="smalltitle"><a href="product.htm">Red T-Shirt</a></span>
						<span class="smalldesc">Item no.: 1000</span>
					</div>
				</div>
			</div>
			<!--Products-->
			<div class="spacer"></div>
		</div>
		<!--Main content-->
		<?php include "sidebar.php"; ?>
	</div>
</div>
</div>

<?php include "footer.php"; ?>