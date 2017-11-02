<!DOCTYPE html>
<!-- Main content -->
<section class="content">
    <div class="row">

        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Account Groups</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputName3" class="col-sm-2 control-label">Name</label>

                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="inputName3" name="name" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUnder Group3" class="col-sm-2 control-label">Under Group</label>

                            <div class="col-sm-5">
                                <select class="form-control" id="inputUnder Group3" name="parent_id" required="required">
                                    <option value = "">Select Under Group</option>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($accgroup)) {

                                        echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-default" name="Save" value="Save">Save</button>
                        <a href="home.php?controller=accountgroup&action=accountgroups"><button type="submit" class="btn btn-default">Cancel</button></a>
                    </div>
                    <!-- /.box-footer -->
                </form>

            </div>
            <!-- /.box-body -->
        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
