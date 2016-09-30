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
</span>
<span class="show-2">Edit Description</span>
</h1>
<div style="display:none;"  class="des-area-2">
<div class="des-holder">
<div class="pro-holder">
<i class="fa fa-shopping-bag" aria-hidden="true"></i>
<select class="pro-select" name="seller_availability_type" id="seller_availability_type" required>
<option value="">I want to work</option>
<option value="Per Time" <?php if($data[0]['seller_availability_type'] == 'Per Time'){?> selected <?php } ?>>Part time</option>
<option value="Full Time" <?php if($data[0]['seller_availability_type'] == 'Full Time'){?> selected <?php } ?>>Full time</option>
</select>
</div>
<div class="pro-holder">
<i class="fa fa-clock-o" aria-hidden="true"></i>
<select class="pro-select" name="seller_availability_time" id="seller_availability_time" required>
<option value="Less than 30 hours a week" <?php if($data[0]['seller_availability_time'] == 'Less than 30 hours a week'){?> selected <?php } ?>>Less than 30 hours a week</option>
<option value="More than 30 hours a week" <?php if($data[0]['seller_availability_time'] == 'More than 30 hours a week'){?> selected <?php } ?>>More than 30 hours a week</option>
<option value="As needed" <?php if($data[0]['seller_availability_time'] == 'As needed'){?> selected <?php } ?>>As needed</option>
</select>
</div>
<div class="pro-holder">
<i class="fa fa-usd" aria-hidden="true"></i>
<select class="pro-select" name="seller_availability_amount" id="seller_availability_amount" required>
<option value="Less than $500 per month" <?php if($data[0]['seller_availability_amount'] == 'Less than $500 per month'){?> selected <?php } ?>>Less than $500 per month</option>
<option value="Between $500 and $1000 per month" <?php if($data[0]['seller_availability_amount'] == 'Between $500 and $1000 per month'){?> selected <?php } ?>>Between $500 and $1000 per month</option>
<option value="More than $1000 per month" <?php if($data[0]['seller_availability_amount'] == 'More than $1000 per month'){?> selected <?php } ?>>More than $1000 per month</option>
</select>
</div>
<div class="clearfix"></div>
</div>
<div class="bot-area">
<div class="hide-2">Cancel</div>
<div class="update-btn">Update</div>
</div>
</div>
</div>
<?php /*?><div class="buyer-left-holder no-border">
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
<?php */?>
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
<h1>Language<span><i class="fa fa-question-circle-o" aria-hidden="true"></i>
<div class="buyer-tag">Tell us more about yourself. Buyers are also interested in learning about you as a person.</div>
<div class="sub-nav-triangle"></div>
</span> <span class="show-15">View</span> </h1>
<h4>You don't have any Language.</h4>
<div style="display:none;"  class="des-area-15">
<div class="des-holder">
<div class="des-holder-lft">
<input class="form-control" name="language_name" id="language_name" value="" type="text">
</div>
<div class="des-holder-rht">
<select class="form-control" name="language_type" id="language_type">
<option value="Basic">Basic</option>
<option value="Conversational">Conversational</option>
<option value="Fluent">Fluent</option>
<option value="Native or Bilingual">Native or Bilingual</option>
</select>
</div>
<div class="clearfix"></div>
</div>
<div class="dse-holder">
<div class="des-holder-table">
<table style="width:100%">
<tr class="table-header">
<td class="table-data2 header-color">Language</td>
<td class="table-data2 header-color">Level</td>
<td class="table-data3"></td>
</tr>
<?php
if(count($languages) > 0){
foreach($languages as $language){	
?>
<tr class="table-row1">
<td class="table-data2"><?php echo $language['seller_language']; ?></td>
<td class="table-data2"><?php echo $language['seller_language_level']; ?></td>
<td class="table-data3">
<div class="table-icon">
<ul>
<li><a href="javascript:void(0)" onClick="editDataLanguage('<?php echo $language['id']; ?>','Language2','<?php echo $language['seller_language']; ?>','<?php echo $language['seller_language_level']; ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
<li><a href="javascript:void(0)" onClick="deleteData('<?php echo $language['id']; ?>','Language')"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
</ul>
</div>
</td>
</tr>
<?php
}
}
?>  
</table>
</div>
<div class="clearfix"></div>
</div>
<div class="bot-area">
<div class="hide-15">Cancel</div>
<div class="update-btn2" id="btn15">Add</div>
</div>
</div>
</div>
<div class="buyer-left-holder no-border">
<h1>Skills<span><i class="fa fa-question-circle-o" aria-hidden="true"></i>
<div class="buyer-tag">Tell us more about yourself. Buyers are also interested in learning about you as a person.</div>
<div class="sub-nav-triangle"></div>
</span> <span class="show-3">View</span> </h1>
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
<div class="dse-holder">
<div class="des-holder-table">
<table style="width:100%">
<tr class="table-header">
<td class="table-data2 header-color">Skill</td>
<td class="table-data2 header-color">Level</td>
<td class="table-data3"></td>
</tr>
<?php
if(count($skills) > 0){
foreach($skills as $skill){	
?>
<tr class="table-row1">
<td class="table-data2"><?php echo $skill['seller_skill']; ?></td>
<td class="table-data2"><?php echo $skill['seller_skill_level']; ?></td>
<td class="table-data3 ">
<div class="table-icon">
<ul>
<li><a href="javascript:void(0)" onClick="editDataSkill('<?php echo $skill['id']; ?>','Skill2','<?php echo $skill['seller_skill']; ?>','<?php echo $skill['seller_skill_level']; ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
<li><a href="javascript:void(0)" onClick="deleteData('<?php echo $skill['id']; ?>','Skill')"><i class="fa fa-trash" aria-hidden="true"></i></a><li>
</ul>
</div>
</td>
</tr>
<?php
}
}
?>  
</table>
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
</span> <span class="show-4">View</span> </h1>
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
<div class="dse-holder">
<div class="des-holder-table">
<table style="width:100%">
<tr class="table-header">
<td class="table-data2 header-color">Degree</td>
<td class="table-data2 header-color">Year</td>
<td class="table-data3"></td>
</tr>
<?php
if(count($educations) > 0){
foreach($educations as $education){	
?>
<tr class="table-row1">
<td class="table-data2"><?php echo $education['seller_edu_degree']; ?></td>
<td class="table-data2"><?php echo $education['seller_edu_from'].'-'.$education['seller_edu_to']; ?></td>
<td class="table-data3 ">
<div class="table-icon">
<ul>
<li><a href="javascript:void(0)" onClick="editDataEducation('<?php echo $education['id']; ?>','Education2','<?php echo $education['seller_edu_country']; ?>','<?php echo $education['seller_edu_collage_name']; ?>','<?php echo $education['seller_edu_title']; ?>','<?php echo $education['seller_edu_degree']; ?>','<?php echo $education['seller_edu_from']; ?>','<?php echo $education['seller_edu_to']; ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></a><li>
<li><a href="javascript:void(0)" onClick="deleteData('<?php echo $education['id']; ?>','Education')"><i class="fa fa-trash" aria-hidden="true"></i></a><li>
</ul>
</div>
</td>
</tr>
<?php
}
}
?> 
</table>
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
</span> <span class="show-5">View</span> </h1>
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
<option value="2016">2016</option>
<option value="2017">2017</option>
</select>
</div>
<div class="clearfix"></div>
</div>
<div class="dse-holder">
<div class="des-holder-table">
<table style="width:100%">
<tr class="table-header">
<td class="table-data2 header-color">Certificate Or Award</td>
<td class="table-data2 header-color">Year</td>
<td class="table-data3"></td>
</tr>
<?php
if(count($certificates) > 0){
foreach($certificates as $certificate){	
?>
<tr class="table-row1">
<td class="table-data2"><?php echo $certificate['seller_cerified']; ?></td>
<td class="table-data2"><?php echo $certificate['seller_cerified_year']; ?></td>
<td class="table-data3">
<div class="table-icon">
<ul>
<li><a href="javascript:void(0)" onClick="editDataCertificate('<?php echo $certificate['id']; ?>','Certificate2','<?php echo $certificate['seller_cerified']; ?>','<?php echo $certificate['seller_cerified_from']; ?>','<?php echo $certificate['seller_cerified_year']; ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></a><li>
<li><a href="javascript:void(0)" onClick="deleteData('<?php echo $certificate['id']; ?>','Certificate')"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
</ul>
</div>
</td>
</tr>
<?php
}
}
?>
</table>
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
</span> <span class="show-6">View</span> </h1>
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
<div class="dse-holder">
<div class="des-holder-table">
<table style="width:100%">
<tr class="table-header">
<td class="table-data2 header-color">Description</td>
<td class="table-data2 header-color">Url</td>
<td class="table-data3"></td>
</tr>
<?php
if(count($portfolios) > 0){
foreach($portfolios as $portfolio){	
?>
<tr class="table-row1">
<td class="table-data2"><?php echo $portfolio['seller_profile_web']; ?></td>
<td class="table-data2"><a href="<?php echo $portfolio['seller_profile_web_link']; ?>">Click Me</a></td>
<td class="table-data3 ">
<div class="table-icon">
<ul>
<li><a href="javascript:void(0)" onClick="editDataPortfolio('<?php echo $portfolio['id']; ?>','Portfolio2','<?php echo $portfolio['seller_profile_web']; ?>','<?php echo $portfolio['seller_profile_web_link']; ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
<li><a href="javascript:void(0)" onClick="deleteData('<?php echo $portfolio['id']; ?>','Portfolio')"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
</ul>
</div>
</td>
</tr> 
<?php
}
}
?>
</table>
</div>
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
</span> <span class="show-7">Add</span> </h1>
<h4>You don't have any Profile Image.</h4>
<div style="display:none;"class="des-area-7">
<div class="des-holder">
<form action="<?php echo site_url('seller/profile_picture'); ?>" class="dropzone">
<input type="hidden" id="user_id" name="user_id" class="form-control file" value="<?php echo $SESSION_UERS_DATA[0]['id']; ?>" placeholder="">
</form>
<div class="clearfix"></div>
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
<input type="hidden" value="" name="fild_id" id="fild_id">
<input type="hidden" value="" name="fild_type" id="fild_type">
</main>
<?php include('inc/footer.php'); ?>
<script type="text/javascript">
$(document).ready(function(){
$(".hide-1").click(function(){
$(".des-area-1").hide('slow');
});
$(".show-1").click(function(){
$(".des-area-1").show('slow');
});
});
$(document).ready(function(){
$(".hide-2").click(function(){
$(".des-area-2").hide('slow');
});
$(".show-2").click(function(){
$(".des-area-2").show('slow');
});
});
$(document).ready(function(){
$(".hide-3").click(function(){
$(".des-area-3").hide('slow',function(){
$(".show-3").show('slow');
$('#fild_id').val('0');
$('#fild_type').val('');
$('#seller_skill').val('');
$('#seller_skill_level').val($("#seller_skill_level option:first").val());
$('#btn8').html('Add');	
});
});
$(".show-3").click(function(){
$(".des-area-3").show('slow',function(){
$('#fild_id').val('0');
$('#fild_type').val('');	
$(".show-3").hide('slow');
});
});
});
$(document).ready(function(){
$(".hide-4").click(function(){
$(".des-area-4").hide('slow',function(){
$(".show-4").show('slow');	
$('#fild_id').val('0');
$('#fild_type').val('');
$('#seller_edu_country').val($("#seller_edu_country option:first").val());
$('#seller_edu_collage_name').val('');
$('#seller_edu_title').val($("#seller_edu_title option:first").val());
$('#seller_edu_degree').val('');
$('#seller_edu_from').val($("#seller_edu_from option:first").val());
$('#seller_edu_to').val($("#seller_edu_to option:first").val());
$('#btn9').html('Add');	
});
});
$(".show-4").click(function(){
$(".des-area-4").show('slow',function(){
$('#fild_id').val('0');
$('#fild_type').val('');	
$(".show-4").hide('slow');	
});
});
});
$(document).ready(function(){
$(".hide-5").click(function(){
$(".des-area-5").hide('slow',function(){
$(".show-5").show('slow');	
$('#fild_id').val('0');
$('#fild_type').val('');
$('#seller_cerified').val('');
$('#seller_cerified_from').val('');
$('#seller_cerified_year').val($("#seller_cerified_year option:first").val());
$('#btn10').html('Add');	
});
});
$(".show-5").click(function(){
$(".des-area-5").show('slow',function(){
$(".show-5").hide('slow');	
$('#fild_id').val('0');
$('#fild_type').val('');
});
});
});
$(document).ready(function(){
$(".hide-6").click(function(){
$(".des-area-6").hide('slow',function(){
$(".show-6").show('slow');	
$('#fild_id').val('0');
$('#fild_type').val('');
$('#seller_profile_web').val('');
$('#seller_profile_web_link').val('');
$('#btn11').html('Add');
});
});
$(".show-6").click(function(){
$(".des-area-6").show('slow',function(){
$(".show-6").hide('slow');
$('#fild_id').val('0');
$('#fild_type').val('');	
});
});
});
$(document).ready(function(){
$(".hide-15").click(function(){
$(".des-area-15").hide('slow',function(){
$(".show-15").show('slow');	
$('#fild_id').val('0');
$('#fild_type').val('');
$('#language_name').val('');
$('#language_type').val($("#seller_cerified_year option:first").val());
$('#btn15').html('Add');
});
});
$(".show-15").click(function(){
$(".des-area-15").show('slow',function(){
$(".show-15").hide('slow');
$('#fild_id').val('0');
$('#fild_type').val('');	
});
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
