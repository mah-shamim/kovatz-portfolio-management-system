

	
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
                        <div class="wdm_hx_services_wrap" style="margin-bottom:0px;">
                            <div class="container" style="width:80%">
                                <div class="wdm_hx_title_holder">
                                    <h3>CONTACT</h3>
                                    <span>Hit me up with queries.</span>
                                </div>
                                

                                
                                
                            </div>
                        </div>
                        <div class="wdm_hx_section" id="services">

                        <div class="wdm_hx_contact_wrap_all">
                                <div class="container mob-contact" style=" padding:25px;height:550px;width:80%;margin-bottom:60px">
                                    <div class="leftbox" >
                                                                    <div class="wdm_hx_mini_title_holder contact">
                                                                        <h4>Get in Touch</h4>
                                                                    </div>
                                                                                                                                                                <div class="short_info_wrap">
                                                                        <ul>@foreach($contact as $contacts)
                                                                            <li><p><label>Address:</label><span>{{$contacts->contact_address}}</span></p></li>
                                                                            <li><p><label>Email:</label><span><a href="mailto:harshchaludia@gmail.com">{{$contacts->contact_email}}</a></span></p></li>
                                                                            <li><p><label>Phone:</label><span>{{$contacts->contact_no}}</span></p></li>
                                                                            <li><p><label>Website:</label><span><a href="mailto:example@gmail.com">{{$contacts->contact_website}}</a></span></p></li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="rightbox">
                                                                    <div class="wdm_hx_contact_wrap">
                                                                        <div class="main_input_wrap">
                                                                            <form action="" method="post" class="contact_form" id="contact_form">
                                                                                <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                                                                                <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                                                                                <div class="wrap">
                                                                                    <input id="name" type="text" placeholder="Your Name">
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <input id="email" type="text" placeholder="Your Email">
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <textarea id="message" placeholder="Your Message"></textarea>
                                                                                </div>
                                                                                <div class="wdm_hx_button">
                                                                                    <a id="send_message" href="#"><span>Send Message</span></a>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                    

                                                                </div>
                                </div>
                            </div>
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