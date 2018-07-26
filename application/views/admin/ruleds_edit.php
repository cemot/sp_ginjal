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
						<li><i class="icon_document_alt"><a href="<?php echo site_url()?>/ruleds"></i>Rule DS</a></li>
						<li><i class="fa fa-pencil"></i>Edit Rule DS</li>						  	
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
                                  <form class="form-validate form-horizontal" id="feedback_form" action="<?php echo site_url()?>/ruleds/edit" method="POST">
                                      <div class="form-group ">
                                          <div class="col-lg-10">
                                              <input type="hidden" name="id" value="<?php echo $ruleds['id'] ?>">
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="id_gejala" class="control-label col-lg-2">Nama Gejala <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                            <select class="form-control" name="id_gejala" id="id_gejala">
                                                <option value="NULL"><?php echo $ruleds['id_gejala'] ?></option>
                                                <option value="G01">G01</option>
                                                <option value="G02">G02</option>
                                                <option value="G03">G03</option>
                                                <option value="G04">G04</option>
                                                <option value="G05">G05</option>
                                                <option value="G06">G06</option>
                                                <option value="G07">G07</option>
                                                <option value="G08">G08</option>
                                                <option value="G09">G09</option>
                                                <option value="G10">G10</option>
                                                <option value="G11">G11</option>
                                                <option value="G12">G12</option>
                                                <option value="G13">G13</option>
                                                <option value="G14">G14</option>
                                                <option value="G15">G15</option>
                                                <option value="G16">G16</option>
                                                <option value="G17">G17</option>
                                                <option value="G18">G18</option>
                                                <option value="G19">G19</option>
                                                <option value="G20">G20</option>
                                                <option value="G21">G21</option>
                                                <option value="G22">G22</option>
                                                <option value="G23">G23</option>
                                                <option value="G24">G24</option>
                                                <option value="G25">G25</option>
                                                <option value="G26">G26</option>
                                                <option value="G27">G27</option>
                                                <option value="G28">G28</option>
                                                <option value="G29">G29</option>
                                                <option value="G30">G30</option>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="id_penyakit" class="control-label col-lg-2">Nama Penyakit <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                            <select class="form-control" name="id_penyakit" id="id_penyakit">
                                                <option value="NULL"><?php echo $ruleds['id_penyakit'] ?></option>
                                                <option value="P01">P01 - Gagal Ginjal Akut</option>
                                                <option value="P02">P02 - Gagal Ginjal Kronik</option>
                                                <option value="P03">P03 - Infeksi Saluran Kemih</option>
                                                <option value="P04">P04 - Kista Ginjal</option>
                                                <option value="P05">P05 - Batu Ginjal</option>
                                                <option value="P06">P06 - Kanker Ginjal</option>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-default" type="submit" name="submit">Simpan</button>
                                              <button class="btn btn-default" type="button"><a href="<?php echo site_url()?>/ruleds">Batal</a></button>
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
