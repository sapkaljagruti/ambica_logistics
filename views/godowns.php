
<style>
    .table-responsive{overflow-x: initial;}
</style>    
<!-- Content Header (Page header) -->

<section class="content-header">
    <h1>
        Godowns
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
                    <a href="?controller=godown&action=add_newgodown" class="btn btn-app">
                        <i class="fa fa-plus"></i> Add
                    </a>
                    <div calss="table-responsive">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td>Godown_name</td>
                                    <td>Code</td>
    <!--                                <td>Under Branch</td>
                                    <td>Address</td>
                                    <td>Phone</td>
                                    <td>Email</td>-->
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($godowns)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['godown_name'] . "</td>";
                                    echo "<td>" . $row['code'] . "</td>";
//                                echo "<td>" . $row['branch_id'] . "</td>";
//                                echo "<td>" . $row['address'] . "</td>";
//                                echo "<td>" . $row['phone'] . "</td>";
//                                echo "<td>" . $row['email_id'] . "</td>";
                                echo "<td><a href=\"?controller=godown&action=edit_godowns&id=" . $row['id'] . "\" class=\"btn btn-app\"><i class=\"fa fa-fw fa-eye\"></i>View</a>"
                                    . "<a href=\"?controller=godown&action=edit_godowns&id=" . $row['id'] . "\" class=\"btn btn-app\"><i class=\"fa fa-fw fa-pencil-square-o\"></i>Edit</a>"
                                        . "<a href=\"?controller=godown&action=delete_godown&id=" . $row['id'] . "\" onclick=\"return confirm('Want to delete?')\" class=\"btn btn-app\"><i class=\"fa fa-fw fa-trash\"></i>Delete</a></td>";
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