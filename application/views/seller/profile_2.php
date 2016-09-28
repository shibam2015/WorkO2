<?php include('inc/top.php'); ?>
<body>
<?php include('inc/header.php'); ?>
<div class="clearfix"></div>
<main>
<section class="buyer-sec">
<div class="container">
<div class="col-lg-5 col-md-5 col-sm-5">
<div class="buyer-left-holder">
<h1>Description <span><i class="fa fa-question-circle-o" aria-hidden="true"></i>
<div class="buyer-tag">Tell us more about yourself. Buyers are also interested in learning about you as a person.</div>
<div class="sub-nav-triangle"></div>
</span> <span class="show-1">Edit Description</span> </h1>
<div style="display:none;"  class="des-area-1">
<div class="des-holder">
<textarea class="form-control" id="seller_description" name="seller_description" cols="" rows="" 
placeholder="Please tell us about any hobbies, additional expertise, or anything else you’d like to add.">
<?php echo $data[0]['seller_description'];?>
</textarea>
</div>
<div class="bot-area">
<div class="hide-1">Cancel</div>
<div class="update-btn" id="btn6">Update</div>
</div>
</div>
</div>
<div class="buyer-left-holder no-border">
<h1>Availability <span><i class="fa fa-question-circle-o" aria-hidden="true"></i>
<div class="buyer-tag">Tell us more about yourself. Buyers are also interested in learning about you as a person.</div>
<div class="sub-nav-triangle"></div>
</span> <span class="show-2">Edit Description</span> </h1>
<div style="display:none;"  class="des-area-2">
<div class="des-holder">
<textarea class="form-control" name="" cols="" rows="" id="seller_availability" name="seller_availability" placeholder="Please tell us about any hobbies, additional expertise, or anything else you’d like to add."></textarea>
</div>
<div class="bot-area">
<div class="hide-2">Cancel</div>
<div class="update-btn" id="btn7">Update</div>
</div>
</div>
</div>
<div class="buyer-left-holder no-border">
<h1>Linked Accounts<span><i class="fa fa-question-circle-o" aria-hidden="true"></i>
<div class="buyer-tag">Tell us more about yourself. Buyers are also interested in learning about you as a person.</div>
<div class="sub-nav-triangle"></div>
</span> </h1>
<ul>
<li><i class="fa fa-plus" aria-hidden="true"></i><a href="#">Facebook</a></li>
<li><i class="fa fa-plus" aria-hidden="true"></i><a href="#">Google</a></li>
<li><i class="fa fa-plus" aria-hidden="true"></i><a href="#">Dribbble</a></li>
<li><i class="fa fa-plus" aria-hidden="true"></i><a href="#">Stack Overflow</a></li>
<li><i class="fa fa-plus" aria-hidden="true"></i><a href="#">Linkedin</a></li>
</ul>
</div>
<div class="buyer-left-holder no-border">
<h1>Skills<span><i class="fa fa-question-circle-o" aria-hidden="true"></i>
<div class="buyer-tag">Tell us more about yourself. Buyers are also interested in learning about you as a person.</div>
<div class="sub-nav-triangle"></div>
</span> <span class="show-3">Add New</span> </h1>
<h4>You don't have any Skills.</h4>
<div style="display:none;"  class="des-area-3">
<div class="des-holder">
<div class="des-holder-lft">
<input class="form-control" name="seller_skill" id="seller_skill" value="" type="text">
</div>
<div class="des-holder-rht">
<select class="form-control" name="seller_skill_level" id="seller_skill_level">
<option value="Beginner">Beginner</option>
<option value="Intermediate">Intermediate</option>
<option value="Expert">Expert</option>
</select>
</div>
<div class="clearfix"></div>
</div>
<div class="bot-area">
<div class="hide-3">Cancel</div>
<div class="update-btn2" id="btn8">Add</div>
</div>
</div>
</div>
<div class="buyer-left-holder no-border">
<h1>Education<span><i class="fa fa-question-circle-o" aria-hidden="true"></i>
<div class="buyer-tag">Tell us more about yourself. Buyers are also interested in learning about you as a person.</div>
<div class="sub-nav-triangle"></div>
</span> <span class="show-4">Add New</span> </h1>
<h4>You don't have any Education</h4>
<div style="display:none;"  class="des-area-4">
<div class="des-holder">
<div class="des-holder-lft">
<select class="form-control" name="seller_edu_country" id="seller_edu_country">
<option value="">Country of College/University</option>
<option value="India">India</option>
<option value="Us">Us</option>
</select>
</div>
<div class="des-holder-rht">
<input class="form-control" value="" name="seller_edu_collage_name" id="seller_edu_collage_name" type="text" placeholder="College/University Name">
</div>
<div class="clearfix"></div>
</div>
<div class="des-holder">
<div class="des-holder-lft">
<select class="form-control" name="seller_edu_title" id="seller_edu_title">
<option value="">Title</option>
<option value="B.A.">B.A.</option>
<option value="B.Sc.">B.Sc.</option>
<option value="M.A.">M.A.</option>
<option value="M.Sc.">M.Sc.</option>
<option value="J.D.">J.D.</option>
</select>
</div>
<div class="des-holder-rht">
<input class="form-control" name="" type="text" name="seller_edu_degree" id="seller_edu_degree" value="" placeholder="Degree">
</div>
<div class="clearfix"></div>
</div>
<div class="des-holder">
<div class="des-holder-lft">
<select class="form-control" name="seller_edu_from" id="seller_edu_from">
<option value="">From</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
</select>
</div>
<div class="des-holder-rht">
<select class="form-control" name="seller_edu_to" id="seller_edu_to">
<option value="">To</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
</select>
</div>
<div class="clearfix"></div>
</div>
<div class="bot-area">
<div class="hide-4">Cancel</div>
<div class="update-btn2" id="btn9">Add</div>
</div>
</div>
</div>
<div class="buyer-left-holder no-border">
<h1>Certification<span><i class="fa fa-question-circle-o" aria-hidden="true"></i>
<div class="buyer-tag">Tell us more about yourself. Buyers are also interested in learning about you as a person.</div>
<div class="sub-nav-triangle"></div>
</span> <span class="show-5">Add New</span> </h1>
<h4>You don't have any Certification.</h4>
<div style="display:none;"  class="des-area-5">
<div class="des-holder">
<input class="form-control" name="" type="text" name="seller_cerified" id="seller_cerified" value="" placeholder="Certificate or Award">
<div class="clearfix"></div>
</div>
<div class="des-holder">
<div class="des-holder-lft">
<input class="form-control" name="" type="text" name="seller_cerified_from" id="seller_cerified_from" value="" placeholder="Certified From (e.g. Adobe)">
</div>
<div class="des-holder-rht">
<select class="form-control" name="seller_cerified_year" id="seller_cerified_year">
<option value="">Year</option>
<option value="2000">2000</option>
<option value="2010">2010</option>
</select>
</div>
<div class="clearfix"></div>
</div>
<div class="bot-area">
<div class="hide-5">Cancel</div>
<div class="update-btn2" id="btn10">Add</div>
</div>
</div>
</div>
<div class="buyer-left-holder no-border">
<h1>Portfolio or website<span><i class="fa fa-question-circle-o" aria-hidden="true"></i>
<div class="buyer-tag">Tell us more about yourself. Buyers are also interested in learning about you as a person.</div>
<div class="sub-nav-triangle"></div>
</span> <span class="show-6">Add New</span> </h1>
<h4>You don't have any Portfolio.</h4>
<div style="display:none;"  class="des-area-6">
<div class="des-holder">
<input class="form-control" name="" type="text" name="seller_profile_web" id="seller_profile_web" value="" placeholder="Description">
<div class="clearfix"></div>
</div>
<div class="des-holder">
<input class="form-control" name="" type="text" name="seller_profile_web_link" id="seller_profile_web_link" value="" placeholder="e.g. http://MyPortfolio.com">
<div class="clearfix"></div>
</div>
<div class="bot-area">
<div class="hide-6">Cancel</div>
<div class="update-btn2" id="btn11">Add</div>
</div>
</div>
</div>
<div class="buyer-left-holder no-border">
<h1>Profile Image<span><i class="fa fa-question-circle-o" aria-hidden="true"></i>
<div class="buyer-tag">Tell us more about yourself. Buyers are also interested in learning about you as a person.</div>
<div class="sub-nav-triangle"></div>
</span> <span class="show-7">Add New</span> </h1>
<h4>You don't have any Profile Image.</h4>
<div style="display:none;"  class="des-area-7">
<div class="des-holder">
<div class="profile-img"> <img style="max-width:100%; height:auto;" src="<?php echo site_url('assets'); ?>/images/profile-img.jpg"> </div>
<div class="clearfix"></div>
</div>
<div class="bot-area">
<div class="hide-7">Cancel</div>
<div class="update-btn2" id="btn6">Add</div>
</div>
</div>
</div>
</div>
<div class="col-lg-7 col-md-7 col-sm-7">
<div class="buyer-right-holder">
<h1>Samartest's Jobs</h1>
</div>
<div class="buyer-right-holder top-mar-1">
<h4>It seems that you don't have any active Job</h4>
<div class="buyer-right-img-holder">
<div class="buyer-right-img"> <img style="max-width:100%; height:auto;" src="<?php echo site_url('assets'); ?>/images/img-4.png" alt="fsdf"> </div>
<div class="buyer-right-btn"> 
<a class="buyer-btn" href="<?php echo site_url('seller/seller_view_job_one'); ?>">Create a Job</a> 
</div>
</div>
</div>
</div>
</div>
</section>
</main>
<?php include('inc/footer.php'); ?>
<script type="text/javascript">
$(document).ready(function(){
    $(".hide-1").click(function(){
        $(".des-area-1").hide();
    });
    $(".show-1").click(function(){
        $(".des-area-1").show();
    });
});
$(document).ready(function(){
    $(".hide-2").click(function(){
        $(".des-area-2").hide();
    });
    $(".show-2").click(function(){
        $(".des-area-2").show();
    });
});
$(document).ready(function(){
    $(".hide-3").click(function(){
        $(".des-area-3").hide();
		$(".show-3").show();
    });
    $(".show-3").click(function(){
        $(".des-area-3").show();
		$(".show-3").hide();
    });
});
$(document).ready(function(){
    $(".hide-4").click(function(){
        $(".des-area-4").hide();
		$(".show-4").show();
    });
    $(".show-4").click(function(){
        $(".des-area-4").show();
		$(".show-4").hide('slow');
    });
});
$(document).ready(function(){
    $(".hide-5").click(function(){
        $(".des-area-5").hide('slow');
		$(".show-5").show('slow');
    });
    $(".show-5").click(function(){
        $(".des-area-5").show('slow');
		$(".show-5").hide('slow');
    });
});
$(document).ready(function(){
    $(".hide-6").click(function(){
        $(".des-area-6").hide('slow');
		$(".show-6").show('slow');
    });
    $(".show-6").click(function(){
        $(".des-area-6").show('slow');
		$(".show-6").hide('slow');
    });
});
$(document).ready(function(){
    $(".hide-7").click(function(){
        $(".des-area-7").hide('slow');
    });
    $(".show-7").click(function(){
        $(".des-area-7").show('slow');
    });
});
</script>
</body>
</html>
