<form class="w-100" id="frm_nom" name="frm_nom" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
    <h3 class="mb-4" style="padding-left: 10px; padding-top: 10px"><u>Tarikh Pencalonan</u></h3>
    <div class='card mb-4'>
        <div class="card-body">
            <div class="form-group row">
                <label for="tarikh_dari" class="col-sm-2 col-form-label">Dari</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" name="tarikh_dari" id="tarikh_dari" placeholder="Dari" value="<?php echo \U::safe_display_string(isset($v_user_detail['tarikh_dari']) ? $v_user_detail['tarikh_dari'] : "");?>">
                </div>
            </div>        

            <div class="form-group row">
                <label for="tarikh_hingga" class="col-sm-2 col-form-label">Hingga</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" name="tarikh_hingga" id="tarikh_hingga" placeholder="Hingga" value="<?php echo \U::safe_display_string(isset($v_user_detail['tarikh_hingga']) ? $v_user_detail['tarikh_hingga'] : "");?>">
                    <input class="w-75 form-control" type="hidden" id="v_id" name="v_id" value="<?php echo \U::safe_display_string(isset($v_id) ? $v_id : "");?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2"></div>
                <div class="col-sm-5">
                    <a href="<?php echo \E::get( 'obj_curr_module')->build_action_path('setting','index');?>" class="btn btn-danger" role="button">
                        <i class="fa fa-fw fa-angle-left"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_BACK'); ?>
                    </a>
                    <a href="javascript:if(validate(document.frm_nom)) document.frm_nom.submit();" class="btn btn-primary" role="button">
                        <i class="fa fa-fw fa-save"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_SAVE'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</form>