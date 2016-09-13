<?php include('inc/top.php'); ?>
<body>
<?php include('inc/header.php'); ?>
<div class="clearfix"></div>
<main>
<?php include('inc/banner.php'); ?>
<div class="clearfix"></div>
<?php include('inc/feedback.php'); ?> 
<?php include('inc/sponsored-service.php'); ?> 
<?php include('inc/featured-services.php'); ?> 
<?php include('inc/carsol.php'); ?> 
</main>
<?php include('inc/footer.php'); ?> 
<!----------------carasual------------------> 
<script type="text/javascript">
$("#flexiselDemo3").flexisel({
	visibleItems: 3,
	animationSpeed: 1000,
	autoPlay: false,
	clone:true,
	autoPlaySpeed: 3000,            
	pauseOnHover: true,
	enableResponsiveBreakpoints: true,
	responsiveBreakpoints: { 
	portrait: { 
	changePoint:480,
	visibleItems: 1
	}, 
	landscape: { 
	changePoint:640,
	visibleItems: 2
	},
	tablet: { 
	changePoint:768,
	visibleItems: 3
	}
	}
});
</script> 
<script src="<?php echo site_url('assets/js/materialForm.js'); ?>"></script>
</body>
</html>
