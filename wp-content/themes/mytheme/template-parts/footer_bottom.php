<div class="footer-bottom">
			<div class="container">
				<div class="bottom-wrap">
					<div class="footer-left">
						<ul class="footer-menu">
							<li>
								<a href="<?php the_field('site_credits_link'); ?>">
								<?php the_field('site_credits'); ?>
								</a>
							</li>
							<li>
								<a href="<?php the_field('site_map_link'); ?>">
								<?php the_field('site_map'); ?></a>
							</li>
							<li>
								<a href="<?php the_field('privacy_policy_link'); ?>">
								<?php the_field('privacy_policy'); ?>
								</a>
							</li>
						</ul>
						<div class="copyright">
						<?php the_field('copyright_text'); ?>
							
						</div>
					</div>
					<div class="back-top">
						<a class="learn-more yellow-link" href="<?php the_field('back_to_top_link'); ?>"><?php the_field('back_to_top'); ?><span class="icon-arrow-up"></span></a>
					</div>
				</div>
			</div>
		</div>