<?php
class user_bm{
	function get_all_lang_var(){ return get_object_vars($this);	}

  /*User*/  
  protected $USER_COMP_NAME = 'Pengurus Pengguna';
  protected $USER_NAME = 'Nama Pengguna';
  protected $USER_GROUP = 'Kumpulan Pengguna';
  protected $USER_EXIST = ' sudah menjadi pengguna';
  protected $USER_ADD = 'Klik untuk tambah profil pengguna baru jika nama pengguna tidak dijumpai.';
  protected $USER_VIEW = 'Klik untuk melihat profil pengguna.';
	protected $USER_NEWS_NOTIFICATION = 'Menerima pemberitahuan jika ada penyerahan kandungan daripada pengguna untuk dipaparkan';
  protected $USER_AGENCY = 'Agensi';
  protected $USER_DEPARTMENT = 'Bahagian';
  protected $USER_UNIT = 'Unit';
	protected $USER_POSITION = 'Jawatan';
  protected $USER_TYPE = 'Jenis Pengguna';
  protected $USER_TYPE_STAFF = 'Kakitangan / Pentadbir';
  protected $USER_TYPE_PUBLIC = 'Pengguna Awam';
	protected $USER_ID_VERIFY = 'Mengesahkan';
	protected $USER_STAFF_ADD = 'Tambah Profil Kakitangan / Pentadbir';
	protected $USER_PUBLIC_ADD = 'Tambah Profil Pengguna Awam';
	protected $USER_UPDATE_PWD = 'Menukar Kata Laluan Pengguna';
}
?>