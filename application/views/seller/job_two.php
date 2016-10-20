<?php include('inc/top.php'); ?>
<body>
<?php include('inc/header.php'); ?>
<div class="clearfix"></div>
<main>
<section class="seller-profile">
<div class="container">
<form action="<?php echo site_url('seller/job_two'); ?>" method="post">
<input type="hidden" value="<?php echo $id; ?>" name="gig_id" id="gig_id" />
<div class="row">
<div  class="seller-pricing">
<h1>Scope &amp; Pricing</h1>
<div class="seller-pricing-area">
<div class="scope-table">
<div class="table-responsive">
<table class="table table-bordered">
<thead>
<tr class="active">
<th></th>
<th>BASIC</th>
<th>STANDARD</th>
<th>PREMIUM</th>
</tr>
</thead>
<tbody>
<tr>
<td class="active"></td>
<td><textarea placeholder="Name your package" class="name-area" name="package_name[]" required><?php if(!empty($data[0]['package_name'])) echo $data[0]['package_name']; ?></textarea></td>
<td><textarea placeholder="Name your package" class="name-area" name="package_name[]"></textarea></td>
<td><textarea placeholder="Name your package" class="name-area" name="package_name[]"></textarea></td>
</tr>
<tr>
<td class="active"></td>
<td><textarea placeholder="Describe the details of your offering" class="des-area" name="package_description[]" required><?php if(!empty($data[0]['package_description'])) echo $data[0]['package_description']; ?></textarea></td>
<td><textarea placeholder="Describe the details of your offering" class="des-area" name="package_description[]"></textarea></td>
<td><textarea placeholder="Describe the details of your offering" class="des-area" name="package_description[]"></textarea></td>
</tr>
<tr>
<td class="price-td active">Revisions</td>
<td><div class="pricing-select">
<select name="package_revisions[]">
<?php
for($i=1;$i<30;$i++){
?>
<option value="<?php echo $i; ?>"><?php echo $i; ?> Day Delivery</option>
<?php
}
?>
</select>
</div></td>
<td><div class="pricing-select">
<select name="package_revisions[]">
<?php
for($i=1;$i<30;$i++){
?>
<option value="<?php echo $i; ?>"><?php echo $i; ?> Day Delivery</option>
<?php
}
?>
</select>
</div></td>
<td><div class="pricing-select">
<select name="package_revisions[]">
<?php
for($i=1;$i<30;$i++){
?>
<option value="<?php echo $i; ?>"><?php echo $i; ?> Day Delivery</option>
<?php
}
?>
</select>
</div></td>
</tr>
<tr>
<td class="price-td active">Price</td>
<td><div class="pricing-select">
<select name="package_price[]">
<?php
for($p=5;$p<=1000;$p++){
?>
<option value="<?php echo $p; ?>"><?php echo $p; ?> $</option>
<?php
}
?>
</select>
</div></td>
<td><div class="pricing-select">
<select name="package_price[]">
<?php
for($p=5;$p<=1000;$p++){
?>
<option value="<?php echo $p; ?>"><?php echo $p; ?> $</option>
<?php
}
?>
</select>
</div></td>
<td><div class="pricing-select">
<select name="package_price[]">
<?php
for($p=5;$p<=1000;$p++){
?>
<option value="<?php echo $p; ?>"><?php echo $p; ?> $</option>
<?php
}
?>
</select>
</div></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div class="seller-pricing-area">
<?php /*?><h3>My Jobs Extras</h3><?php */?>
<?php /*?><div class="extra-check">
<div class="single-check"><input type="checkbox" id="1"><label for="1">Extra fast delivery</label></div>
<div class="single-check"><input type="checkbox" id="2"><label for="2">Extra fast delivery</label></div>
<div class="single-check"><input type="checkbox" id="3"><label for="3">Extra fast delivery</label></div>
<div class="single-check"><input type="checkbox" id="4"><label for="4">Extra fast delivery</label></div>
</div><?php */?>
<div class="seller-form-holder "> 
<a class="cancel-btn cancel-btn-2" href="<?php echo site_url('seller/seller_view_job_one/'.$id); ?>">Back</a>
<input class="seller-pro-btn pull-right" type="submit" value="Save & Continue" name="">
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
</form>
</div>
</div>
</section>
</main>
<?php include('inc/footer.php'); ?>
</body>
</html>
