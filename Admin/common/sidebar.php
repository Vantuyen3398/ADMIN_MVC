 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="uploads/user/avatar1.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['login']?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-users"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="admin.php?action=Add User">
                <i class="fa fa-circle-o"></i> 
                Add user
              </a>
            </li>
            <li>
                <?php  
                  if($_SESSION['login']){
                    $ad = "admin";
                    if($ad == $_SESSION['role']){
                ?>
                  <a href="admin.php?action=List User&page=1">
                    <i class="fa fa-circle-o"></i> 
                      List users
                  </a>
                <?php
                    }
                  }
                ?>
              
            </li>
            <li>
                <?php  
                  // if($_SESSION['login']){
                  //   $ad = "admin";
                  //   if($ad == $_SESSION['role']){
                  if(isset($_GET['id'])){
                ?>
                  <a href="admin.php?action=Edit User">
                    <i class="fa fa-circle-o"></i> 
                      Edit users
                  </a>
                <?php
                    }
                  // }
                ?>
              
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-cubes"></i>
            <span>Product</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="admin.php?action=Add Product">
                <i class="fa fa-circle-o"></i> 
                Add product
              </a>
            </li>
            <li>
              <?php  
                  if($_SESSION['login']){
                    $ad = "admin";
                    if($ad == $_SESSION['role']){
              ?>
              <a href="admin.php?action=List Product&page=1">
                <i class="fa fa-circle-o"></i> 
                List products
              </a>
              <?php
                  }
                }
              ?>
            </li>
            <li>
              <?php  
                  // if($_SESSION['login']){
                  //   $ad = "admin";
                  //   if($ad == $_SESSION['role']){
                if(isset($_GET['id'])){
              ?>
              <a href="admin.php?action=Edit Product">
                <i class="fa fa-circle-o"></i> 
                Edit products
              </a>
              <?php
                  }
                // }
              ?>
            </li>
          </ul>
        </li>
      <?php  
        if($_SESSION['login']){
          $ad = "admin";
          if($ad == $_SESSION['role']){
      ?>
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-cubes"></i>
            <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="admin.php?action=Add Category">
                <i class="fa fa-circle-o"></i> 
                Add category
              </a>
            </li>
            <li>
              <a href="admin.php?action=List Category">
                <i class="fa fa-circle-o"></i> 
                List category
              </a>
            </li>
          </ul>
        </li>
      <?php
          }
        }
      ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>