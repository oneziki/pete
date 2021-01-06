<div class="welcome-block">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-4 mobile-order2">
					<div class="welcome-box team-box">
						<div class="team-image">
							<img src="./wp-content/themes/mytheme/webfx/assets/images/welcome-img.jpg" alt="Welcome" />
						</div>
						<div class="team-title">
						<?php the_field('welcome_start'); ?>
						</div>
					</div>
				</div>
				<div class="col-lg-7 col-md-8">
					<div class="welcome-content">
						<h4 class="optinal-h4">
						<?php the_field('welcome_to'); ?>
						</h4>
						<h1><?php the_field('university_animal_clinic');?></h1>
						<p><?php the_field('university_animal_clinic_text');?></p>
						<a href="#" class="btn btn-primary"><?php the_field('meet_our_team');?></a>
					</div>
				</div>
			</div>
		</div>
	</div>