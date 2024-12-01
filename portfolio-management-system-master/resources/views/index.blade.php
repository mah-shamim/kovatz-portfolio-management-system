
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- STYLES -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/plugins.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!-- /STYLES -->
<style>
	button{
        background: #378C3F; background-size: 200% auto; padding: 0px 35px; color: #FFFFFF;
        border: none;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  cursor:pointer;
  font-size: 25px;
    }
	</style>
</head>

<body>
<!-- WRAPPER ALL -->
<div class="wdm_hx_wrapper_all">
	<div id="wdm_hx_popup_blog">
		<div class="container">
			<div class="inner_popup scrollable"></div>
		</div>
		<span class="close"><a href="#"></a></span>
	</div>
	


		 
           	<!-- Top Navigation Menu -->
			   <div class="topnav">
					<a href="<?php echo url('/') ?>" class="active">PORTFOLIO</a>
											<div id="myLinks">
											<a href="<?php echo url('about') ?>">About</a></li>
											<a href="<?php echo url('skills') ?>">Skills</a>
											<a href="<?php echo url('projects') ?>">Project</a>
											<a href="<?php echo url('experience') ?>">Experience</a>
											<a href="<?php echo url('blog') ?>">Blog</a>
											<a href="<?php echo url('services') ?>">Services</a>
											<a href="<?php echo url('contact') ?>">Contact</a>
											<a href="{{ route('login') }}">Login</a>
					</div>
					<a href="javascript:void(0);" class="icon" onclick="myFunction()">
					<i class="fa fa-bars"></i>
					</a>
				  </div>
			
	 

	
    <!-- CONTENT -->
	<div class="wdm_hx_content">
		
		<!-- LEFTPART -->
		<div class="wdm_hx_leftpart_wrap">
			<div class="leftpart_inner">
				
				<div class="menu_list_wrap">
						<div class="logo_wrap">
								<ul class="anchor_nav" style="float:left">
										<li><a href="<?php echo url('/') ?>" >PORTFOLIO</a></li>
									</ul>

									<ul class="anchor_nav_second" style="float:right" >
											<li><a href="<?php echo url('about') ?>">About</a></li>
											<li ><a href="<?php echo url('skills') ?>">Skills</a></li>
											<li ><a href="<?php echo url('projects') ?>">Project</a></li>
											<li ><a href="<?php echo url('experience') ?>">Experience</a></li>
											<li ><a href="<?php echo url('blog') ?>">Blog</a></li>
											<li ><a href="<?php echo url('services') ?>">Services</a></li>
											<li ><a href="<?php echo url('contact') ?>">Contact</a></li>
											<li><a href="{{ route('login') }}">Login</a></li>
										</ul>
										
							</div>
					
				</div>
				
				
			</div>
		</div>
		<!-- /LEFTPART -->
		
		<!-- RIGHTPART -->
		<div class="wdm_hx_rightpart">
			<div class="rightpart_inner">
				<div class="wdm_hx_section" >
					<div class="wdm_hx_hero_header_wrap">
						<div class="wdm_hx_universal_box_wrap">
							<div class="bg_wrap">
								<div class="overlay_image hero jarallax" data-speed="0.1"></div>
								<div class="overlay_color hero"></div>
							</div>
							<div class="content hero">
								<div class="inner_content">
										
									<div class="image_wrap"><br>
										<br><br>
										<br><br>
										
										<img src="img/default-avatar.png" alt="" />
									</div>
	
									<div class="name_holder">
									
									<h3>John M.<span> Doe</span></h3>									</div>
									<div class="text_typing">
										<p>Front-end Developer, UI/UX, Design Enthusisast</p><br>
										<br>
										<button>DOWNLOAD CV
											</button><br><br><button>HIRE ME
												</button>
									</div>
									
								</div>
								
							</div>

							
							<div class="wdm_hx_arrow_wrap bounce anchor">
								<a href="#about"><i class="xcon-angle-double-down"></i></a>
							</div>
						</div>
					</div>
				</div>
				
			
				
		
				
			
			
			
				
				

			<!-- CONTACT & FOOTER -->
			<div class="wdm_hx_section" >
					<div class="wdm_hx_footer_contact_wrapper_all">
						
						<div class="wdm_hx_footer_wrap">
                            <div class="footer-social-icons container">
                                    <ul class="social-icons">
                                        <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
                                        <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
                                        <li><a href="" class="social-icon"> <i class="fa fa-rss"></i></a></li>
                                        <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
                                        <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="" class="social-icon"> <i class="fa fa-github"></i></a></li>
                                    </ul>
                                </div>
                                <div class="container">
                                    
                                        <p style="margin:0 auto;">&copy;<b> Copyright 2019. All Rights are Reserved.</b></p>
                                    </div>
						</div>
					</div>
				</div>
				<!-- /CONTACT & FOOTER -->
				
			</div>
		</div>
		<!-- /RIGHTPART -->
		
		<a class="wdm_hx_totop" href="#"></a> 
		
	</div>
</div>
<!-- / WRAPPER ALL -->
	
<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<script src="js/init.js"></script>

		
<!-- /SCRIPTS -->

</body>

</html>