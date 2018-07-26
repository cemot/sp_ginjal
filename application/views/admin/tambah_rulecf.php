      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo site_url()?>/home">Beranda</a></li>
						<li><i class="icon_document_alt"><a href="<?php echo site_url()?>/nilaicf"></i>Nilai CF</a></li>
						<li><i class="fa fa-plus"></i>Rule Nilai CF</li>						  	
					</ol>
				</div>
			</div>
              
            <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Tambah Data
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="feedback_form" action="<?php echo site_url()?>/nilaicf/create" method="POST">
                                      <div class="form-group ">
                                          <label for="kd_gejala" class="control-label col-lg-2">Kode Gejala <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="kd_gejala" name="kd_gejala" minlength="3" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="kd_penyakit" class="control-label col-lg-2">Kode Penyakit <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="kd_penyakit" type="text" name="kd_penyakit" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="md" class="control-label col-lg-2">Nilai MD <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="md" type="text" name="md" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="mb" class="control-label col-lg-2">Nilai MB <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="mb" type="text" name="mb" required />
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
                                              <button class="btn btn-default" type="button"><a href="<?php echo site_url()?>/nilaicf">Batal</a></button>
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
