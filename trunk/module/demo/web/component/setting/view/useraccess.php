<h2 class="mb-4 bg-grey p-2">User Access</h2>
<?PHP
    \I::load_error("MESSAGE");
?>
<div class="p-2">
    <div class="card mb-4">
        <div class="card-body">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Group</th>
                    </tr>
                </thead>
                <tfoot class="tfootClass">
                    <tr>
                        <th></th>
                        <th>Group</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                    if($v_code_role && is_array($v_code_role)){
                        $v_count = 1;
                        foreach($v_code_role as $v_row){
                            $v_class = ( $v_count%2 == 1 ) ? "odd" : "normal";

                            echo '<tr 
                                id="row'.$v_count.'"
                                onMouseOver="record_listing_highlight( this, \'highlight\' )"
                                onMouseOut ="record_listing_highlight( this, \'' . $v_class . '\' )"
                                onClick    ="record_listing_click_tr ( this, \'' . $v_class . '\', \'chkRow'.$v_count.'\' )"
                                ondblclick = "window.location=\''.\E::get('obj_curr_module')->build_action_path('user','view',$v_row['role_id']).'\'"
                            
                            >';

                            echo '<th scope="row" align="left">' . $v_count . '</th>';
                            echo '<td align="left" data-title="group">' . \U::safe_display_string($v_row["role_name"]) . '</td>';
                        
                            ++$v_count;
                        }
                    
                    }else{
                        echo '<tr><td colspan="7" align="center">'. \E::get( 'obj_kernel_lang')->get('MSG_NO_RECORD_FOUND') . '</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
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
</script>
