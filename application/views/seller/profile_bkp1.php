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
<form action="<?php echo site_url('seller/update_seller_details'); ?>" method="post">
<input type="hidden" name="user_id" value="<?php echo $SESSION_UERS_DATA[0]['id']; ?>">
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
<select class="pro-select" name="seller_availability_type" id="seller_availability_type" required>
<option value="">I want to work</option>
<?php
if(count($iwtw_l) > 0){
foreach($iwtw_l as $iwtw){
?>
<option value="<?php echo $iwtw['id']; ?>" <?php if($data[0]['seller_availability_type'] == $iwtw['id']){?> selected <?php } ?>><?php echo $iwtw['dropdown_value']; ?></option>
<?php
}
}
?>
</select>
</div>
<div class="pro-holder" style="display:<?php if(isset($data[0]['seller_availability_type'])){?> block <?php }else{?> none <?php } ?>" id="sec1"> 
<i class="fa fa-clock-o" aria-hidden="true"></i>
<select class="pro-select" name="seller_availability_time" id="seller_availability_time" required>
<option value="">I can work</option>
<?php
if(count($icw_l) > 0){
foreach($icw_l as $icw){
?>
<option value="<?php echo $icw['id']; ?>" <?php if($data[0]['seller_availability_time'] == $icw['id']){?> selected <?php } ?>><?php echo $icw['dropdown_value']; ?></option>
<?php
}
}
?>
</select>
</div>
<div class="pro-holder" style="display:<?php if(isset($data[0]['seller_availability_type'])){?> block <?php }else{?> none <?php } ?>" id="sec2"> 
<i class="fa fa-usd" aria-hidden="true"></i>
<select class="pro-select" name="seller_availability_amount" id="seller_availability_amount" required>
<option value="">I would like to earn</option>
<?php
if(count($iwlte_l) > 0){
foreach($iwlte_l as $iwlte){
?>
<option value="<?php echo $iwlte['id']; ?>" <?php if($data[0]['seller_availability_amount'] == $iwlte['id']){?> selected <?php } ?>><?php echo $iwlte['dropdown_value']; ?></option>
<?php
}
}
?>
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
<option value="">Select Language</option>
<?php
if(count($lang_l) > 0){
foreach($lang_l as $lang){
?>
<option value="<?php echo $lang['id']; ?>"><?php echo $lang['dropdown_value']; ?></option>
<?php
}
}
?>
</select>
</div>
<div><a class="cancel-btn can-1" href="javascript:void(0)">Cancel</a></div>
<div><a class="add-btn" id="btn1" href="javascript:void(0)">Add</a></div>
<div class="clearfix"></div>
</div>
<div style="border: 1px solid #ccc;">

<table style="width:100%" id="lang">
<tr class="table-header">
<td class="table-data2 header-col">Language</td>
<td class="table-data2 header-col">Level</td>
<td class="table-data2 data-col"><a class="new-1" href="javascript:void(0)"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a></td>
</tr>
<tr>
<td id="lang1">
<?php
if(count($languages) > 0){
foreach($languages as $language){	
?>
<tr class="table-row1">
<td class="table-data2"><?php echo '111'.$language['seller_language']; ?></td>
<td class="table-data2"><?php echo $language['seller_language_level']; ?></td>
<td class="table-data3">
<div class="table-icon">
<ul>
<li><a href="javascript:void(0)" onClick="editDataLanguage('<?php echo $language['id']; ?>','Language','<?php echo $language['seller_language']; ?>','<?php echo $language['seller_language_level']; ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
<li><a href="javascript:void(0)" onClick="deleteData('<?php echo $language['id']; ?>','Language')"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
</ul>
</div>
</td>
</tr>
<?php
}
}
?>
</td>
</tr>
</table>

