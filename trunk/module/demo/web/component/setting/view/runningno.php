<h3 class="mb-4" style="padding-left: 10px; padding-top: 10px"><u>Running Number</u></h3>
<div class='card mb-4'>
    <div class="card-body">
        <table id="tbl_responsive" cellpadding="0" cellspacing="0" border="0" class="table" width="100%">
            <thead>
                <tr>
                    <th><?php echo \E::get( 'obj_curr_module_lang')->get('SETTING_RUN_NAME'); ?></th>
                    <th class="text-center"><?php echo \E::get( 'obj_curr_module_lang')->get('SETTING_PREFIX'); ?></th>
                    <th class="text-center"><?php echo \E::get( 'obj_curr_module_lang')->get('SETTING_NEXT_NUM'); ?></th>
                    <th class="text-center"><?php echo \E::get( 'obj_curr_module_lang')->get('SETTING_DIGIT_NUM'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if($v_folio && is_array($v_folio)){
                        $v_count = 1;
                        foreach($v_folio as $v_row){
                            $v_class = ( $v_count%2 == 1 ) ? "odd" : "normal";

                            echo '<tr 
                                id="row'.$v_count.'"
                                onMouseOver="record_listing_highlight( this, \'highlight\' )"
                                onMouseOut ="record_listing_highlight( this, \'' . $v_class . '\' )"
                                onClick    ="record_listing_click_tr ( this, \'' . $v_class . '\', \'chkRow'.$v_count.'\' )"
                                ondblclick = "window.location=\''.\E::get('obj_curr_module')->build_action_path('user','view',$v_row['folio_id']).'\'"
                            
                            >';

                            echo '<td align="left" align="left">' . \U::safe_display_string($v_row["form_name"]) . '</td>';
                            echo '<td align="center" data-title="prefix">' . \U::safe_display_string($v_row["awdc_acronym"]) . '</td>';
                            echo '<td align="center" data-title="running_no">' . \U::safe_display_string($v_row["folio_running_no"]) . '</td>';
                            echo '<td align="center" data-title="digit_number">4</td>';
                        
                            ++$v_count;
                        }
                    
                    }else{
                        echo '<tr><td colspan="7" align="center">'. \E::get( 'obj_kernel_lang')->get('MSG_NO_RECORD_FOUND') . '</td></tr>';
                    }
                    ?>
            </tbody>
        </table>
    </div>   
</div>
