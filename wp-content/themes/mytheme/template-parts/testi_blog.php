<div class="testi-blog">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="testimonials">
						<div class="comman-icon">
							<span class="icon-quotes"></span>
						</div><?php the_field('what_our_clients_have_to_say');?>
						<a class="btn btn-primary" href="javascript:void(0);"><?php the_field('view_all_testimonials');?></a>
						<div class="testi-owl owl-carousel">
							<div class="item"><?php the_field('testimonial_text_1');?>
							</div>
							<div class="item"><?php the_field('testimonial_text_2');?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="home-blog">
						<div class="blog-title">
							<h4 class="optinal-h4"><?php the_field('our_blog');?></h4>
							<a class="btn btn-secondary" href="javascript:void(0);"><?php the_field('view_all_posts_text');?></a>
						</div>
						<div class="blog-main">
							<div class="blog-image">
								<img src="./wp-content/themes/mytheme/webfx/assets/images/blog-image.jpg" alt="Blog">
							</div>
							<div class="blog-content">
								<div class="blog-inner">
								<?php the_field('our_blog_text');?>
									<div class="readmore">
										<a class="btn btn-primary" href="javascript:void(0);"><?php the_field('button_text');?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>