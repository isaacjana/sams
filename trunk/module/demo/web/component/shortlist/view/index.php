<div class="" style="width: 100%">
	<!-- <a href="<?php echo \E::get('obj_curr_module')->build_action_path('nomination','borang') ?>" type="button" class="btn btn-primary float-right mb-2 mr-2 mt-2 border-0" style="background-image: linear-gradient(to right, #3aa4dd , #2357a0);">PRINT</a> -->	
	<a href="<?php echo \E::get('obj_curr_module')->build_action_path('shortlist','index') ?>" type="button" class="btn float-left mb-2 mr-2 mt-2 border-0 <?php echo \E::get( 'obj_curr_module')->get_right_to_access_nomination('2'); ?>" style="color: #000">COMMITTEE DECISION - DATA ENTRY</a>
	<a href="<?php echo \E::get('obj_curr_module')->build_action_path('shortlist','verifier_shortlist') ?>" type="button" class="btn float-left mb-2 mr-2 mt-2 border-0 <?php echo \E::get( 'obj_curr_module')->get_right_to_access_nomination('6'); ?>" style="color: #000">COMMITTEE DECISION - VERIFIER</a>
	<a href="<?php echo \E::get('obj_curr_module')->build_action_path('shortlist','print_shortlist') ?>" type="button" class="btn float-left mb-2 mr-2 mt-2 border-0 <?php echo \E::get( 'obj_curr_module')->get_right_to_access_nomination('2'); ?>" style="color: #000">COMMITTEE DECISION - OFFER LETTER</a>	
