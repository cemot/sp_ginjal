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
						<li><i class="fa fa-table"></i>Data Gejala</li>						  	
					</ol>
				</div>
			</div>
              
           <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                                <i class="fa fa-plus"></i><a href="<?php echo site_url() ?>/gejala/create">Tambah Data</a>
                          </header>
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>	
                                 <th>NO</th>
                                 <th>ID Gejala</th>
                                 <th>Nama Gejala</th>
                                 <th>Bobot</th>
                                 <th><center>Aksi</center></th>
                               <?php 
                                  $no=1;
                                  foreach ($gejala_data as $gejala) : ?>  
                              <tr>
                                 <td><?php echo $no++ ?></td>
                                 <td><?php echo $gejala['id_gejala'] ?></td>
                                 <td><?php echo $gejala['nama'] ?></td>
                                 <td><?php echo $gejala['bobot'] ?></td>
                                 <td><center>
                                  <div class="btn-group">
                                      <a class="btn btn-default" href="<?php echo site_url('/gejala/edit/'.$gejala['id_gejala']) ?>"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-default" href="<?php echo site_url('/gejala/hapus/'.$gejala['id_gejala']) ?>"><i class="icon_close_alt2"></i></a>
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