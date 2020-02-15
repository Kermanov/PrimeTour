<?php
global $post;
setup_postdata($post);
?>
<section class="blog_area single-post-area section_padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 posts-list">
				<div class="single-post">
					<div class="feature-img">
						<img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($post); ?>" alt="">
					</div>
					<div class="blog_details">
						<h2><?php the_title(); ?></h2>
                        <?php if($location = get_post_meta( $post->ID, 'location', true )): ?>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><i class="fas fa-map-marker-alt"></i><?php echo $location; ?></li>
                            </ul>
						<?php endif; ?>
						<?php the_content($post); ?>
					</div>
				</div>
				<div class="navigation-top">
					<div class="navigation-area">
						<?php
						$prev_post = get_previous_post();
						$next_post = get_next_post();
						?>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
								<div class="thumb">
									<a href="#">
										<img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($prev_post) ?>" alt="">
									</a>
								</div>
								<div class="arrow">
									<a href="#">
										<span class="lnr text-white ti-arrow-left"></span>
									</a>
								</div>
								<div class="detials">
									<p>Prev Post</p>
									<a href="<?php echo get_permalink($prev_post) ?>">
										<h4><?php echo $prev_post->post_title ?></h4>
									</a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
								<div class="detials">
									<p>Next Post</p>
									<a href="<?php echo get_permalink($next_post) ?>">
										<h4><?php echo $next_post->post_title ?></h4>
									</a>
								</div>
								<div class="arrow">
									<a href="#">
										<span class="lnr text-white ti-arrow-right"></span>
									</a>
								</div>
								<div class="thumb">
									<a href="#">
										<img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($next_post) ?>" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--<div class="blog-author">
					<div class="media align-items-center">
						<img src="img/blog/author.png" alt="">
						<div class="media-body">
							<a href="#">
								<h4>Harvard milan</h4>
							</a>
							<p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he our dominion twon Second divided from</p>
						</div>
					</div>
				</div>-->
				<!--<div class="comments-area">
					<h4>05 Comments</h4>
					<div class="comment-list">
						<div class="single-comment justify-content-between d-flex">
							<div class="user justify-content-between d-flex">
								<div class="thumb">
									<img src="img/comment/comment_1.png" alt="">
								</div>
								<div class="desc">
									<p class="comment">
										Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
									</p>
									<div class="d-flex justify-content-between">
										<div class="d-flex align-items-center">
											<h5>
												<a href="#">Emilly Blunt</a>
											</h5>
											<p class="date">December 4, 2017 at 3:12 pm </p>
										</div>
										<div class="reply-btn">
											<a href="#" class="btn-reply text-uppercase">reply</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="comment-list">
						<div class="single-comment justify-content-between d-flex">
							<div class="user justify-content-between d-flex">
								<div class="thumb">
									<img src="img/comment/comment_2.png" alt="">
								</div>
								<div class="desc">
									<p class="comment">
										Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
									</p>
									<div class="d-flex justify-content-between">
										<div class="d-flex align-items-center">
											<h5>
												<a href="#">Emilly Blunt</a>
											</h5>
											<p class="date">December 4, 2017 at 3:12 pm </p>
										</div>
										<div class="reply-btn">
											<a href="#" class="btn-reply text-uppercase">reply</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="comment-list">
						<div class="single-comment justify-content-between d-flex">
							<div class="user justify-content-between d-flex">
								<div class="thumb">
									<img src="img/comment/comment_3.png" alt="">
								</div>
								<div class="desc">
									<p class="comment">
										Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
									</p>
									<div class="d-flex justify-content-between">
										<div class="d-flex align-items-center">
											<h5>
												<a href="#">Emilly Blunt</a>
											</h5>
											<p class="date">December 4, 2017 at 3:12 pm </p>
										</div>
										<div class="reply-btn">
											<a href="#" class="btn-reply text-uppercase">reply</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>-->
				<!--<div class="comment-form">
					<h4>Leave a Reply</h4>
					<form class="form-contact comment_form" action="#" id="commentForm">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input class="form-control" name="name" id="name" type="text" placeholder="Name">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input class="form-control" name="email" id="email" type="email" placeholder="Email">
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<input class="form-control" name="website" id="website" type="text" placeholder="Website">
								</div>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="button button-contactForm btn_1">Send Message</button>
						</div>
					</form>
				</div>-->
			</div>
			<!--<div class="col-lg-4">
				<div class="blog_right_sidebar">
					<aside class="single_sidebar_widget search_widget">
						<form action="#">
							<div class="form-group">
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder='Search Keyword' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
									<div class="input-group-append">
										<button class="btn" type="button"><i class="ti-search"></i></button>
									</div>
								</div>
							</div>
							<button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Search</button>
						</form>
					</aside>
					<aside class="single_sidebar_widget post_category_widget">
						<h4 class="widget_title">Category</h4>
						<ul class="list cat-list">
							<li>
								<a href="#" class="d-flex">
									<p>Resaurant food</p>
									<p>(37)</p>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex">
									<p>Travel news</p>
									<p>(10)</p>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex">
									<p>Modern technology</p>
									<p>(03)</p>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex">
									<p>Product</p>
									<p>(11)</p>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex">
									<p>Inspiration</p>
									<p>(21)</p>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex">
									<p>Health Care</p>
									<p>(21)</p>
								</a>
							</li>
						</ul>
					</aside>
					<aside class="single_sidebar_widget popular_post_widget">
						<h3 class="widget_title">Recent Post</h3>
						<div class="media post_item">
							<img src="img/post/post_1.png" alt="post">
							<div class="media-body">
								<a href="single-blog.html">
									<h3>From life was you fish...</h3>
								</a>
								<p>January 12, 2019</p>
							</div>
						</div>
						<div class="media post_item">
							<img src="img/post/post_2.png" alt="post">
							<div class="media-body">
								<a href="single-blog.html">
									<h3>The Amazing Hubble</h3>
								</a>
								<p>02 Hours ago</p>
							</div>
						</div>
						<div class="media post_item">
							<img src="img/post/post_3.png" alt="post">
							<div class="media-body">
								<a href="single-blog.html">
									<h3>Astronomy Or Astrology</h3>
								</a>
								<p>03 Hours ago</p>
							</div>
						</div>
						<div class="media post_item">
							<img src="img/post/post_4.png" alt="post">
							<div class="media-body">
								<a href="single-blog.html">
									<h3>Asteroids telescope</h3>
								</a>
								<p>01 Hours ago</p>
							</div>
						</div>
					</aside>
					<aside class="single_sidebar_widget tag_cloud_widget">
						<h4 class="widget_title">Tag Clouds</h4>
						<ul class="list">
							<li>
								<a href="#">project</a>
							</li>
							<li>
								<a href="#">love</a>
							</li>
							<li>
								<a href="#">technology</a>
							</li>
							<li>
								<a href="#">travel</a>
							</li>
							<li>
								<a href="#">restaurant</a>
							</li>
							<li>
								<a href="#">life style</a>
							</li>
							<li>
								<a href="#">design</a>
							</li>
							<li>
								<a href="#">illustration</a>
							</li>
						</ul>
					</aside>
					<aside class="single_sidebar_widget instagram_feeds">
						<h4 class="widget_title">Instagram Feeds</h4>
						<ul class="instagram_row flex-wrap">
							<li>
								<a href="#">
									<img class="img-fluid" src="img/post/post_5.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img class="img-fluid" src="img/post/post_6.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img class="img-fluid" src="img/post/post_7.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img class="img-fluid" src="img/post/post_8.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img class="img-fluid" src="img/post/post_9.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img class="img-fluid" src="img/post/post_10.png" alt="">
								</a>
							</li>
						</ul>
					</aside>
					<aside class="single_sidebar_widget newsletter_widget">
						<h4 class="widget_title">Newsletter</h4>
						<form action="#">
							<div class="form-group">
								<input type="email" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
							</div>
							<button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Subscribe</button>
						</form>
					</aside>
				</div>
			</div>-->
		</div>
	</div>
</section>