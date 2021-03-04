
<?php include 'Template/Header.php'; ?>

    <!-- End of Topbar --> 

        <!-- Begin Page Content -->
      <div class="container-fluid">

          <!-- Page Heading -->
          <!--<h1 class="h3 mb-4 text-gray-800">Blank Page</h1-->
        <section class="content-header">
            <h1> Dashboard Koperasi </h1>
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
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-user-plus"></span> Add Visi Misi</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">


              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Visi</th>
                    <th>Foto Visi</th>
                    <th>Misi 1</th>
                    <th>Misi 2</th>
                    <th>Misi 3</th>
                    <th>Misi 4</th>
                    <th>Foto Misi</th>
                    <th style="text-align:center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  foreach($visimisi as $u){ 
                  ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $u->Visi ?></td>
                    <td><?php echo $u->PotoVisi ?></td>
                    <td><?php echo $u->Misi1 ?></td>
                    <td><?php echo $u->Misi2 ?></td>
                    <td><?php echo $u->Misi3 ?></td>
                    <td><?php echo $u->Misi4 ?></td>
                    <td><?php echo $u->PotoMisi ?></td>
                    <td>
                     <center>
                      <?php echo anchor('C_VisiMisi/edit/'.$u->Id_VisiMisi,'<i class="fa fa-paint-brush" aria-hidden="true"> edit </i>'); ?>
                      
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
        <h5 class="modal-title" id="exampleModalLabel">Add Visi Misi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'C_VisiMisi/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
        
          <div class="form-group">
              <label for="inputId" class="col-sm-4 control-label">Id Visi Misi</label>
              <div class="col-sm-3">
                <input type="hidden" name="Id_VisiMisi" class="form-control" id="inputIdVisiMisi" Readonly placeholder="Id Visi Misi" required >
                
              </div>
          </div>
          <div class="form-group">
              <label for="inputVisi" class="col-sm-4 control-label">Visi</label>
              <div class="col-sm-12">
                  <textarea name="Visi" rows="5" cols="8" class="form-control" id="inputVisi" placeholder="Visi" required></textarea>
              </div>
          </div>

         <div class="form-group">
              <label for="inputPoto" class="col-sm-4 control-label">Photo Visi</label>
              <div class="col-sm-7">
                  <input type="file" name="PotoVisi" required/>
              </div>
          </div>
          <div class="form-group">
              <label for="inputMisi1" class="col-sm-4 control-label">Misi 1</label>
              <div class="col-sm-12">
                  <input type="text" name="Misi1" class="form-control" id="input" required>
              </div>
          </div>
          <div class="form-group">
              <label for="inputMisi2" class="col-sm-4 control-label">Misi 2</label>
              <div class="col-sm-12">
                  <input type="text" name="Misi2" class="form-control" id="input" required>
              </div>
          </div>
          <div class="form-group">
              <label for="inputMisi3" class="col-sm-4 control-label">Misi 3</label>
              <div class="col-sm-12">
                  <input type="text" name="Misi3" class="form-control" id="input" required>
              </div>
          </div>
          <div class="form-group">
              <label for="inputMisi4" class="col-sm-4 control-label">Misi 4</label>
              <div class="col-sm-12">
                  <input type="text" name="Misi4" class="form-control" id="input" required>
              </div>
          </div>
          <div class="form-group">
              <label for="inputPoto" class="col-sm-4 control-label">Photo Misi</label>
              <div class="col-sm-7">
                  <input type="file" name="PotoMisi" required/>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <center>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <input type="submit" value="Tambah" class="btn btn-primary " >
            </center>
      </div>
    </div>
    
    </form>
  </div>
</div>

<?php include 'Template/Footer.php'; ?>