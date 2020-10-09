    <nav class="navbar navbar-expand navbar-blue bg-white">
        <!-- <a class="sidebar-toggle mr-3" href="#"><i class="fa fa-bars"></i></a> -->
        <a class="sidebar-toggle navbar-brand navbar-width" href="<?php echo MOONLIGHT_FOLDER_PATH;?>">
            <b>
			<?php
			echo \E::get( 'obj_curr_module')->get_fullname();
			?>
            </b>
		</a>
        <div class="navbar-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item nav-active">
                    <a href="#" class="nav-link">Darjah Kebesaran, Bintang & Pingat Negeri Sarawak</a>
                    
                </li>
            </ul>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" id="dd_user" class="nav-link dropdown-toggle" data-toggle="dropdown"><!-- <?php echo \E::get( 'obj_system_module')->get_image_tag('profile.png'); ?> --><i class="fas fa-user"></i>&nbsp;<?php echo \E::get_session('full_name');?></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd_user">
                        <a href="<?php echo \E::get('obj_curr_module')->build_action_path('user','logout','','','system')?>" class="dropdown-item">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
