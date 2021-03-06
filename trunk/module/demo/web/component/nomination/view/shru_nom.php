<div class="" style="width: 100%">
	<a href="<?php echo \E::get('obj_curr_module')->build_action_path('nomination','index') ?>" type="button" class="btn float-left mb-2 mr-2 mt-2 border-0" style="color: #000">Nomination - Pencadang</a>
	<a href="<?php echo \E::get('obj_curr_module')->build_action_path('nomination','shru_nom') ?>" type="button" class="btn float-left mb-2 mr-2 mt-2 border-0" style="color: #3aa4dd">Nomination - SHRU</a>
	<a href="<?php echo \E::get('obj_curr_module')->build_action_path('nomination','penilaisatu_nom') ?>" type="button" class="btn float-left mb-2 mr-2 mt-2 border-0" style="color: #000">Nomination - Penilai 1</a>
	<a href="<?php echo \E::get('obj_curr_module')->build_action_path('nomination','penilaidua_nom') ?>" type="button" class="btn float-left mb-2 mr-2 mt-2 border-0" style="color: #000">Nomination - Penilai 2</a>	
	<a href="<?php echo \E::get('obj_curr_module')->build_action_path('nomination','pengesah_nom') ?>" type="button" class="btn float-left mb-2 mr-2 mt-2 border-0" style="color: #000">Nomination - Jawatankuasa Penilaian Anugerah</a>
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
			<th></th>
		</tr>
	</tfoot>
	<tbody>
    	<?php
	        if($v_nom_list_shru_info && is_array($v_nom_list_shru_info)){
	            $v_tips_read = \E::get('obj_kernel_lang')->get('READ');
	            $v_tips_edit = \E::get('obj_kernel_lang')->get('EDIT');
	            $v_tips_delete = \E::get('obj_kernel_lang')->get('DELETE');
	            
	            $v_count = 1;
	            foreach($v_nom_list_shru_info as $v_row){
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

	                	if($v_row['nom_status'] == '2'){

	                		echo 'New';

	                	}elseif($v_row['nom_status'] == '3'){

	                		echo 'Routed Back To Pencadang';

	                	}elseif($v_row['nom_status'] == '4'){

	                		echo 'Routed Back From Penilai 1';

	                	}else{

	                		echo '';
	                	}

	                '</td>';
	                echo '<td align="left" data-title="datecreated">' . $v_row['_rec_created_on'] . '</td>';

	                echo '<td align="center" valign="top" data-title="'.\E::get( 'obj_system_lang')->get('ACTION').'">';
	                
                	if($v_row['nom_status'] == '2'){

                		echo '<a title="'.$v_tips_edit.'" href="'.\E::get( 'obj_curr_module')->build_action_path('nomination','shru_edit',$v_row['nom_id']).'">';
	               		echo '<i class="fa fa-fw fa-edit"></i></a>';

	               		echo '<a title="'.$v_tips_edit_shru.'" href="'.\E::get( 'obj_curr_module')->build_action_path('nomination','route_shru',$v_row['nom_id']).'">';
	                	echo '<i class="fa fa-fw fa-undo"></i></a>';

                	}elseif($v_row['nom_status'] == '3'){

                		echo '<a title="'.$v_tips_read .'" href="'.\E::get( 'obj_curr_module')->build_action_path('nomination','view',$v_row['nom_id']).'">';
	                	echo '<i class="fa fa-fw fa-eye"></i></a>';

                	}elseif($v_row['nom_status'] == '4'){

                		echo '<a title="'.$v_tips_edit.'" href="'.\E::get( 'obj_curr_module')->build_action_path('nomination','shru_edit',$v_row['nom_id']).'">';
	               		echo '<i class="fa fa-fw fa-edit"></i></a>';

	               		echo '<a title="VIEW REASON" href="'.\E::get( 'obj_curr_module')->build_action_path('nomination','view_reason',$v_row['nom_id']).'">';
	               		echo '<i class="fa fa-fw far fa-file"></i></a>';

                	}else{

                		echo '<a title="'.$v_tips_read .'" href="'.\E::get( 'obj_curr_module')->build_action_path('nomination','view',$v_row['nom_id']).'">';
	                	echo '<i class="fa fa-fw fa-eye"></i></a>';
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
			$(this).html( '<input type="text" class="search_input tfootInput" placeholder="Search"  style="color:#000" />' );
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

	function route_shru(p_id){
	  if(p_id != ''){
	    if(confirm("<?php echo \E::get( 'obj_curr_module_lang')->get('ROUTE_BACK')?>")){
	      window.location = "<?PHP echo \E::get( 'obj_curr_module')->build_action_path('nomination','route_shru'); ?>"+p_id;
	    }
	  }
	}		
</script>