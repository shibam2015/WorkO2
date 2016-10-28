<?php include('inc/top.php'); ?>
<body>
<?php include('inc/header.php'); ?>
<div class="clearfix"></div>
<form action="<?php echo site_url('seller/seller_view_job_four/'.$id); ?>" method="post">
<main>
<script type="text/javascript">
$(document).ready(function(){
	$("#faq-btn").click(function(){
		$("#fq").slideDown();
	});
	$("#close-faq").click(function(){
		$("#fq").slideUp();
	});
});
</script>
<section class="seller-profile">
<div class="container">
<div class="row">
<div  class="seller-pricing">
<h1>Description</h1>
<div class="seller-pricing-area">
<h3>Briefly Describe Your Job</h3>
<div class="seller-form-holder">
<textarea class="des-text form-control" name="" cols="" rows="" placeholder="" id="desc_job" style="height:100px;"></textarea>
</div>
<div class="clearfix"></div>
</div>
<h1>Frequently Asked Questions <a class="add-faq" id="faq-btn">Add FAQ</a></h1><br>
<div id="fq" class="collapse">
<h3>Add Questions &amp; Answers for Your Buyers.</h3>
<div class="seller-form-holder ">
<input class="pro-select2 bor form-control" type="text" value="" placeholder="Add a Question: i.e. Do you translate to English as well?" id="faq_question" name="faq_question">
</div>
<div class="seller-form-holder pricing-form-holder">
<textarea class="des-text form-control" name="" cols="" rows="" id="faq_ans" name="faq_ans" placeholder="Add an Answer: i.e. Yes, I also translate from English to Hebrew."></textarea>
</div>
<div class="seller-form-holder pricing-form-holder"> 
<a class="cancel-btn" id="close-faq">Cancel</a> 
<a class="add-btn" href="javscript:void(0)" id="add_faq">Add</a>
<div class="clearfix"></div>
</div>
</div>
<div class="seller-pricing-area faq-seller">
<div class="panel-group" id="accordion">
<?php
if(count($faqs) > 0){
foreach($faqs as $faq){	
?>
<div class="panel panel-default">
<div class="panel-heading">
<a data-toggle="collapse" href="#collapse<?php echo $faq['id']; ?>"><?php echo $faq['faq_question']; ?></a>
</div>
<div id="collapse<?php echo $faq['id']; ?>" class="panel-collapse collapse">
<div class="panel-body">
<p><?php echo $faq['faq_ans']; ?></p>
</div>
</div>
</div>
<?php
}
}
?>
</div>
</div>
<!--<div id="fq">
<h3>Add Questions &amp; Answers for Your Buyers.</h3>
<div class="seller-form-holder ">
<input class="pro-select2 bor form-control" type="text" value="" placeholder="Add a Question: i.e. Do you translate to English as well?" id="faq_question" name="faq_question">
</div>
<div class="seller-form-holder pricing-form-holder">
<textarea class="des-text form-control" name="" cols="" rows="" id="faq_ans" name="faq_ans" placeholder="Add an Answer: i.e. Yes, I also translate from English to Hebrew."></textarea>
</div>
<div class="seller-form-holder pricing-form-holder"> 
<a class="cancel-btn" href="#">Cancel</a> 
<a class="add-btn" href="javscript:void(0)" id="add_faq">Add</a>
<div class="clearfix"></div>
</div>
</div>-->
<div class="seller-form-holder ">
<a class="cancel-btn cancel-btn-2" href="<?php echo site_url('seller/seller_view_job_two/'.$id); ?>">Back</a>
<input type="hidden" value="<?php echo $id; ?>" name="gig_id" id="gig_id" />
<input class="seller-pro-btn pull-right" type="submit" value="Save & Continue" name="">
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</section>
</main>
</form>
<?php include('inc/footer.php'); ?>
</body>
</html>