</div>
<table id="example" class="table table-striped table-bordered" style="width:100%;">
	<thead>
		<tr>
			<th>#</th>
			<th>Nama Penuh Calon</th>
			<th>No. Kad Pengenalan</th>
			<th>No. Folio</th>
			<th>Kementerian/Jabatan</th>
			<th>Pingat Yang Dicadangkan</th>
			<th>Status</th>
			<th>Tarikh Dicadang</th>
			<th>Peristiwa</th>
			<th>Action</th>
		</tr>
	</thead>
	<tfoot class="tfootClass">
		<tr>
			<th></th>
			<th>Nama Penuh Calon</th>
			<th>No. Kad Pengenalan</th>
			<th>No. Folio</th>
			<th>Kementerian/Jabatan</th>
			<th>Pingat Yang Dicadangkan</th>
			<th>Status</th>
			<th>Tarikh Dicadang</th>
			<th>Peristiwa</th>
			<th></th>
		</tr>
	</tfoot>
	<tbody>
    	<?php
	        if($v_short_list_info && is_array($v_short_list_info)){
	            $v_tips_read = \E::get('obj_kernel_lang')->get('READ');
	            $v_tips_edit = \E::get('obj_kernel_lang')->get('EDIT');
	            $v_tips_delete = \E::get('obj_kernel_lang')->get('DELETE');
	            
	            $v_count = 1;
	            foreach($v_short_list_info as $v_row){
	                $v_class = ( $v_count%2 == 1 ) ? "odd" : "normal";

	                echo '<tr 
	                    id="row'.$v_count.'"
	                    onMouseOver="record_listing_highlight( this, \'highlight\' )"
	                    onMouseOut ="record_listing_highlight( this, \'' . $v_class . '\' )"
	                    onClick    ="record_listing_click_tr ( this, \'' . $v_class . '\', \'chkRow'.$v_count.'\' )"
	                
	                >';

	                /*ondblclick = "window.location=\''.\E::get('obj_curr_module')->build_action_path('user','view',$v_row['usr_id']).'\'"*/
	                echo '<th scope="row" align="left">' . $v_count . '</th>';
	                echo '<td align="left" data-title="nom_name">' . $v_row['nom_name'] .'</td>';
	                echo '<td align="left" data-title="new_ic">' . $v_row['nom_new_ic'] . '</td>';
	                echo '<td align="left" data-title="folio">' . $v_row['nom_folio_no'] . '</td>';
	                echo '<td align="left" data-title="department">' . $v_row['nom_folio_no'] . '</td>';
	                echo '<td align="left" data-title="title">' . $v_row['nom_title_designation'] . '</td>';
	                echo '<td align="left" data-title="status">';

	                	if($v_row['nom_status'] == '10'){

	                		echo 'New';

	                	}elseif($v_row['nom_status'] == '17'){

	                		echo 'Checked';

	                	}elseif($v_row['nom_status'] == '20'){

	                		echo 'Not Verified';

	                	}elseif($v_row['nom_status'] == '19'){

	                		echo 'Verified';

	                	}elseif($v_row['nom_status'] == '18'){

	                		echo 'Checked';

	                	}else{

	                		echo '';
	                	}

	                '</td>';
	                echo '<td align="left" data-title="datecreated">' . $v_row['_rec_created_on'] . '</td>';
	                echo '<td align="left" data-title="peristiwa">' . $v_row['_rec_created_on'] . '</td>';

	                echo '<td align="center" valign="top" data-title="'.\E::get( 'obj_system_lang')->get('ACTION').'">';	  
	                              
	                	if($v_row['nom_status'] == '10'){

			                echo '<a title="'.$v_tips_edit.'" href="'.\E::get( 'obj_curr_module')->build_action_path('shortlist','shru_verify_meeting',$v_row['nom_id']).'">';
			                echo '<i class="fa fa-fw fa-edit"></i></a>';

	                	}elseif($v_row['nom_status'] == '17'){

	                		echo '';

	                	}elseif($v_row['nom_status'] == '18'){

	                		echo '';

	                	}elseif($v_row['nom_status'] == '19'){

	                		echo '<a title="'.$v_tips_edit.'" href="'.\E::get( 'obj_curr_module')->build_action_path('shortlist','edit_verify_meeting',$v_row['nom_id']).'">';
			                echo '<i class="fa fa-fw fa-user-edit"></i></a>';

	                	}elseif($v_row['nom_status'] == '20'){

	                		echo '<a title="'.$v_tips_edit.'" href="'.\E::get( 'obj_curr_module')->build_action_path('shortlist','edit_verify_meeting',$v_row['nom_id']).'">';
			                echo '<i class="fa fa-fw fa-user-edit"></i></a>';

	                	}else{

	                		echo '';
	                	}

	                echo '</td>';
	                echo '</tr>';
	                
	                ++$v_count;
	            }
	        }else{
	            echo '<tr><td colspan="10" align="center">'. \E::get( 'obj_kernel_lang')->get('MSG_NO_RECORD_FOUND') . '</td></tr>';
	        }
        ?>		
	</tbody>
</table>
<script type="text/javascript">
	$(document).ready(function() {
		
		// Setup - add a text input to each footer cell
		$('#example tfoot th').not(":eq(0),:eq(9)").each( function () {
			var title = $(this).text();
			$(this).html( '<input type="text" class="search_input tfootInput" placeholder="Search" style="color:#000" />' );
		});

		$('#example').DataTable({
			"pageLength" : 10,
			"bProcessing": true,
			"order": [],
			"bLengthChange": false, //disable the entries
			"bFilter": true,
			"bInfo": false,
			"bAutoWidth": true,
			"sDom": '<"H"lTr><"datatable-scroll"t><"F"ip>' //disable search box
		});

		// DataTable
		var table = $('#example').DataTable();

		// Apply the search
		table.columns().every( function () {
		  var that = this;

		  $( 'input', this.footer() ).on( 'keyup change', function () {
		      if ( that.search() !== this.value ) {
		          that
		              .search( this.value )
		              .draw();
		      }
		  });
		});

	}); 

	function del_confirm(p_id){
	  if(p_id != ''){
	    if(confirm("<?php echo \E::get( 'obj_curr_module_lang')->get('CONFIRM_DELETE')?>")){
	      window.location = "<?PHP echo \E::get( 'obj_curr_module')->build_action_path('nomination','delete'); ?>"+p_id;
	    }
	  }
	}	
</script>