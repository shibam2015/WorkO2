<?php include('inc/top.php'); ?>
<body>
<?php include('inc/header.php'); ?>
<div class="clearfix"></div>
<main>
<section class="seller-profile-banner"> 
<img style="max-width:100%; height:auto;" src="<?php echo site_url('assets'); ?>/images/footer-bg.jpg" alt="seller-banner">
</section>
<section class="seller-profile">
<div class="container">
<div class="row">
<div class="profile-sec">
<div class="col-lg-3 col-md-3 col-sm-3">
<div class="pro-sec-left">
<h1>Availability</h1>
<div class="pro-tooltip"> WorkO2 is an awesome platform for freelancers to thrive. Let us know your expectations as a seller on WorkO2. </div>
</div>
</div>
<div class="col-lg-9 col-md-9 col-sm-9">
<div class="pro-sec-right">
<div class="pro-holder"> <i class="fa fa-shopping-bag" aria-hidden="true"></i>
<select class="pro-select" name="">
<option>I want to work</option>
<option>Part time</option>
<option>Full time</option>
</select>
</div>
<div class="pro-holder"> <i class="fa fa-clock-o" aria-hidden="true"></i>
<select class="pro-select" name="">
<option>Less than 30 hours a week</option>
<option>More than 30 hours a week</option>
<option>As needed</option>
</select>
</div>
<div class="pro-holder"> <i class="fa fa-usd" aria-hidden="true"></i>
<select class="pro-select" name="">
<option>Less than $500 per month</option>
<option>Between $500 and $1000 per month</option>
<option>More than $1000 per month</option>
</select>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="profile-sec">
<div class="col-lg-3 col-md-3 col-sm-3">
<div class="pro-sec-left">
<h1>Linked Accounts</h1>
<div class="pro-tooltip"> WorkO2 is an awesome platform for freelancers to thrive. Let us know your expectations as a seller on WorkO2. </div>
</div>
</div>
<div class="col-lg-9 col-md-9 col-sm-9">
<div class="pro-sec-right">
<div class="pro-holder-2"> <a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook </a> </div>
<div class="pro-holder-2"> <a href="#"> <i class="fa fa-google-plus" aria-hidden="true"></i> Google-plus </a> </div>
<div class="pro-holder-2"> <a href="#"> <i class="fa fa-dribbble" aria-hidden="true"></i> Dribbble </a> </div>
<div class="pro-holder-2"> <a href="#"> <i class="fa fa-stack-overflow" aria-hidden="true"></i> Stack-overflow </a> </div>
<div class="pro-holder-2"> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin </a> </div>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="profile-sec">
<div class="col-lg-3 col-md-3 col-sm-3">
<div class="pro-sec-left">
<h1>Languages</h1>
<h3>What languages do you speak?</h3>
<div class="pro-tooltip"> WorkO2 is an awesome platform for freelancers to thrive. Let us know your expectations as a seller on WorkO2. </div>
</div>
</div>
<div class="col-lg-9 col-md-9 col-sm-9">
<div class="pro-sec-right">
<div style="display:none;"  class="pro-sec-right-holder pro-sec-right-holder-1 ">
<div class="pro-holder-3">
<input class="pro-select2" name="language_name" id="language_name" type="text" placeholder="Add Language (e.g. English)">
</div>
<div class="pro-holder-3">
<select class="pro-select2"  name="language_type" id="language_type">
<option value="Basic">Basic</option>
<option value="Conversational">Conversational</option>
<option value="Fluent">Fluent</option>
<option value="Native or Bilingual">Native or Bilingual</option>
</select>
</div>
<div><a class="cancel-btn can-1" href="javascript:void(0)">Cancel</a></div>
<div><a class="add-btn" id="btn1" href="javascript:void(0)">Add</a></div>
<div class="clearfix"></div>
</div>
<table style="border:1px solid #ccc; width:100%" id="lang">
<tr class="table-header">
<td class="table-data">Language</td>
<td class="table-data">Level</td>
<td class="table-data data-col"><a class="new-1" href="javascript:void(0)"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a></td>
</tr>
<?php
if(count($languages) > 0){
foreach($languages as $language){	
?>
<tr>
<td class="table-data"><?php echo $language['seller_language']; ?></td>
<td class="table-data"><?php echo $language['seller_language_level']; ?></td>
<td class="table-data"></td>
<?php
}
}
?>  
</tr>
</table>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="profile-sec">
<div class="col-lg-3 col-md-3 col-sm-3">
<div class="pro-sec-left">
<h1>Skills</h1>
<h3>Do you have any skills?</h3>
<div class="pro-tooltip"> WorkO2 is an awesome platform for freelancers to thrive. Let us know your expectations as a seller on WorkO2. </div>
</div>
</div>
<div class="col-lg-9 col-md-9 col-sm-9">
<div class="pro-sec-right">
<div style="display:none;" class="pro-sec-right-holder pro-sec-right-holder-2">
<div class="pro-holder-3">
<input class="pro-select2" name="skill_name" id="skill_name" type="text" placeholder="Add Skill (e.g. Voice Talent)">
</div>
<div class="pro-holder-3">
<select class="pro-select2" id="skill_level"  name="skill_level">
<option value="Beginner">Beginner</option>
<option value="Intermediate">Intermediate</option>
<option value="Expert">Expert</option>
</select>
</div>
<div><a class="cancel-btn can-2" href="javascript:void(0)">Cancel</a></div>
<div><a class="add-btn" id="btn2" href="javascript:void(0)">Add</a></div>
<div class="clearfix"></div>
</div>
<table style="border:1px solid #ccc; width:100%" id="skill">
<tr class="table-header">
<td class="table-data">Skill</td>
<td class="table-data">Level</td>
<td class="table-data data-col"><a class="new-2" href="javascript:void(0)"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a></td>
</tr>
<?php
if(count($skills) > 0){
foreach($skills as $skill){	
?>
<tr>
<td class="table-data"><?php echo $skill['seller_skill']; ?></td>
<td class="table-data"><?php echo $skill['seller_skill_level']; ?></td>
<td class="table-data"></td>
<?php
}
}
?>  
</table>
<div class="pro-sec-right-holder-bot">
<ul>
<li></li>
<li>Suggestions:</li>
<li><a href="#">Photoshop</a></li>
<li><a href="#">Logo design</a></li>
<li><a href="#">Graphic design</a></li>
<li><a href="#">Photo editing</a></li>
</ul>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="profile-sec">
<div class="col-lg-3 col-md-3 col-sm-3">
<div class="pro-sec-left">
<h1>Education</h1>
<h3>Did you attend a college or university?</h3>
<div class="pro-tooltip"> WorkO2 is an awesome platform for freelancers to thrive. Let us know your expectations as a seller on WorkO2. </div>
</div>
</div>
<div class="col-lg-9 col-md-9 col-sm-9">
<div class="pro-sec-right">
<div style="display:none;" class="pro-sec-right-holder pro-sec-right-holder-3">
<div class="pro-sec-right-holder-row">
<div class="pro-holder-4">
<select class="pro-select2"  name="education_country" id="education_country">
<option value="">Country of College/University</option>
<option value="India">India</option>
<option value="Us">Us</option>
</select>
</div>
<div class="pro-holder-4 pull-right">
<input class="pro-select2" name="education_name" id="education_name" type="text" placeholder="College/University name">
</div>
</div>
<div class="pro-sec-right-holder-row-2">
<div class="pro-holder-5">
<select class="pro-select2"  name="education_title" id="education_title">
<option value="">Title</option>
<option value="B.A.">B.A.</option>
<option value="B.Sc.">B.Sc.</option>
<option value="M.A.">M.A.</option>
<option value="M.Sc.">M.Sc.</option>
<option value="J.D.">J.D.</option>
</select>
</div>
<div class="pro-holder-6">
<input class="pro-select2" name="education_degree" id="education_degree" type="text" placeholder="Degree">
</div>
</div>
<div class="pro-sec-right-holder-row">
<div class="pro-sec-right-holder-row-left">
<div class="pro-holder-7">
<select class="pro-select2" name="education_year_from" id="education_year_from">
<option value="">From</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
</select>
</div>
<div class="pro-holder-8">-</div>
<div class="pro-holder-7">
<select class="pro-select2"  name="education_year_to" id="education_year_to">
<option value="">To</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
</select>
</div>
</div>
<div class="pro-sec-right-holder-row-right">
<div> <a class="cancel-btn can-3" href="javascript:void(0)">Cancel</a> </div>
<div> <a class="add-btn" id="btn3" href="javascript:void(0)">Add</a> </div>
</div>
</div>
<div class="clearfix"></div>
</div>
<table style="border:1px solid #ccc; width:100%" id="edu">
<tr class="table-header">
<td class="table-data">Degree</td>
<td class="table-data">Year</td>
<td class="table-data data-col"><a class="new-3" href="javascript:void(0)"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a></td>
</tr>
<?php
if(count($educations) > 0){
foreach($educations as $education){	
?>
<tr>
<td class="table-data"><?php echo $education['seller_edu_degree']; ?></td>
<td class="table-data"><?php echo $education['seller_edu_from'].'-'.$education['seller_edu_to']; ?></td>
<td class="table-data"></td>
<?php
}
}
?>  
</table>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="profile-sec">
<div class="col-lg-3 col-md-3 col-sm-3">
<div class="pro-sec-left">
<h1>Certification</h1>
<h3>Do you have any certifications?</h3>
<div class="pro-tooltip"> WorkO2 is an awesome platform for freelancers to thrive. Let us know your expectations as a seller on WorkO2. </div>
</div>
</div>
<div class="col-lg-9 col-md-9 col-sm-9">
<div class="pro-sec-right">
<div style="display:none;" class="pro-sec-right-holder pro-sec-right-holder-4">
<div class="pro-sec-right-holder-row">
<div class=" pro-holder pro-holder-10">
<input class="pro-select2" name="certifications_name" id="certifications_name" type="text" placeholder="Certificate or Award">
</div>
</div>
<div class="pro-sec-right-holder-row-2">
<div class="pro-holder-4 pro-holder-9 margin-right">
<input class="pro-select2" name="certifications_from" id="certifications_from" type="text" placeholder="Certified From (e.g. Adobe)">
</div>
<div class="pro-holder-5 margin-right">
<select class="pro-select2" name="certifications_year" id="certifications_year">
<option value="">Year</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
</select>
</div>
<div><a class="cancel-btn can-4" href="javascript:void(0)">Cancel</a></div>
<div><a class="add-btn" id="btn4" href="javascript:void(0)">Add</a></div>
</div>
<div class="clearfix"></div>
</div>
<table style="border:1px solid #ccc; width:100%" id="certificate">
<tr class="table-header">
<td class="table-data">Certificate Or Award</td>
<td class="table-data">Year</td>
<td class="table-data data-col"><a class="new-4" href="javascript:void(0)"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a></td>
</tr>
<?php
if(count($certificates) > 0){
foreach($certificates as $certificate){	
?>
<tr>
<td class="table-data"><?php echo $certificate['seller_cerified']; ?></td>
<td class="table-data"><?php echo $certificate['seller_cerified_year']; ?></td>
<td class="table-data"></td>
<?php
}
}
?>  
</table>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="profile-sec">
<div class="col-lg-3 col-md-3 col-sm-3">
<div class="pro-sec-left">
<h1>Portfolio</h1>
<h3>Do you have a portfolio or a Website?</h3>
<div class="pro-tooltip"> WorkO2 is an awesome platform for freelancers to thrive. Let us know your expectations as a seller on WorkO2. </div>
</div>
</div>
<div class="col-lg-9 col-md-9 col-sm-9">
<div class="pro-sec-right">
<div style="display:none;" class="pro-sec-right-holder pro-sec-right-holder-5">
<div class="pro-sec-right-holder-row">
<div class=" pro-holder pro-holder-10">
<input class="pro-select2" name="profile_description" id="profile_description" type="text" placeholder="Description">
</div>
</div>
<div class="pro-sec-right-holder-row-2">
<div class="pro-holder pro-holder-11 margin-right">
<input class="pro-select2" name="profile_url" id="profile_url" type="text" placeholder="e.g. http://MyPortfolio.com">
</div>
<div><a class="cancel-btn can-5" href="javascript:void(0)">Cancel</a></div>
<div><a class="add-btn" id="btn5" href="javascript:void(0)">Add</a></div>
</div>
<div class="clearfix"></div>
</div>
<table style="border:1px solid #ccc; width:100%" id="portfolio">
<tr class="table-header">
<td class="table-data">Description</td>
<td class="table-data">URL</td>
<td class="table-data data-col"><a class="new-5" href="javascript:void(0)"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a></td>
</tr>
<?php
if(count($portfolios) > 0){
foreach($portfolios as $portfolio){	
?>
<tr>
<td class="table-data"><?php echo $portfolio['seller_profile_web']; ?></td>
<td class="table-data"><?php echo $portfolio['seller_profile_web_link']; ?></td>
<td class="table-data"></td>
<?php
}
}
?>  
</table>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="profile-sec">
<div class="col-lg-3 col-md-3 col-sm-3">
<div class="pro-sec-left">
<h1>Description</h1>
<div class="pro-tooltip"> WorkO2 is an awesome platform for freelancers to thrive. Let us know your expectations as a seller on WorkO2. </div>
</div>
</div>
<div class="col-lg-9 col-md-9 col-sm-9">
<div class="pro-sec-right">
<div class="description-holder">
<textarea class="des-text" name="" cols="" rows="" placeholder="Please tell us about any hobbies, additional expertise, or anything else you’d like to add."></textarea>
<p>Description must be between 150-300 characters.</p>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="profile-sec">
<input class="seller-pro-btn pull-right" name="" type="button" value="Continue & Create Your First Gig">
<div class="clearfix"></div>
</div>
</div>
</div>
</section>
</main>
<?php include('inc/footer.php'); ?>
<script type="text/javascript">
$(document).ready(function(){
$(".can-1").click(function(){
$(".pro-sec-right-holder-1").hide();
});
$(".new-1").click(function(){
$('#language_name').val('');
$('select#language_type option:selected').val('');		
$(".pro-sec-right-holder-1").show();
});
});
$(document).ready(function(){
$(".can-2").click(function(){
$(".pro-sec-right-holder-2").hide();
});
$(".new-2").click(function(){
$('#skill_name').val('');
$(".pro-sec-right-holder-2").show();
});
});
$(document).ready(function(){
$(".can-3").click(function(){
$(".pro-sec-right-holder-3").hide();
});
$(".new-3").click(function(){
$('#education_name').val('');
$('#education_degree').val('');
$(".pro-sec-right-holder-3").show();
});
});
$(document).ready(function(){
$(".can-4").click(function(){
$(".pro-sec-right-holder-4").hide();
});
$(".new-4").click(function(){
$('#certifications_name').val('');
$('#certifications_from').val('');
$(".pro-sec-right-holder-4").show();
});
});
$(document).ready(function(){
$(".can-5").click(function(){
$(".pro-sec-right-holder-5").hide();
});
$(".new-5").click(function(){
$('#profile_description').val('');
$('#profile_url').val('');
$(".pro-sec-right-holder-5").show();
});
});
</script>
</body>
</html>
