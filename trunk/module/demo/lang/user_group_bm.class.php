<?php
class user_group_bm{
	function get_all_lang_var(){ return get_object_vars($this);	}

  /*User Group*/
  protected $USER_GROUP_COMP_NAME = 'Pengurus Kumpulan Pengguna';
  protected $USER_GROUP_NAME = 'Nama Kumpulan';
  protected $USER_GROUP_ADD = 'Baru';
  protected $USER_GROUP_EDIT = 'Ubah';
  protected $USER_GROUP_DELETE = 'Mansuh';
  protected $USER_GROUP_READ = 'Baca';
	// protected $USER_GROUP_NEWS_APPROVE = 'News requires approval for publishing';
	// protected $USER_GROUP_PENDING_APPROVE = 'News, article, event & announcement requires approval for publishing';
	protected $USER_GROUP_AGENCY_CIO = 'CIO Agensi';
	protected $USER_GROUP_AGENCY_MAINTAIN = 'Agensi untuk diurus'; //amended 20/03/2014 - julie
	protected $USER_GROUP_NO_AGENCY_MAINTAIN = 'Tiada agensi untuk diurus'; //amended 20/03/2014 - julie
	protected $USER_GROUP_CATEGORY_FILTER = 'Sila pilih kategori yang dapat diakses';
	
	protected $USER_GROUP_MODULE = 'Modul';
	protected $USER_GROUP_DATE_MODIFIED = 'Tarikh Kemaskini';
	protected $USER_GROUP_ADD_FOR_MODULE = 'Tambah Kumpulan Pengguna untuk';
	protected $USER_GROUP_MODULE_WEB = 'Web';
	protected $USER_GROUP_MODULE_MEMBER = 'Ahli';
	
	protected $USER_GROUP_CHECKALL = 'Tandakan semua butang';
  protected $USER_GROUP_UNCHECKALL = 'Kosongkan semua butang';
  protected $USER_GROUP_LEVEL = 'Taraf Kumpulan';
}
?>