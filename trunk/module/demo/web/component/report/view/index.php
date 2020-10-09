<div class="mb-4" style="width: 100%">
	<h2>REPORT LISTING</h2>
</div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
	<thead>
		<tr>
			<th>#</th>
			<th>Report Name</th>
			
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>
				<a href="<?php echo \E::get('obj_curr_module')->build_action_path('report','audit_trail') ?>" type="button" class="btn float-left mb-2 mr-2 mt-2 border-0"  style="color: #000">Audit Trail</a>
			</td>
		</tr>		
		<tr>
			<td>2</td>
			<td>Dynamic Report</td>
		</tr>		
		<tr>
			<td>3</td>
			<td>
				<?php 
					$v_pass[0]='print_nom_profile';
	                /*$v_pass[1]=$v_row['nom_id'];*/
				?>
				<a href="<?php echo \E::get('obj_curr_module')->build_action_path('share', 'pdf_report', $v_pass) ?>" type="button" class="btn float-left mb-2 mr-2 mt-2 border-0" style="color: #000">Nomination Profile</a>
			</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Nomination Summary Listing</td>
		</tr>
		<tr>
			<td>5</td>
			<td>
				<?php 
					$v_pass[0]='Race';
	                /*$v_pass[1]=$v_row['nom_id'];*/
				?>
				<a href="<?php echo \E::get('obj_curr_module')->build_action_path('report', 'nomination_sources', $v_pass) ?>" type="button" class="btn float-left mb-2 mr-2 mt-2 border-0" style="color: #000">Summary of Nomination Sources by Race</a>
			</td>
		</tr>
		<tr>
			<td>6</td>
			<td>
				<?php 
					$v_pass[0]='Awards';
	                /*$v_pass[1]=$v_row['nom_id'];*/
				?>
				<a href="<?php echo \E::get('obj_curr_module')->build_action_path('report', 'nomination_sources', $v_pass) ?>" type="button" class="btn float-left mb-2 mr-2 mt-2 border-0" style="color: #000">Summary of Nomination Sources by Awards</a>
			</td>
		</tr>
		<tr>
			<td>7</td>
			<td>
				<?php 
					//$v_pass[0]='senarai_ringkas';
	                /*$v_pass[1]=$v_row['nom_id'];*/
				?>
				<!-- <a href="<?php echo \E::get('obj_curr_module')->build_action_path('share', 'pdf_report', $v_pass) ?>" type="button" class="btn float-left mb-2 mr-2 mt-2 border-0" style="color: #000">Senarai Ringkasan Pencalonan</a> -->

				<a href="<?php echo \E::get('obj_curr_module')->build_action_path('report','senarai_ringkas') ?>" type="button" class="btn float-left mb-2 mr-2 mt-2 border-0"  style="color: #000">Senarai Ringkasan Pencalonan</a>				
			</td>
		</tr>
		<tr>
			<td>8</td>
			<td>
				<?php 
					$v_pass[0]='gazette_list';
	                /*$v_pass[1]=$v_row['nom_id'];*/
				?>
				<a href="<?php echo \E::get('obj_curr_module')->build_action_path('share', 'pdf_report', $v_pass) ?>" type="button" class="btn float-left mb-2 mr-2 mt-2 border-0" style="color: #000">Gazette (Honours) Listing</a>
			</td>
		</tr>
		<tr>
			<td>9</td>
			<td>
				<?php 
					$v_pass[0]='senarai_pencalonan';
	                /*$v_pass[1]=$v_row['nom_id'];*/
				?>
				<a href="<?php echo \E::get('obj_curr_module')->build_action_path('share', 'pdf_report', $v_pass) ?>" type="button" class="btn float-left mb-2 mr-2 mt-2 border-0" style="color: #000">Senarai Nama Pencalonan Pingat Bagi Anugerah Kebesaran Negeri Sarawak Tahun YYYY</a>
			</td>
		</tr>
		<tr>
			<td>10</td>
			<td>
				<?php 
					$v_pass[0]='concurrence_cm';
	                /*$v_pass[1]=$v_row['nom_id'];*/
				?>
				<a href="<?php echo \E::get('obj_curr_module')->build_action_path('share', 'pdf_report', $v_pass) ?>" type="button" class="btn float-left mb-2 mr-2 mt-2 border-0" style="color: #000">For information / Concurrence of YAB CM</a>
			</td>
		</tr>
		<tr>
			<td>11</td>
			<td>
				<?php 
					$v_pass[0]='historical_nomlist';
	                /*$v_pass[1]=$v_row['nom_id'];*/
				?>
				<a href="<?php echo \E::get('obj_curr_module')->build_action_path('share', 'pdf_report', $v_pass) ?>" type="button" class="btn float-left mb-2 mr-2 mt-2 border-0" style="color: #000">Historical-Nomination Listing</a>
			</td>
		</tr>
		<tr>
			<td>12</td>
			<td>
				<?php 
					$v_pass[0]='historical_numaward';
	                /*$v_pass[1]=$v_row['nom_id'];*/
				?>
				<a href="<?php echo \E::get('obj_curr_module')->build_action_path('share', 'pdf_report', $v_pass) ?>" type="button" class="btn float-left mb-2 mr-2 mt-2 border-0" style="color: #000">Historical-Number Awarded</a>
			</td>
		</tr>
		<tr>
			<td>13</td>
			<td>
				<?php 
					$v_pass[0]='historical_nomstat';
	                /*$v_pass[1]=$v_row['nom_id'];*/
				?>
				<a href="<?php echo \E::get('obj_curr_module')->build_action_path('share', 'pdf_report', $v_pass) ?>" type="button" class="btn float-left mb-2 mr-2 mt-2 border-0" style="color: #000">Historical-Nomination Status</a>
			</td>
		</tr>
		<tr>
			<td>14</td>
			<td>
				<?php 
					$v_pass[0]='historical_successnom';
	                /*$v_pass[1]=$v_row['nom_id'];*/
				?>
				<a href="<?php echo \E::get('obj_curr_module')->build_action_path('share', 'pdf_report', $v_pass) ?>" type="button" class="btn float-left mb-2 mr-2 mt-2 border-0" style="color: #000">Historical-Successful Nominees</a>
			</td>
		</tr>
		<tr>
			<td>15</td>
			<td>
				<?php 
					$v_pass[0]='historical_age_gender';
	                /*$v_pass[1]=$v_row['nom_id'];*/
				?>
				<a href="<?php echo \E::get('obj_curr_module')->build_action_path('share', 'pdf_report', $v_pass) ?>" type="button" class="btn float-left mb-2 mr-2 mt-2 border-0" style="color: #000">Historical-Age/Gender</a>
			</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Statistik Keseluruhan Pencalonan Anugerah Kebesaran Negeri Yang Telah Diluluskan Tahun YYYY</td>
		</tr>
		<tr>
			<td>17</td>
			<td>Statistik Pencalonan Anugerah Kebesaran Negeri Sempena Hari Jadi TYT Yang DiPertua Negeri Tahun YYYY</td>
		</tr>			
	</tbody>
</table>
<script type="text/javascript">
	$(document).ready(function() {
		
		// Setup - add a text input to each footer cell
		$('#example tfoot th').not(":eq(2)").each( function () {
			var title = $(this).text();
			$(this).html( '<input type="text" class="search_input tfootInput"  style="color:#000" />' );
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
</script>