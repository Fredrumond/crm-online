<?php include "includes/header/header.php"; ?>

<div id="wrapper">
  <div id="page-wrapper">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">
                      <?php echo $titulo ?>
                      <small><?php echo $subtitulo = ($subtitulo == " ")? $subtitulo: ''; ?></small>
                  </h1>
                  <!-- <ol class="breadcrumb">
                      <li>
                          <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                      </li>
                      <li class="active">
                          <i class="fa fa-file"></i> Blank Page
                      </li>
                  </ol> -->
              </div>

          </div>

          <section id="content">

			         <?php echo $obContent ?>

		      </section><!-- #content end -->

      </div>
  </div>
</div>

<?php include "includes/footer/footer.php"; ?>
