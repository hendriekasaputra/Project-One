<?php 
session_start();

if (!isset($_SESSION["nama"])) {
    header("location:login.php");
}
elseif ($_SESSION['type'] !=0) {
    header("location:login.php");
}   

include 'conf/koneksi.php';

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->



    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SI SKKNI ROHUL 2017</title>
        <link rel="icon" type="image/ico" href="assets/images/favicon.png" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">




        <!-- ============================================
        ================= Stylesheets ===================
        ============================================= -->
        <!-- vendor css files -->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
       
        <link rel="stylesheet" href="assets/css/vendor/animate.css">
        <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
        <link rel="stylesheet" href="assets/js/vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" href="assets/js/vendor/datatables/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="assets/js/vendor/datatables/datatables.bootstrap.min.css">
        <link rel="stylesheet" href="assets/js/vendor/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css">
        <link rel="stylesheet" href="assets/js/vendor/datatables/extensions/Responsive/css/dataTables.responsive.css">
        <link rel="stylesheet" href="assets/js/vendor/datatables/extensions/ColVis/css/dataTables.colVis.min.css">
        <link rel="stylesheet" href="assets/js/vendor/datatables/extensions/TableTools/css/dataTables.tableTools.min.css">

        <!-- project main css files -->
        <link rel="stylesheet" href="assets/css/main.css">
        <!--/ stylesheets -->



        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="assets/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!--/ modernizr -->




    </head>





    <body id="minovate" class="appWrapper">






        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->












        <!-- ====================================================
        ================= Application Content ===================
        ===================================================== -->
        <div id="wrap" class="animsition">






            <!-- ===============================================
            ================= HEADER Content ===================
            ================================================ -->
            <section id="header">
                <header class="clearfix">

                    <!-- Branding -->
                    <div class="branding">
                        <a class="brand" href="menus-admin.php">
                            <span><strong>SI</strong> SKKNI ROHUL</span>
                        </a>
                        <a href="#" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>
                    </div>
                    <!-- Branding end -->




                    <!-- Right-side navigation -->
                    <ul class="nav-right pull-right list-inline">
                        
                        <li class="dropdown nav-profile">

                            <a href class="dropdown-toggle" data-toggle="dropdown">
                                <img src="assets/images/admin.png" alt="" class="img-circle size-30x30">
                                <span>Hendri Eka Saputra<i class="fa fa-angle-down"></i></span>
                            </a>

                            <ul class="dropdown-menu animated littleFadeInRight" role="menu">

                                <li>
                                    <a role="button" tabindex="0">
                                        <span class="badge bg-greensea pull-right"></span>
                                        <i class="fa fa-user"></i>Profile
                                    </a>
                                </li>
                             

                                <li>
                                    <a role="button" tabindex="0" href="log-out.php">
                                        <i class="fa fa-sign-out"></i>Logout
                                    </a>
                                </li>

                            </ul>

                        </li>

                    </ul>
                    <!-- Right-side navigation end -->



                </header>

            </section>
            <!--/ HEADER Content  -->





            <!-- =================================================
            ================= CONTROLS Content ===================
            ================================================== -->
            <div id="controls">





                <!-- ================================================
                ================= SIDEBAR Content ===================
                ================================================= -->
                  <aside id="sidebar">


                    <div id="sidebar-wrap">

                        <div class="panel-group slim-scroll" role="tablist">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#sidebarNav">
                                            Navigation <i class="fa fa-angle-up"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">


                                        <!-- ===================================================
                                        ================= NAVIGATION Content ===================
                                        ==================================================== -->
                                        <ul id="navigation">
                                            <li class="active"><a href="menus-admin.php"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>
                                        
                                            <li>
                                                <a role="button" tabindex="0"><i class="fa fa-list"></i> <span>Input</span></a>
                                                <ul>
                                                    <li><a href="new-input-data.php"><i class="fa fa-caret-right"></i> Input Data SKKNI</a></li>                         
                                                </ul>
                                                <ul>
                                                <!--
                                                    <li><a href="input-data-datang.php"><i class="fa fa-caret-right"></i> Input Data Pendatang</a></li>                       
                                                </ul>
                                                <ul>
                                                    <li><a href="input-data-pindah.php"><i class="fa fa-caret-right"></i> Input Data Pindah</a></li>                      
                                                </ul>
                                                <ul>
                                                    <li><a href="input-data-kelahiran.php"><i class="fa fa-caret-right"></i> Input Data Kelahiran</a></li>            
                                                </ul>
                                                <ul>
                                                    <li><a href="input-data-kematian.php"><i class="fa fa-caret-right"></i> Input Data Kematian</a>
                                                </li>
                                                -->             
                                                </ul>
                                            </li>

                                            <li>
                                                <a role="button" tabindex="0"><i class="fa fa-table"></i> <span>Data</span></a>
                                                <ul>
                                                    <li><a href="list-data.php"><i class="fa fa-caret-right"></i> List Data SKKNI</a></li>
                                                </ul>
                                                <!--
                                                <ul>
                                                    <li><a href="data-datang.php"><i class="fa fa-caret-right"></i> Data Penduduk Pendatang</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="data-pindah.php"><i class="fa fa-caret-right"></i> Data Penduduk Pindah</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="data-kelahiran.php"><i class="fa fa-caret-right"></i> Data Kelahiran Penduduk</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="data-kematian.php"><i class="fa fa-caret-right"></i> Data Kematian Penduduk</a></li>
                                                </ul>
                                                -->
                                            </li>
                                            
                                            <li>
                                                <a role="button" tabindex="0"><i class="fa fa-user"></i> <span>User</span></a>
                                                <ul>
                                                    <li><a href="user-add.php"><i class="fa fa-caret-right"></i> Add User</a></li>
                                                    <li><a href="change-password.php"><i class="fa fa-caret-right"></i> Change Password</a></li>                                                    
                                                 </ul>
                                            </li>
                                                                                      

                                        </ul>
                                        <!--/ NAVIGATION Content -->


                                    </div>
                                </div>
                            </div>
                           
                        </div>

                    </div>

