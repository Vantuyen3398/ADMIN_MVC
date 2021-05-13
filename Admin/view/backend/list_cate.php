<div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">List category</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px; text-align: center">ID</th>
                  <th style="text-align: center; width: 80px">Name</th>
                  <th style="width: 40px; text-align: center">
                    Action
                  </th>
                </tr>
                <?php  
                  if($get_all_cate){
                    while($row = $get_all_cate -> fetch_assoc()){
                        $id = $row['id'];
                ?>
                  <tr>
                    <td style="text-align: center"><?php echo $id?></td>
                    <td style="text-align: center"><?php echo $row['cate_name']?></td>
                    <th style="width: 40px;text-align: center; line-height: 70px">
                        <a href="admin.php?action=list_cate&id=<?php echo $id;?>">
                          <button type="button" onclick="return confirm('Are you want to delete?')" class="btn btn-block btn-danger">DELETE</button>
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