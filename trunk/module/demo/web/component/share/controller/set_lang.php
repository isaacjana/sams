<?php
$v_param=$this->get_param();
$v_lang=$v_param[0];
switch(strtolower($v_lang)){
	case 'bm';
		\E::set_session(\E::get('obj_curr_module')->get_codename().'/lang','bm');
		// \E::set_session(\E::get('obj_system_module')->get_codename().'/lang','bm');
		\E::set_session('lang','bm');
		\E::set_session('tmp_lang','bm');
	break;
	case 'en';
		\E::set_session(\E::get('obj_curr_module')->get_codename().'/lang','en');
		// \E::set_session(\E::get('obj_system_module')->get_codename().'/lang','en');
		\E::set_session('lang','en');
		\E::set_session('tmp_lang','en');
	break;
	default:
	break;
}
// header('location: '. $_SERVER['HTTP_REFERER']);
?>
<script language="javascript">
window.location="<?php echo $_SERVER['HTTP_REFERER'];?>";
</script>