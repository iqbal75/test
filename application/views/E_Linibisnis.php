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

<?php foreach($linibisnis as $u){ ?>
	<form action="<?php echo base_url(). 'C_Linibisnis/update'; ?>" method="post">
		<div class="rows">
		<div class="col-md-3">
			Id Lini Bisnis :
		</div>
		<div class="col-md-9">	
		<input type="text" name="Id_LiniBisnis" value="<?php echo $u->Id_LiniBisnis ?>" class="form-control">	
		</div>
		<div class="col-md-3">
			Lini Bisnis :
		</div>
		<div class="col-md-9">		
					<textarea type="text" name="LiniBisnis" rows="10" cols="8" class="form-control"><?= $u->LiniBisnis ?></textarea>
					
					<br>
					<input type="submit" value="Simpan" class="btn btn-primary ">

		</div>	
			
		
	</form>	
	<?php } ?>

</div>
<?php include 'Template/Footer.php'; ?>




