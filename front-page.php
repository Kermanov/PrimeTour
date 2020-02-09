<?php get_header(); ?>
<!-- banner part start-->
<section class="banner_part">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-lg-10">
				<div class="banner_text text-center">
					<div class="banner_text_iner">
						<h1>Saintmartine</h1>
						<p>Let’s start your journey with us, your dream will come true</p>
						<a href="#" class="btn_1">Discover Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- banner part start-->

<!--::industries start::-->
<?php
$services = get_posts( array(
	'post_type' => 'services',
) );
?>
<section class="best_services section_padding">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6">
				<div class="section_tittle text-center">
					<h2>We offered best services</h2>
					<p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<?php foreach($services as $service): ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_ihotel_list">
                        <img src="<?php echo get_the_post_thumbnail_url( $service->ID ); ?>" alt="">
                        <h3> <a href="<?php echo get_permalink( $service->ID ); ?>"><?php echo $service->post_title; ?></a></h3>
                        <p><?php echo $service->post_excerpt; ?></p>
                    </div>
                </div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<!--::industries end::-->
<?php get_footer(); ?>