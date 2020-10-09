<style type="text/css">
	#breadcrumbs-two{
		overflow: hidden;
		width: 100%;
		list-style: none;
	}

	#breadcrumbs-two li{
		float: left;
		margin: 0 .5em 0 1em;
	}

	#breadcrumbs-two a{
		background: #ddd;
		padding: .7em 1em;
		float: left;
		text-decoration: none;
		color: #444;
		text-shadow: 0 1px 0 rgba(255,255,255,.5);
		position: relative;
	}

	#breadcrumbs-two a::before{
		content: "";
		position: absolute;
		top: 50%;
		margin-top: -1.5em;
		border-width: 1.5em 0 1.5em 1em;
		border-style: solid;
		border-color: #ddd #ddd #ddd transparent;
		left: -1em;
	}

	#breadcrumbs-two a::after{
		content: "";
		position: absolute;
		top: 50%;
		margin-top: -1.5em;
		border-top: 1.5em solid transparent;
		border-bottom: 1.5em solid transparent;
		border-left: 1em solid #ddd;
		right: -1em;
	}

	#breadcrumbs-two .current::after,
	#breadcrumbs-two .current::before{
		content: normal;
	}

	#breadcrumbs-two .main a {
	    background: #00b5e2;
	    padding: .7em 1em;
	    float: left;
	    text-decoration: none;
	    color: #444;
	    text-shadow: 0 1px 0 rgba(255,255,255,.5);
	    position: relative;
	}	

	#breadcrumbs-two .main a::after{
		content: "";
		position: absolute;
		top: 50%;
		margin-top: -1.5em;
		border-top: 1.5em solid transparent;
		border-bottom: 1.5em solid transparent;
		border-left: 1em solid #00b5e2;
		right: -1em;
	}

	#activebread a {
	    background: #00b5e2;
	    padding: .7em 1em;
	    float: left;
	    text-decoration: none;
	    color: #444;
	    text-shadow: 0 1px 0 rgba(255,255,255,.5);
	    position: relative;
	}

	#activebread a::after {
	    content: "";
	    position: absolute;
	    top: 50%;
	    margin-top: -1.5em;
	    border-top: 1.5em solid transparent;
	    border-bottom: 1.5em solid transparent;
	    border-left: 1em solid #00b5e2;
	    right: -1em;
	}	

	#activebread a::before {
	    content: "";
	    position: absolute;
	    top: 50%;
	    margin-top: -1.5em;
	    border-width: 1.5em 0 1.5em 1em;
	    border-style: solid;
	    border-color: #00b5e2 #00b5e2 #00b5e2 transparent;
	    left: -1em;
	}		
</style>
<div class="p-4">
	<div class="row border-bottom border-dark">
		<div class="col-12 col-md-5">
			<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>NOMINATION STATUS</b></p>			
		</div>
		<div class="col-10 col-md-5 mx-0 px-0">
		</div>
		<div class="col-2 mx-0 px-0" style="float: right">
			<a href="<?php echo \E::get('obj_curr_module')->build_action_path('nomination','index') ?>" type="button" class="w-75 btn btn-grey border border-dark text-dark float-right mb-2 mr-2 mt-2 rounded-0">BACK</a>
		</div>
	</div>
