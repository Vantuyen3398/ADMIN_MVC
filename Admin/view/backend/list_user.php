<div class="row">
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">List user</h3> -->
              <center><form action="admin.php?action=List User&keyword=<?php ?>" method="get">
                    <!-- <input type="hidden" name="c" value="user"> -->
                    <input type="text" name="keyword" placeholder="Tìm Kiếm..." value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword'] : '' ?>">
                    <input type="submit" value="Search">
              </form></center>
              <?php  
                if(isset($id)) {
                  echo "<p>$alert</p>";
                }
              ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="text-align: center; width: 90px">ID</th>
                  <th style="text-align: center; width: 115px">Name</th>
                  <th style="text-align: center; width: 220px">Email</th>
                  <th style="text-align: center; width: 140px">Username</th>
                  <th style="text-align: center; width: 105px">Avatar</th>
                  <th style="text-align: center; width: 100px">Action</th>
                </tr>
                <?php  
                  if(isset($search_user)) {
                    while($row = $search_user -> fetch_assoc()) {
                ?>
                  <tr>
                      <td style="text-align: center; line-height: 97px"><?php echo $row['id'] ?></td>
                      <td style="text-align: center; line-height: 97px"><?php echo $row['name'] ?></td>
                      <td style="text-align: center; line-height: 97px"><?php echo $row['email'] ?></td>
                      <td style="text-align: center; line-height: 97px"><?php echo $row['username'] ?></td>
                      <td style="text-align: center; line-height: 97px"><img src="uploads/user/<?php echo $row['avatar']?>" width = "80px" height = "80px" alt="" /></td>
                      <td style="text-align: center;">
                        <a href="admin.php?action=Edit User&id=<?php echo $id;?>">
                          <button type="button" class="btn btn-block btn-info">EDIT</button>
                        </a>
                        <a onclick="return confirm('Are you want to delete?')" href="admin.php?action=List User&id=<?php echo $id;?>">
                          <button type="button" class="btn btn-block btn-danger">DELETE</button>
                        </a>
                      </td>
                  </tr>
                <?php
                    }
                  }
                ?>
                <?php  
                    if(isset($get_user)){
                      $i = 0;
                      while($row = $get_user -> fetch_assoc()){
                        $id = $row['id'];
                        $i++;
                      
                  ?>
                    <tr>
                      <td style="text-align: center; line-height: 97px"><?php echo $i ?></td>
                      <td style="text-align: center; line-height: 97px"><?php echo $row['name'] ?></td>
                      <td style="text-align: center; line-height: 97px"><?php echo $row['email'] ?></td>
                      <td style="text-align: center; line-height: 97px"><?php echo $row['username'] ?></td>
                      <td style="text-align: center; line-height: 97px"><img src="uploads/user/<?php echo $row['avatar']?>" width = "80px" height = "80px" alt="" /></td>
                        <td style="text-align: center;">
                          <a href="admin.php?action=Edit User&id=<?php echo $id;?>">
                            <button type="button" class="btn btn-block btn-info">EDIT</button>
                          </a>
                          <a onclick="return confirm('Are you want to delete?')" href="admin.php?action=List User&id=<?php echo $id;?>">
                            <button type="button" class="btn btn-block btn-danger">DELETE</button>
                          </a>
                        </td>
                    </tr>
                  <?php
                      }
                    }
                  ?>
              </table>
              <center><nav aria-label="Page navigation example">
                <ul class="pagination">
                  <?php 
                    if ($page > 1) {
                  ?>
                    <li class="page-item">
                      <a class="page-link" href="admin.php?action=List User&page=<?php echo ($page - 1)?>" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      </a>
                  </li>
                  <?php
                    }
                  ?>
                  <?php
                    $count = mysqli_num_rows($get_all_user);
                    $page = ceil($count/3);
                    $i=1;
                    for($i = 1; $i <= $page; $i++){
                       echo '<li class="page-item"><a class="page-link" href="admin.php?action=List User&page='.$i.'">'.$i.'</a>';
                    }
                  ?>
                  <!-- <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li> -->
                </ul>
              </nav></center>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        <!-- /.col -->
      </div>
  </div>     