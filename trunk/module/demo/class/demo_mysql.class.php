<?php
namespace moonlight\demo;

class demo_mysql extends \moonlight\db_mysql{
	
	public function __call($name, $arguments){
		$v_namespace = "\\". __NAMESPACE__ . "\\"; /* Using namespace to allow duplicate modules in single project */
		$v_temp_arr = explode("_",$name);
		$v_temp_arr = array_reverse( $v_temp_arr );
		$v_temp_name = array_pop( $v_temp_arr );
		$v_temp_name = strtolower($v_temp_name);
		$v_module_code=\E::get('obj_curr_module')->get_config()->get('general/module_code');
		$v_cls_name_prefix = $v_namespace.$v_module_code."_";
		// moonlight_autoload_class( $v_cls_name_prefix.$v_temp_name );
		$v_count = 0;  /* Set a limit to avoid endless loop */
		$v_continue = (class_exists( $v_cls_name_prefix.$v_temp_name."_mysql") && method_exists( $v_cls_name_prefix.$v_temp_name."_mysql", $name ));
		while(!$v_continue){
			$v_temp_val = array_pop( $v_temp_arr );
			if(empty($v_temp_val)){ /* If is null mean last item in the array or not array, stop loop */
				break;
			}
			// moonlight_autoload_class( $v_cls_name_prefix.$v_temp_name );
			if(class_exists( $v_cls_name_prefix.$v_temp_name."_mysql") && method_exists( $v_cls_name_prefix.$v_temp_name."_mysql", $name )){
				break;
			}
			$v_temp_name .= "_".$v_temp_val;
			$v_temp_name = strtolower($v_temp_name);
			if(strtoupper($v_temp_name)==strtoupper($name)){ /* Stop the loop when the key is already same as the estimate class name */
				break;
			}
			$v_count++;
			if($v_count>5){
				break;
			}
		}

		$v_call_obj = $v_cls_name_prefix.$v_temp_name."_mysql";
		$this->co_obj[$v_temp_name] = new $v_call_obj($this);
		if(isset($this->co_obj[$v_temp_name])){
			return call_user_func_array(array($this->co_obj[$v_temp_name], $name), $arguments);
		}
	}
}
?>