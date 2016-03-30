<!DOCTYPE HTML>
<html>
<head>
<title>Easy Admin Panel an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<?php
        echo $this->Html->meta('icon');

      
        echo $this->Html->script('jquery-2.1.1.min');
        echo $this->Html->script('Chart');
        
        echo $this->Html->script('classie');
        echo $this->Html->script('uisearch');
        
       
        
        echo $this->Html->script('wow.min');
        echo $this->Html->script('jquery-ui-1.10.4');
        
        echo $this->Html->script('printElement');
        echo $this->Html->script('select2');
        echo $this->Html->script('bootbox.min');
        echo $this->Html->script('fileinput.min');
        echo $this->Html->script('fileinput_locale_es');
        echo $this->Html->script('bootstrap-switch.min');
        echo $this->Html->script('plugins/canvas-to-blob.min');
        echo $this->Html->script('jquery.flot.min');

        echo $this->Html->css('select2');
        echo $this->Html->css('animate');
        echo $this->Html->css('style');
        echo $this->Html->css('icon-font.min');
        echo $this->Html->css('jquery-ui-1.10.4');
        echo $this->Html->css('font-awesome');
        echo $this->Html->css(array('bootstrap'));
        echo $this->Html->css('base');
        echo $this->Html->css('fileinput.min');
        echo $this->Html->css('bootstrap-switch.min');
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');

      
    ?>

	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<!-- Placed js at the end of the document so the pages load faster -->

</head> 
   
 <body class="sticky-header left-side-collapsed">
    <section>
    <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
			
				<h1><a href="index.html"><span>PANADERIA</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="index.html"><i class="lnr lnr-home"></i> </a>
			</div>

			<!--logo and iconic logo end-->
			</br>
			<div class="left-side-inner">

				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						<li class="menu-list">
							<a href="#"><i class="glyphicon glyphicon-shopping-cart"></i>
								<span>Ventas</span></a>
								<ul class="sub-menu-list">
									<li><?php echo $this->Html->link('Venta Rapida', array('controller' => 'Ventas', 'action' => 'index')); ?> </li>
									<li><?php echo $this->Html->link('Venta Detallada', array('controller' => 'Ventadetalles', 'action' => 'index')); ?></li>
								</ul>
						</li>
						<li class="menu-list">
							<a href="#"><i class="glyphicon glyphicon-list-alt"></i>
								<span>Inventario</span></a>
								<ul class="sub-menu-list">
									<li><a href="grids.html">Nuevo Producto</a> </li>
									<li><?php echo $this->Html->link('Gestion de Producto', array('controller' => 'Inventarioproductos', 'action' => 'index')); ?></li>
								</ul>
						</li>


						<li class="menu-list"><a href="#"><i class="glyphicon glyphicon-asterisk"></i> <span>Administracion</span></a>  
							<ul class="sub-menu-list">
								<li><?php echo $this->Html->link('Usuario', array('controller' => 'Users', 'action' => 'index')); ?></li>
								<li><a href="charts.html">Reporte</a> </li>
								<li><?php echo $this->Html->link('Parametros de Sistema', array('controller' => 'parametros', 'action' => 'index')); ?></li>
							</ul>
						</li>
						<li class="menu-list">
							<a href="#"><i class="glyphicon glyphicon-send"></i>
								<span>Deudas</span></a>
								<ul class="sub-menu-list">
									<li><?php echo $this->Html->link('Deudas Totales', array('controller' => 'Ventas', 'action' => 'deudasCliente')); ?>
									</li>
								</ul>
						</li>
						

						
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
		<!-- left side end-->
    
		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">
			 
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->

			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">  	
					<div class="profile_details_left">
						<ul class="nofitications-dropdown">
							
							<li class="login_box" id="loginContainer">
									<div class="search-box">
										<div id="sb-search" class="sb-search">
											<form>
												<input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
												<input class="sb-search-submit" type="submit" value="">
												<span class="sb-icon-search"> </span>
											</form>
										</div>
									</div>
										<!-- search-scripts -->
											<script>
												new UISearch( document.getElementById( 'sb-search' ) );
											</script>
										<!-- //search-scripts -->
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
									<ul class="dropdown-menu">
										<li>
											<div class="notification_header">
												<h3>3 nuevas notificaciones</h3>
											</div>
										</li>
										<li><a href="#">
											<a href="#"><i class="glyphicon glyphicon-user"></i>
										   <div class="notification_desc">
											<p>Usuario</p>
											<p><span>1 hour ago</span></p>
											</div>
										  <div class="clearfix"></div>	
										 </a></li>
										 <li class="odd"><a href="#">
										   <a href="#"><i class="glyphicon glyphicon-plus"></i>
										   <div class="notification_desc">
											<p>producto</p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li><a href="#">
                                           <a href="#"><i class="glyphicon glyphicon-pencil"></i>
										   <div class="notification_desc">
											<p>notas </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li>
											<div class="notification_bottom">
												<a href="#">Ver Todas las Notificaciones</a>
											</div> 
										</li>
									</ul>
							</li>	
								   							   		
							<div class="clearfix"></div>	
						</ul>
					</div>
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span style="background:url(../img/1.jpg) no-repeat center"> </span> 
										 <div class="user-name">
											<p>Nombre<span>Administrator</span></p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li> 
									<li> <a href="sign-up.html"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>	
			  </div>
			 </div>
			<!--notification menu end -->
			</div>
		<!-- //header-ends -->
			<div id="page-wrapper">
				<?php echo $this->fetch('content'); ?>
			</div>
        <!--footer section start-->
			<footer>
			   <p>P A N A D E R I A</p>
			</footer>
        <!--footer section end-->

      <!-- main content end-->
   </section>
  
<!-- Bootstrap Core JavaScript -->
<?php
        echo $this->Html->script('jquery.nicescroll');
        echo $this->Html->script('scripts');
        echo $this->Html->script('bootstrap.min');
?>
</body>
</html>