<?php include 'Template/Header.php'; ?>
<div class="container-fluid"> 

          <!-- Page Heading -->
          <!--<h1 class="h3 mb-4 text-gray-800">Blank Page</h1-->
        <section class="content-header">
            <h1> Dasboard Koperasi </h1> 
          <ol class="breadcrumb">
              <li><a href="<?php echo base_url(); ?>login/Dasboard"><i class="fa fa-dashboard"> Dasboard </i></a></li>
          </ol>
        </section>

<?php foreach($about as $u){ ?>
	<form action="<?php echo base_url(). 'C_About/update'; ?>" method="post">

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
              <label for="inputId" class="col-sm-4 control-label">Id About</label>
              <div class="col-sm-5">
                
                <input type="hidden" name="Id_About" class="form-control" id="inputIdAbout" Readonly placeholder="Id_About" required value="<?php echo $u->Id_About ?>">
                
              </div>
          </div>
          <div class="form-group">
              <label for="inputAbout" class="col-sm-4 control-label">About Company</label>
              <div class="col-sm-12">
                  <textarea name="About" rows="10" cols="8" class="form-control" id="inputAbout" placeholder="About" required><?= $u->About ?></textarea>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
              <label for="inputA1" class="col-sm-4 control-label">Poin 1</label>
              <div class="col-sm-12">
                  <input type="text" name="A1" class="form-control" id="input" required value="<?php echo $u->A1 ?>">
              </div>
          </div>
          <div class="form-group">
              <label for="inputA2" class="col-sm-4 control-label">Poin 2</label>
              <div class="col-sm-12">
                  <input type="text" name="A2" class="form-control" id="input" required value="<?php echo $u->A2 ?>">
              </div>
          </div>
          <div class="form-group">
              <label for="inputA3" class="col-sm-4 control-label">Poin 3</label>
              <div class="col-sm-12">
                  <input type="text" name="A3" class="form-control" id="input" required value="<?php echo $u->A3 ?>">
              </div>
          </div>
          <div class="form-group">
              <label for="inputa4" class="col-sm-4 control-label">Poin 4</label>
              <div class="col-sm-12">
                  <input type="text" name="A4" class="form-control" id="input" required value="<?php echo $u->A4 ?>">
              </div>
          </div>
          <div class="form-group">
              <label for="inputPoto" class="col-sm-4 control-label">Foto</label>
              <div class="col-sm-12">
                  <input type="file" name="PotoAbout" required/ value="<?php echo $u->PotoAbout ?>">
              </div>
          </div>
        </div>
      </div>
              
          <input type="submit" value="Simpan" class="btn btn-primary ">
		
	</form>	
	<?php } ?>

</div>
<?php include 'Template/Footer.php'; ?>




