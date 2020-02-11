<!-- about us css start-->
<?php global $redux; ?>
<section class="about_us section_padding">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="about_img">
					<img src="<?php echo $redux['section-about-image']['url'] ?>" alt="#">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="about_text">
					<h5><?php echo $redux['section-about-subtitle'] ?></h5>
					<h2><?php echo $redux['section-about-title'] ?></h2>
					<?php echo wpautop($redux['section-about-text']) ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- about us css end-->