<?php
class user_group_en{
	function get_all_lang_var(){ return get_object_vars($this);	}

  /*User Group*/
  protected $USER_GROUP_COMP_NAME = 'User Group Manager';
  protected $USER_GROUP_NAME = 'Group Name';
  protected $USER_GROUP_ADD = 'Add';
  protected $USER_GROUP_EDIT = 'Edit';
  protected $USER_GROUP_DELETE = 'Delete';
  protected $USER_GROUP_READ = 'Read';
  // protected $USER_GROUP_NEWS_APPROVE = 'News requires approval for publishing';
  // protected $USER_GROUP_PENDING_APPROVE = 'News, article, event & announcement requires approval for publishing';
  protected $USER_GROUP_AGENCY_CIO = 'Agency CIO';
  protected $USER_GROUP_AGENCY_MAINTAIN = 'Agency to manage'; //amended 20/03/2014 - julie
  protected $USER_GROUP_NO_AGENCY_MAINTAIN = 'No agency to manage'; //amended 20/03/2014 - julie
  protected $USER_GROUP_CATEGORY_FILTER = 'Please select category that can be accessed';
	
	protected $USER_GROUP_MODULE = 'Module';
	protected $USER_GROUP_TITLE = 'Title';
	protected $USER_GROUP_DATE_MODIFIED = 'Date Modified';
	protected $USER_GROUP_ADD_FOR_MODULE = 'Add Group for';
	protected $USER_GROUP_MODULE_WEB = 'Web';
	protected $USER_GROUP_MODULE_MEMBER = 'Member';
	
  protected $USER_GROUP_CHECKALL = 'Check All';
  protected $USER_GROUP_UNCHECKALL = 'Uncheck All';
  protected $USER_GROUP_LEVEL = 'Group LEVEL';
}
?>