<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PrimeTour
 */
global $redux;
?>

</div><!-- #content -->

<!-- footer part start-->
<footer id="colophon" class="footer-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-md-5">
                <div class="single-footer-widget">
                    <h4><?php echo $redux['section-footer-menu-title'] ?></h4>
					<?php
					wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'footer-menu',
                        'container'      => false,
                        'depth'          => 1,
                    ) );
					?>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="single-footer-widget">
                    <h4><?php echo $redux['section-footer-form-title'] ?></h4>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank" class="form-inline">
                            <input class="form-control" name="phone" placeholder="<?php echo $redux['section-footer-form-placeholder'] ?>"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $redux["section-footer-form-placeholder"] ?>'"
                                   required="" type="tel">
                            <button class="click-btn btn btn-default text-uppercase">
                                <i class="far fa-paper-plane"></i>
                            </button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="phone-hidden" tabindex="-1" value=""
                                       type="text">
                            </div>
                            <div class="info"></div>
                        </form>
                    </div>
                    <p><?php echo $redux['section-footer-form-subtitle'] ?></p>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="single-footer-widget footer_icon">
                    <h4><?php echo $redux['section-footer-contact-title'] ?></h4>
                    <p><?php echo $redux['section-footer-contact-subtitle'] ?></p>
                    <span><?php echo $redux['section-footer-contact-email'] ?></span>
                    <div class="social-icons">
                        <?php
                        $social_links = array(
                                'facebook' => array(
                                        'link' => $redux['social-link-facebook'],
                                        'display' => $redux['social-link-facebook-display'],
                                ),
                                'twitter-alt' => array(
                                        'link' => $redux['social-link-twitter'],
                                        'display' => $redux['social-link-twitter-display'],
                                ),
                                'instagram' => array(
                                        'link' => $redux['social-link-instagram'],
                                        'display' => $redux['social-link-instagram-display'],
                                ),
                        );
                        ?>
	                    <?php foreach ($social_links as $key => $value): ?>
		                    <?php if (isset($value['display'])): ?>
                                <a href="<?php echo $value['link']; ?>">
                                    <i class="ti-<?php echo $key ?>"></i>
                                </a>
		                    <?php endif; ?>
                        <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="copyright_part_text text-center">
                    <p class="footer-text m-0">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by
                        <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer part end-->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
