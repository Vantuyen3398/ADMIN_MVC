<style type="text/css">
  img{
    height: 70px;
  }
</style>
<div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">List product</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered" >
                <tr>
                  <th style="width: 10px ;text-align: center">ID</th>
                  <th style="width: 200px;text-align: center">Name</th>
                  <th>Category</th>
                  <th style="width: 100px;text-align: center">Price</th>
                  <th style="text-align: center">Image</th>
                  <th style="width: 100px;text-align: center">Action</th>
                </tr>
                <?php  
                  if(isset($list_product)){
                    while ($row = $list_product -> fetch_assoc()) {
                      $id = $row['id'];
                ?>
                  <tr>
                    <td><?php echo $id?></td>
                    <td><?php echo $row['product_name']?></td>
                    <td><?php echo $row['cate_name']?></td>
                    <td><?php echo $row['price']?></td>
                    <td>
                      <img src="uploads/product/<?php echo $row['image']?>" width = "100px" height = "80px" alt="" />
                    </td>
                    <th style="width: 40px;text-align: center; line-height: 70px">
                        <a href="admin.php?action=edit_product&id=<?php echo $id;?>">
                          <button type="button" class="btn btn-block btn-info">EDIT</button>
                        </a> 
                        <a onclick="return confirm('Are you want to delete?')" href="admin.php?action=list_product&id=<?php echo $id;?>">
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
                      <a class="page-link" href="admin.php?action=list_product&page=<?php echo ($page - 1)?>" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      </a>
                  </li>
                  <?php
                    $count = mysqli_num_rows($get_all_product);
                    $page = ceil($count/3);
                    $i=1;
                    for($i = 1; $i <= $page; $i++){
                       echo '<li class="page-item"><a class="page-link" href="admin.php?action=list_product&page='.$i.'">'.$i.'</a>';
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