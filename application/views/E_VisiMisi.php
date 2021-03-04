<?php include 'Template/Header.php'; ?>
<div class="container-fluid"> 

          <!-- Page Heading -->
          <!--<h1 class="h3 mb-4 text-gray-800">Blank Page</h1-->
        <section class="content-header">
            <h1> Dashboard Koperasi </h1>
          <ol class="breadcrumb">
              <li><a href="<?php echo base_url(); ?>login/Dasboard"><i class="fa fa-dashboard"> Dashboard </i></a></li>
          </ol>
        </section>

<?php foreach($visimisi as $u){ ?>
	<form action="<?php echo base_url(). 'C_VisiMisi/update'; ?>" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
              <label for="inputId" class="col-sm-4 control-label">Id Visi Misi</label>
              <div class="col-sm-5">
                <input type="hidden" name="Id_VisiMisi" class="form-control" id="inputIdVisiMisi" Readonly placeholder="Id_VisiMisi" required value="<?php echo $u->Id_VisiMisi ?>">
                
              </div>
          </div>
          <div class="form-group">
              <label for="inputVisi" class="col-sm-4 control-label">Visi</label>
              <div class="col-sm-12">
                  <textarea name="Visi" rows="8" cols="8" class="form-control" id="inputVisi" placeholder="Visi" required ><?= $u->Visi ?></textarea>
              </div>
          </div>
          <div class="form-group">
              <label for="inputPoto" class="col-sm-4 control-label">Photo Visi</label>
              <div class="col-sm-7">
                  <input type="file" name="PotoMisi" required/ value="<?php echo $u->PotoVisi ?>">
              </div>
          </div>
          <div class="form-group">
              <label for="inputMisi1" class="col-sm-4 control-label">Misi 1</label>
              <div class="col-sm-12">
                  <!-- <input type="text" name="Misi1" class="form-control" id="input" required value="<?php echo $u->Misi1 ?>"> -->
                  <textarea name="Misi1" rows="3" cols="8" class="form-control" id="inputVisi" placeholder="Visi" required ><?= $u->Misi1 ?></textarea>
              </div>
          </div>
      </div>
      <div class="col-md-6">
        
          <div class="form-group">
              <label for="inputMisi2" class="col-sm-4 control-label">Misi 2</label>
              <div class="col-sm-12">
                  <!-- <input type="text" name="Misi2" class="form-control" id="input" required value="<?php echo $u->Misi2 ?>"> -->
                  <textarea name="Misi2" rows="3" cols="8" class="form-control" id="inputVisi" placeholder="Visi" required ><?= $u->Misi2 ?></textarea>
              </div>
          </div>
          <div class="form-group">
              <label for="inputMisi3" class="col-sm-4 control-label">Misi 3</label>
              <div class="col-sm-12">
                <textarea name="Misi3" rows="3" cols="8" class="form-control" id="inputVisi" placeholder="Visi" required ><?= $u->Misi3 ?></textarea>
                  <!-- <input type="text" name="Misi3" class="form-control" id="input" required value="<?php echo $u->Misi3 ?>"> -->
              </div>
          </div>
          <div class="form-group">
              <label for="Misi4" class="col-sm-4 control-label">Misi 4</label>
              <div class="col-sm-12">
                <textarea name="Misi4" rows="3" cols="8" class="form-control" id="inputVisi" placeholder="Visi" required ><?= $u->Misi4 ?></textarea>
                  <!-- <input type="text" name="Misi4" class="form-control" id="input" required value="<?php echo $u->Misi4 ?>"> -->
              </div>
          </div>
          <div class="form-group">
              <label for="inputPoto" class="col-sm-4 control-label">Photo Misi</label>
              <div class="col-sm-7">
                  <input type="file" name="PotoMisi" required/ value="<?php echo $u->PotoMisi ?>">
              </div>
          </div>
      </div>
    </div>  
          <input type="submit" value="Simpan" class="btn btn-primary ">
	</form>	
	<?php } ?>

</div>
<?php include 'Template/Footer.php'; ?>




