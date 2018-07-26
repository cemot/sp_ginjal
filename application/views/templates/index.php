  <?php $this->load->view('templates/header') ?>
  <body>
  <!-- container section start -->
  <section id="container" class="">

  <?php $this->load->view('templates/sidebar') ?>
            
  <?php $this->load->view($contents) ?>
  </section>
  <!-- end container section start -->

<?php $this->load->view('templates/footer') ?>

  </body>
</html>
