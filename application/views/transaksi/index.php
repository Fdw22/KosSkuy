<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12 col-xs-12">
        <div id="messages"></div>

        <?php if($this->session->flashdata('success')): ?>
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php elseif($this->session->flashdata('error')): ?>
          <div class="alert alert-error alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('error'); ?>
          </div>
        <?php endif; ?>

        <?php if(in_array('create_transaksi', $user_permission)): ?>
          <button class="btn btn-primary" data-toggle="modal" data-target="#add_transaksiModal">+ Transaksi</button>
          <br /> <br />
        <?php endif; ?>

        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Daftar Transaksi</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="manageTable" class="table table-bordered table-striped">
              <thead>
              <!-- *************** -->
              <tr>
                <th>Tgl Transaksi</th><th>Nama</th><th>No Ktp</th><th>Telp</th><th>Orangtua</th><th>No Telp Ortu</th><th>Alamat</th><th>Kamar</th><th>Bayar</th>
                
                <?php ///x if(in_array('update_transaksi', $user_permission) || in_array('delete_transaksi', $user_permission)): ?>
                  <th>#</th>
                <?php ///x endif; ?>
              </tr>
              <!-- ******************* -->
              </thead>

            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- col-md-12 -->
    </div>
    <!-- /.row -->
    

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->




<?php //if(in_array('create_transaksi', $user_permission)): ?>
<!-- create brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="add_transaksiModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">+ transaksi</h4>
      </div>

      <form role="form" action="<?php echo base_url('transaksi/create') ?>" method="post" id="create_transaksiForm">
        <div class="modal-body">

          <div class="form-group">
            <label for="post1">Kamar</label>

            <select name="kamar_id" id="kamar_id" class="form-control" required="required">
              <option>Pilih kamar</option>
              <?php
              $kamar = $this->db->get_where('kamar', array('status_sewa'=>'kosong'))->result();
              foreach ($kamar as $key) : ?>

                <option value="<?php echo $key->id ?>"><?php echo $key->name; ?></option>
              <?php endforeach ; ?>
              
            </select>
          </div>
        
          <div class="form-group">
            <label for="post1">Tgl Transaksi</label>
            <input type="date" class="form-control" id="tgl_transaksi" name="tgl_transaksi" placeholder="" autocomplete="off">
          </div>
        
          <div class="form-group">
            <label for="post1">Nama penyewa</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="" autocomplete="off">
          </div>
        
          <div class="form-group">
            <label for="post1">No Ktp</label>
            <input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="" autocomplete="off">
          </div>
        
          <div class="form-group">
            <label for="post1">No Telp</label>
            <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="" autocomplete="off">
          </div>
        
          <div class="form-group">
            <label for="post1">Orangtua</label>
            <input type="text" class="form-control" id="orangtua" name="orangtua" placeholder="" autocomplete="off">
          </div>
        
          <div class="form-group">
            <label for="post1">No Telp Ortu</label>
            <input type="text" class="form-control" id="no_telp_ortu" name="no_telp_ortu" placeholder="" autocomplete="off">
          </div>
        
          <div class="form-group">
            <label for="post1">Alamat Ortu</label>
            <input type="text" class="form-control" id="alamat_ortu" name="alamat_ortu" placeholder="" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="post1">Bayar</label>
            <input type="number" class="form-control" id="bayar" name="bayar" placeholder="" autocomplete="off">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php // endif; ?>




<?php // if(in_array('update_transaksi', $user_permission)): ?>
<!-- edit brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="edit_transaksiModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Transaksi</h4>
      </div>

      <form role="form" action="<?php echo base_url('transaksi/update') ?>" method="post" id="update_transaksiForm">
        <div class="modal-body">
          <div id="messages"></div>
          
          <div class="form-group">
            <label for="tgl_transaksi">Tgl Transaksi</label>
            <input type="text" class="form-control" id="edit_tgl_transaksi" name="tgl_transaksi" placeholder="" autocomplete="off">
          </div>
          
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="edit_nama" name="nama" placeholder="" autocomplete="off">
          </div>
          
          <div class="form-group">
            <label for="no_ktp">No Ktp</label>
            <input type="text" class="form-control" id="edit_no_ktp" name="no_ktp" placeholder="" autocomplete="off">
          </div>
          
          <div class="form-group">
            <label for="no_telp">No Telp</label>
            <input type="text" class="form-control" id="edit_no_telp" name="no_telp" placeholder="" autocomplete="off">
          </div>
          
          <div class="form-group">
            <label for="orangtua">Orangtua</label>
            <input type="text" class="form-control" id="edit_orangtua" name="orangtua" placeholder="" autocomplete="off">
          </div>
          
          <div class="form-group">
            <label for="no_telp_ortu">No Telp Ortu</label>
            <input type="text" class="form-control" id="edit_no_telp_ortu" name="no_telp_ortu" placeholder="" autocomplete="off">
          </div>
          
          <div class="form-group">
            <label for="alamat_ortu">Alamat Ortu</label>
            <input type="text" class="form-control" id="edit_alamat_ortu" name="alamat_ortu" placeholder="" autocomplete="off">
          </div>
          
          <div class="form-group">
            <label for="kamar_id">Kamar Id</label>
            <input type="text" class="form-control" id="edit_kamar_id" name="kamar_id" placeholder="" autocomplete="off">
          </div>
          
          <div class="form-group">
            <label for="bayar">Bayar</label>
            <input type="text" class="form-control" id="edit_bayar" name="bayar" placeholder="" autocomplete="off">
          </div>
          

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php // endif; ?>




