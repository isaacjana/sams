<div class="row row2">
    <div class="col-7 title">
        <b>SETTINGS</b>
    </div>
</div>
<div class="row" style="width:70%; padding-left: 0.5rem;">
    <div class="col">
        <table>
            <tr>
                <td>
                    <a href="<?php echo \E::get('obj_curr_module')->build_action_path('setting','usermanagement'); ?>">
                        <div class="square">
                           <?php echo \E::get( 'obj_system_module')->get_image_tag('setting.png'); ?>
                        </div>
                    </a>                    
                </td>
            </tr>            
            <tr>
                <td>
                    <div class="sub-setting">User Management</div>                    
                </td>
            </tr>
        </table>  
    </div>
    <div class="col">
        <table>
            <tr>
                <td>
                    <a href="<?php echo \E::get('obj_curr_module')->build_action_path('setting','useraccess'); ?>">
                        <div class="square">
                           <?php echo \E::get( 'obj_system_module')->get_image_tag('setting.png'); ?>
                        </div>
                    </a>                    
                </td>
            </tr>            
            <tr>
                <td>
                    <div class="sub-setting">User Access</div>                    
                </td>
            </tr>
        </table>
    </div>
    <div class="col">
        <table>
            <tr>
                <td>
                    <a href="<?php echo \E::get('obj_curr_module')->build_action_path('setting','runningno'); ?>">
                        <div class="square">
                           <?php echo \E::get( 'obj_system_module')->get_image_tag('setting.png'); ?>
                        </div>
                    </a>                    
                </td>
            </tr>            
            <tr>
                <td>
                    <div class="sub-setting">Running No.</div>                    
                </td>
            </tr>
        </table>
    </div>
    <div class="col">
        <table>
            <tr>
                <td>
                    <a href=<?php echo \E::get('obj_curr_module')->build_action_path('setting','tarikh_pencalonan'); ?>>
                        <div class="square">
                           <?php echo \E::get( 'obj_system_module')->get_image_tag('setting.png'); ?>
                        </div>
                    </a>                    
                </td>
            </tr>            
            <tr>
                <td>
                    <div class="sub-setting">Tarikh Pencalonan</div>                    
                </td>
            </tr>
        </table>
    </div>    
    <div class="col">
        <table>
            <tr>
                <td>
                    <a href="<?php echo \E::get('obj_curr_module')->build_action_path('setting','preset'); ?>">
                        <div class="square">
                           <?php echo \E::get( 'obj_system_module')->get_image_tag('setting.png'); ?>
                        </div>
                    </a>                    
                </td>
            </tr>            
            <tr>
                <td>
                    <div class="sub-setting">Preset</div>                    
                </td>
            </tr>
        </table>
    </div>
</div>