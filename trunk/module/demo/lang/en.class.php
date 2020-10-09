<?php
namespace moonlight\demo\lang;

class en extends \moonlight\lang\lang_base implements \moonlight\moonlight_lang{
	
	public function get_version(){			return '1.0.0';			}
	public function get_last_updated(){		return '2010-07-02';	}
	
	/* General */
	protected $COPY_RIGHT = '&COPY; 2019 All Rights Reserved.';

	protected $MENU_HOME = 'Home';
	protected $MENU_USER = 'User';
	protected $MENU_USER_GROUP = 'User Group';

	/* Common */
	protected $LBL_EN = 'English';
	protected $LBL_BM = 'Bahasa Malaysia';
	protected $CONFIRM_DELETE = 'Confirm deleting this record?';
	protected $DATE_MODIFIED = 'Date Modified';
	protected $RECORD_SAVED = 'Record saved.';

	/* Unauthorised access msg	 */
	protected $MODULE_NOT_AUTHORISED = "<b>RESTRICTED</b><br><br>You have attempted to access a restricted page.<br><br>If you require access to a blocked page, or believe that a page is being blocked in error, please forward that information, including the exact URL, to <a href='mailto:<MAIL>'><MAIL>.</a>";
	protected $MODULE_REDIRECT_MSG = "You will be redirected in <span id='timeCount'></span>seconds. ";
	protected $MODULE_AUTHORISED_ERROR = "Error Message";
}

?>