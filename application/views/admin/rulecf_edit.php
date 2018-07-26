 <?php $this->load->view('templates/header') ?>
 <!-- container section start -->
  <section id="container" class="">
     
      <!--header start-->
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">SP <span class="lite">Ginjal</span></a>
            <!--logo end-->

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">                    
                    
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?php echo base_url()?>template/img/avatar1_small.jpg">
                            </span>
                            <span class="username">Jenifer Smith</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="<?php echo site_url() ?>/welcome/users"><i class="icon_profile"></i> User</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url() ?>/welcome/logout"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end--> 
    <?php $this->load->view('templates/sidebar') ?>
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo site_url()?>/home">Beranda</a></li>
						<li><i class="icon_document_alt"><a href="<?php echo site_url()?>/nilaicf"></i>Nilai CF</a></li>
						<li><i class="fa fa-pencil"></i>Edit Nilai CF</li>						  	
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
                                  <form class="form-validate form-horizontal" id="feedback_form" action="<?php echo site_url()?>/nilaicf/edit" method="POST">
                                      <div class="form-group ">
                                          <div class="col-lg-10">
                                              <input type="hidden" name="id" value="<?php echo $nilaicf['id'] ?>">
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="kd_gejala" class="control-label col-lg-2">Kode Gejala <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="kd_gejala" name="kd_gejala" value="<?php echo $nilaicf['kd_gejala'] ?>" minlength="3" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="kd_penyakit" class="control-label col-lg-2">Kode Penyakit <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="kd_penyakit" type="text" name="kd_penyakit" value="<?php echo $nilaicf['kd_penyakit'] ?>" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="md" class="control-label col-lg-2">Nilai MD <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="md" type="text" name="md" value="<?php echo $nilaicf['md'] ?>" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="mb" class="control-label col-lg-2">Nilai MB <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="mb" type="text" name="mb" value="<?php echo $nilaicf['mb'] ?>" required />
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
<?php $this->load->view('templates/footer') ?>
