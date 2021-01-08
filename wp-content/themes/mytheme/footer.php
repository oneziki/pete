<!-- Footer Start -->

<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-logo">
						<a href="#">
							<img src="./wp-content/themes/mytheme/webfx/assets/images/logo.png" alt="University Animal Clinic" />
						</a>
					</div>
					<div class="footer-social">
						<ul>
							<li>
								<a href="<?php the_field('facebook_link'); ?>" class="icon-facebook"></a>
							</li>
							<li>
								<a href="<?php the_field('instagram_link'); ?>" class="icon-instagram"></a>
							</li>
							<li>
								<a href="<?php the_field('youtube_link'); ?>" class="icon-youtube"></a>
							</li>
							<li>
								<a href="<?php the_field('tiktok_link'); ?>" class="icon-tiktoc"></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-contact">
						<h4><?php the_field('contact_information'); ?></h4>
						<p>
							<?php the_field('contact_information_address'); ?>
							
							<a class="learn-more" href="#<?php the_field('contact_information_directions_link'); ?>"><?php the_field('contact_information_directions'); ?><span class="icon-arrow-right"></span></a>
						</p>
						<p>
						<?php the_field('contact_information_phone'); ?><a class="color-body" href="tel:9413557707"><?php the_field('contact_information_number_number'); ?></a>
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-contact">
						<h4><?php the_field('hours_of_operation'); ?></h4>
						<p>
						<?php the_field('dates_&_time_of_operation'); ?>
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-contact">
						<h4><?php the_field('awards_&_association'); ?></h4>
						<ul class="award-logos">
							<li>
								<img src="<?php the_field('award_logos_image_1'); ?>" alt="Award" />
							</li>
							<li>
								<img src="<?php the_field('award_logos_image_2'); ?>" alt="Award" />
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Footer Bottom-->

		<?php
		include 'template-parts/footer_bottom.php';
		?>

		<!-- Footer Bottom End-->
	</footer>
	<!-- Footer End -->
	<!-- Script -->
	<?php
	wp_footer();
	?>
</body>

</html>