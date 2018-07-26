<?php $this->load->view('templates/header') ?>
<section id="container" class="">
    <?php $this->load->view('templates/sidebar') ?>
<!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo site_url() ?>/home/index">Beranda</a></li>
						<li><i class="fa fa-table"></i>Rule DS</li>						  	
					</ol>
				</div>
			</div>
              
           <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                                <i class="fa fa-plus"></i><a href="<?php echo site_url() ?>/ruleds/create">Tambah Rule</a>
                          </header>
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>	
                                 <th>NO</th>
                                 <th>ID Gejala</th>
                                 <th>ID Penyakit</th>
                                 <th><center>Aksi</center></th>
                               <?php 
                                  $no=1;
                                  foreach ($ruleds_data as $ruleds) : ?>  
                              <tr>
                                 <td><?php echo $no++ ?></td>
                                 <td><?php echo $ruleds['id_gejala'] ?></td>
                                 <td><?php echo $ruleds['id_penyakit'] ?></td>
                                 <td><center>
                                  <div class="btn-group">
                                      <a class="btn btn-default" href="<?php echo site_url('/ruleds/edit/'.$ruleds['id']) ?>"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-default" href="<?php echo site_url('/ruleds/hapus/'.$ruleds['id']) ?>"><i class="icon_close_alt2"></i></a>
                                  </div></center>
                                  </td>
                              </tr> 
                              <?php endforeach ?>                           
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>  
            
          </section>
      </section>
      <!--main content end-->
      <?php $this->load->view('templates/footer') ?>