</div>
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
<option value="">Select Skill</option>
<?php
if(count($exp_l) > 0){
foreach($exp_l as $exp){
?>
<option value="<?php echo $exp['id']; ?>"><?php echo $exp['dropdown_value']; ?></option>
<?php
}
}
?>
</select>
</div>
<div><a class="cancel-btn can-2" href="javascript:void(0)">Cancel</a></div>
<div>
<a class="add-btn" id="btn2" href="javascript:void(0)">Add</a> 
<!--<a class="add-btn" id="btn7" style="display:none" href="javascript:void(0)">Update</a>-->
</div>
<div class="clearfix"></div>
</div>
<div style="border: 1px solid #ccc;">
<table style="width:100%" id="skill">
<tr class="table-header">
<td class="table-data2 header-col">Skill</td>
<td class="table-data2 header-col">Level</td>
<td class="table-data2 data-col"><a class="new-2" href="javascript:void(0)"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a></td>
</tr>
<tr class="table-row1" id="skill1">
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
<li><a href="javascript:void(0)" onClick="editDataSkill('<?php echo $skill['id']; ?>','Skill','<?php echo $skill['seller_skill']; ?>','<?php echo $skill['seller_skill_level']; ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
<li><a href="javascript:void(0)" onClick="deleteData('<?php echo $skill['id']; ?>','Skill')"><i class="fa fa-trash" aria-hidden="true"></i></a><li>
</ul>
</div>
</td>
</tr>
<?php
}
}
?>
</tr>  
</table>
</div>
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
<option value="">Select Title</option>
<?php
if(count($title_l) > 0){
foreach($title_l as $title){
?>
<option value="<?php echo $title['id']; ?>"><?php echo $title['dropdown_value']; ?></option>
<?php
}
}
?>
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
<?php
for($y_1=date('Y');$y_1>=1960; $y_1--){
?>
<option value="<?php echo $y_1; ?>"><?php echo $y_1; ?></option>
<?php
}
?>
</select>
</div>
<div class="pro-holder-8">-</div>
<div class="pro-holder-7">
<select class="pro-select2"  name="education_year_to" id="education_year_to">
<option value="">To</option>
<?php
for($y_2=date('Y');$y_2>=1960; $y_2--){
?>
<option value="<?php echo $y_2; ?>"><?php echo $y_2; ?></option>
<?php
}
?>
</select>
</div>
</div>
<div class="pro-sec-right-holder-row-right">
<div> <a class="cancel-btn can-3" href="javascript:void(0)">Cancel</a> </div>
<div> 
<a class="add-btn" id="btn3" href="javascript:void(0)">Add</a> 
<!--<a class="add-btn" id="btn8" style="display:none" href="javascript:void(0)">Update</a>-->
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
<div style="border: 1px solid #ccc;">
<table style="width:100%" id="edu">
<tr class="table-header">
<td class="table-data2 header-col">Degree</td>
<td class="table-data2 header-col">Year</td>
<td class="table-data2 data-col"><a class="new-3" href="javascript:void(0)"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a></td>
</tr>
<tr class="table-row1" id="edu1">
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
<li><a href="javascript:void(0)" onClick="editDataEducation('<?php echo $education['id']; ?>','Education','<?php echo $education['seller_edu_country']; ?>','<?php echo $education['seller_edu_collage_name']; ?>','<?php echo $education['seller_edu_title']; ?>','<?php echo $education['seller_edu_degree']; ?>','<?php echo $education['seller_edu_from']; ?>','<?php echo $education['seller_edu_to']; ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></a><li>
<li><a href="javascript:void(0)" onClick="deleteData('<?php echo $education['id']; ?>','Education')"><i class="fa fa-trash" aria-hidden="true"></i></a><li>
</ul>
</div>
</td>
</tr>
<?php
}
}
?>
</tr>
</table>
</div>
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
<?php
for($y_3=date('Y');$y_3>=1960; $y_3--){
?>
<option value="<?php echo $y_3; ?>"><?php echo $y_3; ?></option>
<?php
}
?>
</select>
</div>
<div><a class="cancel-btn can-4" href="javascript:void(0)">Cancel</a></div>
<div>
<a class="add-btn" id="btn4" href="javascript:void(0)">Add</a> 
<!--<a class="add-btn" id="btn9" style="display:none" href="javascript:void(0)">Update</a>-->
</div>
</div>
<div class="clearfix"></div>
</div>
<div style="border: 1px solid #ccc;">
<table style="width:100%" id="certificate">
<tr class="table-header">
<td class="table-data2 header-col">Certificate Or Award</td>
<td class="table-data2 header-col">Year</td>
<td class="table-data2 data-col"><a class="new-4" href="javascript:void(0)"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a></td>
</tr>
<tr class="table-row1" id="certificate1">
<?php
if(count($certificates) > 0){
foreach($certificates as $certificate){	
?>
<tr class="table-row1">
<td class="table-data2"><?php echo $certificate['seller_cerified']; ?></td>
<td class="table-data2"><?php echo $certificate['seller_cerified_year']; ?></td>
<td class="table-data3 ">
<div class="table-icon">
<ul>
<li><a href="javascript:void(0)" onClick="editDataCertificate('<?php echo $certificate['id']; ?>','Certificate','<?php echo $certificate['seller_cerified']; ?>','<?php echo $certificate['seller_cerified_from']; ?>','<?php echo $certificate['seller_cerified_year']; ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></a><li>
<li><a href="javascript:void(0)" onClick="deleteData('<?php echo $certificate['id']; ?>','Certificate')"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
</ul>
</div>
</td>
</tr>
<?php
}
}
?>  
</tr>
</table>
</div>
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
<div>
<a class="add-btn" id="btn5" href="javascript:void(0)">Add</a> 
<!--<a class="add-btn" id="btn10" style="display:none" href="javascript:void(0)">Update</a>-->
</div>
</div>
<div class="clearfix"></div>
</div>
<div style="border: 1px solid #ccc;">
<table style="width:100%" id="portfolio">
<tr class="table-header">
<td class="table-data2 header-col">Description</td>
<td class="table-data2 header-col">URL</td>
<td class="table-data2 data-col"><a class="new-5" href="javascript:void(0)"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a></td>
</tr>
<tr class="table-row1" id="portfolio1">
<?php
if(count($portfolios) > 0){
foreach($portfolios as $portfolio){	
?>
<tr class="table-row1">
<td class="table-data2"><?php echo $portfolio['seller_profile_web']; ?></td>
<td class="table-data2"><?php echo $portfolio['seller_profile_web_link']; ?></td>
<td class="table-data3 ">
<div class="table-icon">
<ul>
<li><a href="javascript:void(0)" onClick="editDataPortfolio('<?php echo $portfolio['id']; ?>','Portfolio','<?php echo $portfolio['seller_profile_web']; ?>','<?php echo $portfolio['seller_profile_web_link']; ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
<li><a href="javascript:void(0)" onClick="deleteData('<?php echo $portfolio['id']; ?>','Portfolio')"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
</ul>
</div>
</td>
</tr> 
<?php
}
}
?>
</tr>
</table>
</div>
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
<textarea class="des-text" required name="seller_description" id="seller_description" cols="" rows="" onKeyUp="countChar(this)" placeholder="Please tell us about any hobbies, additional expertise, or anything else you’d like to add."><?php echo $data[0]['seller_description'];?></textarea>
<p>Description must be between <span id="charNum">300</span> characters.</p>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="profile-sec">
<input class="seller-pro-btn pull-right" name="" type="submit" value="Continue">
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</section>
<input type="hidden" value="" name="fild_id" id="fild_id">
<input type="hidden" value="" name="fild_type" id="fild_type">
</main>
<?php include('inc/footer.php'); ?>
<script type="text/javascript">
$(document).ready(function(){
$(".can-1").click(function(){
$(".pro-sec-right-holder-1").hide('slow',function(){
$('#fild_id').val('0');
$('#fild_type').val('');	
});
});
$(".new-1").click(function(){
$(".pro-sec-right-holder-1").show('slow',function(){
//$('#btn6').hide();
$('#fild_id').val('0');
$('#fild_type').val('');
$('#btn1').html('Add');	
$('#language_name').val('');
$('select#language_type option:selected').val('');		
});
});
});
$(document).ready(function(){
$(".can-2").click(function(){
$(".pro-sec-right-holder-2").hide('slow',function(){
$('#fild_id').val('0');
$('#fild_type').val('');	
});
});
$(".new-2").click(function(){
$(".pro-sec-right-holder-2").show('slow',function(){
//$('#btn7').hide();
$('#fild_id').val('0');
$('#fild_type').val('');
$('#btn2').html('Add');	
$('#skill_name').val('');	
});
});
});
$(document).ready(function(){
$(".can-3").click(function(){
$(".pro-sec-right-holder-3").hide('slow',function(){
$('#fild_id').val('0');
$('#fild_type').val('');	
});
});
$(".new-3").click(function(){
$(".pro-sec-right-holder-3").show('slow',function(){
//$('#btn8').hide();
$('#fild_id').val('0');
$('#fild_type').val('');
$('#btn3').html('Add');	
$('#education_name').val('');
$('#education_degree').val('');	
});
});
});
$(document).ready(function(){
$(".can-4").click(function(){
$(".pro-sec-right-holder-4").hide('slow',function(){
$('#fild_id').val('0');
$('#fild_type').val('');	
});
});
$(".new-4").click(function(){
$(".pro-sec-right-holder-4").show('slow',function(){
//$('#btn9').hide();
$('#fild_id').val('0');
$('#fild_type').val('');
$('#btn4').html('Add');	
$('#certifications_name').val('');
$('#certifications_from').val('');	
});
});
});
$(document).ready(function(){
$(".can-5").click(function(){
$(".pro-sec-right-holder-5").hide('slow',function(){
$('#fild_id').val('0');
$('#fild_type').val('');	
});
});
$(".new-5").click(function(){
$(".pro-sec-right-holder-5").show('slow',function(){
//$('#btn10').hide();
$('#fild_id').val('0');
$('#fild_type').val('');
$('#btn5').html('Add');	
$('#profile_description').val('');
$('#profile_url').val('');	
});
});
});
$(function(){
$('#seller_availability_type').change(function(){
$('#sec1').show('fast',function(){
$('#sec2').show();		
})		
})	
})
</script>
</body>
</html>
