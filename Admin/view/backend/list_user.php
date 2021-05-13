<form action="admin.php?action=list_user&keyword=<?php ?>" method="get">
      <!-- <input type="hidden" name="c" value="user"> -->
      <input type="text" name="keyword" placeholder="Tìm Kiếm..." value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword'] : '' ?>">
      <input type="submit" value="Search">
</form>
<div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">List user</h3>
              <?php  
                if(isset($id)){
                  echo "<p>$alert</p>";
                }
              ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">ID</th>
                  <th style="text-align: center">Name</th>
                  <th style="text-align: center">Email</th>
                  <th style="text-align: center">Username</th>
                  <th style="text-align: center;">Avatar</th>
                  <th style="width: 40px; text-align: center">Action</th>
                </tr>
                <?php  
                  if(isset($search_user)){
                    while($row = $search_user -> fetch_assoc()){
                ?>
                  <tr>
                      <td style="text-align: center; line-height: 70px"><?php echo $row['id'] ?></td>
                      <td style="text-align: center; line-height: 70px"><?php echo $row['name'] ?></td>
                      <td style="text-align: center; line-height: 70px"><?php echo $row['email'] ?></td>
                      <td style="text-align: center; line-height: 70px"><?php echo $row['username'] ?></td>
                      <td style="text-align: center;"><img src="uploads/user/<?php echo $row['avatar']?>" width = "100px" height = "80px" alt="" /></td>
                      <th style="width: 40px;text-align: center; line-height: 70px">
                        <a href="admin.php?action=edit_user&id=<?php echo $id;?>">
                          <button type="button" class="btn btn-block btn-info">EDIT</button>
                        </a> 
                        <a onclick="return confirm('Are you want to delete?')" href="admin.php?action=list_user&id=<?php echo $id;?>">
                          <button type="button" class="btn btn-block btn-danger">DELETE</button>
                        </a>
                      </th>
                    </tr>
                <?php
                    }
                  }
                ?>
                <?php  
                    if(isset($get_user)){
                      while($row = $get_user -> fetch_assoc()){
                        $id = $row['id'];
                      
                  ?>
                    <tr>
                      <td style="text-align: center; line-height: 70px"><?php echo $row['id'] ?></td>
                      <td style="text-align: center; line-height: 70px"><?php echo $row['name'] ?></td>
                      <td style="text-align: center; line-height: 70px"><?php echo $row['email'] ?></td>
                      <td style="text-align: center; line-height: 70px"><?php echo $row['username'] ?></td>
                      <td style="text-align: center;"><img src="uploads/user/<?php echo $row['avatar']?>" width = "100px" height = "80px" alt="" /></td>
                      <th style="width: 40px;text-align: center; line-height: 70px">
                        <a href="admin.php?action=edit_user&id=<?php echo $id;?>">
                          <button type="button" class="btn btn-block btn-info">EDIT</button>
                        </a> 
                        <a onclick="return confirm('Are you want to delete?')" href="admin.php?action=list_user&id=<?php echo $id;?>">
                          <button type="button" class="btn btn-block btn-danger">DELETE</button>
                        </a>
                      </th>
                    </tr>
                  <?php
                      }
                    }
                  ?>
              </table>
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                      <a class="page-link" href="admin.php?action=list_user&page=<?php echo ($page - 1)?>" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      </a>
                  </li>
                  <?php
                    $count = mysqli_num_rows($get_all_user);
                    $page = ceil($count/3);
                    $i=1;
                    for($i = 1; $i <= $page; $i++){
                       echo '<li class="page-item"><a class="page-link" href="admin.php?action=list_user&page='.$i.'">'.$i.'</a>';
                    }
                  ?>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        <!-- /.col -->
      </div>
  </div>     