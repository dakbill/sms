<body>
	<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
	<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
                <input class="btn btn-inverse btn-large " type="button" value="<?php date_default_timezone_set('Europe/London');echo "Today is : ". date('D-M-Y');?>">

                <input class="btn btn-large btn-success" type="button" value="Teacher : Class  <?php echo $this->session->userdata('class') ?>">
                <!-- theme selector starts
				<div class="btn-group pull-right theme-container" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" id="themes">
						<li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
						<li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
						<li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
						<li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
						<li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
						<li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
						<li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
						<li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
						<li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
					</ul>
				</div>
				theme selector ends -->
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone">Welcome Back : <?php echo $this->session->userdata('name') ?></span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Profile</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo base_url()?>sign-out">Sign Out</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- topbar ends -->
	<?php } ?>
	<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Activities</li>
						<li><a class="ajax-link" href="<?php echo(base_url().$this->session->userdata('role'))?>/enroll-student"><i class="icon-user"></i><span class="hidden-tablet"> Add Student</span></a></li>
						<li><a class="ajax-link" href="<?php echo(base_url().$this->session->userdata('role'))?>/add-test-results"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add Test Results</span></a></li>
						<li><a class="ajax-link" href="<?php echo(base_url().$this->session->userdata('role'))?>/view-timetable"><i class="icon-list-alt"></i><span class="hidden-tablet"> View Timetable</span></a></li>
						<li><a class="ajax-link" href="<?php echo(base_url().$this->session->userdata('role'))?>/send-notice"><i class="icon-envelope"></i><span class="hidden-tablet"> Send Notice</span></a></li>
						<li><a class="ajax-link" href="<?php echo(base_url().$this->session->userdata('role'))?>/calendar"><i class="icon-calendar"></i><span class="hidden-tablet"> School Calendar</span></a></li>
						<li><a class="ajax-link" href="<?php echo(base_url().$this->session->userdata('role'))?>/incidents"><i class="icon-warning-sign"></i><span class="hidden-tablet"> Incident Manager</span></a></li>
						<li><a class="ajax-link" href="<?php echo(base_url().$this->session->userdata('role'))?>/view-report"><i class="icon-picture"></i><span class="hidden-tablet"> View Report</span></a></li>
					</ul>

				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			

            <?php echo $this->load->view($action) ?>


</div>