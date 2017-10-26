<?php
@session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
}

include_once 'controller/BranchMasterController.php';
$obj = new BranchMasterController();
?>
<?php
if (isset($_POST['email'])) {
    $branch_id = $_GET['id'];
    $branch_name = $_POST['branch_name'];
    $branch_code = $_POST['branch_code'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $state = $_POST['state'];
    $std_code = $_POST['std_code'];
    $phone1 = $_POST['phone1'];
    $phone2 = $_POST['phone2'];
    $phone3 = $_POST['phone3'];
    $fax = $_POST['fax'];
    $mobile = $_POST['mobile'];
    $manager = $_POST['manager'];
    $email = $_POST['email'];

    $obj->update($branch_id, $branch_name, $branch_code, $address, $pincode, $state, $std_code, $phone1, $phone2, $phone3, $fax, $mobile, $manager, $email);
    if ($obj) {
        header("location:views/view.php");
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | General Form Elements</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="public/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="public/dist/css/skins/_all-skins.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue layout-top-nav">

        <?php
        if (isset($_GET['id'])) {
            $branch_id = $_GET['id'];
            $view = $obj->get_branch($branch_id);

            if ($view) {
                ?>
                <?php
                while ($row = mysqli_fetch_assoc($view)) {
                    $branch_name = $row['branch_name'];
                    $branch_code = $row['branch_code'];
                    $address = $row['address'];
                    $pincode = $row['pincode'];
                    $state = $row['state'];
                    $std_code = $row['std_code'];
                    $phone1 = $row['phone1'];
                    $phone2 = $row['phone2'];
                    $phone3 = $row['phone3'];
                    $fax = $row['fax'];
                    $mobile = $row['mobile'];
                    $manager = $row['manager'];
                    $email = $row['email'];
                    ?>

                    <div class="wrapper">

                        <header class="main-header">
                            <!-- Logo -->
                            <a href="../../index2.html" class="logo">
                                <!-- mini logo for sidebar mini 50x50 pixels -->
                                <span class="logo-mini"><b>A</b>LT</span>
                                <!-- logo for regular state and mobile devices -->
                                <span class="logo-lg"><b>Admin</b>LTE</span>
                            </a>
                            <!-- Header Navbar: style can be found in header.less -->
                            <nav class="navbar navbar-static-top">
                                <!-- Sidebar toggle button-->
                                <!--                                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                                                                    <span class="sr-only">Toggle navigation</span>
                                                                    <span class="icon-bar"></span>
                                                                    <span class="icon-bar"></span>
                                                                    <span class="icon-bar"></span>
                                                                </a>-->

                                <div class="navbar-custom-menu">
                                    <ul class="nav navbar-nav">
                                        <!-- Messages: style can be found in dropdown.less-->

                                        <li class="dropdown open">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Master <span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="BranchMaster.php">Branch Master</a></li>
                                                <li><a href="GodownMaster.php">Godown Master</a></li>
                                                <li><a href="DestinationManagement.php">Destination</a></li>
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

                                        <li class="dropdown open">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Transactions <span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="Assign.php">Assign</a></li>
                                                <li><a href="Booking.php">Booking</a></li>
                                                <li><a href="Freight_Invoice.php">Freight Invoice</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown open">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Accounts<span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="Cash_book.php">Cash Book</a></li>
                                                <li><a href="Bank_book.php">Bank Book</a></li>
                                                <li><a href="Journal.php">Journal</a></li>
                                                <li><a href="Credit_note.php">Credit Note</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown open">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Inquiry<span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="Bill_inquiry.php">Bill Inquiry</a></li>
                                                <li><a href="Challan_inquiry.php">Challan Inquiry</a></li>
                                                <li><a href="LR_inquiry.php">LR Inquiry</a></li>
                                                <li><a href="FM_inquiry.php">FM Inquiry</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown open">
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

                                        <li class="dropdown open">
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

                                        <li class="dropdown messages-menu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-envelope-o"></i>
                                                <span class="label label-success">4</span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="header">You have 4 messages</li>
                                                <li>
                                                    <!-- inner menu: contains the actual data -->
                                                    <ul class="menu">
                                                        <li><!-- start message -->
                                                            <a href="#">
                                                                <div class="pull-left">
                                                                    <img src="public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                                </div>
                                                                <h4>
                                                                    Support Team
                                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                                </h4>
                                                                <p>Why not buy a new awesome theme?</p>
                                                            </a>
                                                        </li>
                                                        <!-- end message -->
                                                        <li>
                                                            <a href="#">
                                                                <div class="pull-left">
                                                                    <img src="public/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                                </div>
                                                                <h4>
                                                                    AdminLTE Design Team
                                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                                </h4>
                                                                <p>Why not buy a new awesome theme?</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="pull-left">
                                                                    <img src="public/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                                </div>
                                                                <h4>
                                                                    Developers
                                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                                </h4>
                                                                <p>Why not buy a new awesome theme?</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="pull-left">
                                                                    <img src="public/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                                </div>
                                                                <h4>
                                                                    Sales Department
                                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                                </h4>
                                                                <p>Why not buy a new awesome theme?</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="pull-left">
                                                                    <img src="public/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                                </div>
                                                                <h4>
                                                                    Reviewers
                                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                                </h4>
                                                                <p>Why not buy a new awesome theme?</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="footer"><a href="#">See All Messages</a></li>
                                            </ul>
                                        </li>
                                        <!-- Notifications: style can be found in dropdown.less -->
                                        <li class="dropdown notifications-menu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-bell-o"></i>
                                                <span class="label label-warning">10</span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="header">You have 10 notifications</li>
                                                <li>
                                                    <!-- inner menu: contains the actual data -->
                                                    <ul class="menu">
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                                                page and may cause design problems
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-users text-red"></i> 5 new members joined
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-user text-red"></i> You changed your username
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="footer"><a href="#">View all</a></li>
                                            </ul>
                                        </li>
                                        <!-- Tasks: style can be found in dropdown.less -->
                                        <li class="dropdown tasks-menu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-flag-o"></i>
                                                <span class="label label-danger">9</span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="header">You have 9 tasks</li>
                                                <li>
                                                    <!-- inner menu: contains the actual data -->
                                                    <ul class="menu">
                                                        <li><!-- Task item -->
                                                            <a href="#">
                                                                <h3>
                                                                    Design some buttons
                                                                    <small class="pull-right">20%</small>
                                                                </h3>
                                                                <div class="progress xs">
                                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                                        <span class="sr-only">20% Complete</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <!-- end task item -->
                                                        <li><!-- Task item -->
                                                            <a href="#">
                                                                <h3>
                                                                    Create a nice theme
                                                                    <small class="pull-right">40%</small>
                                                                </h3>
                                                                <div class="progress xs">
                                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                                        <span class="sr-only">40% Complete</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <!-- end task item -->
                                                        <li><!-- Task item -->
                                                            <a href="#">
                                                                <h3>
                                                                    Some task I need to do
                                                                    <small class="pull-right">60%</small>
                                                                </h3>
                                                                <div class="progress xs">
                                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                                        <span class="sr-only">60% Complete</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <!-- end task item -->
                                                        <li><!-- Task item -->
                                                            <a href="#">
                                                                <h3>
                                                                    Make beautiful transitions
                                                                    <small class="pull-right">80%</small>
                                                                </h3>
                                                                <div class="progress xs">
                                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                                        <span class="sr-only">80% Complete</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <!-- end task item -->
                                                    </ul>
                                                </li>
                                                <li class="footer">
                                                    <a href="#">View all tasks</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- User Account: style can be found in dropdown.less -->
                                        <li class="dropdown user user-menu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <img src="public/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                                <span class="hidden-xs">Alexander Pierce</span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <!-- User image -->
                                                <li class="user-header">
                                                    <img src="public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                                    <p>
                                                        Alexander Pierce - Web Developer
                                                        <small>Member since Nov. 2012</small>
                                                    </p>
                                                </li>
                                                <!-- Menu Body -->
                                                <li class="user-body">
                                                    <div class="row">
                                                        <div class="col-xs-4 text-center">
                                                            <a href="#">Followers</a>
                                                        </div>
                                                        <div class="col-xs-4 text-center">
                                                            <a href="#">Sales</a>
                                                        </div>
                                                        <div class="col-xs-4 text-center">
                                                            <a href="#">Friends</a>
                                                        </div>
                                                    </div>
                                                    <!-- /.row -->
                                                </li>
                                                <!-- Menu Footer-->
                                                <li class="user-footer">
                                                    <div class="pull-left">
                                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                                    </div>
                                                    <div class="pull-right">
                                                        <a href="index.php?action=Sign out" class="btn btn-default btn-flat">Sign out</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- Control Sidebar Toggle Button -->
                                        <li>
                                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </header>
                        <!-- Left side column. contains the logo and sidebar -->
                        <!--                        <aside class="main-sidebar">
                                                     sidebar: style can be found in sidebar.less 
                                                    <section class="sidebar">
                                                         Sidebar user panel 
                                                        <div class="user-panel">
                                                            <div class="pull-left image">
                                                                <img src="public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                            </div>
                                                            <div class="pull-left info">
                                                                <p>Alexander Pierce</p>
                                                                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                                                            </div>
                                                        </div>
                                                         search form 
                                                        <form action="#" method="get" class="sidebar-form">
                                                            <div class="input-group">
                                                                <input type="text" name="q" class="form-control" placeholder="Search...">
                                                                <span class="input-group-btn">
                                                                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </form>
                                                         /.search form 
                                                         sidebar menu: : style can be found in sidebar.less 
                                                        <ul class="sidebar-menu">
                                                            <li class="header">MAIN NAVIGATION</li>
                                                            <li class="treeview">
                                                                <a href="#">
                                                                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                                                    <span class="pull-right-container">
                                                                        <i class="fa fa-angle-left pull-right"></i>
                                                                    </span>
                                                                </a>
                                                                <ul class="treeview-menu">
                                                                    <li><a href="public/index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                                                                    <li><a href="public/index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="treeview">
                                                                <a href="#">
                                                                    <i class="fa fa-files-o"></i>
                                                                    <span>Layout Options</span>
                                                                    <span class="pull-right-container">
                                                                        <span class="label label-primary pull-right">4</span>
                                                                    </span>
                                                                </a>
                                                                <ul class="treeview-menu">
                                                                    <li><a href="public/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                                                                    <li><a href="public/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                                                                    <li><a href="public/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                                                                    <li><a href="public/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="public/widgets.html">
                                                                    <i class="fa fa-th"></i> <span>Widgets</span>
                                                                    <span class="pull-right-container">
                                                                        <small class="label pull-right bg-green">new</small>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="treeview">
                                                                <a href="#">
                                                                    <i class="fa fa-pie-chart"></i>
                                                                    <span>Charts</span>
                                                                    <span class="pull-right-container">
                                                                        <i class="fa fa-angle-left pull-right"></i>
                                                                    </span>
                                                                </a>
                                                                <ul class="treeview-menu">
                                                                    <li><a href="public/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                                                                    <li><a href="public/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                                                                    <li><a href="public/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                                                                    <li><a href="public/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="treeview">
                                                                <a href="#">
                                                                    <i class="fa fa-laptop"></i>
                                                                    <span>UI Elements</span>
                                                                    <span class="pull-right-container">
                                                                        <i class="fa fa-angle-left pull-right"></i>
                                                                    </span>
                                                                </a>
                                                                <ul class="treeview-menu">
                                                                    <li><a href="public/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                                                                    <li><a href="public/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                                                                    <li><a href="public/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                                                                    <li><a href="public/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                                                                    <li><a href="public/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                                                                    <li><a href="public/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="treeview active">
                                                                <a href="#">
                                                                    <i class="fa fa-edit"></i> <span>Forms</span>
                                                                    <span class="pull-right-container">
                                                                        <i class="fa fa-angle-left pull-right"></i>
                                                                    </span>
                                                                </a>
                                                                <ul class="treeview-menu">
                                                                    <li class="active"><a href="BranchMaster.php"><i class="fa fa-circle-o"></i> Branch Masters</a></li>
                                                                    <li><a href="advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                                                                    <li><a href="editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="treeview">
                                                                <a href="#">
                                                                    <i class="fa fa-table"></i> <span>Tables</span>
                                                                    <span class="pull-right-container">
                                                                        <i class="fa fa-angle-left pull-right"></i>
                                                                    </span>
                                                                </a>
                                                                <ul class="treeview-menu">
                                                                    <li><a href="public/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                                                                    <li><a href="view.php"><i class="fa fa-circle-o"></i> View</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="public/calendar.html">
                                                                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                                                                    <span class="pull-right-container">
                                                                        <small class="label pull-right bg-red">3</small>
                                                                        <small class="label pull-right bg-blue">17</small>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="public/mailbox/mailbox.html">
                                                                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                                                    <span class="pull-right-container">
                                                                        <small class="label pull-right bg-yellow">12</small>
                                                                        <small class="label pull-right bg-green">16</small>
                                                                        <small class="label pull-right bg-red">5</small>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="treeview">
                                                                <a href="#">
                                                                    <i class="fa fa-folder"></i> <span>Examples</span>
                                                                    <span class="pull-right-container">
                                                                        <i class="fa fa-angle-left pull-right"></i>
                                                                    </span>
                                                                </a>
                                                                <ul class="treeview-menu">
                                                                    <li><a href="public/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                                                                    <li><a href="public/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                                                                    <li><a href="public/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                                                                    <li><a href="public/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                                                                    <li><a href="public/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                                                                    <li><a href="public/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                                                                    <li><a href="public/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                                                                    <li><a href="public/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                                                                    <li><a href="public/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="treeview">
                                                                <a href="#">
                                                                    <i class="fa fa-share"></i> <span>Multilevel</span>
                                                                    <span class="pull-right-container">
                                                                        <i class="fa fa-angle-left pull-right"></i>
                                                                    </span>
                                                                </a>
                                                                <ul class="treeview-menu">
                                                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-circle-o"></i> Level One
                                                                            <span class="pull-right-container">
                                                                                <i class="fa fa-angle-left pull-right"></i>
                                                                            </span>
                                                                        </a>
                                                                        <ul class="treeview-menu">
                                                                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                                                            <li>
                                                                                <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                                                                    <span class="pull-right-container">
                                                                                        <i class="fa fa-angle-left pull-right"></i>
                                                                                    </span>
                                                                                </a>
                                                                                <ul class="treeview-menu">
                                                                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                                                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                                                            <li class="header">LABELS</li>
                                                            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                                                            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                                                            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
                                                        </ul>
                                                    </section>
                                                     /.sidebar 
                                                </aside>-->

                        <!-- Content Wrapper. Contains page content -->
                        <div class="content-wrapper">
                            <!-- Content Header (Page header) -->
                            <section class="content-header">
                                <h1>
                                    General Form Elements
                                    <small>Preview</small>
                                </h1>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                                    <li><a href="#">Forms</a></li>
                                    <li class="active">General Elements</li>
                                </ol>
                            </section>

                            <!-- Main content -->
                            <section class="content">
                                <div class="row">
                                    <!-- left column -->
                                    <div class="col-md-6">
                                        <!-- general form elements -->
                                        <div class="box box-primary">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">Quick Example</h3>
                                            </div>
                                            <!-- /.box-header -->
                                            <!-- form start -->
                                            <form role="form" action="" method="post">
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputBranch Name1">Branch Name</label>
                                                        <input type="branch_name" class="form-control" id="exampleInputBranch Name1" name="branch_name" value=<?php echo $branch_name; ?>>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputBranch Code1">Branch Code</label>
                                                        <input type="branch_code" class="form-control" id="exampleInputBranch Code1" name="branch_code" value=<?php echo $branch_code; ?>>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputAddress1">Address</label>
                                                        <input type="address" class="form-control" id="exampleInputAddress1" name="address" value=<?php echo $address; ?>>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPincode1">Pincode</label>
                                                        <input type="pincode" class="form-control" id="exampleInputPincode1" name="pincode" value=<?php echo $pincode; ?>> 
                                                    </div>  
                                                    <div class="form-group">
                                                        <label for="exampleInputState1">State</label>
                                                        <input type="state" class="form-control" id="exampleInputState1" name="state" value=<?php echo $state; ?>>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputSTD Code1">STD Code</label>
                                                        <input type="std_code" class="form-control" id="exampleInputSTD Code1" name="std_code" value=<?php echo $std_code; ?>>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPhone11">Phone1</label>
                                                        <input type="phone1" class="form-control" id="exampleInputPhone11" name="phone1" value=<?php echo $phone1; ?>>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPhone21">Phone2</label>
                                                        <input type="phone2" class="form-control" id="exampleInputPhone21" name="phone2" value=<?php echo $phone2; ?>>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPhone31">Phone3</label>
                                                        <input type="phone3" class="form-control" id="exampleInputPhone31" name="phone3" value=<?php echo $phone3; ?>>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputFax1">Fax</label>
                                                        <input type="fax" class="form-control" id="exampleInputFax1" name="fax" value=<?php echo $fax; ?>>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputMobile1">Mobile</label>
                                                        <input type="mobile" class="form-control" id="exampleInputMobile1" name="mobile" value=<?php echo $mobile; ?>>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputManager1">Manager</label>
                                                        <input type="manager" class="form-control" id="exampleInputManager1" name="manager" value=<?php echo $manager; ?>>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" value=<?php echo $email; ?>>
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->

                                                <div class="box-footer">
                                                    <button type="submit" class="btn btn-primary" name="Update" value="Submit">Update</button>
                                                <?php } ?>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </form>
                            </div>
                            <!-- /.box -->

                            <!-- Form Element sizes -->
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Different Height</h3>
                                </div>
                                <div class="box-body">
                                    <input class="form-control input-lg" type="text" placeholder=".input-lg">
                                    <br>
                                    <input class="form-control" type="text" placeholder="Default input">
                                    <br>
                                    <input class="form-control input-sm" type="text" placeholder=".input-sm">
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->

                            <div class="box box-danger">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Different Width</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <input type="text" class="form-control" placeholder=".col-xs-3">
                                        </div>
                                        <div class="col-xs-4">
                                            <input type="text" class="form-control" placeholder=".col-xs-4">
                                        </div>
                                        <div class="col-xs-5">
                                            <input type="text" class="form-control" placeholder=".col-xs-5">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->

                            <!-- Input addon -->
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Input Addon</h3>
                                </div>
                                <div class="box-body">
                                    <div class="input-group">
                                        <span class="input-group-addon">@</span>
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                    <br>

                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                    <br>

                                    <div class="input-group">
                                        <span class="input-group-addon">$</span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon">.00</span>
                                    </div>

                                    <h4>With icons</h4>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <br>

                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon"><i class="fa fa-check"></i></span>
                                    </div>
                                    <br>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                                    </div>

                                    <h4>With checkbox and radio inputs</h4>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="checkbox">
                                                </span>
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                        <!-- /.col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="radio">
                                                </span>
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                        <!-- /.col-lg-6 -->
                                    </div>
                                    <!-- /.row -->

                                    <h4>With buttons</h4>

                                    <p class="margin">Large: <code>.input-group.input-group-lg</code></p>

                                    <div class="input-group input-group-lg">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action
                                                <span class="fa fa-caret-down"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <!-- /btn-group -->
                                        <input type="text" class="form-control">
                                    </div>
                                    <!-- /input-group -->
                                    <p class="margin">Normal</p>

                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-danger">Action</button>
                                        </div>
                                        <!-- /btn-group -->
                                        <input type="text" class="form-control">
                                    </div>
                                    <!-- /input-group -->
                                    <p class="margin">Small <code>.input-group.input-group-sm</code></p>

                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-info btn-flat">Go!</button>
                                        </span>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->

                        </div>
                        <!--/.col (left) -->
                        <!-- right column -->
                        <div class="col-md-6">
                            <!-- Horizontal Form -->
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Horizontal Form</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form class="form-horizontal">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> Remember me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-default">Cancel</button>
                                        <button type="submit" class="btn btn-info pull-right">Sign in</button>
                                    </div>
                                    <!-- /.box-footer -->
                                </form>
                            </div>
                            <!-- /.box -->
                            <!-- general form elements disabled -->
                            <div class="box box-warning">
                                <div class="box-header with-border">
                                    <h3 class="box-title">General Elements</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <form role="form">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Text</label>
                                            <input type="text" class="form-control" placeholder="Enter ...">
                                        </div>
                                        <div class="form-group">
                                            <label>Text Disabled</label>
                                            <input type="text" class="form-control" placeholder="Enter ..." disabled>
                                        </div>

                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Textarea</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Textarea Disabled</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                                        </div>

                                        <!-- input states -->
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
                                            <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">
                                            <span class="help-block">Help block with success</span>
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with
                                                warning</label>
                                            <input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
                                            <span class="help-block">Help block with warning</span>
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                                                error</label>
                                            <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
                                            <span class="help-block">Help block with error</span>
                                        </div>

                                        <!-- checkbox -->
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    Checkbox 1
                                                </label>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    Checkbox 2
                                                </label>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" disabled>
                                                    Checkbox disabled
                                                </label>
                                            </div>
                                        </div>

                                        <!-- radio -->
                                        <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                    Option one is this and that&mdash;be sure to include why it's great
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                    Option two can be something else and selecting it will deselect option one
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                                                    Option three is disabled
                                                </label>
                                            </div>
                                        </div>

                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Select</label>
                                            <select class="form-control">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Select Disabled</label>
                                            <select class="form-control" disabled>
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>

                                        <!-- Select multiple-->
                                        <div class="form-group">
                                            <label>Select Multiple</label>
                                            <select multiple class="form-control">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Select Multiple Disabled</label>
                                            <select multiple class="form-control" disabled>
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>

                                    </form>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.3.6
                </div>
                <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
                reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">
                        <h3 class="control-sidebar-heading">Recent Activity</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                        <p>Will be 23 on April 24th</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-user bg-yellow"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                        <p>New phone +1(800)555-1234</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                        <p>nora@example.com</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-file-code-o bg-green"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                        <p>Execution time 5 seconds</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->

                        <h3 class="control-sidebar-heading">Tasks Progress</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Custom Template Design
                                        <span class="label label-danger pull-right">70%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Update Resume
                                        <span class="label label-success pull-right">95%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Laravel Integration
                                        <span class="label label-warning pull-right">50%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Back End Framework
                                        <span class="label label-primary pull-right">68%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    <!-- Settings tab content -->
                    <div class="tab-pane" id="control-sidebar-settings-tab">
                        <form method="post">
                            <h3 class="control-sidebar-heading">General Settings</h3>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Report panel usage
                                    <input type="checkbox" class="pull-right" checked>
                                </label>

                                <p>
                                    Some information about this general settings option
                                </p>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Allow mail redirect
                                    <input type="checkbox" class="pull-right" checked>
                                </label>

                                <p>
                                    Other sets of options are available
                                </p>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Expose author name in posts
                                    <input type="checkbox" class="pull-right" checked>
                                </label>

                                <p>
                                    Allow the user to show his name in blog posts
                                </p>
                            </div>
                            <!-- /.form-group -->

                            <h3 class="control-sidebar-heading">Chat Settings</h3>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Show me as online
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Turn off notifications
                                    <input type="checkbox" class="pull-right">
                                </label>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Delete chat history
                                    <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                                </label>
                            </div>
                            <!-- /.form-group -->
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="public/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="public/bootstrap/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="public/plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="public/dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="public/dist/js/demo.js"></script>
    </body>
</html>