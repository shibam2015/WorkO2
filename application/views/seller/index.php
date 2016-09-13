<?php include('inc/top.php'); ?>
<body>
<?php include('inc/header.php'); ?>
<div class="clearfix"></div>
<main>
<?php include('inc/banner.php'); ?> 
<div class="clearfix"></div>
<?php include('inc/seller-business.php'); ?>   
<?php include('inc/anyone-can-sell.php'); ?>   
<?php include('inc/seller-bottom-banner.php'); ?>   
<?php include('inc/selling-por.php'); ?>    
</main>
<?php include('inc/footer.php'); ?>  
<!------------------------------------banner----------------------------------> 
<script type="text/javascript">
$(document).ready(function() {    
//Events that reset and restart the timer animation when the slides change
$("#transition-timer-carousel").on("slide.bs.carousel", function(event) {
//The animate class gets removed so that it jumps straight back to 0%
$(".transition-timer-carousel-progress-bar", this)
.removeClass("animate").css("width", "0%");
}).on("slid.bs.carousel", function(event) {
//The slide transition finished, so re-add the animate class so that
//the timer bar takes time to fill up
$(".transition-timer-carousel-progress-bar", this)
.addClass("animate").css("width", "100%");
});
//Kick off the initial slide animation when the document is ready
$(".transition-timer-carousel-progress-bar", "#transition-timer-carousel")
.css("width", "100%");
});
</script>
</body>
</html>
