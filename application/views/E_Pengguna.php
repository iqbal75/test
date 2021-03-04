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
    </ol>
  </section>


  <?php foreach($pengguna as $u){ ?>
	<form action="<?php echo base_url(). 'C_Pengguna/update'; ?>" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
              <label for="inputId" class="col-sm-4 control-label">Id Pengguna</label>
              <div class="col-sm-3">
                
                <input type="hidden" name="Id_Pengguna" class="form-control" id="inputIdPengguna" Readonly placeholder="Id_Pengguna" required value="<?php echo $u->Id_Pengguna ?>">
                
              </div>
          </div>
          <div class="form-group">
              <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
              <div class="col-sm-7">
                  <input type="text" name="Nama_Pengguna" class="form-control" id="inputName" placeholder="Nama Lengkap" required value="<?php echo $u->Nama_Pengguna ?>">
              </div>
          </div>
          <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
              <div class="col-sm-7">
                  <input type="email" name="Email" class="form-control" placeholder="email@gmail.com" required value="<?php echo $u->Email ?>">
               </div>
           </div>
           <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                <div class="col-sm-7">
                    <div class="radio radio-info radio-inline" >
                        <input type="radio" id="inlineRadio1" value="L" name="Jenis_Kelamin" checked><!-- <?php echo $u->Jenis_Kelamin ?> -->
                        <label for="inlineRadio1"> Laki-Laki </label>
                    </div>
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio2" value="P" name="Jenis_Kelamin">
                        <label for="inlineRadio2"> Perempuan </label><!-- <?php echo $u->Jenis_Kelamin ?> -->
                    </div>
                </div>
            </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
              <label for="inputUserName" class="col-sm-4 control-label">Username</label>
              <div class="col-sm-7">
                  <input type="text" name="username" class="form-control" id="inputUserName" placeholder="Username" required value="<?php echo $u->username ?>">
              </div>
          </div>
          <div class="form-group">
              <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
              <div class="col-sm-7">
                  <input type="text" name="password" class="form-control" id="inputPassword3" placeholder="Password" required value="<?php echo $u->password ?>">
              </div>
          </div>
          <div class="form-group">
              <label for="inputPassword4" class="col-sm-4 control-label">Retry Password</label>
              <div class="col-sm-7">
                  <input type="text" name="RetryPassword" class="form-control" id="inputPassword4" placeholder="Ulangi Password" required value="<?php echo $u->RetryPassword ?>">
              </div>
          </div>
          <div class="form-group">
              <label for="inputUserName" class="col-sm-4 control-label">Kontak</label>
              <div class="col-sm-7">
                  <input type="text" name="Kontak" class="form-control" id="inputKontak" placeholder="Kontak Person" required value="<?php echo $u->Kontak ?>">
              </div>
          </div>
          <div class="form-group">
              <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
              <div class="col-sm-7">
                  <input type="file" name="Poto" required value="<?php echo $u->Poto ?>">
              </div>
          </div>
      </div>
    </div>
          
            
          <input type="submit" value="Simpan" class="btn btn-primary ">		
	</form>	
	<?php } ?>

</div>

<?php include 'Template/Footer.php'; ?>   
