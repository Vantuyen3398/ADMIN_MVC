<div class="row">
        <div class="col-md-4">
          <div class="box box-primary">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">List category</h3> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 80px; text-align: center">ID</th>
                  <th style="text-align: center; width: 80px">Name</th>
                  <th style="text-align: center; width: 50px">
                    Action
                  </th>
                </tr>
                <?php  
                  if($get_all_cate){
                    $i = 0;
                    while($row = $get_all_cate -> fetch_assoc()) {
                        $id = $row['id'];
                        $i++;
                ?>
                  <tr>
                    <td style="text-align: center; line-height: 61px"><?php echo $i?></td>
                    <td style="text-align: center; line-height: 61px"><?php echo $row['cate_name']?></td>
                    <th style="text-align: center">
                        <a href="admin.php?action=List Category&id=<?php echo $id;?>">
                          <button type="button" onclick="return confirm('Are you want to delete?')" class="btn btn-block btn-danger btn-button">DELETE</button>
                        </a>
                      </th>
                  </tr>
                <?php
                    }
                  }
                ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        <!-- /.col -->
      </div>
  </div>     