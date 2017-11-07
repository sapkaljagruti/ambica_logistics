
<style>
    .table-responsive{overflow-x: initial;}
</style>    
<!-- Content Header (Page header) -->

<section class="content-header">
    <h1>
        Insurance 
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
                    <a href="?controller=insurance&action=add_insurance" class="btn btn-app">
                        <i class="fa fa-plus"></i> Add
                    </a>
                    <div calss="table-responsive">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td>Company Name</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <?php
                            if (isset($rows)) {
                                ?>
                                <tbody>
                                    <?php
                                    foreach ($rows as $ins) {
                                        
                                        ?>
                                        <tr>
                                            <td><?php echo ucwords($ins['ins_co']); ?></td>
                                            <td>
                                                <a href="?controller=insurance&action=edit_insurance&id=<?php echo $ins['id']; ?>" class="btn btn-app"><i class="fa fa-fw fa-eye"></i>View</a>
                                                <a href="?controller=insurance&action=edit_insurance&id=<?php echo $ins['id']; ?>" class="btn btn-app"><i class="fa fa-fw fa-pencil-square-o"></i>Edit</a>
                                                <a href="?controller=insurance&action=del_insurance&id=<?php echo $ins['id']; ?>" onclick="return confirm('Want to delete?')"  class="btn btn-app"><i class="fa fa-fw fa-trash"></i>Delete</a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>

                                    <!--//                                while ($row = mysqli_fetch_assoc($insurance)) {
                                    //                                    echo "<tr>";
                                    //                                    echo "<td>" . $row['company_id'] . "</td>";-->

    <!--//                                echo "<td><a href=\"?controller=accountgroup&action=edit_accgroup&id=" . $row['id'] . "\" class=\"btn btn-app\"><i class=\"fa fa-fw fa-eye\"></i>View</a>"-->

        <!--echo "<td><a href=\"?controller=insurance&action=edit_insurance&id=" . $ins['id'] . "\" class=\"btn btn-app\"><i class=\"fa fa-fw fa-pencil-square-o\"></i>Edit</a></td>"-->
    <!--//                                . "<a href=\"?controller=insurance&action=del_insurance&id=" . $row['id'] . "\" onclick=\"return confirm('Want to delete?')\" class=\"btn btn-app\"><i class=\"fa fa-fw fa-trash\"></i>Delete</a>";
    //                                echo "</tr>";
    //                                }-->


                                </tbody>
                                <?php
                            }
                            ?>
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