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
            <li><i class="fa fa-table"></i>Data User</li>                
          </ol>
        </div>
      </div>
              
           <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                                <i class="fa fa-plus"></i><a href="<?php echo site_url() ?>/users/create">Tambah Data</a>
                          </header>
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>  
                                 <th>NO</th>
                                 <th>Nama Lengkap</th>
                                 <th>Jenis Kelamin</th>
                                 <th>Umur</th>
                                 <th>Email</th>
                                 <th>Username</th>
                                 <th>Password</th>
                                 <th><center>Aksi</center></th>
                               <?php 
                                  $no=1;
                                  foreach ($users_data as $users) : ?>  
                              <tr>
                                 <td><?php echo $no++ ?></td>
                                 <td><?php echo $users['nama'] ?></td>                              
                                 <td><?php echo $users['jk'] ?></td>                              
                                 <td><?php echo $users['umur'] ?></td>                              
                                 <td><?php echo $users['email'] ?></td>                              
                                 <td><?php echo $users['username'] ?></td>
                                 <td><?php echo $users['password'] ?></td>
                                 <td><center>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="<?php echo site_url('/users/edit/'.$users['id']) ?>"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="<?php echo site_url('/users/hapus/'.$users['id']) ?>"><i class="icon_close_alt2"></i></a>
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