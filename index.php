<?Php

include_once( "init.php");






if(! isset( $_SESSION['stop_html'] )){


?>



<!DOCTYPE html>
<html lang="en">

<head>

<?php include_once( "partials/metatags.php"); ?>

  <title><?Php echo( $_SESSION["variables"]['site_name']) ?></title>

  <?php include_once( "partials/styles.php"); ?>



</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">


    <?php include_once( "partials/nav.php"); ?>



    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?Php include_once('partials/topnavbar.php') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>

          <p class="mb-4">Bootstrap's default utility classes can be found on the official <a href="https://getbootstrap.com/docs">Bootstrap Documentation</a> page. The custom utilities below were created to extend this theme past the default utility classes built into Bootstrap's framework.</p>



  <div class="card mb-4 py-3 border-left-primary">
    <div class="card-body">
      .border-left-primary
    </div>
  </div>


</div>



</div>


















        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include_once( "partials/footer.php"); ?>


      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php include_once( "partials/scrolltop.php"); ?>

  <?php include_once( "partials/logoutmodal.php"); ?>



  <?php include_once( "partials/scripts.php"); ?>

    



</body>

</html>

<?php

}