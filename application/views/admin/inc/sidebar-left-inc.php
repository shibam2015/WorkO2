<li class="nav-item <?php if(($page_name == 'create-page') || ($page_name == 'list-page') || ($page_name == 'edit-page')){ echo 'active open'; } ?>">
<a href="javascript:;" class="nav-link nav-toggle">
<i class="icon-docs"></i>
<span class="title">Pages Manager</span>
<span class="arrow"></span>
</a>
<ul class="sub-menu">
<li class="nav-item <?php if(($page_name == 'list-page') ){ echo 'active open'; } ?>">
<a href="<?php _e(site_url('dashboard/view-list-page')); ?>" class="nav-link ">
<span class="title">List Pages</span>
</a>
</li>
<li class="nav-item <?php if(($page_name == 'create-page') ){ echo 'active open'; } ?>">
<a href="<?php _e(site_url('dashboard/view-create-page')); ?>" class="nav-link ">
<span class="title">Create Pages</span>
</a>
</li>
</ul>
</li>
<li class="nav-item <?php if(($page_name == 'create-iwtw') || ($page_name == 'list-iwtw') || ($page_name == 'edit-iwtw')){ echo 'active open'; } ?>">
<a href="javascript:;" class="nav-link nav-toggle">
<i class="fa fa-chevron-circle-down"></i>
<span class="title">I Want To Work Level</span>
<span class="arrow"></span>
</a>
<ul class="sub-menu">
<li class="nav-item <?php if(($page_name == 'list-iwtw') ){ echo 'active open'; } ?>">
<a href="<?php _e(site_url('dashboard/view-list-iwtw')); ?>" class="nav-link ">
<span class="title">List Dropdown</span>
</a>
</li>
<li class="nav-item <?php if(($page_name == 'create-iwtw') ){ echo 'active open'; } ?>">
<a href="<?php _e(site_url('dashboard/view-create-iwtw')); ?>" class="nav-link ">
<span class="title">Create Dropdown</span>
</a>
</li>
</ul>
</li>
<li class="nav-item <?php if(($page_name == 'create-icw') || ($page_name == 'list-icw') || ($page_name == 'edit-icw')){ echo 'active open'; } ?>">
<a href="javascript:;" class="nav-link nav-toggle">
<i class="fa fa-chevron-circle-down"></i>
<span class="title">I Can Work Level</span>
<span class="arrow"></span>
</a>
<ul class="sub-menu">
<li class="nav-item <?php if(($page_name == 'list-icw') ){ echo 'active open'; } ?>">
<a href="<?php _e(site_url('dashboard/view-list-icw')); ?>" class="nav-link ">
<span class="title">List Dropdown</span>
</a>
</li>
<li class="nav-item <?php if(($page_name == 'create-icw') ){ echo 'active open'; } ?>">
<a href="<?php _e(site_url('dashboard/view-create-icw')); ?>" class="nav-link ">
<span class="title">Create Dropdown</span>
</a>
</li>
</ul>
</li>
<li class="nav-item <?php if(($page_name == 'create-iwlte') || ($page_name == 'list-iwlte') || ($page_name == 'edit-iwlte')){ echo 'active open'; } ?>">
<a href="javascript:;" class="nav-link nav-toggle">
<i class="fa fa-chevron-circle-down"></i>
<span class="title">I Like To Earn Level</span>
<span class="arrow"></span>
</a>
<ul class="sub-menu">
<li class="nav-item <?php if(($page_name == 'list-iwlte') ){ echo 'active open'; } ?>">
<a href="<?php _e(site_url('dashboard/view-list-iwlte')); ?>" class="nav-link ">
<span class="title">List Dropdown</span>
</a>
</li>
<li class="nav-item <?php if(($page_name == 'create-iwlte') ){ echo 'active open'; } ?>">
<a href="<?php _e(site_url('dashboard/view-create-iwlte')); ?>" class="nav-link ">
<span class="title">Create Dropdown</span>
</a>
</li>
</ul>
</li>
<li class="nav-item <?php if(($page_name == 'create-ll') || ($page_name == 'list-ll') || ($page_name == 'edit-ll')){ echo 'active open'; } ?>">
<a href="javascript:;" class="nav-link nav-toggle">
<i class="fa fa-chevron-circle-down"></i>
<span class="title">Language Level</span>
<span class="arrow"></span>
</a>
<ul class="sub-menu">
<li class="nav-item <?php if(($page_name == 'list-ll') ){ echo 'active open'; } ?>">
<a href="<?php _e(site_url('dashboard/view-list-ll')); ?>" class="nav-link ">
<span class="title">List Dropdown</span>
</a>
</li>
<li class="nav-item <?php if(($page_name == 'create-ll') ){ echo 'active open'; } ?>">
<a href="<?php _e(site_url('dashboard/view-create-ll')); ?>" class="nav-link ">
<span class="title">Create Dropdown</span>
</a>
</li>
</ul>
</li>
<li class="nav-item <?php if(($page_name == 'create-el') || ($page_name == 'list-el') || ($page_name == 'edit-el')){ echo 'active open'; } ?>">
<a href="javascript:;" class="nav-link nav-toggle">
<i class="fa fa-chevron-circle-down"></i>
<span class="title">Experience Level</span>
<span class="arrow"></span>
</a>
<ul class="sub-menu">
<li class="nav-item <?php if(($page_name == 'list-el') ){ echo 'active open'; } ?>">
<a href="<?php _e(site_url('dashboard/view-list-el')); ?>" class="nav-link ">
<span class="title">List Dropdown</span>
</a>
</li>
<li class="nav-item <?php if(($page_name == 'create-el') ){ echo 'active open'; } ?>">
<a href="<?php _e(site_url('dashboard/view-create-el')); ?>" class="nav-link ">
<span class="title">Create Dropdown</span>
</a>
</li>
</ul>
</li>
<li class="nav-item <?php if(($page_name == 'create-title') || ($page_name == 'list-title') || ($page_name == 'edit-title')){ echo 'active open'; } ?>">
<a href="javascript:;" class="nav-link nav-toggle">
<i class="fa fa-chevron-circle-down"></i>
<span class="title">Title Level</span>
<span class="arrow"></span>
</a>
<ul class="sub-menu">
<li class="nav-item <?php if(($page_name == 'list-title') ){ echo 'active open'; } ?>">
<a href="<?php _e(site_url('dashboard/view-list-title')); ?>" class="nav-link ">
<span class="title">List Dropdown</span>
</a>
</li>
<li class="nav-item <?php if(($page_name == 'create-title') ){ echo 'active open'; } ?>">
<a href="<?php _e(site_url('dashboard/view-create-title')); ?>" class="nav-link ">
<span class="title">Create Dropdown</span>
</a>
</li>
</ul>
</li>
<li class="nav-item <?php if(($page_name == 'create-jobc') || ($page_name == 'list-jobc') || ($page_name == 'edit-jobc')){ echo 'active open'; } ?>">
<a href="javascript:;" class="nav-link nav-toggle">
<i class="fa fa-chevron-circle-down"></i>
<span class="title">Job Category</span>
<span class="arrow"></span>
</a>
<ul class="sub-menu">
<li class="nav-item <?php if(($page_name == 'list-jobc') ){ echo 'active open'; } ?>">
<a href="<?php _e(site_url('dashboard/view-list-jobc')); ?>" class="nav-link ">
<span class="title">List Category</span>
</a>
</li>
<li class="nav-item <?php if(($page_name == 'create-jobc') ){ echo 'active open'; } ?>">
<a href="<?php _e(site_url('dashboard/view-create-jobc')); ?>" class="nav-link ">
<span class="title">Create Category</span>
</a>
</li>
</ul>
</li>
<li class="nav-item <?php if(($page_name == 'create-jobsc') || ($page_name == 'list-jobsc') || ($page_name == 'edit-jobsc')){ echo 'active open'; } ?>">
<a href="javascript:;" class="nav-link nav-toggle">
<i class="fa fa-chevron-circle-down"></i>
<span class="title">Job Subcategory</span>
<span class="arrow"></span>
</a>
<ul class="sub-menu">
<li class="nav-item <?php if(($page_name == 'list-jobsc') ){ echo 'active open'; } ?>">
<a href="<?php _e(site_url('dashboard/view-list-jobsc')); ?>" class="nav-link ">
<span class="title">List Subcategory</span>
</a>
</li>
<li class="nav-item <?php if(($page_name == 'create-jobsc') ){ echo 'active open'; } ?>">
<a href="<?php _e(site_url('dashboard/view-create-jobsc')); ?>" class="nav-link ">
<span class="title">Create Subcategory</span>
</a>
</li>
</ul>
</li>


