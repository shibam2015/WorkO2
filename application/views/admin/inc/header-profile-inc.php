<li class="dropdown dropdown-user">
<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
<?php /*?><img alt="" class="img-circle" src="<?php echo site_url('assets'); ?>/layouts/layout/img/avatar3_small.jpg" /><?php */?>
<span class="username username-hide-on-mobile"> Admin </span>
<i class="fa fa-angle-down"></i>
</a>
<ul class="dropdown-menu dropdown-menu-default">
<li>
<a href="<?php _e(site_url('dashboard/my-profile/1')); ?>">
<i class="icon-user"></i> My Profile </a>
</li>
<li>
<a href="<?php _e(site_url('dashboard/change-password/1')); ?>">
<i class="icon-key"></i> Chanage Password </a>
</li>
<li>
<a href="<?php _e(site_url('dashboard/setting/1')); ?>">
<i class="icon-settings"></i> Website Setting </a>
</li>
<li>
<a href="javascript:void(0)>">
<i class="icon-settings"></i> API Setting </a>
</li>
<li>
<a href="<?php _e(site_url('admin/logout')); ?>">
<i class="icon-lock"></i> Log Out </a>
</li>
</ul>
</li>