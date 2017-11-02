<!-- Main content -->
<section class="content">
    <div class="row">

        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-12">
            <!-- Horizontal Form -->

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Account Group</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?php
                if (isset($acc)) {
                    while ($row = mysqli_fetch_assoc($acc)) {

                        $name = $row['name'];
                        $parent_id=$row['parent_id'];
                        ?>
                        <form class="form-horizontal" action="" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputName3" class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputName3" name="name" required="required" value=<?php echo $name; ?>>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="inputUnder Group3" class="col-sm-2 control-label">Under Group</label>

                                    <div class="col-sm-6">
                                        <select class="form-control" id="inputUnder Group3" name="parent_id" required="required" value=<?php echo $parent_id; ?>>
                                            <option value = "">Select branch</option>
                                            <?php
                                            while ($row = mysqli_fetch_assoc($accgroup)) {
                                                if ($parent_id == $row['id']) {
                                                    $group_selected = ' selected="selected"';
                                                } else {
                                                    $group_selected = "";
                                                }
                                                echo "<option value='" . $row['id'] . "'" . $group_selected . ">" . $row['name'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-info pull-default" name="Update" value="Update">Update</button>
                                <button type="submit" class="btn btn-default">Cancel</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                        <?php
                    }
                }
                ?>
            </div>
            <!-- /.box-body -->

        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
</section>
