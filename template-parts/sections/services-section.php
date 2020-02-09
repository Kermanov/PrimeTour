<!--::industries start::-->
<?php
$services = get_posts( array(
    'post_type' => 'services',
    'order' => 'ASC',
    'numberposts' => -1
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
                        <p><?php echo get_the_excerpt( $service->ID ); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!--::industries end::-->
