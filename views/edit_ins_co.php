<!-- Main content -->
<section class="content">
    <div class="row">

        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-12">
            <!-- Horizontal Form -->

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Insurance Company</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?php
                if (isset($get)) {
                    while ($row = mysqli_fetch_assoc($get)) {

                        $company_name = $row['company_name'];
                        ?>
                        <form class="form-horizontal" action="" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputCompany Name3" class="col-sm-2 control-label">Company Name</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputCompany Name3" name="company_name" required="required" value="<?php echo $company_name; ?>">
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
