
<style>
    .table-responsive{overflow-x: initial;}
</style>    
<!-- Content Header (Page header) -->

<section class="content-header">
    <h1>
        Branches
    </h1>

</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">

                </div>
                <!-- /.box-header -->

                <div class="box-body">
                    <a href="?controller=branch&action=add_newbranch" class="btn btn-app">
                        <i class="fa fa-plus"></i> Add
                    </a>
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
                                    echo "<td><a href=\"?controller=branch&action=edit_branch&id=" . $row['id'] . "\"class=\"btn btn-app\"><i class=\"fa fa-fw fa-pencil-square-o\"></i>Edit</a>"
                                    . "<a href=\"?controller=branch&action=delete_branch&id=" . $row['id'] . "\" onclick=\"return confirm('Want to delete?')\" class=\"btn btn-app\"><i class=\"fa fa-fw fa-trash\"></i>Delete</a></td>";
//                                    echo "<td><a href=\"edit_branchmaster.php?id=" . $row['id'] . "\">Edit</a> || <a href=\"del.php?id=" . $row['id'] . "\" onclick=\"return confirm('Want to delete?')\">Delete</a></td>";
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