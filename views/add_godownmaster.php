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
                    <h3 class="box-title">Add Branches</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputGodown Name3" class="col-sm-2 control-label">Godown Name</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputGodown Name3" name="godown_name" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputCode3" class="col-sm-2 control-label">Code</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputCode3" name="code" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUnder Branch3" class="col-sm-2 control-label">Under Branch</label>

                            <div class="col-sm-6">
                                <select class="form-control" id="inputUnder branch3" name="branch_id" required="required">
                                    <option value = "">Select branch</option>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($branches)) {
//                                        if
                                        echo "<option value='" . $row['id'] . "'>" . $row['branch_name'] . "</option>";
                                    }
                                    ?>
                                        </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress3" class="col-sm-2 control-label">Address</label>

                            <div class="col-sm-6">
                                <textarea row="2" cols="40" class="form-control" id="inputAddress3" name="address"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPhone No3" class="col-sm-2 control-label">Phone No</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputPhone No3" name="phone_no" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail Id3" class="col-sm-2 control-label">Email Id</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputEmail Id3" name="email_id">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-default" name="Save" value="Save">Save</button>
                        <button type="submit" class="btn btn-default">Cancel</button>
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
