<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Catálogo online - Prefeitura da Paracambi</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Bootstrap, Admin, Responsive, Fluid, Retina">
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: CSS -->

	<!-- <link id="bootstrap-style" rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap-responsive.min.css') }}">
	<link id="base-style" rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
	<link id="base-style-responsive" rel="stylesheet" href="{{ URL::asset('assets/css/style-responsive.css') }}"> -->

	<link id="bootstrap-style" href="/css/bootstrap.min.css" rel="stylesheet"> -->
	<link href="/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->


	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->

	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->




</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>Catálogo online - Prefeitura de Paracambi</span></a>

				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> Tulio Macedo
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Conta</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Perfil</a></li>
								<li><a href="login.html"><i class="halflings-icon off"></i> Sair</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->

			</div>
		</div>
	</div>
	<!-- start: Header -->

		<div class="container-fluid-full">
		<div class="row-fluid">

			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="/"><i class="icon-home"></i><span class="hidden-tablet"> Home</span></a></li>
						<!-- <li><a href="/area"><i class="icon-briefcase"></i><span class="hidden-tablet"> Áreas</span></a></li> -->
						<!-- <li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Áreas</span></a></li> -->
						<li>
							<a class="dropmenu" href="/#"><i class="icon-briefcase"></i><span class="hidden-tablet"> Áreas</span></a>
							<ul>
								<li><a class="submenu" href="/area"><i class="icon-list"></i><span class="hidden-tablet"> Todas</span></a></li>
								<li><a class="submenu" href="/area/create"><i class="icon-plus"></i><span class="hidden-tablet"> Nova</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->

			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>

			<!-- start: Content -->
			<div id="content" class="span10">

			@yield('breadcrumb')
			@yield('content')



		</div><!--/.fluid-container-->

			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->





	<div class="clearfix"></div>

	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://themifycloud.com/downloads/janux-free-responsive-admin-dashboard-template/" alt="Bootstrap_Metro_Dashboard">JANUX Responsive Dashboard</a></span>

		</p>

	</footer>

	<!-- start: JavaScript-->

		<script src="/js/jquery-1.9.1.min.js"></script>
	<script src="/js/jquery-migrate-1.0.0.min.js"></script>

		<script src="/js/jquery-ui-1.10.0.custom.min.js"></script>

		<script src="/js/jquery.ui.touch-punch.js"></script>

		<script src="/js/modernizr.js"></script>

		<script src="/js/bootstrap.min.js"></script>

		<script src="/js/jquery.cookie.js"></script>

		<script src='/js/fullcalendar.min.js'></script>

		<script src='/js/jquery.dataTables.min.js'></script>

		<script src="/js/excanvas.js"></script>
	<script src="/js/jquery.flot.js"></script>
	<script src="/js/jquery.flot.pie.js"></script>
	<script src="/js/jquery.flot.stack.js"></script>
	<script src="/js/jquery.flot.resize.min.js"></script>

		<script src="/js/jquery.chosen.min.js"></script>

		<script src="/js/jquery.uniform.min.js"></script>

		<script src="/js/jquery.cleditor.min.js"></script>

		<script src="/js/jquery.noty.js"></script>

		<script src="/js/jquery.elfinder.min.js"></script>

		<script src="/js/jquery.raty.min.js"></script>

		<script src="/js/jquery.iphone.toggle.js"></script>

		<script src="/js/jquery.uploadify-3.1.min.js"></script>

		<script src="/js/jquery.gritter.min.js"></script>

		<script src="/js/jquery.imagesloaded.js"></script>

		<script src="/js/jquery.masonry.min.js"></script>

		<script src="/js/jquery.knob.modified.js"></script>

		<script src="/js/jquery.sparkline.min.js"></script>

		<script src="/js/counter.js"></script>

		<script src="/js/retina.js"></script>

		<script src="/js/custom.js"></script>
	<!-- end: JavaScript-->

</body>
</html>