</div>
	<div class="col-12 row mt-4" style="">
		<ul id="breadcrumbs-two" style="float: center">
			<?php 
				if($v_user_detail['nom_status'] == '2' || $v_user_detail['nom_status'] == '4'){
			?>			
				<li id="activebread"><a href="">NOMINATION</a></li>
				<li id="activebread"><a href="">DATA ENTRY</a></li>
				<li><a href="">PENILAI 1</a></li>
				<li><a href="">PENILAI 2</a></li>
				<li><a href="">PENGESAH</a></li>
				<li><a href="">MEETING DECISION</a></li>
				<li><a href="">VERIFY MEETING DECISION</a></li>				
			<?php }elseif($v_user_detail['nom_status'] == '5' || $v_user_detail['nom_status'] == '7') {	?>
				<li id="activebread"><a href="">NOMINATION</a></li>
				<li id="activebread"><a href="">DATA ENTRY</a></li>
				<li id="activebread"><a href="">PENILAI 1</a></li>
				<li><a href="">PENILAI 2</a></li>
				<li><a href="">PENGESAH</a></li>
				<li><a href="">MEETING DECISION</a></li>
				<li><a href="">VERIFY MEETING DECISION</a></li>						
			<?php }elseif($v_user_detail['nom_status'] == '6' || $v_user_detail['nom_status'] == '8') {	?>
				<li id="activebread"><a href="">NOMINATION</a></li>
				<li id="activebread"><a href="">DATA ENTRY</a></li>
				<li id="activebread"><a href="">PENILAI 1</a></li>
				<li id="activebread"><a href="">PENILAI 2</a></li>
				<li><a href="">PENGESAH</a></li>
				<li><a href="">MEETING DECISION</a></li>
				<li><a href="">VERIFY MEETING DECISION</a></li>						
			<?php }elseif($v_user_detail['nom_status'] == '9') {	?>
				<li id="activebread"><a href="">NOMINATION</a></li>
				<li id="activebread"><a href="">DATA ENTRY</a></li>
				<li id="activebread"><a href="">PENILAI 1</a></li>
				<li id="activebread"><a href="">PENILAI 2</a></li>
				<li id="activebread"><a href="">PENGESAH</a></li>
				<li><a href="">MEETING DECISION</a></li>
				<li><a href="">VERIFY MEETING DECISION</a></li>					
			<?php }elseif($v_user_detail['nom_status'] == '10' || $v_user_detail['nom_status'] == '11') {	?>
				<li id="activebread"><a href="">NOMINATION</a></li>
				<li id="activebread"><a href="">DATA ENTRY</a></li>
				<li id="activebread"><a href="">PENILAI 1</a></li>
				<li id="activebread"><a href="">PENILAI 2</a></li>
				<li id="activebread"><a href="">PENGESAH</a></li>
				<li id="activebread"><a href="">MEETING DECISION</a></li>
				<li><a href="">VERIFY MEETING DECISION</a></li>					
			<?php }elseif($v_user_detail['nom_status'] == '12' || $v_user_detail['nom_status'] == '13' || $v_user_detail['nom_status'] == '14' || $v_user_detail['nom_status'] == '15') {	?>
				<li id="activebread"><a href="">NOMINATION</a></li>
				<li id="activebread"><a href="">DATA ENTRY</a></li>
				<li id="activebread"><a href="">PENILAI 1</a></li>
				<li id="activebread"><a href="">PENILAI 2</a></li>
				<li id="activebread"><a href="">PENGESAH</a></li>
				<li id="activebread"><a href="">MEETING DECISION</a></li>
				<li id="activebread"><a href="">VERIFY MEETING DECISION</a></li>					
			<?php }else{ ?>
				<li><a href="activebread">NOMINATION</a></li>
				<li><a href="">DATA ENTRY</a></li>
				<li><a href="">PENILAI 1</a></li>
				<li><a href="">PENILAI 2</a></li>
				<li><a href="">PENGESAH</a></li>
				<li><a href="">MEETING DECISION</a></li>
				<li><a href="">VERIFY MEETING DECISION</a></li>					
			<?php } ?>
		</ul>

		<div class="col-12 col-md-6" style="padding-top: 10px">
			<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_penuh">Nama:</label>
					<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_name']) ? $v_user_detail['nom_name'] : "");?>" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_penuh">No Kad Pengenalan:</label>
					<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_new_ic']) ? $v_user_detail['nom_new_ic'] : "");?>" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_penuh">Nama Pingat Dicadang:</label>
					<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_user_detail['awdc_category_id']) ? $v_user_detail['awdc_category_id'] : "");?>" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_penuh">Jabatan/Agensi:</label>
					<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_source']) ? $v_user_detail['nom_source'] : "");?>" readonly>
				</div>
			</div>
		</div>		
	</div>