<?php //if(in_array('delete_{table_name', $user_permission)): ?>
<!-- remove brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="remove_transaksiModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Remove transaksi</h4>
      </div>

      <form role="form" action="<?php echo base_url('transaksi/remove') ?>" method="post" id="remove_transaksiForm">
        <div class="modal-body">
          <p>Do you really want to remove?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php //endif; ?>







<script type="text/javascript">
var manageTable;
var base_url = "<?php echo base_url(); ?>";
$(document).ready(function() {
  $("#transaksiNav").addClass('active');

  // initialize the datatable 
  manageTable = $('#manageTable').DataTable({
    'ajax': base_url+'/transaksi/fetch_transaksiData',
    'order': []
  });

  // submit the create from 
  $("#create_transaksiForm").unbind('submit').on('submit', function() {
    var form = $(this);
    $(".text-danger").remove();

    $.ajax({
      url: form.attr('action'),
      type: form.attr('method'),
      data: form.serialize(), // /converting the form data into array and sending it to server
      dataType: 'json',
      success:function(response) {
        manageTable.ajax.reload(null, false); 
        if(response.success === true) {
          $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
            '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
          '</div>');

          // hide the modal
          $("#add_transaksiModal").modal('hide');
          // reset the form
          $("#create_transaksiForm")[0].reset();
          $("#create_transaksiForm .form-group").removeClass('has-error').removeClass('has-success');

        } else {
          if(response.messages instanceof Object) {
            $.each(response.messages, function(index, value) {
              var id = $("#"+index);
              id.closest('.form-group')
              .removeClass('has-error')
              .removeClass('has-success')
              .addClass(value.length > 0 ? 'has-error' : 'has-success');
              id.after(value);
            });
          } else {
            $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
              '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
            '</div>');
          }
        }
      }
    }); 

    return false;
  });


});

function edit_transaksi(id)
{ 
  $.ajax({
    url: 'fetch_transaksiById/'+id,
    type: 'post',
    dataType: 'json',
    success:function(response) {

      
      $("#edit_tgl_transaksi").val(response.tgl_transaksi);
      $("#edit_nama").val(response.nama);
      $("#edit_no_ktp").val(response.no_ktp);
      $("#edit_no_telp").val(response.no_telp);
      $("#edit_orangtua").val(response.orangtua);
      $("#edit_no_telp_ortu").val(response.no_telp_ortu);
      $("#edit_alamat_ortu").val(response.alamat_ortu);
      $("#edit_kamar_id").val(response.kamar_id);
      $("#edit_bayar").val(response.bayar);

      $("#update_transaksiForm").unbind('submit').bind('submit', function() {
        var form = $(this);
        $(".text-danger").remove();
        $.ajax({
          url: form.attr('action') + '/' + id,
          type: form.attr('method'),
          data: form.serialize(), // /converting the form data into array and sending it to server
          dataType: 'json',
          success:function(response) {
            manageTable.ajax.reload(null, false); 
            if(response.success === true) {
              $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
              '</div>');

              $("#edit_transaksiModal").modal('hide');
              // reset the form 
              $("#update_transaksiForm .form-group").removeClass('has-error').removeClass('has-success');
            } else {
              if(response.messages instanceof Object) {
                $.each(response.messages, function(index, value) {
                  var id = $("#"+index);
                  id.closest('.form-group')
                  .removeClass('has-error')
                  .removeClass('has-success')
                  .addClass(value.length > 0 ? 'has-error' : 'has-success');
                  id.after(value);
                });
              } else {
                $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                  '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
                '</div>');
              }
            }
          }
        }); 
        return false;
      });
    }
  });
}

function remove_transaksi(id)
{
  if(id) {
    $("#remove_transaksiForm").on('submit', function() {
      var form = $(this);
      $(".text-danger").remove();
      $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),

        // ******************************* edit *****************
        data: { id:id }, 
        dataType: 'json',
        success:function(response) {
          manageTable.ajax.reload(null, false); 
          if(response.success === true) {
            $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
              '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
            '</div>');
            $("#remove_transaksiModal").modal('hide');
          } else {
            $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
              '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
            '</div>'); 
          }
        }
      }); 
      return false;
    });
  }
}
</script>