</div>
                </aside>
                <!--/ SIDEBAR Content -->

            <!--/ CONTROLS Content -->




            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-tables-datatables">

                    <div class="pageheader">

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html"><i class="fa fa-home"></i> Beranda</a>
                                </li>
                                <li>
                                    <a href="#">Data</a>
                                </li>
                                <li>
                                    <a href="list-data.php">List Data SKKNI</a>
                                </li>
                            </ul>

                        </div>

                    </div>

                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-12">

                            <!-- tile -->
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Data</strong> SKKNI </h1>
                                    <ul class="controls">
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-toggle">
                                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-refresh">
                                                        <i class="fa fa-refresh"></i> Refresh
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                                        <i class="fa fa-expand"></i> Fullscreen
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">
                                    <div class="row">
                                        <div class="col-md-6"><div id="tableTools"></div></div>
                                        <div class="col-md-6"><div id="colVis"></div></div>
                                    </div>
                                    <table class="table table-custom" id="advanced-usage">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>KTP/NIM</th>
                                            <th>Nama</th>                                        
                                            <th>Tanggal Lahir</th>
                                            <th>No HP</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            
                            <?php

                            $query = mysql_query("SELECT * FROM user ORDER BY ktp DESC ") or die(mysql_error());
                            if(mysql_num_rows($query) == 0){
                                echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
                            }else{
                                $no = 1;    
                                while($data = mysql_fetch_assoc($query)){   
                                    echo '<tr>';
                                        echo '<td>'.$no.'</td>';    
                                        echo '<td>'.$data['ktp'].'</td>';  
                                        echo '<td>'.$data['nama'].'</td>';
                                        echo '<td>'.$data['tgllahir'].'</td>';
                                        echo '<td>'.$data['nohp'].'</td>';
                                        echo '<td>'.$data['alamat'].'</td>';                                      
                                        echo '<td>
                                        <a href="#" class="edit-record" data-id="'.$data['ktp'].'">Detail</a> /
                                        <a href=edit-new.php?id='.$data['ktp'].'>Edit</a> /
                                        <a href="hapus-list.php?id='.$data['ktp'].'" onclick="return confirm(\'Anda ingin menghapus data?\')">Hapus</a></td>';   
                                    echo '</tr>';
                                    $no++;  
                                }
                            }
                            ?>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Informasi Data Keseluruhan</h4>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        
                    </div>
                </div>
            </div>
        </div>

                        </div>
                        <!-- /col -->
                        
                    </div>
                    <!-- /row -->
