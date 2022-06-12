<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php';?>
<body>

    <!-- Main navbar -->
    <?php include 'includes/mainNav.php'; ?>
    <!-- /main navbar -->


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            <div class="sidebar sidebar-main">
                <div class="sidebar-content">

                    <!-- User menu -->
                    <div class="sidebar-user">
                        <div class="category-content">
                            <div class="media">
                                <a href="#" class="media-left"><img src="assets/images/placeholder.jpg"
                                        class="img-circle img-sm" alt=""></a>
                                <div class="media-body">
                                    <span class="media-heading text-semibold">Victoria Baker</span>
                                    <div class="text-size-mini text-muted">
                                        <i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
                                    </div>
                                </div>

                                <div class="media-right media-middle">
                                    <ul class="icons-list">
                                        <li>
                                            <a href="#"><i class="icon-cog3"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /user menu -->


                    <!-- Main navigation -->
                    <?php include 'includes/navigation.php';?>

                    <!-- /main navigation -->

                </div>
            </div>
            <!-- /main sidebar -->


            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Page header -->
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h4><i class="icon-arrow-left52 position-left"></i> <span
                                    class="text-semibold">Datatables</span> - Basic</h4>
                        </div>

                        <div class="heading-elements">
                            <div class="heading-btn-group">
                                <a href="#" class="btn btn-link btn-float has-text"><i
                                        class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                                <a href="#" class="btn btn-link btn-float has-text"><i
                                        class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                                <a href="#" class="btn btn-link btn-float has-text"><i
                                        class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="breadcrumb-line">
                        <ul class="breadcrumb">
                            <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                            <li><a href="datatable_basic.html">Datatables</a></li>
                            <li class="active">Basic</li>
                        </ul>

                        <ul class="breadcrumb-elements">
                            <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-gear position-left"></i>
                                    Settings
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                                    <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
                                    <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-gear"></i> All settings</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content">

                    <!-- Basic datatable -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Basic datatable</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            The <code>DataTables</code> is a highly flexible tool, based upon the foundations of
                            progressive enhancement, and will add advanced interaction controls to any HTML table.
                            DataTables has most features enabled by default, so all you need to do to use it with your
                            own tables is to call the construction function. Searching, ordering, paging etc goodness
                            will be immediately added to the table, as shown in this example. <strong>Datatables support
                                all available table styling.</strong>
                        </div>

                        <table class="table datatable-basic">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Job Title</th>
                                    <th>DOB</th>
                                    <th>Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Marth</td>
                                    <td><a href="#">Enright</a></td>
                                    <td>Traffic Court Referee</td>
                                    <td>22 Jun 1972</td>
                                    <td><span class="label label-success">Active</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jackelyn</td>
                                    <td>Weible</td>
                                    <td><a href="#">Airline Transport Pilot</a></td>
                                    <td>3 Oct 1981</td>
                                    <td><span class="label label-default">Inactive</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Aura</td>
                                    <td>Hard</td>
                                    <td>Business Services Sales Representative</td>
                                    <td>19 Apr 1969</td>
                                    <td><span class="label label-danger">Suspended</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nathalie</td>
                                    <td><a href="#">Pretty</a></td>
                                    <td>Drywall Stripper</td>
                                    <td>13 Dec 1977</td>
                                    <td><span class="label label-info">Pending</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sharan</td>
                                    <td>Leland</td>
                                    <td>Aviation Tactical Readiness Officer</td>
                                    <td>30 Dec 1991</td>
                                    <td><span class="label label-default">Inactive</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maxine</td>
                                    <td><a href="#">Woldt</a></td>
                                    <td><a href="#">Business Services Sales Representative</a></td>
                                    <td>17 Oct 1987</td>
                                    <td><span class="label label-info">Pending</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sylvia</td>
                                    <td><a href="#">Mcgaughy</a></td>
                                    <td>Hemodialysis Technician</td>
                                    <td>11 Nov 1983</td>
                                    <td><span class="label label-danger">Suspended</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lizzee</td>
                                    <td><a href="#">Goodlow</a></td>
                                    <td>Technical Services Librarian</td>
                                    <td>1 Nov 1961</td>
                                    <td><span class="label label-danger">Suspended</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kennedy</td>
                                    <td>Haley</td>
                                    <td>Senior Marketing Designer</td>
                                    <td>18 Dec 1960</td>
                                    <td><span class="label label-success">Active</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Chantal</td>
                                    <td><a href="#">Nailor</a></td>
                                    <td>Technical Services Librarian</td>
                                    <td>10 Jan 1980</td>
                                    <td><span class="label label-default">Inactive</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Delma</td>
                                    <td>Bonds</td>
                                    <td>Lead Brand Manager</td>
                                    <td>21 Dec 1968</td>
                                    <td><span class="label label-info">Pending</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Roland</td>
                                    <td>Salmos</td>
                                    <td><a href="#">Senior Program Developer</a></td>
                                    <td>5 Jun 1986</td>
                                    <td><span class="label label-default">Inactive</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Coy</td>
                                    <td>Wollard</td>
                                    <td>Customer Service Operator</td>
                                    <td>12 Oct 1982</td>
                                    <td><span class="label label-success">Active</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maxwell</td>
                                    <td>Maben</td>
                                    <td>Regional Representative</td>
                                    <td>25 Feb 1988</td>
                                    <td><span class="label label-danger">Suspended</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cicely</td>
                                    <td>Sigler</td>
                                    <td><a href="#">Senior Research Officer</a></td>
                                    <td>15 Mar 1960</td>
                                    <td><span class="label label-info">Pending</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /basic datatable -->
                    <!-- Footer -->
                    <?php include 'includes/footer.php';?>
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->
    <?php include 'includes/script.php'; ?>
</body>

</html>