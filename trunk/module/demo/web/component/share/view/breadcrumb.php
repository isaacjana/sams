<?php
$v_breadcumb_html = '';
$v_count = 1;
if(is_array($v_breadcrumb)){
	foreach($v_breadcrumb as $v_item){
		if($v_count==count($v_breadcrumb)){
			$v_breadcumb_html .= '<li class="breadcrumb-item active" aria-current="page"><a href="'.$v_item['url'].'">'.$v_item['name'].'</a></li>';
		}else{
			$v_breadcumb_html .= '<li class="breadcrumb-item"><a href="'.$v_item['url'].'">'.$v_item['name'].'</a></li>';
		}
	}
}
?>

<nav aria-label="breadcrumb" style="width:100%;">
	<ol class="breadcrumb">
		<?php
		echo $v_breadcumb_html;
		?>
	</ol>
</nav>