<div class="tile-widget bg-greensea">
                                "Copyright © 2017"
                                <a href="www.github.com/hendriekasaputra">Hendri Eka Saputra</a>
                                 All rights reserved.
                                </div>  
                </div>
                
            </section>
            <!--/ CONTENT -->






        </div>
        <!--/ Application Content -->














        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="assets/js/vendor/bootstrap/bootstrap.min.js"></script>

        <script src="assets/js/vendor/jRespond/jRespond.min.js"></script>

        <script src="assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="assets/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>

        <script src="assets/js/vendor/screenfull/screenfull.min.js"></script>

        <script src="assets/js/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/vendor/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
        <script src="assets/js/vendor/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/js/vendor/datatables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
        <script src="assets/js/vendor/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
        <script src="assets/js/vendor/datatables/extensions/dataTables.bootstrap.js"></script>

        <!--/ vendor javascripts -->




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="assets/js/main.js"></script>
        <!--/ custom javascripts -->







        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            $(window).load(function(){

                //initialize basic datatable
                var table = $('#basic-usage').DataTable({
                    "ajax": 'assets/extras/datatables-basic.json',
                    "columns": [
                        { "data": "id" },
                        { "data": "firstName" },
                        { "data": "lastName" }
                    ],
                    "aoColumnDefs": [
                      { 'bSortable': false, 'aTargets': [ "no-sort" ] }
                    ],
                    "dom": 'Rlfrtip'
                });

                $('#basic-usage tbody').on( 'click', 'tr', function () {
                    if ( $(this).hasClass('row_selected') ) {
                        $(this).removeClass('row_selected');
                    }
                    else {
                        table.$('tr.row_selected').removeClass('row_selected');
                        $(this).addClass('row_selected');
                    }
                });
                //*initialize basic datatable




                //initialize editable datatable

                function restoreRow(oTable, nRow) {
                    var aData = oTable.row(nRow).data();
                    var jqTds = $('>td', nRow);

                    for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
                        oTable.row(nRow).data(aData[i]);
                    }

                    oTable.draw();
                }

                function editRow(oTable, nRow) {
                    var aData = oTable.row(nRow).data();
                    var jqTds = $('>td', nRow);
                    jqTds[0].innerHTML = '<input type="text" class="form-control input-sm" value="' + aData[0] + '">';
                    jqTds[1].innerHTML = '<input type="text" class="form-control input-sm" value="' + aData[1] + '">';
                    jqTds[2].innerHTML = '<input type="text" class="form-control input-sm" value="' + aData[2] + '">';
                    jqTds[3].innerHTML = '<input type="text" class="form-control input-sm" value="' + aData[3] + '">';
                    jqTds[4].innerHTML = '<input type="text" class="form-control input-sm" value="' + aData[4] + '">';
                    jqTds[5].innerHTML = '<a role="button" tabindex="0" class="edit text-success text-uppercase text-strong text-sm mr-10">Save</a><a role="button" tabindex="0" class="cancel text-warning text-uppercase text-strong text-sm mr-10">Cancel</a>';
                }

                function saveRow(oTable, nRow) {
                    var jqInputs = $('input', nRow);
                    oTable.cell(nRow, 0).data(jqInputs[0].value);
                    oTable.cell(nRow, 1).data(jqInputs[1].value);
                    oTable.cell(nRow, 2).data(jqInputs[2].value);
                    oTable.cell(nRow, 3).data(jqInputs[3].value);
                    oTable.cell(nRow, 4).data(jqInputs[4].value);
                    oTable.cell(nRow, 5).data('<a role="button" tabindex="0" class="edit text-primary text-uppercase text-strong text-sm mr-10">Edit</a><a role="button" tabindex="0" class="delete text-danger text-uppercase text-strong text-sm mr-10">Remove</a>');
                    oTable.draw();
                }

                var table2 = $('#editable-usage');

                var oTable = $('#editable-usage').DataTable({
                    "aoColumnDefs": [
                      { 'bSortable': false, 'aTargets': [ "no-sort" ] }
                    ]
                });

                var nEditing = null;
                var nNew = false;

                $('#add-entry').click(function (e) {
                    e.preventDefault();

                    if (nNew && nEditing) {
                        if (confirm("Previous row is not saved yet. Save it ?")) {
                            saveRow(oTable, nEditing); // save
                            $(nEditing).find("td:first").html("Untitled");
                            nEditing = null;
                            nNew = false;

                        } else {
                            oTable.row(nEditing).remove().draw(); // cancel
                            nEditing = null;
                            nNew = false;

                            return;
                        }
                    }

                    var aiNew = oTable.row.add(['', '', '', '', '', '', '']).draw();
                    var nRow = oTable.row(aiNew[0]).node();
                    editRow(oTable, nRow);
                    nEditing = nRow;
                    nNew = true;
                });

                table2.on('click', '.delete', function (e) {
                    e.preventDefault();

                    if (confirm("Are you sure?") == false) {
                        return;
                    }

                    var nRow = $(this).parents('tr')[0];
                    oTable.row(nRow).remove().draw();
                    alert("Deleted!");
                });

                table2.on('click', '.cancel', function (e) {
                    e.preventDefault();
                    if (nNew) {
                        oTable.row(nEditing).remove().draw();
                        nEditing = null;
                        nNew = false;
                    } else {
                        restoreRow(oTable, nEditing);
                        nEditing = null;
                    }
                });

                table2.on('click', '.edit', function (e) {
                    e.preventDefault();

                    /* Get the row as a parent of the link that was clicked on */
                    var nRow = $(this).parents('tr')[0];

                    if (nEditing !== null && nEditing != nRow) {
                        /* Currently editing - but not this row - restore the old before continuing to edit mode */
                        restoreRow(oTable, nEditing);
                        editRow(oTable, nRow);
                        nEditing = nRow;
                    } else if (nEditing == nRow && this.innerHTML == "Save") {
                        /* Editing this row and want to save it */
                        saveRow(oTable, nEditing);
                        nEditing = null;
                        alert("Updated!");
                    } else {
                        /* No edit in progress - let's start one */
                        editRow(oTable, nRow);
                        nEditing = nRow;
                    }
                });
                //*initialize editable datatable
                //initialize responsive datatable
                var table3 = $('#responsive-usage').DataTable({
                    "ajax": 'assets/extras/datatables-responsive.json',
                    "columns": [
                        { "data": "id" },
                        { "data": "firstName" },
                        { "data": "lastName" },
                        { "data": "tel" },
                        { "data": "address" },
                        { "data": "city" },
                        { "data": "state" },
                        { "data": "zip" }
                    ],
                    "aoColumnDefs": [
                      { 'bSortable': false, 'aTargets': [ "no-sort" ] }
                    ]
                });
                //*initialize responsive datatable

                //initialize responsive datatable
                function stateChange(iColumn, bVisible) {
                    console.log('The column', iColumn, ' has changed its status to', bVisible);
                }

                var table4 = $('#advanced-usage').DataTable({
                   
                });

                var colvis = new $.fn.dataTable.ColVis(table4);

                $(colvis.button()).insertAfter('#colVis');
                $(colvis.button()).find('button').addClass('btn btn-default').removeClass('ColVis_Button');

                var tt = new $.fn.dataTable.TableTools(table4, {
                    sRowSelect: 'single',
                    "aButtons": [
                        'copy',
                        'print', {
                            'sExtends': 'collection',
                            'sButtonText': 'Save',
                            'aButtons': ['xls', 'pdf']
                        }
                    ],
                    "sSwfPath": "assets/js/vendor/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
                });

                $(tt.fnContainer()).insertAfter('#tableTools');
                //*initialize responsive datatable

            });
        </script>
        <!--/ Page Specific Scripts -->

<script type="text/javascript">
        $(function(){
            $(document).on('click','.edit-record',function(e){
                e.preventDefault();
                $("#myModal").modal('show');
                $.post('lihat.php',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>



        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
<div class="tile-widget bg-greensea">
                                "Copyright © 2017"
                                <a href="www.github.com/hendriekasaputra">Hendri Eka Saputra</a>
                                 All rights reserved.
                                </div>  
    </body>
</html>
