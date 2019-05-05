<?Php

include_once( "init.php");

include_once( "security/just4logged.php");

include_once( "db/initmeal.php");




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




            <form method="post" action="composemeal.php">
            
            
                <div class="row">

                  <div class="col-xs-12">
                  <div class="row">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="costumer">Costumer</label>
                        <select name="custumer" class="form-control" id="costumer">

                          <?Php
                          while ($row = $costumers->fetch())
                          {
                          ?>
                          <option value="<?= $row['id'] ?>"><?= $row['name'] ?> <?= $row['last_name'] ?></option>

                          <?Php 
                          }
                          $row = null;
                          ?>

                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">

                        <a href="#" class="btn btn-primary pull-right">Or Add a costumer</a>
                      </div>
                    </div>
                  
                  </div>

                    <div class="row">

                      <div class="col-xs-4">

                      <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Type</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?Php
                                while ($row = $types->fetch())
                                {
                                ?>
                                <tr>
                                    <td><input type="radio" name="type" value="<?= $row['id'] ?>"></td>

                                    <td><?= $row['name'] ?></td>
                                </tr>

                                <?Php 
                                }
                                $row = null;
                                ?>
                                
                                </tbody>
                            </table>
                      </div>



                      <div class="col-xs-4">

                      <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Around the meal</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?Php
                                while ($row = $arounds->fetch())
                                {
                                ?>
                                <tr>
                                    <td><input type="checkbox" name="arounds[]" value="<?= $row['id'] ?>"></td>
                                    <td><?= $row['name'] ?></td>
                                </tr>

                                <?Php 
                                }
                                $row = null;
                                ?>
                                
                                </tbody>
                            </table>
                      </div>




                      <div class="col-xs-4">

                      <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Size</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?Php
                                while ($row = $sizes->fetch())
                                {
                                ?>
                                <tr>
                                    <td><input type="radio" name="size" value="<?= $row['id'] ?>"></td>
                                    <td><?= $row['name'] ?></td>
                                </tr>

                                <?Php 
                                }
                                $row = null;
                                ?>
                                
                                </tbody>
                            </table>
                      </div>




                    </div>




                    <div class="row">

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="note">Note</label>
                          <textarea name="note" class="form-control" id="note">



                          </textarea>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary pull-right">Add the order</button>
                        </div>
                      </div>

                      </div>






                  </div>


                </div>
            
            
            </form>












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