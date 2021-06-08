<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">Add product</h3> -->
              <?php  
                if (isset($product_name) && isset($price) && isset($image)) {
                    echo "<p>$alert</p>";
                }
              ?>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="admin.php?action=Add Product" method="post" id="product" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Product Name&ensp;<i class="fas fa-star-of-life"></i></label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name" name="name">
                </div>
                <div class="form-group">
                  <label>Category</label>
                    <select name="cate_id" class="form-control">
						<?php
							if($get_all_cate){ 
								while($row = $get_all_cate->fetch_assoc()) {
						?>
								<option value="<?php echo $row['id']?>">
									<?php echo $row['cate_name']?>
								</option>
						<?php 
							}
						}
						?>	
					</select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Price&ensp;<i class="fas fa-star-of-life"></i></label>
                  <input type="text" class="form-control" id="exampleInputPrice1" placeholder="Price" name="price">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Image&ensp;<i class="fas fa-star-of-life"></i></label>
                  <input type="file" id="exampleInputFile" name="image">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add_product">ADD PRODUCT</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>