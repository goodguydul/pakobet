
             <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Olah Faktur Ke Samsat</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Data Surat Jalan</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="wrapper wrapper-content">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox ">
                                    <div class="ibox-title">
                                        <h5>Daftar Surat Jalan</h5>
                                        &nbsp;
                                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">Input Data</button>
                                        <div class="modal fade" id="myModal" role="dialog">
                                            <div class="modal-dialog">   
                                              <!-- Modal  content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Input Data Surat Jalan</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                       <form class="form" action="#" method="POST">
                                                            <div class="form-group">
                                                                <label>Nomor Surat : </label>
                                                                <input type="text" name="nmr_surat" class="form-control required">   
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Tanggal Surat : </label>
                                                                <input type="date" name="tgl_surat" class="form-control required">   
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nama Petugas : </label>
                                                                <input type="text" name="petugas" class="form-control required">   
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Status Surat : </label>
                                                                <select name="sts_surat" class="form-control required">
                                                                    <option value="onprogress">Onprogress</option>
                                                                    <option value="pending">Pending</option>
                                                                    <option value="selesai">Selesai</option>
                                                                    <option value="batal">Dibatalkan</option>
                                                                </select>
                                                            </div>
                                                             <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary"> Simpan </button>
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                               
                                                             </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ibox-content table-responsive">
                                        <table class="table table-hover no-margins">
                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nomor Surat</th>
                                                <th>Tanggal Surat</th>
                                                <th>Nama Petugas</th>
                                                <th>Status</th>
                                                <th>Keterangan</th>
                                                <th class="center">Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td><small>EWIU122356754643</small></td>
                                                <td><i class="fa fa-calendar"></i> 3 Februari 2019 - 11:20pm</td>
                                                <td>Samantha</td>
                                                <td><small>Pending...</small></td>
                                                <td class="text-navy"> 24% </td>
                                                <td><button class="btn btn-success" style="height: 30px;width: 120px;padding: 0px" onclick="#"><i class="fa fa-edit"></i> Ubah Status</button></td>
                                                

                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td><small>EWIU122356754643</small></td>
                                                <td><i class="fa fa-calendar"></i> 3 Februari 2019 - 10:40am</td>
                                                <td>Monica</td>
                                                <td><span class="label label-warning">Canceled</span> </td>
                                                <td class="text-danger">66% </td>
                                                <td><button class="btn btn-success" style="height: 30px;width: 120px;padding: 0px" onclick="#"><i class="fa fa-edit"></i> Ubah Status</button></td>
                                                

                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td><small>EWIU122356754643</small></td>
                                                <td><i class="fa fa-calendar"></i> 3 Februari 2019 - 01:30pm</td>
                                                <td>John</td>
                                                <td><small>Pending...</small> </td>
                                                <td class="text-navy"> 54% </td>
                                                <td><button class="btn btn-success" style="height: 30px;width: 120px;padding: 0px" onclick="#"><i class="fa fa-edit"></i> Ubah Status</button></td>
                                                

                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td><small>EWIU122356754643</small></td>
                                                <td><i class="fa fa-calendar"></i> 3 Februari 2019 - 02:20pm</td>
                                                <td>Agnes</td>
                                                <td><small>Pending...</small> </td>
                                                <td class="text-navy"> 12% </td>
                                                <td><button class="btn btn-success" style="height: 30px;width: 120px;padding: 0px" onclick="#"><i class="fa fa-edit"></i> Ubah Status</button></td>
                                                

                                            </tr>
                                            <tr>
                                                <td>5.</td>
                                                <td><small>EWIU122356754643</small></td>
                                                <td><i class="fa fa-calendar"></i> 3 Februari 2019 - 09:40pm</td>
                                                <td>Janet</td>
                                                <td><small>Pending...</small> </td>
                                                <td class="text-navy"> 22% </td>
                                                <td><button class="btn btn-success" style="height: 30px;width: 120px;padding: 0px" onclick="#"><i class="fa fa-edit"></i> Ubah Status</button></td>
                                                

                                            </tr>
                                            <tr>
                                                <td>6.</td>
                                                <td><small>EWIU122356754643</small></td>
                                                <td><i class="fa fa-calendar"></i> 3 Februari 2019 - 04:10am</td>
                                                <td>Amelia</td>
                                                <td><span class="label label-primary">Completed</span> </td>
                                                <td class="text-navy">100% </td>
                                                <td><button class="btn btn-success" style="height: 30px;width: 120px;padding: 0px" onclick="#"><i class="fa fa-edit"></i> Ubah Status</button></td>
                                                

                                            </tr>
                                            <tr>
                                                <td>7.</td>
                                                <td><small>EWIU122356754643</small></td>
                                                <td><i class="fa fa-calendar"></i> 3 Februari 2019 - 12:08am</td>
                                                <td>Damian</td>
                                                <td><small>Pending...</small> </td>
                                                <td class="text-navy"> 23% </td>
                                                <td><button class="btn btn-success" style="height: 30px;width: 120px;padding: 0px" onclick="#"><i class="fa fa-edit"></i> Ubah Status</button></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
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