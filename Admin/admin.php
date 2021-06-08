<?php 
session_start();
include 'common/header.php';
include 'controller/BackendController.php';
?>
  <!-- Left side column. contains the logo and sidebar -->
 
  <?php include 'common/sidebar.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php 
          if (isset($_GET['action'])) {
            echo $_GET['action'];
          } else {
            echo "Dashboard"; 
          }
        ?>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
        <?php 
          $backend = new BackendController();
          $backend ->handleRequest();
        ?>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include 'common/footer.php';?>
