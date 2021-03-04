
<?php include 'Template/Header.php'; ?>

    <!-- End of Topbar --> 

        <!-- Begin Page Content -->
      <div class="container-fluid">

          <!-- Page Heading -->
          <!--<h1 class="h3 mb-4 text-gray-800">Blank Page</h1-->
        <section class="content-header">
            <h1> Dasboard Koperasi </h1>
          <ol class="breadcrumb">
              <li><a href="<?php echo base_url(); ?>login/Dasboard"><i class="fa fa-dashboard"> Dasboard </i></a></li>
          </ol>
        </section>
      
        <!-- /.container-fluid -->
        
<section class="content blue">
      <div class="row">
        <div class="col-lg-10">
          <div class="box box-widget">
           
          
            <div class="box-header">
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-user-plus"></span> Add Pengguna</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">


              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Lini Bisnis</th>
                    <th style="text-align:center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  foreach($linibisnis as $u){ 
                  ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $u->LiniBisnis ?></td>
                    <td>
                     <center>
                      <?php echo anchor('C_Linibisnis/edit/'.$u->Id_LiniBisnis,'<i class="fa fa-paint-brush" aria-hidden="true"> Edit </i>'); ?>
                      
                    </center>
                    </td>
                  </tr>
                  <?php } ?>
        
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
  </div>



<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <img src="<?php echo base_url('assets/img/clock.png') ?>" width="20%">
        <h5 class="modal-title" id="exampleModalLabel">Add Lini Bisnis</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'C_Linibisnis/tambah_aksi'; ?>" method="post">
          <div class="form-group">
              <label for="inputUserName" class="col-sm-4 control-label">Id Lini Bisnis</label>
              <div class="col-sm-12">
                <?php
                $no = 2;
                  foreach($linibisnis as $u){ 
                  ?>
                <input type="text" name="Id_LiniBisnis" class="form-control" id="inputIdLiniBisnis" Readonly placeholder="Id_LiniBisnis" required value="<?php echo $no++ ?>">
                <?php } ?>
              </div>
          </div>
          <div class="form-group">
              <label for="inputUserName" class="col-sm-4 control-label">Lini Bisnis</label>
              <div class="col-sm-12">
                <textarea name="LiniBisnis" rows="15" cols="8" class="form-control" id="inputLiniBisnis" placeholder="LiniBisnis" required></textarea>
              </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="submit" value="Tambah" class="btn btn-primary " >
      </div> 
    </div>
  </div>
</div>

<?php include 'Template/Footer.php'; ?>