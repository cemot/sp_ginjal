 <?php $this->load->view('templates/header') ?>
 <!-- container section start -->
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
						<li><i class="fa fa-table"></i>Data Penyakit</li>						  	
					</ol>
				</div>
			</div>
              
           <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                                <i class="fa fa-plus"></i><a href="<?php echo site_url() ?>/penyakit/create">Tambah Data</a>
                          </header>
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>	
                                 <th>NO</th>
                                 <th>ID Penyakit</th>
                                 <th>Nama Penyakit</th>
                                 <th>Solusi Secara Umum</th>
                                 <th><center>Aksi</center></th>
                               <?php 
                                  $no=1;
                                  foreach ($penyakit_data as $penyakit) : ?>  
                              <tr>
                                 <td><?php echo $no++ ?></td>
                                 <td><?php echo $penyakit['id_penyakit'] ?></td>
                                 <td><?php echo $penyakit['nama'] ?></td>
                                 <td><?php echo $penyakit['solusi'] ?></td>
                                 <td><center>
                                  <div class="btn-group">
                                      <a class="btn btn-default" href="<?php echo site_url('/penyakit/edit/'.$penyakit['id_penyakit']) ?>"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-default" href="<?php echo site_url('/penyakit/hapus/'.$penyakit['id_penyakit']) ?>"><i class="icon_close_alt2"></i></a>
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
