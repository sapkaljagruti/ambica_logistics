<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Data Tables</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="public/plugins/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="public/css/font-awesome.min.css">
        <!-- Ionicons -->
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">-->
        <!-- DataTables -->
        <link rel="stylesheet" href="public/plugins/datatables/dataTables.bootstrap.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="public/css/admin.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="public/css/skins/_all-skins.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
    <body class="hold-transition skin-black layout-top-nav">
        <div class="wrapper">

            <header class="main-header">
                <nav class="navbar navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="home.php" class="navbar-brand"><b>Admin</b></a>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Master <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="?controller=branch&action=branches">Branch Master</a></li>
                                        <li><a href="?controller=godown&action=godowns">Godown Master</a></li>
                                        <li><a href="?controller=destination&action=destinations">Destination</a></li>
                                        <li><a href="AccountMaster.php">Account Master</a></li>
                                        <li><a href="BrokerMaster.php">Broker Master</a></li>
                                        <li><a href="Method_pack.php">Methods of Packing</a></li>
                                        <li><a href="Desc_good.php">Description of Goods</a></li>
                                        <li><a href="Rate.php">Rate on</a></li>
                                        <li><a href="RateMaster.php">Rate Master</a></li>
                                        <li><a href="Default_ratemaster.php">Default Ratemaster</a></li>
                                        <li><a href="VehicleMaster.php">Vehicle Master</a></li>
                                        <li><a href="InsuranceMaster.php">Insurance Master</a></li>
                                        <li><a href="CourierMaster.php">Courier Master</a></li>
                                        <li><a href="GroupMaster.php">Group Master</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Transactions <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="Assign.php">Assign</a></li>
                                        <li><a href="Booking.php">Booking</a></li>
                                        <li><a href="Freight_Invoice.php">Freight Invoice</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Accounts<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="Cash_book.php">Cash Book</a></li>
                                        <li><a href="Bank_book.php">Bank Book</a></li>
                                        <li><a href="Journal.php">Journal</a></li>
                                        <li><a href="Credit_note.php">Credit Note</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Inquiry<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="Bill_inquiry.php">Bill Inquiry</a></li>
                                        <li><a href="Challan_inquiry.php">Challan Inquiry</a></li>
                                        <li><a href="LR_inquiry.php">LR Inquiry</a></li>
                                        <li><a href="FM_inquiry.php">FM Inquiry</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Reports<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="Master.php">Master</a></li>
                                        <li><a href="Booking.php">Booking</a></li>
                                        <li><a href="Dispatch.php">Dispatch</a></li>
                                        <li><a href="Delivery.php">Delivery</a></li>
                                        <li><a href="Billing.php">Billing</a></li>
                                        <li><a href="Accounts.php">Accounts</a></li>
                                        <li><a href="Missing_documents.php">Missing Documents</a></li>
                                        <li><a href="Monthly_statement.php">Monthly Statement</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Utility Options <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="BranchMaster.php">Calculator</a></li>
                                        <li><a href="GodownMaster.php">Change Password</a></li>
                                        <li><a href="Destination.php">Change Branch</a></li>
                                        <li><a href="AccountMaster.php">Data Backup</a></li>
                                        <li><a href="BrokerMaster.php">My Computer</a></li>
                                        <li><a href="Method_pack.php">User Entry</a></li>
                                        <li><a href="Desc_good.php">Print Document</a></li>
                                        <li><a href="Rate.php">Support</a></li>
                                        <li><a href="RateMaster.php">Opening Entry</a></li>
                                        <li><a href="Default_ratemaster.php">Pod Scan</a></li>
                                        <li><a href="VehicleMaster.php">Damage Certificate</a></li>
                                        <li><a href="InsuranceMaster.php">Ledger Merge</a></li>
                                        <li><a href="CourierMaster.php">Tally Transfer</a></li>
                                        <li><a href="GroupMaster.php">Trip Sheet</a></li>
                                    </ul>
                                </li>


                            </ul>
                            <form class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                                </div>
                            </form>
                        </div>
                        <!-- /.navbar-collapse -->
                        <!-- Navbar Right Menu -->
                        <div class="navbar-custom-menu">
                            <ul class="nav navbar-nav">
                                
                                <!-- User Account Menu -->
                                <li class="dropdown user user-menu">
                                    <!-- Menu Toggle Button -->
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <!-- The user image in the navbar-->
                                        <img src="public/images/user2-160x160.jpg" class="user-image" alt="User Image">
                                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                        <span class="hidden-xs">Alexander Pierce</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- The user image in the menu -->
                                        <li class="user-header">
                                            <img src="public/images/user2-160x160.jpg" class="img-circle" alt="User Image">

                                            <p>
                                                Alexander Pierce - Web Developer
                                                <small>Member since Nov. 2012</small>
                                            </p>
                                        </li>
                                       
                                        <!-- Menu Footer-->
                                        <li class="user-footer">
                                            <div class="pull-left">
                                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                                            </div>
                                            <div class="pull-right">
                                                <a href="index.php?action=logout" class="btn btn-default btn-flat">Logout</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- /.navbar-custom-menu -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </header>
            <!-- Full Width Column -->
            <div class="content-wrapper">
                <div class="container">
                    <?php
                    if (!isset($view_file)) {
                        $view_file = '';
                    }
                    include_once $_SERVER['DOCUMENT_ROOT'] . '/ambica_logistics/views/' . $view_file;
                    ?>
                </div>
                <!-- /.container -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="container">
                    <div class="pull-right hidden-xs">
                        <b>Version</b> 2.3.6
                    </div>
                    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
                    reserved.
                </div>
                <!-- /.container -->
            </footer>
        </div>
        <!-- ./wrapper -->


        <!-- jQuery 2.2.3 -->
        <script src="public/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="public/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="public/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="public/plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="public/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="public/plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="public/js/app.min.js"></script>
        <!-- page script -->
        <script>
            $(function () {
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
            });
        </script>
    </body>
</html>
