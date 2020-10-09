<div class="login-block h-100">
    <div id="testclass">
        <div class="row" id="mainrows">
            <div class="col-md-3 login-sec">
                <div style="text-align: center; color: #fff; margin-bottom: 30px">
                    <span><h1>Login</h1></span>
                </div>
                
                <form class="login-form" id="frm_login" name="frm_login" method="post" onsubmit="return validate(this);">
                    <div class="form-group">
                        <input name="txt_usr_id" type="text" class="form-control" placeholder="<?php echo \E::get( 'obj_system_lang')->get('USER_ID') ?>" style="border-top: transparent; background-color: transparent; border-right: transparent; border-left: transparent; border-bottom: 2px solid #fff; border-radius: 0px;" />
                        <input name="txt_usr_login" value="LOGIN" type="hidden" />

                    </div>
                    <div class="form-group">
                        <input name="txt_usr_password" type="password" class="form-control" placeholder="<?php echo \E::get( 'obj_system_lang')->get('USER_PASSWORD') ?>" onKeyPress="handleKeyPress(this.name, event)" style="border-top: transparent; background-color: transparent; border-right: transparent; border-left: transparent; border-bottom: 2px solid #fff; border-radius: 0px;" />
                    </div>
                    <div style="display: flex; justify-content: center; align-items: center;">
                        <button type="submit" class="btn btn-block btn-primary m-0" style="background-color: #fff; color: #000; border-radius: 25px; width: 200px;"><b>Login</b></button>
                    </div>
                    
                    <p style="text-align: center; color: #fff; padding-top: 10px">OR</p>
                    <a style="text-decoration: none;color: white; background-color: #4bbdc1;" href="<?php echo MOONLIGHT_FOLDER_PATH ?>?swkid_login" class="btn btn-block">Login with SarawakID</a>
                </form>
            </div>
        </div>        
    </div>
    <div class="fixed-bottom" id="displayLoginImage">
        <div style="display: flex;height: 100%;align-items: center; color: white; padding-left: 25%;font-size: 12px; background-color: #201b4f; padding-top: 8px; padding-bottom: 8px ">
            Copyright 2020 @ State Human Resource Unit of Sarawak Government. All Rights Reserved. Best viewed with latest version of Firefox or Chrome.
        </div>
    </div>
</div>
<!--     <div class="container" style="">
        <div class="row">
            <div class="col-md-4 login-sec">
                <h2 class="text-center">Login</h2>
                <form class="login-form" id="frm_login" name="frm_login" method="post" onsubmit="return validate(this);">
                    <div class="form-group">
                        <input name="txt_usr_id" type="text" class="form-control" placeholder="<?php echo \E::get( 'obj_system_lang')->get('USER_ID') ?>" />
                        <input name="txt_usr_login" value="LOGIN" type="hidden" />

                    </div>
                    <div class="form-group">
                        <input name="txt_usr_password" type="password" class="form-control" placeholder="<?php echo \E::get( 'obj_system_lang')->get('USER_PASSWORD') ?>" onKeyPress="handleKeyPress(this.name, event)" />
                    </div>
                    <button type="submit" class="btn btn-block btn-primary m-0">Login</button>
                    <p style="text-align: center;">OR</p>
                    <a style="text-decoration: none;color: white; background-color: grey;" href="<?php echo MOONLIGHT_FOLDER_PATH ?>?swkid_login" class="btn btn-block">Login with SarawakID</a>
                    <p style="font-size: 15px;text-align: center;padding-top: 4px;"><b>State Award Management System</b></p>
                </form>
            </div>
        </div>
    </div> -->