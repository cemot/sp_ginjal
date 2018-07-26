      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo site_url()?>/home">Beranda</a></li>
						<li><i class="icon_document_alt"><a href="<?php echo site_url()?>/users"></i>User</a></li>
						<li><i class="fa fa-plus"></i>Tambah User</li>						  	
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
                                  <form class="form-validate form-horizontal" id="feedback_form" action="<?php echo site_url()?>/users/create" method="POST">
                                      
                                      <div class="form-group ">
                                          <label for="nama" class="control-label col-lg-2">Nama Lengkap<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="nama" type="text" name="nama" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="jk" class="control-label col-lg-2">Jenis Kelamin<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <select class="form-control" name="jk" id="jk">
                                                <option value="">Pilih Jenis Kelamin</option>
                                                <option value="P">Perempuan</option>
                                                <option value="L">Laki-Laki</option>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="umur" class="control-label col-lg-2">Umur<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="umur" type="text" name="umur" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="email" class="control-label col-lg-2">Email<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="email" type="email" name="email" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="username" class="control-label col-lg-2">Username <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="username" name="username" minlength="6" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="password" class="control-label col-lg-2">Password <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="password" type="password" name="password" required />
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
                                              <button class="btn btn-default" type="button"><a href="<?php echo site_url()?>/users">Batal</a></button>
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
