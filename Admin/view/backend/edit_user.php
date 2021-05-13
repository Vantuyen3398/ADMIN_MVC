<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit user</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="admin.php?action=edit_user&id=<?php echo $id?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputName">Name</label>
                  <input type="text" class="form-control" placeholder="Enter name" name="name" value="<?php echo $nameEdit;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername">Email</label>
                  <input type="email" class="form-control" placeholder="Enter username" name="email" value="<?php echo $emailEdit;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername">Username</label>
                  <input type="text" class="form-control" placeholder="Enter username" name="username" value="<?php echo $usernameEdit;?>">
                </div>
                <img style="width: 100px; height: 100px;" src="uploads/user/<?php echo $avatarEdit?>">
                <div class="form-group">
                  <label for="exampleInputFile">Avatar</label>
                  <input type="file" id="exampleInputFile" name="avatar">
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="edit_user">EDIT USER</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>