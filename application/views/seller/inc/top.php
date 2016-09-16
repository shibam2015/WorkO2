<?php $SESSION_UERS_DATA = $this->session->userdata('seller_details'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo SITE_TITLE; ?></title>
<link rel="stylesheet" href="<?php echo site_url('assets/css/style.css'); ?>" type="text/css">
<link rel="stylesheet" href="<?php echo site_url('assets/css/media.css'); ?>" type="text/css">
<link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.css'); ?>" type="text/css">
<link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap-theme.css'); ?>" type="text/css">
<link rel="stylesheet" href="<?php echo site_url('assets/css/font-awesome.min.css'); ?>" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/bootstrap.js'); ?>"></script>
<?php include('assets/js/script.php'); ?>
<?php include('assets/js/sellerscript.php'); ?>
<script type="text/javascript" src="<?php echo site_url('assets/js/image-scale.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery.flexisel.js'); ?>"></script>
<link type="text/css" rel="stylesheet" href="<?php echo site_url('assets/css/sweetalert.css'); ?>">
<script type="text/javascript" src="<?php echo site_url('assets/js/sweetalert.min.js'); ?>"></script>
</head>