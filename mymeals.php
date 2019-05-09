<?Php

include_once( "init.php");

include_once( "security/just4logged.php");

include_once( "db/initmymeals.php");




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
          <h1 class="h3 mb-4 text-gray-800">Composing Meal</h1>



          <p class="mb-4">Bootstrap's default utility classes can be found on the official <a href="https://getbootstrap.com/docs">Bootstrap Documentation</a> page. The custom utilities below were created to extend this theme past the default utility classes built into Bootstrap's framework.</p>




          <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Type</th>
                <th scope="col">Size</th>
                <th scope="col">Arounds</th>
                <th scope="col">Price</th>
                <th scope="col">Note</th>
                </tr>
            </thead>
            <tbody>

            <?Php 
                $count = 1;

                foreach( $orderings as $ordering )

                {
                    ?>
                    <tr>

                    <th scope="row"><?= $count ?></th>
                    <td><?= $ordering->type->name ?></td>
                    <td><?= $ordering->size->name ?></td>
                    <td>
                    <?Php

                        $count2 = 1;
                        echo '<ul>';
                        foreach( $ordering->arounds as $around ){

                            echo '<li>'.$around->name.'</li>';


                        }
                        echo '</ul>';
                    ?>
                    </td>
                    <td><?= $ordering->price ?></td>
                    <td><?= $ordering->note ?></td>
                    </tr>

                    <?Php 
                }

            ?>

                



            </tbody>
            </table>










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