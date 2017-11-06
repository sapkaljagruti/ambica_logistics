<!-- Main content -->
<section class="content">
    <div class="row">

        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-12">
            <!-- Horizontal Form -->

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Destination</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?php
                if (isset($destination)) {
                    while ($row = mysqli_fetch_assoc($destination)) {

                        $station_name = $row['station_name'];
                        $pin = $row['pin'];
                        $state = $row['state'];
                        $std = $row['std'];
                        $branch_id = $row['branch_id'];
                        $code = $row['code'];
                        ?>
                        <form class="form-horizontal" action="" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputStation Name3" class="col-sm-2 control-label">Station Name</label>

                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="inputStation Name3" name="station_name" required="required" value="<?php echo $station_name; ?>">
                                    </div>

                                    <label for="inputPin3" class="col-sm-2 control-label">Pin</label>

                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="inputPin3" name="pin" value="<?php echo $pin; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputState3" class="col-sm-2 control-label">State</label>

                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="inputState3" name="state" value="<?php echo $state; ?>">
                                    </div>

                                    <label for="inputSTD3" class="col-sm-2 control-label">STD</label>

                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="inputSTD3" name="std" value="<?php echo $std; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputZone Branch3" class="col-sm-2 control-label">Zone Branch</label>

                                    <div class="col-sm-5">
                                        <select class="form-control" id="inputZone branch3" name="branch_id" required="required" value="<?php echo $branch_id; ?>">
                                            <option value = "">Select branch</option>
                                            <?php
                                            while ($row = mysqli_fetch_assoc($branches)) {
                                                if ($branch_id == $row['id']) {
                                                    $branch_selected = ' selected="selected"';
                                                } else {
                                                    $branch_selected = "";
                                                }
                                                echo "<option value='" . $row['id'] . "'" . $branch_selected . ">" . $row['branch_name'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <label for="inputCode3" class="col-sm-2 control-label">Code</label>

                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="inputCode3" name="code" required="required" value="<?php echo $code; ?>">
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
