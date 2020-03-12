
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Olah Data Faktur</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Daftar Faktur</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Daftar Faktur</h5>  
                            </div>
                            <div class="ibox-content">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-dataFaktur nowrap" >
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nomor Faktur</th>
                                                <th>Nama Pemilik</th>
                                                <th>Nomor Mesin</th>
                                                <th>Merk Kendaraan</th>
                                                <th>Jenis Kendaraan</th>
                                                <th>Tanggal Pembelian</th>
                                                <th>Tanggal Pembelian</th>
                                                <th>Tanggal Pembelian</th>
                                                <th>Tanggal Pembelian</th>
                                                <th>Tanggal Pembelian</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Internet Explorer 4.0 </td>
                                                <td>Win 95+</td>
                                                <td>Win 95+</td>
                                                <td>Win 95+</td>
                                                <td>Win 95+</td>
                                                <td>Win 95+</td>
                                                <td>Win 95+</td>
                                                <td>Win 95+</td>
                                                <td class="center">4</td>
                                                <td class="center">X</td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>Win 95+</td>
                                                <td>Trident</td>
                                                <td>Internet Explorer 5.0 </td>
                                                <td>Win 95+</td>
                                                <td>Win 95+</td>
                                                <td>Win 95+</td>
                                                <td>Win 95+</td>
                                                <td>Win 95+</td>
                                                <td class="center">5</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td>Win 95+</td>
                                                <td>Trident</td>
                                                <td>Internet Explorer 5.5</td>
                                                <td>Win 95+</td>
                                                <td>Win 95+</td>
                                                <td>Win 95+</td>
                                                <td>Win 95+</td>
                                                <td>Win 95+</td>
                                                <td class="center">5.5</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td>1235464575678</td>
                                                <td>Anu</td>
                                                <td>Internet Explorer 5.5</td>
                                                <td>Win 95+</td>
                                                <td>Win 95+</td>
                                                <td>Win 95+</td>
                                                <td>Win 95+</td>
                                                <td>Win 95+</td>
                                                <td class="center">5.5</td>
                                                <td class="center">A</td>
                                            </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <div id="clockbox" style="margin-right: 30px;font-style: italic;"><br></div>
                    <div>
                        <strong>Copyright</strong> Dul &copy; 2019
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url();?>asset/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>asset/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url();?>asset/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/plugins/dataTables/datatables.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>
     <script>
        $(document).ready(function(){
            $('.dataTables-dataFaktur').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                "scrollX": true,
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>
    