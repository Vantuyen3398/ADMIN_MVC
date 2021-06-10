<style type="text/css">
  img{
    height: 70px;
  }
</style>
<div class="row">
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">List product</h3> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered" >
                <tr>
                  <th style="width: 80px ;text-align: center">ID</th>
                  <th style="width: 250px;text-align: center">Name</th>
                  <th style="width: 100px;text-align: center">Category</th>
                  <th style="width: 150px;text-align: center">Price</th>
                  <th style="text-align: center; width: 155px">Image</th>
                  <th style="width: 100px;text-align: center">Action</th>
                </tr>
                <?php  
                  if(isset($list_product)){
                    $i = 0;
                    while ($row = $list_product -> fetch_assoc()) {
                      $id = $row['id'];
                      $i++
                ?>
                  <tr>
                    <td style="text-align: center; line-height: 105px"><?php echo $i?></td>
                    <td style="text-align: center; line-height: 105px"><?php echo $row['product_name']?></td>
                    <td style="text-align: center; line-height: 105px"><?php echo $row['cate_name']?></td>
                    <td style="text-align: center; line-height: 105px"><?php echo $row['price']?></td>
                    <td style="text-align: center; line-height: 105px">
                      <img src="uploads/product/<?php echo $row['image']?>" width = "80px" height = "80px" alt="" />
                    </td>
                    <th>
                        <a href="admin.php?action=Edit Product&id=<?php echo $id;?>">
                          <button type="button" class="btn btn-block btn-info">EDIT</button>
                        </a> 
                        <a onclick="return confirm('Are you want to delete?')" href="admin.php?action=List Product&id=<?php echo $id;?>">
                          <button type="button" class="btn btn-block btn-danger">DELETE</button>
                        </a>
                      </th>
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
                      <a class="page-link" href="admin.php?action=List Product&page=<?php echo ($page - 1)?>" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      </a>
                  </li>
                  <?php
                    }
                  ?>
                  <?php
                    $count = mysqli_num_rows($get_all_product);
                    $page = ceil($count/3);
                    $i=1;
                    for($i = 1; $i <= $page; $i++){
                       echo '<li class="page-item"><a class="page-link" href="admin.php?action=List Product&page='.$i.'">'.$i.'</a>';
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