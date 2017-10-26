
<style>
    .table-responsive{overflow-x: initial;}
</style>    
<!-- Content Header (Page header) -->

<section class="content-header">
    <h1>
        Branches
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
<!--        <li class="active">Data tables</li>-->
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Hover Data Table</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                    <div calss="table-responsive">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td>Branch_name</td>
                                    <td>Branch_code</td>
    <!--                                <td>Address</td>
                                    <td>Pincode</td>
                                    <td>State</td>
                                    <td>Std_code</td>
                                    <td>Phone</td>
                                    <td>Phone</td>
                                    <td>Phone</td>
                                    <td>Fax</td>
                                    <td>Mobile</td>
                                    <td>Manager</td>
                                    <td>Email</td>-->
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($branches)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['branch_name'] . "</td>";
                                    echo "<td>" . $row['branch_code'] . "</td>";
//                                echo "<td>" . $row['address'] . "</td>";
//                                echo "<td>" . $row['pincode'] . "</td>";
//                                echo "<td>" . $row['state'] . "</td>";
//                                echo "<td>" . $row['std_code'] . "</td>";
//                                echo "<td>" . $row['phone1'] . "</td>";
//                                echo "<td>" . $row['phone2'] . "</td>";
//                                echo "<td>" . $row['phone3'] . "</td>";
//                                echo "<td>" . $row['fax'] . "</td>";
//                                echo "<td>" . $row['mobile'] . "</td>";
//                                echo "<td>" . $row['manager'] . "</td>";
//                                echo "<td>" . $row['email'] . "</td>";
                                    echo "<td><a href=\"edit_branch.php?id=" . $row['id'] . "\">Edit</a> || <a href=\"del.php?id=" . $row['id'] . "\" onclick=\"return confirm('Want to delete?')\">Delete</a></td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>

                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->