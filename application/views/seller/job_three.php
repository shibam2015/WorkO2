<?php include('inc/top.php'); ?>
<body>
<?php include('inc/header.php'); ?>
<div class="clearfix"></div>
<main>
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
<h1>Frequently Asked Questions</h1>
<div class="seller-pricing-area">
<div id="fq">
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
</div>
<div class="seller-form-holder ">
<a class="cancel-btn cancel-btn-2" href="<?php echo site_url('seller/seller_view_job_two/'.$id); ?>">Back</a>
<input type="hidden" value="<?php echo $id; ?>" name="gig_id" id="gig_id" />
<input class="seller-pro-btn pull-right" type="button" value="Save & Continue" name="">
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
<?php include('inc/footer.php'); ?>
</body>
</html>
