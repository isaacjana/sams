<h2 class="mb-4">User Profile</h2>
<div class='card mb-4'>
    <div class="card-body">
        <div class="form-group row">
            <label for="usr_name" class="col-sm-1 col-form-label"><?php echo \E::get('obj_system_lang')->get('USER_NAME'); ?></label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="usr_name" id="usr_name" placeholder="full name">
            </div>
            <label for="usr_email" class="col-sm-1 col-form-label"><?php echo \E::get('obj_system_lang')->get('USER_EMAIL'); ?></label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="usr_email" id="usr_email" placeholder="mail@mail.com">            
            </div>
            <div class="col-sm-2">
                <a href="javascript:search();" class="btn btn-primary" role="button">
                    <i class="fa fa-fw fa-search"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_SEARCH'); ?>
                </a>
                <a href="javascript:rec_list('')" class="btn btn-danger" role="button">
                    <i class="fa fa-fw fa-times"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_RESET'); ?>
                </a>
            </div>            
        </div>
    </div>
</div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
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
        <tr>
            <td>1</td>
            <td>ali</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>2</td>
            <td>abu</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>3</td>
            <td>bakar</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
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
</script>