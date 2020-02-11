<!-- ================ contact section start ================= -->
<?php global $redux; ?>
<section class="contact-section">
	<div class="container">
		<div class="d-none d-sm-block mb-5 pb-4">
			<?php get_template_part( 'template-parts/partials/map' ); ?>
		</div>

		<div class="row">
			<div class="col-12">
				<h2 class="contact-title"><?php echo $redux['section-contact-title'] ?></h2>
			</div>
			<div class="col-lg-8">
				<?php get_template_part( 'template-parts/partials/contact-form' ); ?>
			</div>
			<div class="col-lg-4">
				<?php
                $items = array(
                        'home' => array(
                                'title' => $redux['section-contact-address-title'],
                                'text' => $redux['section-contact-address-subtitle'],
                        ),
                        'tablet' => array(
                                'title' => $redux['section-contact-phone-title'],
                                'text' => $redux['section-contact-phone-subtitle'],
                        ),
                        'email' => array(
                                'title' => $redux['section-contact-email-title'],
                                'text' => $redux['section-contact-email-subtitle'],
                        ),
                );
				foreach ($items as $icon => $value) {
					$title = $value['title'];
					$text = $value['text'];
					include get_template_directory() . '/template-parts/partials/contact-info.php';
                }
				?>
			</div>
		</div>
	</div>
</section>
<!-- ================ contact section end ================= -->