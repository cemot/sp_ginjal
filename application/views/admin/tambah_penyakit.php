      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo site_url()?>/home">Beranda</a></li>
						<li><i class="icon_document_alt"><a href="<?php echo site_url()?>/penyakit"></i>Penyakit</a></li>
						<li><i class="fa fa-plus"></i>Tambah Data Penyakit</li>						  	
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
                                  <form class="form-validate form-horizontal" id="feedback_form" action="<?php echo site_url()?>/penyakit/create" method="POST">
                                      <div class="form-group ">
                                          <label for="id_penyakit" class="control-label col-lg-2">ID Penyakit <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <select class="form-control" name="id_penyakit" id="id_penyakit" required>
                                                <option value="">Pilih Jenis Penyaki</option>
                                                <option value="P01">P01</option>
                                                <option value="P02">P02</option>
                                                <option value="P03">P03</option>
                                                <option value="P04">P04</option>
                                                <option value="P05">P05</option>
                                                <option value="P06">P06</option>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="nama" class="control-label col-lg-2">Nama Penyakit <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="nama" type="text" name="nama" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="solusi" class="control-label col-lg-2">Solusi <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control " id="solusi" name="solusi" required=""></textarea>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-default" type="submit" name="submit">Simpan</button>
                                              <button class="btn btn-default" type="button"><a href="<?php echo site_url()?>/penyakit">Batal</a></button>
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
