<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <link href="../css/demo.css" rel="stylesheet" />
    <style>
        

.card-padding{
   padding:10px 30px!important;
}
.inputstyle{
    padding: 5px 20px;
}
        </style>
</head>

<body>
    <div class="wrapper" style="background-color: black;">
    <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            
            <div class="sidebar-wrapper" style="background-color: black;">
                <div class="logo">
                    <a href="javascript:;" class="simple-text">
                        DASHBOARD
                </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            <i class="fa fa-user"></i>
                            <p>ADMIN</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo url('admin/about') ?>">
                            <i class="nc-icon nc-icon nc-paper-2"></i>
                            <p>About</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo url('admin/skills') ?>">
                            <i class="fa fa-certificate"></i>
                            <p>Skills</p>
                        </a>
                    </li>

                    <li>
                        <a class="nav-link active" href="<?php echo url('admin/project') ?>">
                            <i class="fa fa-image"></i>
                            <p>Projects</p>
                        </a>
                    </li>

                    <li >
                        <a class="nav-link active" href="<?php echo url('admin/experience') ?>">
                            <i class="fa fa-list"></i>
                            <p>Experience</p>
                        </a>
                    </li>

                    <li >
                        <a class="nav-link active" href="<?php echo url('admin/services') ?>">
                            <i class="fa fa-plus-square-o"></i>
                            <p>Services</p>
                        </a>
                    </li>
                    <li >
                        <a class="nav-link active" href="<?php echo url('admin/blog') ?>">
                            <i class="fa fa-folder"></i>
                            <p>Blog</p>
                        </a>
                    </li>
                    <li >
                                                <a class="nav-link active" href="<?php echo url('admin/contact') ?>">
                            <i class="fa fa-phone"></i>
                            <p>Contact</p>

                        </a>
                    </li>
                    <li class="nav-item  active-pro">
                                <a class="nav-link" href="<?php echo url('logout') ?>">
                            <p>HARSH CHALUDIA</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo"></a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>

                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
    Logout
</a>    
<form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="section">







                    <div class="row">
                    <div class="col-md-12">
                        <div class="card card-padding">
                            <div class="header">
                                <h4 class="title">EXPERIENCE PANEL</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                        <th>POSITION NAME</th>
                                        <th>POSITION COMPANY</th>
                                        <th>POSITION DESCRIPTION</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        @foreach($experience as $experiences)
                                        <tr>
                                            <form class="aboutbody"method="post">
                                            <td><input class="inputstyle" type="text" name="pos_name"value="{{$experiences->pos_name}}"></td>
                                            <td><input class="inputstyle" type="text" name="pos_company"  value="{{$experiences->pos_company}}"></td>
                                            <td><input class="inputstyle" type="textarea" name="pos_descr" value="{{$experiences->pos_descr}}"></td>

                                        	<td>                                            {{csrf_field()}}
<button type="submit" name="up" value="{{$experiences->experience_id}}">UPDATE</button></td>
    </form></tr>

                                        
                                    
                                            @endforeach
\

                                     </tbody>
                                </table>
                            </div>
                        </div>
                    </div></div>








                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://itsourcecode.com">Portfolio Management Syste </a>. All Rights Reserved.
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    <!--   -->
    <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="..//assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-5.jpg" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                </div>
            </li>

            <li class="header-title pro-title text-center">Want more components?</li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                </div>
            </li>

            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

            <li class="button-container">
				<button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>
        </ul>
    </div>
</div>
 -->
</body>
<!--   Core JS Files   -->
<script src="../js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../js/core/popper.min.js" type="text/javascript"></script>
<script src="../js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../js/plugins/bootstrap-switch.js"></script>
<!--  Chartist Plugin  -->
<script src="../js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../js/demo.js"></script>

</html>
