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

        <?php if(in_array('create_kamar', $user_permission)): ?>
          <button class="btn btn-primary" data-toggle="modal" data-target="#add_kamarModal">+ Kamar</button>
          <br /> <br />
        <?php endif; ?>

        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Daftar Kamar</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="manageTable" class="table table-bordered table-striped">
              <thead>
              <!-- *************** -->
              <tr>
                <th>Nama kamar</th><th>Harga</th><th>Kategori</th><th>Fasilitas</th><th>Tipe Bayar</th><th>Status Sewa</th><th>Status Bayar</th><th>Tgl Terisi</th><th>Tgl Habis</th>
                
                <?php ///x if(in_array('update_kamar', $user_permission) || in_array('delete_kamar', $user_permission)): ?>
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




<?php //if(in_array('create_kamar', $user_permission)): ?>
<!-- create brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="add_kamarModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">+ kamar</h4>
      </div>

      <form role="form" action="<?php echo base_url('kamar/create') ?>" method="post" id="create_kamarForm">
        <div class="modal-body">
           <div class="form-group">
            <label for="post1">Kategori</label>
            <select class="form-control" name="kategori_id" id="kategori_id" required="required">
            <option>Pilih kategori</option>
            <?php 
            $kategori = $this->db->get('kategori')->result();
            foreach ($kategori as $key) : ?>
              
              <option value="<?php echo $key->id ?>"><?php echo $key->name ?></option>
            <?php endforeach; ?>
            </select>
          </div>
        
          <div class="form-group">
            <label for="post1">Nama kamar</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="post1">Jenis pembayaran</label>
            <select name="tipe_bayar" id="tipe_bayar" class="form-control" required="required">
              <option>Pilih tipe pembayaran</option>
              <option value="bulanan">Per bulan</option>
              <option value="tahunan">Per tahun</option>
            </select>
          </div>
        
          <div class="form-group">
            <label for="post1">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" placeholder="" autocomplete="off">
          </div>
        
         
        
          <div class="form-group">
            <label for="post1">Fasilitas</label>
            <input type="text" class="form-control" id="fasilitas" name="fasilitas" placeholder="" autocomplete="off">
          </div>
               
          <div class="form-group">
            <label for="post1">Status Sewa</label>
            <select name="status_sewa" id="status_sewa" class="form-control" required="required">
              <option>Pilih status sewa</option>
              <option value="kosong">Kosong</option>
              <option value="terisi">Terisi</option>
            </select>
          </div>

          <div class="form-group">
            <label for="post1">Status Bayar</label>
            <select name="status_bayar" id="status_bayar" class="form-control" required="required">
              <option>Pilih status bayar</option>
              <option value="belum">Belum dibayar</option>
              <option value="lunas">Sudah dibayar</option>
              <option value="sebagian">Dibayar sebagian</option>

            </select>
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




<?php // if(in_array('update_kamar', $user_permission)): ?>
<!-- edit brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="edit_kamarModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Ubah Kamar</h4>
      </div>

      <form role="form" action="<?php echo base_url('kamar/update') ?>" method="post" id="update_kamarForm">
        <div class="modal-body">
          <div id="messages"></div>
          
          <div class="form-group">
            <label for="name">Nama kamar</label>
            <input type="text" class="form-control" id="edit_name" name="name" placeholder="" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="post1">Jenis pembayaran</label>
            <select name="tipe_bayar" id="tipe_bayar" class="form-control" required="required">
              <option>Pilih tipe pembayaran</option>
              <option value="bulanan">Per bulan</option>
              <option value="tahunan">Per tahun</option>
            </select>
          </div>
          
          <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="edit_harga" name="harga" placeholder="" autocomplete="off">
          </div>
          
          <div class="form-group">
            <label for="post1">Kategori</label>
            <select class="form-control" name="kategori_id" id="kategori_id" required="required">
            <option>Pilih kategori</option>
            <?php 
            $kategori = $this->db->get('kategori')->result();
            foreach ($kategori as $key) : ?>
              
              <option value="<?php echo $key->id ?>"><?php echo $key->name ?></option>
            <?php endforeach; ?>
            </select>
          </div>
          
          <div class="form-group">
            <label for="fasilitas">Fasilitas</label>
            <input type="text" class="form-control" id="edit_fasilitas" name="fasilitas" placeholder="" autocomplete="off">
          </div>
          
          <div class="form-group">
            <label for="post1">Status Sewa</label>
            <select name="status_sewa" id="status_sewa" class="form-control" required="required">
              <option>Pilih status sewa</option>
              <option value="kosong">Kosong</option>
              <option value="terisi">Terisi</option>
            </select>
          </div>

          <div class="form-group">
            <label for="post1">Status Bayar</label>
            <select name="status_bayar" id="status_bayar" class="form-control" required="required">
              <option>Pilih status bayar</option>
              <option value="belum">Belum dibayar</option>
              <option value="lunas">Sudah dibayar</option>
              <option value="sebagian">Dibayar sebagian</option>

            </select>
          </div>
                  

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php // endif; ?>




<?php //if(in_array('delete_{table_name', $user_permission)): ?>
<!-- remove brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="remove_kamarModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Hapus kamar</h4>
      </div>

      <form role="form" action="<?php echo base_url('kamar/remove') ?>" method="post" id="remove_kamarForm">
        <div class="modal-body">
          <p>Yakin akan dihapus?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
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
  $("#mainKamarNav").addClass('active');

  // initialize the datatable 
  manageTable = $('#manageTable').DataTable({
    'ajax': base_url+'kamar/fetch_kamarData',
    'order': []
  });

  // submit the create from 
  $("#create_kamarForm").unbind('submit').on('submit', function() {
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
          $("#add_kamarModal").modal('hide');
          // reset the form
          $("#create_kamarForm")[0].reset();
          $("#create_kamarForm .form-group").removeClass('has-error').removeClass('has-success');

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

function edit_kamar(id)
{ 
  $.ajax({
    url: base_url+'kamar/fetch_kamarById/'+id,
    type: 'post',
    dataType: 'json',
    success:function(response) {

      
      $("#edit_name").val(response.name);
      $("#edit_harga").val(response.harga);
      $("#edit_kategori_id").val(response.kategori_id);
      $("#edit_fasilitas").val(response.fasilitas);
      $("#edit_tipe_bayar").val(response.tipe_bayar);
      $("#edit_status_sewa").val(response.status_sewa);
      $("#edit_status_bayar").val(response.status_bayar);
      $("#edit_tgl_terisi").val(response.tgl_terisi);
      $("#edit_tgl_habis").val(response.tgl_habis);

      $("#update_kamarForm").unbind('submit').bind('submit', function() {
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

              $("#edit_kamarModal").modal('hide');
              // reset the form 
              $("#update_kamarForm .form-group").removeClass('has-error').removeClass('has-success');
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

function remove_kamar(id)
{
  if(id) {
    $("#remove_kamarForm").on('submit', function() {
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
            $("#remove_kamarModal").modal('hide');
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
