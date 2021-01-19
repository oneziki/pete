<head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <!-- SEO Metatag -->
        <meta name="description" content="Free Web tutorials" />
        <meta name="keywords" content="HTML,CSS,XML,JavaScript" />

        <!-- Responsive Metatag -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php wp_head(); ?>
    </head>
<header class="header">
		<div class="container">
			<div class="header-wrap">
				<div class="header-logo">
					<a href="#">
						<img src="./wp-content/themes/mytheme/assets/images/logo.png" alt="University Animal Clinic" />
					</a>
				</div>
				<div class="header-right">
					<div class="header-content">
						<div class="call-us"><span>call us today</span> <a href="tel:9413557707">941-355-7707</a></div>
						<div class="online-request">
							<a href="#" class="btn btn-secondary">Online Pharmacy</a>
							<a href="#" class="btn btn-primary">Request an Appointment</a>
						</div>
					</div>
					<div class="header-bottom">
						<nav class="navbar navbar-expand-lg navbar-light">
							<button class="navbar-toggler" type="button" data-toggle="collapse"
								data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
								aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon">
									<span></span>
									<span></span>
									<span></span>
								</span>
								<span class="menu-text">Menu</span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav">
									<li class="nav-item active">
										<a class="nav-link dropdown-toggle" href="javascript:void(0);"
											data-toggle="dropdown">Services</a>
										<ul class="submenu dropdown-menu">
											<li class="nav-item"><a class="nav-link" href="#">Telemedicine/Virtual
													Veterinary Services</a>
												<ul class="submenu dropdown-menu">
													<li class="nav-item"><a class="nav-link" href="#"> Dropdown item 1
														</a></li>
													<li class="nav-item"><a class="nav-link" href="#"> Dropdown item
															2</a></li>
													<li class="nav-item"><a class="nav-link" href="#"> Dropdown item
															3</a></li>
												</ul>
											</li>
											<li class="nav-item"><a class="nav-link" href="#">Wellness Plans</a></li>
											<li class="nav-item"><a class="nav-link" href="#">Vaccinations</a></li>
											<li class="nav-item"><a class="nav-link" href="#">Exotic Pet Care</a></li>
											<li class="nav-item"><a class="nav-link" href="#">Laser Therapy</a></li>
											<li class="nav-item"><a class="nav-link" href="#">Dental Cleaning</a></li>
											<li class="nav-item"><a class="nav-link" href="#">Elderly Pet Care
													Services</a></li>
											<li class="nav-item"><a class="nav-link" href="#">Pet Microchipping</a></li>
											<li class="nav-item"><a class="nav-link" href="#">Dog Grooming Services</a>
											</li>
											<li class="nav-item"><a class="nav-link" href="#">How to Treat
													Heartworms</a></li>
											<li class="nav-item"><a class="nav-link" href="#">Flea & Tick Prevention</a>
											</li>
											<li class="nav-item"><a class="nav-link" href="#">Surgery and Specialty
													Services for Pets</a></li>
											<li class="nav-item"><a class="nav-link" href="#">Treating Itchy Skin & Pet
													Allergies</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link dropdown-toggle" href="javascript:void(0);"
											data-toggle="dropdown">Types of
											Animals</a>
										<ul class="submenu dropdown-menu">
											<li class="nav-item"><a class="nav-link" href="#"> Dropdown item 1 </a></li>
											<li class="nav-item"><a class="nav-link" href="#"> Dropdown item 2</a></li>
											<li class="nav-item"><a class="nav-link" href="#"> Dropdown item 3</a></li>
											<li class="nav-item"><a class="nav-link" href="#"> Dropdown item 4</a>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link dropdown-toggle" href="javascript:void(0);"
											data-toggle="dropdown">Resources</a>
										<ul class="submenu dropdown-menu">
											<li class="nav-item"><a class="nav-link" href="#"> Dropdown item 1 </a></li>
											<li class="nav-item"><a class="nav-link" href="#"> Dropdown item 2</a></li>
											<li class="nav-item"><a class="nav-link" href="#"> Dropdown item 3</a></li>
											<li class="nav-item"><a class="nav-link" href="#"> Dropdown item 4</a>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Testimonials</a>
									</li>
									<li class="nav-item">
										<a class="nav-link dropdown-toggle" href="javascript:void(0);"
											data-toggle="dropdown">Service
											Area</a>
										<ul class="submenu dropdown-menu">
											<li class="nav-item"><a class="nav-link" href="#"> Dropdown item 1 </a></li>
											<li class="nav-item"><a class="nav-link" href="#"> Dropdown item 2</a></li>
											<li class="nav-item"><a class="nav-link" href="#"> Dropdown item 3</a></li>
											<li class="nav-item"><a class="nav-link" href="#"> Dropdown item 4</a>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link dropdown-toggle" href="javascript:void(0);"
											data-toggle="dropdown">About Us</a>
										<ul class="submenu dropdown-menu">
											<li class="nav-item"><a class="nav-link" href="#"> Dropdown item 1 </a></li>
											<li class="nav-item"><a class="nav-link" href="#"> Dropdown item 2</a></li>
											<li class="nav-item"><a class="nav-link" href="#"> Dropdown item 3</a></li>
											<li class="nav-item"><a class="nav-link" href="#"> Dropdown item 4</a>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Contact Us</a>
									</li>
								</ul>
							</div>
						</nav>
						<div class="header-search">
							<a href="javascript:void(0);" class="icon-search"></a>
						</div>
					</div>
				</div>
			</div>
		</div>

        <!--Mobile Header-->
		<div class="searchbar">
			<div class="container">
				<div class="searchbar-inner">
					<input type="text" class="form-control" placeholder="Search here..." />
					<button type="submit" class="btn search-btn icon-search"></button>
				</div>
			</div>
		</div>

		<div class="mobile-bottom-header">
			<div class="call-us">
				<span>call us </span>
				<a href="tel:9413557707">941-355-7707</a>
			</div>
		</div>
	</header>
	<!-- Header End -->