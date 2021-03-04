
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
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-user-plus"></span> Add About</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">


              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>About Company</th>
                    <th>Poin 1</th>
                    <th>Poin 2</th>
                    <th>Poin 3</th>
                    <th>Poin 4</th>
                    <th>Foto About</th>
                    <th style="text-align:center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  foreach($about as $u){ 
                  ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $u->About ?></td>
                    <td><?php echo $u->A1 ?></td>
                    <td><?php echo $u->A2 ?></td>
                    <td><?php echo $u->A3 ?></td>
                    <td><?php echo $u->A4 ?></td>
                    <td><img src="<?php echo base_url('assets/gambar/About/'.$u->PotoAbout) ?>" width=10 ></td>
                    <td>
                     <center>
                      <?php echo anchor('C_About/edit/'.$u->Id_About,'<i class="fa fa-paint-brush" aria-hidden="true"> Edit </i>'); ?>
                      
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
        <form action="<?php echo base_url(). 'C_About/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label for="inputId" class="col-sm-4 control-label">Id About</label>
              <div class="col-sm-3">
                
                <input type="hidden" name="Id_About" class="form-control" id="inputIdAbout" Readonly placeholder="Id_About" required >
                
              </div>
          </div>
          <div class="form-group">
              <label for="inputAbout" class="col-sm-4 control-label">About</label>
              <div class="col-sm-12">
                  <textarea name="About" rows="15" cols="8" class="form-control" id="inputAbout" placeholder="About" required></textarea>
              </div>
          </div>

         <div class="form-group">
              <label for="inputA1" class="col-sm-4 control-label">Poin 1</label>
              <div class="col-sm-12">
                  <input type="text" name="A1" class="form-control" id="input" required>
              </div>
          </div>
          <div class="form-group">
              <label for="inputA2" class="col-sm-4 control-label">Poin 2</label>
              <div class="col-sm-12">
                  <input type="text" name="A2" class="form-control" id="input" required>
              </div>
          </div>
          <div class="form-group">
              <label for="inputA3" class="col-sm-4 control-label">Poin 3</label>
              <div class="col-sm-12">
                  <input type="text" name="A3" class="form-control" id="input" required>
              </div>
          </div>
          <div class="form-group">
              <label for="inputa4" class="col-sm-4 control-label">Poin 4</label>
              <div class="col-sm-12">
                  <input type="text" name="A4" class="form-control" id="input" required>
              </div>
          </div>
          <div class="form-group">
              <label for="inputPoto" class="col-sm-4 control-label">Foto</label>
              <div class="col-sm-7">
                  <input type="file" name="PotoAbout" required/>
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