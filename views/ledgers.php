
<style>
    .table-responsive{overflow-x: initial;}
</style>    
<!-- Content Header (Page header) -->

<section class="content-header">
    <h1>
        Ledgers
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
                    <a href="?controller=ledger&action=add_ledger" class="btn btn-app">
                        <i class="fa fa-plus"></i> Add
                    </a>
                    <div calss="table-responsive">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td>Account Name</td>
                                    <td>Account Group</td>
    <!--                                <td>Contact Person</td>
                                    <td>Address</td>
                                    <td>Email</td>
                                    <td>Mobile</td>
                                    <td>Mobile</td>
                                    <td>Office No</td>
                                    -->
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($ledger)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['account_name'] . "</td>";
                                    echo "<td>" . $row['group_id'] . "</td>";
//                                echo "<td>" . $row['contact_person'] . "</td>";
//                                echo "<td>" . $row['address'] . "</td>";
//                                echo "<td>" . $row['email'] . "</td>";
//                                echo "<td>" . $row['mobile1'] . "</td>";
//                                echo "<td>" . $row['mobile2'] . "</td>";
                              //  echo "<td>" . $row['office_no'] . "</td>";
                                    echo "<td><a href=\"?controller=ledger&action=edit_ledger&id=" . $row['id'] . "\"class=\"btn btn-app\"><i class=\"fa fa-fw fa-eye\"></i>View</a>"
                                    . "<a href=\"?controller=ledger&action=edit_ledger&id=" . $row['id'] . "\"class=\"btn btn-app\"><i class=\"fa fa-fw fa-pencil-square-o\"></i>Edit</a>"
                                    . "<a href=\"?controller=ledger&action=del_ledger&id=" . $row['id'] . "\" onclick=\"return confirm('Want to delete?')\" class=\"btn btn-app\"><i class=\"fa fa-fw fa-trash\"></i>Delete</a></td>";
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