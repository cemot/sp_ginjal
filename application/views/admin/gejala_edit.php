 <?php $this->load->view('templates/header') ?>
 <!-- container section start -->
  <section id="container" class="">
    <?php $this->load->view('templates/sidebar') ?>
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo site_url()?>/home">Beranda</a></li>
						<li><i class="icon_document_alt"><a href="<?php echo site_url()?>/gejala"></i>Gejala</a></li>
						<li><i class="fa fa-pencil"></i>Edit Gejala</li>						  	
					</ol>
				</div>
			</div>
              
            <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Edit Data
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="feedback_form" action="<?php echo site_url()?>/gejala/edit" method="POST">
                                      <div class="form-group ">
                                          <!-- <label for="nama" class="control-label col-lg-2">ID Gejala</label> -->
                                          <div class="col-lg-10">
                                              <input class="form-control" id="id_gejala" name="id_gejala" value="<?php echo $gejala['id_gejala'] ?>"  type="hidden"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="nama" class="control-label col-lg-2">Nama Gejala</label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="nama" name="nama" value="<?php echo $gejala['nama'] ?>" minlength="3" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="bobot" class="control-label col-lg-2">Nilai Bobot</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="bobot" type="text" name="bobot" value="<?php echo $gejala['bobot'] ?>" required />
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-default" type="submit" name="submit">Simpan</button>
                                              <button class="btn btn-default" type="button"><a href="<?php echo site_url()?>/gejala">Batal</a></button>
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>  
            
          </section>
      </section>
      <!--main content end-->
<?php $this->load->view('templates/footer') ?>
