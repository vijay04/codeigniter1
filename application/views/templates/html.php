<!doctype html>
<html lang="en">

  <head>
    <title><?php print isset($page_title) ? $page_title: 'CI'; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/style.css">
  </head>

  <body>

    <div id="header-wrap">
      <?php $this->load->view('templates/header'); ?>
    </div><!-- end header wrap -->

    <div id="container">
      <div id="content">
        <section id="post-content" role="main">
          <?php $this->load->view('templates/page', $page); ?>
        </section>
      </div>
    </div>

    <div id="footer-wrap">
      <?php $this->load->view('templates/footer'); ?>
    </div><!-- end footer wrap -->

  </body>

</html>