<?php include 'Template/Header.php'; ?>
<style type="text/css">
                  thead{
                    background-color: #4169E1;
                                      }
                  th{
                    color: #fff;

                  }
                  .box-header{
                    color: #fff;
                    margin-bottom: 10px;

                  }
                </style>
        <!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
<!-- content header -->
  <section class="content-header">
    <h1>Dasboard
      <small>Company</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>login/Dasboard"><i class="fa fa-dasboard">Dasboard</i></a></li>
      <li><i class="fa fa-chevron-right" aria-hidden="true">  </i></li>
      <li><a href="<?php echo base_url(); ?>C_Pengguna"><i class="fa fa-dasboard">Administrator</i></a></li>
    </ol>
  </section>
<?php
if(isset($error))
{
  echo "ERROR UPLOAD : <br/>";
  print_r($error);
  echo "<hr/>";
}
?>
    <!-- Main content -->
    <section class="content blue">
      <div class="row">
        <div class="col-lg-10">
          <div class="box box-widget">
           
          
            <div class="box-header">
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-user-plus"></span> Add Pengguna</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">


              <table id="example1" class="table table-striped" style="font-size:13px;" border="0">
                <thead bgcolor="Blue">
                <tr>
                    <th>Id_Slider</th>
                    <th>Image Slider</th>
                    <th>Keterangan</th>
                    <th style="text-align:center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  foreach($slider as $u){
                  ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $u->Slider ?></td>
                    <td><?php echo $u->Keterangan ?></td>
                    <td>
                      <?php echo anchor('C_Slider/edit/'.$u->Id_Slider,'<i class="fa fa-paint-brush" aria-hidden="true"> Edit </i>'); ?>
                      
                      <?php echo anchor('C_Slider/hapus/'.$u->Id_Slider,'<span class="fa fa-trash">Hapus</span> '); ?>
                    </td>
                  </tr>

                  <?php }  ?>
        
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  

</div>




<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <img src="<?php echo base_url('assets/img/clock.png') ?>" width="20%">
        <h5 class="modal-title" id="exampleModalLabel">Add Pengguna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- <?php echo form_open_multipart('C_Slider/tambah_aksi'); ?> -->
        <form action="<?php echo base_url(); ?>C_Slider/Upload_Image" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label for="inputId" class="col-sm-4 control-label">Id Slider</label>
              <div class="col-sm-3">
                
                <input type="hidden" name="Id_Slider" class="form-control" id="inputIdSlider" Readonly placeholder="Id_Slider" required >
                
              </div>
          </div>
          <div class="form-group">
              <label for="Slider1" class="col-sm-4 control-label">Image Slider</label>
              <div class="col-sm-7">
                <input type="file" name="Slider" required>
              </div>
          </div>
          <div class="form-group">
              <label for="inputId" class="col-sm-4 control-label">Keterangan</label>
              <div class="col-sm-10">
                <textarea name="Keterangan" rows="5" cols="8" class="form-control" id="inputKeterangan" placeholder="Keterangan" required></textarea>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <center>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <input type="submit" value="Tambah" class="btn btn-primary">
        </center>
      </div>
    </div>
    </form>
  </div>
</div>

<?php include 'Template/Footer.php'; ?>  




