<?PHP
$v_param = $this->get_param();
$v_usr_id = $v_param[0];

$v_result = \E::get('obj_system_module')->ldap_search($v_usr_id);

$vSeperator = "@@_@@";

// return
print ($v_result && is_array($v_result)) ? "SUCCESS" : "FAILED";
print $vSeperator;
print ($v_result && is_array($v_result)) ? \E::get('obj_system_lang')->get('USER_VERIFY_USER_SUCCESS') : \E::get('obj_system_lang')->get('USER_VERIFY_USER_FAIL');
print $vSeperator;
print ($v_result && is_array($v_result)) ? $v_result['user_id'] : "NOT_FOUND";
print $vSeperator;
print ($v_result && is_array($v_result)) ? $v_result['user_full_name'] : "NOT_FOUND";
print $vSeperator;
print ($v_result && is_array($v_result)) ? $v_result['user_email'] : "NOT_FOUND";
print $vSeperator;
print ($v_result && is_array($v_result)) ? $v_result['user_ic'] : "NOT_FOUND";
?>