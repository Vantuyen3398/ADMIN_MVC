<style type="text/css">
  img{
    height: 100px;
  }
</style>
<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit product</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="admin.php?action=edit_product&id=<?php echo $id?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputName">Name</label>
                  <input type="text" class="form-control" placeholder="Enter name" name="name" value="<?php echo $nameEdit;?>">
                </div>
                <div class="form-group">
                  <label>Category</label>
                  <select class="form-control" name="cate_id">
                    <?php echo $get_cate_id ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername">Price</label>
                  <input type="text" class="form-control" placeholder="Enter price" name="price" value="<?php echo $priceEdit;?>">
                </div>
                <img src="uploads/product/<?php echo $imageEdit?>">
                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <input type="file" id="exampleInputFile" name="image">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="edit_product">EDIT PRODUCT</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>