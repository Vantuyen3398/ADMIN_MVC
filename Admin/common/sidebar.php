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
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
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
              <a href="admin.php?controller=user&action=add_user">
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
                  <a href="admin.php?action=list_user&page=1">
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
                  if($_SESSION['login']){
                    $ad = "admin";
                    if($ad == $_SESSION['role']){
                ?>
                  <a href="admin.php?action=edit_user">
                    <i class="fa fa-circle-o"></i> 
                      Edit users
                  </a>
                <?php
                    }
                  }
                ?>
              
            </li>
            <li>
              <a href="admin.php?controller=user&action=chagne">
                <i class="fa fa-circle-o"></i>
                 Chagne Password
              </a>
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
              <a href="admin.php?action=add_product">
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
              <a href="admin.php?action=list_product&page=1">
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
                  if($_SESSION['login']){
                    $ad = "admin";
                    if($ad == $_SESSION['role']){
              ?>
              <a href="admin.php?action=list_product&page=1">
                <i class="fa fa-circle-o"></i> 
                Edit products
              </a>
              <?php
                  }
                }
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
              <a href="admin.php?action=add_cate">
                <i class="fa fa-circle-o"></i> 
                Add category
              </a>
            </li>
            <li>
              <a href="admin.php?action=list_cate">
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