<h3 class="mb-4" style="padding-left: 10px; padding-top: 10px"><u>Preset Document</u></h3>
<div class='card mb-4'>
    <div class="card-body">
        <div class="form-group row">
            <?php
                if($v_doc_version && is_array($v_doc_version)){
                    $v_count = 1;
                    foreach($v_doc_version as $v_row){
                        $v_class = ( $v_count%2 == 1 ) ? "odd" : "normal";

                        echo "<label for='pre_name' class='col-sm-2 col-form-label'>".\U::safe_display_string($v_row["form_name"])."</label>";
                        echo "<div class='col-sm-10'>
                                <input type='text' class='form-control' name='pre_name' id='pre_name' placeholder='Document Name' value='USMN/BP/".\U::safe_display_string(isset($v_row["version_prefix"]) ? $v_row["version_prefix"] : "")."/20'>
                            </div>";
                    
                        ++$v_count;
                    }
                
                }else{
                    echo "<label for='pre_name' class='col-sm-2 col-form-label'>".\E::get('obj_system_lang')->get('SETTING_FORM_NAME')."</label>";
                    echo "<div class='col-sm-10'>
                            <input type='text' class='form-control' name='pre_name' id='pre_name' placeholder='Document Name' value=''>
                        </div>";
                }
                ?>
        </div>
    </div>
</div>