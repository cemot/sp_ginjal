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
						<li><i class="icon_document_alt"><a href="<?php echo site_url()?>/penyakit"></i>User</a></li>
						<li><i class="fa fa-pencil"></i>Edit User</li>						  	
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
                                  <form class="form-validate form-horizontal" id="feedback_form" action="<?php echo site_url()?>/users/edit" method="POST">
                                      <div class="form-group ">
                                          <div class="col-lg-10">
                                              <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="nama" class="control-label col-lg-2">Nama Lengkap</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="nama" type="text" name="nama" value="<?php echo $user['nama'] ?>" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="jk" class="control-label col-lg-2">Jenis Kelamin</label>
                                          <div class="col-lg-10">
                                              <select class="form-control" name="jk" id="jk" required>
                                                <option value=""><?php echo $user['jk'] ?></option>
                                                <option value="P">Perempuan</option>
                                                <option value="L">Laki-Laki</option>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="umur" class="control-label col-lg-2">Umur</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="umur" type="text" name="umur" value="<?php echo $user['umur'] ?>" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="email" class="control-label col-lg-2">Email</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="email" type="email" name="email" value="<?php echo $user['email'] ?>" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="username" class="control-label col-lg-2">Username</label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="username" name="username" value="<?php echo $user['username'] ?>" minlength="6" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="password" class="control-label col-lg-2">Password </label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="password" type="password" name="password" value="<?php echo $user['password'] ?>" minlength="6" required />
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
<?php $this->load->view('templates/footer') ?>
