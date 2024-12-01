
<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

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
    h1, h2, h3, h4, h5, h6{
        color:#fff;
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
                    	  <a href="<?php echo url('about') ?>">About</a>
					   <a href="<?php echo url('skills') ?>">Skills</a>
						<a href="<?php echo url('projects') ?>">Projects</a>
					  <a href="<?php echo url('experience') ?>">Experience</a>
						<a href="<?php echo url('blog') ?>">Blog</a>
						<a href="<?php echo url('services') ?>">Services</a>
						<a href="<?php echo url('contact') ?>">Contact</a>
					   <a href="											{{ route('login') }}
">Login</a>
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
											<li><a href="<?php echo url('projects') ?>">Projects</a></li>
											<li ><a href="<?php echo url('experience') ?>">Experience</a></li>
											<li><a href="<?php echo url('blog') ?>">Blog</a></li>
											<li><a href="<?php echo url('services') ?>">Services</a></li>
											<li><a href="<?php echo url('contact') ?>">Contact</a></li>
											<li><a href="											{{ route('login') }}
">Login</a></li>
										</ul>
							</div>
					
				</div>
				
				
			</div>
		</div>
		<!-- /LEFTPART -->
		
		<!-- RIGHTPART -->
		<div class="wdm_hx_rightpart">
			<div class="rightpart_inner">
				
				<br><br><br>
                <div class="wdm_hx_section" id="services">
                        <div class="wdm_hx_services_wrap">
                            <div class="container">
                                <div class="wdm_hx_title_holder">
                                    <h3 style="color:#000">WORK EXPERIENCE</h3>
                                    <span>Positions worked so far..</span>
                                </div>
                                <div class="list_wrap">
								
								    <ul>
                                    @foreach($experience as $experiences)
                                        <li>
                                            <div class="inner" style="padding:0px;">
                                                <div class="title_service_new">
                                                    <h3>{{$experiences->pos_name}}</h3><hr>
                                                    <h4>{{$experiences->pos_company}}</h4>
                                                </div>
                                                <div class="text_new">
                                                    <p class="para-cont">
                                                    {{$experiences->pos_descr}}
													</p>
                                                </div>
                                            </div>
                                        </li>  
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CONTACT & FOOTER -->
                    <div class="wdm_hx_section" id="contact">
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
<!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->	
<script src="js/plugins.js"></script>
<script src="js/init.js"></script>
<!-- /SCRIPTS -->

</body>

<!-- Mirrored from frenify.com/envato/marketify/html/arlo/1/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Aug 2019 13:05:03 GMT -->
</html>