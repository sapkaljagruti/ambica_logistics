
<style>
    .table-responsive{overflow-x: initial;}
</style>    
<!-- Content Header (Page header) -->

<section class="content-header">
    <h1>
        Destination
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
                    <a href="?controller=destination&action=add_destination" class="btn btn-app">
                        <i class="fa fa-plus"></i> Add
                    </a>
                    <div calss="table-responsive">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td>Station_name</td>
                                    <td>Pin</td>
<!--                                    <td>State</td>
                                    <td>Std</td>
                                    <td>Branch Id</td>
                                    <td>Code</td>-->
                                    
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($destination)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['station_name'] . "</td>";
                                    echo "<td>" . $row['pin'] . "</td>";
//                                echo "<td>" . $row['state'] . "</td>";
//                                echo "<td>" . $row['std'] . "</td>";
//                                echo "<td>" . $row['branch_id'] . "</td>";
//                                echo "<td>" . $row['code'] . "</td>";
                                echo "<td><a href=\"?controller=destination&action=get_destination&id=" . $row['id'] . "\" class=\"btn btn-app\"><i class=\"fa fa-fw fa-eye\"></i>View</a>"
                                    . "<a href=\"?controller=destination&action=edit_destination&id=" . $row['id'] . "\" class=\"btn btn-app\"><i class=\"fa fa-fw fa-pencil-square-o\"></i>Edit</a>"
                                        . "<a href=\"?controller=destination&action=delete_destination&id=" . $row['id'] . "\" onclick=\"return confirm('Want to delete?')\" class=\"btn btn-app\"><i class=\"fa fa-fw fa-trash\"></i>Delete</a></td>";
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