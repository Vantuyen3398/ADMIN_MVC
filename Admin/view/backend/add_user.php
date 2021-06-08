<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">Add user</h3> -->
              <?php  
                if(isset($_POST['add_user'])) {
                    echo "<p>$alert</p>";
                }
              ?>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="admin.php?action=Add User" method="post" name="register" id="registration" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputName">Name&ensp;<i class="fas fa-star-of-life"></i></label>
                  <input type="text" class="form-control" placeholder="Enter name" name="name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail">Email&ensp;<i class="fas fa-star-of-life"></i></label>
                  <input type="email" class="form-control" placeholder="example@domain.com" name="email">
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername">Username&ensp;<i class="fas fa-star-of-life"></i></label>
                  <input type="text" class="form-control" placeholder="Enter username" name="username">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password&ensp;<i class="fas fa-star-of-life"></i></label>
                  <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Role</label>
                  <select name="role" class="form-control">
                        <option value="admin">Admin</option>
                        <option value="user">Customer</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputate">Birth Date</label>
                  <input type="date" class="form-control" id="exampleInputDate" placeholder="Date" name="birthday">
                </div>
                <div class="form-group">
                  <label for="img">Avatar</label>
                  <input type="file" class="form-control" id="img" placeholder="" name="avatar">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add_user">ADD USER</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>