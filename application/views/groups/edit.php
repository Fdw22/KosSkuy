

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage
        <small>Groups</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url('groups/') ?>">Groups</a></li>
        <li class="active">Edit</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">
          
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

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit Group</h3>
            </div>
            <form role="form" action="<?php base_url('groups/update') ?>" method="post">
              <div class="box-body">

                <?php echo validation_errors(); ?>

                <div class="form-group">
                  <label for="group_name">Nama Hak Akses/Grup</label>
                  <input type="text" class="form-control" id="group_name" name="group_name" placeholder="Enter group name" value="<?php echo $group_data['group_name']; ?>">
                </div>
                <div class="form-group">
                  <label for="permission">Hak akses</label>

                  <?php $serialize_permission = unserialize($group_data['permission']); ?>
                  
                  <table class="table table-responsive">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Tambah</th>
                        <th>Edit</th>
                        <th>Lihat</th>
                        <th>Hapus</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Users</td>
                        <td><input type="checkbox" class="minimal" name="permission[]" id="permission" class="minimal" value="createUser" <?php if($serialize_permission) {
                          if(in_array('createUser', $serialize_permission)) { echo "checked"; } 
                        } ?> ></td>
                        <td><input type="checkbox" name="permission[]" id="permission" class="minimal" value="updateUser" <?php 
                        if($serialize_permission) {
                          if(in_array('updateUser', $serialize_permission)) { echo "checked"; } 
                        }
                        ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" class="minimal" value="viewUser" <?php 
                        if($serialize_permission) {
                          if(in_array('viewUser', $serialize_permission)) { echo "checked"; }   
                        }
                        ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" class="minimal" value="deleteUser" <?php 
                        if($serialize_permission) {
                          if(in_array('deleteUser', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                      </tr>
                      <tr>
                        <td>Groups</td>
                        <td><input type="checkbox" name="permission[]" id="permission" class="minimal" value="createGroup" <?php 
                        if($serialize_permission) {
                          if(in_array('createGroup', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" class="minimal" value="updateGroup" <?php 
                        if($serialize_permission) {
                          if(in_array('updateGroup', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" class="minimal" value="viewGroup" <?php 
                        if($serialize_permission) {
                          if(in_array('viewGroup', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" class="minimal" value="deleteGroup" <?php 
                        if($serialize_permission) {
                          if(in_array('deleteGroup', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                      </tr>

                      <tr>
                        <td>Orders</td>
                        <td><input type="checkbox" name="permission[]" id="permission" class="minimal" value="createOrder" <?php if($serialize_permission) {
                          if(in_array('createOrder', $serialize_permission)) { echo "checked"; } 
                        } ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" class="minimal" value="updateOrder" <?php if($serialize_permission) {
                          if(in_array('updateOrder', $serialize_permission)) { echo "checked"; } 
                        } ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" class="minimal" value="viewOrder" <?php if($serialize_permission) {
                          if(in_array('viewOrder', $serialize_permission)) { echo "checked"; } 
                        } ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" class="minimal" value="deleteOrder" <?php if($serialize_permission) {
                          if(in_array('deleteOrder', $serialize_permission)) { echo "checked"; } 
                        } ?>></td>
                      </tr>




                      <tr>
                        <td>Reports</td>
                        <td> - </td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" class="minimal" value="viewReports" <?php if($serialize_permission) {
                          if(in_array('viewReports', $serialize_permission)) { echo "checked"; } 
                        } ?>></td>
                        <td> - </td>
                      </tr>

                      <tr>
                        <td>Company</td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" class="minimal" value="updateCompany" <?php if($serialize_permission) {
                          if(in_array('updateCompany', $serialize_permission)) { echo "checked"; } 
                        } ?>></td>
                        <td> - </td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Profile</td>
                        <td> - </td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" class="minimal" value="viewProfile" <?php if($serialize_permission) {
                          if(in_array('viewProfile', $serialize_permission)) { echo "checked"; } 
                        } ?>></td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Setting</td>
                        <td>-</td>
                        <td><input type="checkbox" name="permission[]" id="permission" class="minimal" value="updateSetting" <?php if($serialize_permission) {
                          if(in_array('updateSetting', $serialize_permission)) { echo "checked"; } 
                        } ?>></td>
                        <td> - </td>
                        <td> - </td>
                      </tr>
                      <!-- ******************************************** -->

                      <?php
                      foreach ($modul_data as $key) : ?>

                       <tr>
                        <td><?php echo $key->name ?></td>
                        <td><input type="checkbox" name="permission[]" id="permission" class="minimal" value="create_<?php echo $key->name ?>"
                         <?php if($serialize_permission) {
                          if(in_array('create_'.$key->name, $serialize_permission)) { echo "checked"; } 
                        } ?>>
                      </td>
                      <td><input type="checkbox" name="permission[]" id="permission" class="minimal" value="update_<?php echo $key->name ?>"
                         <?php if($serialize_permission) {
                          if(in_array('update_'.$key->name, $serialize_permission)) { echo "checked"; } 
                        } ?>>
                      </td>
                      <td><input type="checkbox" name="permission[]" id="permission" class="minimal" value="view_<?php echo $key->name ?>"
                         <?php if($serialize_permission) {
                          if(in_array('view_'.$key->name, $serialize_permission)) { echo "checked"; } 
                        } ?>>
                      </td>
                      <td><input type="checkbox" name="permission[]" id="permission" class="minimal" value="delete_<?php echo $key->name ?>"
                         <?php if($serialize_permission) {
                          if(in_array('delete_'.$key->name, $serialize_permission)) { echo "checked"; } 
                        } ?>>
                      </td>
                        
                      </tr>
                    <?php endforeach ?>



                      <!-- *************************************** -->
                    </tbody>
                  </table>
                  
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update Changes</button>
                <a href="<?php echo base_url('groups/') ?>" class="btn btn-warning">Back</a>
              </div>
            </form>
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

<script type="text/javascript">
  $(document).ready(function() {
    $("#mainGroupNav").addClass('active');
    $("#manageGroupNav").addClass('active');

    $('input[type="checkbox"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    });
  });
</script>
