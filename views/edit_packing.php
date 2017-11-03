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
                if (isset($pack)) {
                    while ($row = mysqli_fetch_assoc($pack)) {

                        $packing_type = $row['packing_type'];
                        ?>
                        <form class="form-horizontal" action="" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputPacking Type3" class="col-sm-2 control-label">Packing Type</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputPacking Type3" name="packing_type" value=<?php echo $packing_type; ?>>
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
