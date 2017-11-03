
<style>
    .table-responsive{overflow-x: initial;}
</style>    
<!-- Content Header (Page header) -->

<section class="content-header">
    <h1>
        Manager
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
                    <a href="?controller=manager&action=add_manager" class="btn btn-app">
                        <i class="fa fa-plus"></i> Add
                    </a>
                    <div calss="table-responsive">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td>Name</td>
                                    <td>Email</td>
                                    <td>Mobile1</td>
                                    <td>Mobile2</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($view_manager)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['name'] . "</td>";
                                    echo "<td>" . $row['email'] . "</td>";
                                    echo "<td>" . $row['mobile1'] . "</td>";
                                    echo "<td>" . $row['mobile2'] . "</td>";

                                    echo "<td><a href=\"?controller=manager&action=get_manager&id=" . $row['id'] . "\" class=\"btn btn-app\"><i class=\"fa fa-fw fa-eye\"></i>View</a>"
                                    . "<a href=\"?controller=manager&action=edit_manager&id=" . $row['id'] . "\" class=\"btn btn-app\"><i class=\"fa fa-fw fa-pencil-square-o\"></i>Edit</a>"
                                    . "<a href=\"?controller=manager&action=del_manager&id=" . $row['id'] . "\" onclick=\"return confirm('Want to delete?')\" class=\"btn btn-app\"><i class=\"fa fa-fw fa-trash\"></i>Delete</a></td>";
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