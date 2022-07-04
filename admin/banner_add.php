<?php
session_start();
	if(!isset($_SESSION['email']))
		header("Location: login.php");

	include 'settings.php';
?>
<?php include "inc/header.php";?>
<div class="content-wrapper">
<section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <form method="post" action="banner_create.php" enctype="multipart/form-data">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Create Banner</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Heading</label>
                  <input type="text" name="banner" class="form-control" />
                  
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Image</label>
                  <input type="file" name="profile" />
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control select2" name="status" style="width: 100%;">
                    <option selected="selected" value="1">Publish</option>
                    <option value="0">Unpublish</option>
                    
                  </select>
                </div>
                
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

           <input type="submit" name="submit" value="Save" />
           <input type="reset" name="reset" value="Cancle" />
            <!-- /.row -->
          </div>
          
        </div>
        </form>
        
      </div>
      <!-- /.container-fluid -->
    </section>
    </div>

<?php include "inc/footer.php";?>