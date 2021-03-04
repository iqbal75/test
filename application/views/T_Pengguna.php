<?php include 'Template/Header.php'; ?>
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

    <!-- Main content -->
    <section class="content blue">
      <div class="row">
        <div class="col-lg-10">
          <div class="box box-widget">
           
          
            <div class="box-header">
              <a class="btn btn-primary btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-user-plus"></span> Add Pengguna</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">


              <table id="example1" class="table table-striped" style="font-size:12px;">
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
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>RetryPassword</th>
                    <th>Kontak</th>
                    <th>Foto Pengguna</th>
                    <th style="text-align:center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  foreach($pengguna as $u){ 
                  ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $u->Nama_Pengguna ?></td>
                    <td><?php echo $u->Email ?></td>
                    <td><?php echo $u->Jenis_Kelamin ?></td>
                    <td><?php echo $u->username ?></td>
                    <td><?php echo $u->password ?></td>
                    <td><?php echo $u->RetryPassword ?></td>
                    <td><?php echo $u->Kontak ?></td>
                    <td><?php echo $u->Poto ?><!-- <img src="<?php echo base_url('agambar/default.jpg') ?>"> --></td>
                    <td>
                      <!-- <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $Id_Pengguna;?>"><span class="fa fa-pencil"></span></a>
                      <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo base_url(); ?> C_Pengguna/edit "><span class="fa fa-trash"></span></a> -->

                      <?php echo anchor('C_Pengguna/edit/'.$u->Id_Pengguna,'<i class="fa fa-paint-brush" aria-hidden="true"> Edit </i>'); ?>
                      
                      <?php echo anchor('C_Pengguna/hapus/'.$u->Id_Pengguna,'<span class="fa fa-trash">Hapus</span> '); ?>
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
        <form action="<?php echo base_url(). 'C_Pengguna/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label for="inputId" class="col-sm-4 control-label">Id Pengguna</label>
              <div class="col-sm-3">
                
                <input type="hidden" name="Id_Pengguna" class="form-control" id="inputIdPengguna" Readonly placeholder="Id_Pengguna" required >
                
              </div>
          </div>
          <div class="form-group">
              <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
              <div class="col-sm-7">
                  <input type="text" name="Nama_Pengguna" class="form-control" id="inputName" placeholder="Nama Lengkap" required>
              </div>
          </div>
          <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
              <div class="col-sm-7">
                  <input type="email" name="Email" class="form-control" placeholder="email@gmail.com" required>
               </div>
           </div>
           <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                <div class="col-sm-7">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio1" value="L" name="Jenis_Kelamin" checked>
                        <label for="inlineRadio1"> Laki-Laki </label>
                    </div>
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio1" value="P" name="Jenis_Kelamin">
                        <label for="inlineRadio2"> Perempuan </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
              <label for="inputUserName" class="col-sm-4 control-label">Username</label>
              <div class="col-sm-7">
                  <input type="text" name="username" class="form-control" id="inputUserName" placeholder="Username" required>
              </div>
          </div>
          <div class="form-group">
              <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
              <div class="col-sm-7">
                  <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required>
              </div>
          </div>
          <div class="form-group">
              <label for="inputPassword4" class="col-sm-4 control-label">Retry Password</label>
              <div class="col-sm-7">
                  <input type="password" name="RetryPassword" class="form-control" id="inputPassword4" placeholder="Ulangi Password" required>
              </div>
          </div>
          <div class="form-group">
              <label for="inputUserName" class="col-sm-4 control-label">Kontak</label>
              <div class="col-sm-7">
                  <input type="text" name="Kontak" class="form-control" id="inputKontak" placeholder="Kontak Person" required>
              </div>
          </div>
          <div class="form-group">
              <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
              <div class="col-sm-7">
                  <input type="file" name="Poto" required>
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




