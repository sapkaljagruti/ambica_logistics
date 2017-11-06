<!-- Main content -->
<section class="content">
    <div class="row">

        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-12">
            <!-- Horizontal Form -->

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Goods Description</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?php
                if (isset($goods)) {
                    while ($row = mysqli_fetch_assoc($goods)) {

                        $goods_content = $row['goods_content'];
                        $code = $row['code'];
                        ?>
                        <form class="form-horizontal" action="" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputGoods Content3" class="col-sm-2 control-label">Goods Content</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputGoods Content3" name="goods_content" value="<?php echo $goods_content; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCode3" class="col-sm-2 control-label">Code</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputCode3" name="code" value="<?php echo $code; ?>">
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
