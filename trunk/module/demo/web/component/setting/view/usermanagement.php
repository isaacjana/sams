<div class="" style="width: 100%">
    <a href="<?php echo \E::get( 'obj_curr_module')->build_action_path('setting','usermanagement_add');?>" class="mb-4 btn btn-primary float-right mb-2 mr-2 mt-2 border-0" role="button" style="background-image: linear-gradient(to right, #3aa4dd , #2357a0);">
        <i class="fa fa-fw fa-plus"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_ADD'); ?>
    </a>
</div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>#</th>
            <th>User Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Ic No.</th>
            <th>User Group</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot class="tfootClass">
        <tr>
            <th></th>
            <th>User Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Ic No.</th>
            <th>User Group</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php
        if($v_user_list_info && is_array($v_user_list_info)){
            $v_tips_read = \E::get('obj_kernel_lang')->get('READ');
            $v_tips_edit = \E::get('obj_kernel_lang')->get('EDIT');
            $v_tips_delete = \E::get('obj_kernel_lang')->get('DELETE');
            
            $v_count = 1;
            foreach($v_user_list_info as $v_row){
                $v_class = ( $v_count%2 == 1 ) ? "odd" : "normal";

                echo '<tr 
                    id="row'.$v_count.'"
                    onMouseOver="record_listing_highlight( this, \'highlight\' )"
                    onMouseOut ="record_listing_highlight( this, \'' . $v_class . '\' )"
                    onClick    ="record_listing_click_tr ( this, \'' . $v_class . '\', \'chkRow'.$v_count.'\' )"
                    ondblclick = "window.location=\''.\E::get('obj_curr_module')->build_action_path('user','view',$v_row['usr_id']).'\'"
                
                >';
                echo '<th scope="row" align="left">' . $v_count . '</th>';
                echo '<td align="left" data-title="username">' . $v_row['usr_short_name'] .'</td>';
                echo '<td align="left" data-title="fullname">' . $v_row['usr_full_name'] . '</td>';
                echo '<td align="left" data-title="email">' . $v_row['usr_email'] . '</td>';
                echo '<td align="left" data-title="ic_no">' . $v_row['usr_new_ic_no'] . '</td>';
                echo '<td align="left" data-title="group">' . $v_row['usr_from'] . '</td>';

                echo '<td align="center" valign="top" data-title="'.\E::get( 'obj_system_lang')->get('ACTION').'">';
                echo '<a title="'.$v_tips_read .'" href="'.\E::get( 'obj_curr_module')->build_action_path('setting','usermanagement_view',$v_row['usr_id']).'">';
                echo '<i class="fa fa-fw fa-eye"></i></a>';

                echo '<a title="'.$v_tips_edit.'" href="'.\E::get( 'obj_curr_module')->build_action_path('setting','usermanagement_edit',$v_row['usr_id']).'">';
                echo '<i class="fa fa-fw fa-edit"></i></a>';

                echo '<a class="danger" title="'.$v_tips_delete.'" href="javascript:del_confirm(\'' . \U::safe_display_string($v_row['usr_id']).'\')">';
                echo '<i class="fa fa-fw fa-trash-alt"></i></a>';

                echo '</td>';
                echo '</tr>';
                
                ++$v_count;
            }
        }else{
            echo '<tr><td colspan="7" align="center">'. \E::get( 'obj_kernel_lang')->get('MSG_NO_RECORD_FOUND') . '</td></tr>';
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
            "pageLength" : 6,
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
                window.location = "<?PHP echo \E::get( 'obj_curr_module')->build_action_path('setting','usermanagement_delete'); ?>"+p_id;
            }
        }
    }
</script>