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
                    <h3 class="box-title">Add Insurance</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputPolicy Number3" class="col-sm-2 control-label">Policy Number</label>

                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="inputPolicy Number3" name="policy_no" required="required" placeholder="Policy Number">
                            </div>
                            
                             <label for="inputCompany Name3" class="col-sm-2 control-label">Company Name</label>

                            <div class="col-sm-3">
                                <select class="form-control" id="inputCompany Name3" name="company_id" >
                                    <option value = "">Select Company Name</option>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($ins_comp)) {
                                            echo "<option value='" . $row['id'] . "'>" . $row['company_name'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            
                            
                            
                        </div>
                        
                        <div class="form-group">
                            <label for="inputInsurance Payment Date3" class="col-sm-2 control-label">Insurance Payment Date</label>

                            <div class="col-sm-3">
                                <input type="datetime" class="form-control" id="inputStation Name3" name="ins_payment_date" required="required" placeholder="Insurance Payment Date">
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
