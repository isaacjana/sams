<?php
class user_en{
	function get_all_lang_var(){ return get_object_vars($this);	}

  /*User*/
  protected $USER_COMP_NAME = 'User Manager';
  protected $USER_NAME = 'User Name';
  protected $USER_GROUP = 'User Group';
  protected $USER_EXIST = ' is already a user';
  protected $USER_ADD = 'Click to add new user profile if user name is not found.';
  protected $USER_VIEW = 'Click to view user profile.';
  protected $USER_NEWS_NOTIFICATION = 'Receive system notification on submission by non-administrator user';
  protected $USER_AGENCY = 'Agency';
  protected $USER_DEPARTMENT = 'Department';
  protected $USER_UNIT = 'Unit';
  protected $USER_POSITION = 'Designation';
  protected $USER_TYPE = 'User Type';
  protected $USER_TYPE_STAFF = 'Staff / Administrator';
  protected $USER_TYPE_PUBLIC = 'Public User';
  protected $USER_ID_VERIFY = 'Verify';
	protected $USER_STAFF_ADD = 'Add Staff / Administrator';
	protected $USER_PUBLIC_ADD = 'Add Public User';
	protected $USER_UPDATE_PWD = 'Change User\'s Password';
}
?>