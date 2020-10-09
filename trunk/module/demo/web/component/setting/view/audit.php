<div class="row row2">
    <div class="col-7 title">
        <b>SETTINGS</b>
    </div>
</div>
<div class="row" style="width:30%; padding-left: 0.5rem;">
    <div class="col">
        <table>
            <tr>
                <td>
                    <a href="<?php echo \E::get('obj_curr_module')->build_action_path('setting','activitylog'); ?>">
                        <div class="square">
                           <?php echo \E::get( 'obj_system_module')->get_image_tag('setting.png'); ?>
                        </div>
                    </a>                    
                </td>
            </tr>            
            <tr>
                <td>
                    <div class="sub-setting">Activity Log</div>                    
                </td>
            </tr>
        </table>  
    </div>
    <div class="col">
        <table>
            <tr>
                <td>
                    <a href="<?php echo \E::get('obj_curr_module')->build_action_path('setting','transaction'); ?>">
                        <div class="square">
                           <?php echo \E::get( 'obj_system_module')->get_image_tag('setting.png'); ?>
                        </div>
                    </a>                    
                </td>
            </tr>            
            <tr>
                <td>
                    <div class="sub-setting">Transaction</div>                    
                </td>
            </tr>
        </table>
    </div>   
</div>