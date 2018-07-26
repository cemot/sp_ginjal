<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SP Penyakit Ginjal</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>mentor/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>mentor/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>mentor/css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>mentor/css/style.css">

    <!-- =======================================================
        Theme Name: Mentor
        Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body>
    <!--Navigation bar-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">SP<span>Ginjal</span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#beranda">Beranda</a></li>
          <li><a href="#informasi">Informasi</a></li>
          <li><a href="#" data-target="#login" data-toggle="modal">Log in</a></li>
        </ul>
        </div>
      </div>
    </nav>
    <!--/ Navigation bar-->
    <!--Modal box-->
    <div class="modal fade" id="login" role="dialog">
      <div class="modal-dialog modal-sm">
      
        <!-- Modal content no 1-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center form-title">Login</h4>
          </div>
          <div class="modal-body padtrbl">

            <div class="login-box-body">
              <p class="login-box-msg">Silahkan Login untuk Diagnosa</p>
              <div class="form-group">
                <?php echo form_open('login/auth') ?>
                 <div class="form-group has-feedback"> <!----- username -------------->
                      <input class="form-control" placeholder="Username"  id="username" name="username" type="text" autocomplete="off" /> 
            <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span><!---Alredy exists  ! -->
                      <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback"><!----- password -------------->
                      <input class="form-control" placeholder="Password" id="password" name="password" type="password" autocomplete="off" />
            <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  <div class="row">
                      <div class="col-xs-12">
                          <button type="submit" name="submit" class="btn btn-green btn-block btn-flat" onclick="userlogin()">Masuk</button>
                      </div>
                      <?php echo form_close() ?>
                  </div>
                </form>
              </div><br>
              <p>Belum Registrasi ? <a href="<?php echo site_url() ?>/#contact"><b>Klik Untuk Registrasi</b></a></p>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!--/ Modal box-->
    <!--Banner-->
    <div class="banner">
      <div class="bg-color">
        <div class="container">
          <div class="row">
            <div class="banner-text text-center">
              <div class="text-border">
                <h2 class="text-dec">Selamat Datang</h2>
              </div>
              <div class="intro-para text-center quote">
                <p class="big-text">Sistem Pakar Diagnosa Penyakit Ginjal</p>
                <p class="small-text">
                  <u><?php echo $this->session->flashdata('msg');?></u>
                </p>
                <!-- <a href="#." class="btn">GET A QUOTE</a> -->
              </div>
              <a href="#beranda" class="mouse-hover"><div class="mouse"></div></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Banner-->