<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $page_title; ?></title>

    <link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <script src="<?php echo base_url();?>asset/js/jquery-3.1.1.min.js"></script>
    <link href="<?php echo base_url();?>asset/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/css/style.css" rel="stylesheet">
    <style type="text/css">
       
        /*the container must be positioned relative:*/
        .autocomplete {
          position: relative;
          display: inline-block;
        }

        .autocomplete-items {
          position: absolute;
          border: 1px solid #d4d4d4;
          border-bottom: none;
          border-top: none;
          z-index: 99;
          /*position the autocomplete items to be the same width as the container:*/
          top: 100%;
          left: 0;
          right: 0;
        }

        .autocomplete-items div {
          padding: 10px;
          cursor: pointer;
          background-color: #fff; 
          border-bottom: 1px solid #d4d4d4; 
        }

        /*when hovering an item:*/
        .autocomplete-items div:hover {
          background-color: #e9e9e9; 
        }

        /*when navigating through the items using the arrow keys:*/
        .autocomplete-active {
          background-color: DodgerBlue !important; 
          color: #ffffff; 
        }
        .modal-confirm {        
        color: #434e65;
        width: 525px;
        }
        .modal-confirm .modal-content {
            padding: 20px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
        }
        .modal-confirm .modal-header {
            background: #ff5e5e;
            border-bottom: none;   
            position: relative;
            text-align: center;
            margin: -20px -20px 0;
            border-radius: 5px 5px 0 0;
            padding: 19px;
        }
        .modal-confirm h4 {
            text-align: center;
            font-size: 36px;
            margin: 10px 0;
        }
        .modal-confirm .form-control, .modal-confirm .btn {
            min-height: 40px;
            border-radius: 3px; 
        }
        .modal-confirm .close {
            position: absolute;
            top: 15px;
            right: 15px;
            color: #fff;
            text-shadow: none;
            opacity: 0.5;
        }
        .modal-confirm .close:hover {
            opacity: 0.8;
        }
        .modal-confirm .icon-box {
            color: #fff;
            width: 95px;
            height: 95px;
            display: inline-block;
            border-radius: 50%;
            z-index: 9;
            border: 5px solid #fff;
            padding: 13px 15px 0px 22px;
            text-align: center;
        }
        .modal-confirm .icon-box i {
            font-size: 64px;
            margin: -4px 0 0 -4px;
        }
        .modal-confirm.modal-dialog {
            margin-top: 80px;
        }
        .modal-confirm .btn {
            color: #fff;
            border-radius: 4px;
            background: #eeb711;
            text-decoration: none;
            transition: all 0.4s;
            line-height: normal;
            border-radius: 30px;
            margin-top: 10px;
            padding: 6px 20px;
            border: none;
        }
        .modal-confirm .btn:hover, .modal-confirm .btn:focus {
            background: #eda645;
            outline: none;
        }
        .modal-confirm .btn span {
            margin: 1px 3px 0;
            float: left;
        }
        .modal-confirm .btn i {
            margin-left: 1px;
            font-size: 20px;
            float: right;
        }
        .trigger-btn {
            display: inline-block;
            margin: 100px auto;
        }
    </style>

</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <img alt="image" class="rounded-circle" src="<?php echo base_url();?>asset/img/profile_small.jpg"/>
                                <span class="block m-t-xs font-bold" style="color: white;"><?php echo $username;?></span>
                                <span class="text-muted text-xs block"><?php echo $userlevel;?></span>

                        </div>
                        <div class="logo-element">
                            >>
                        </div>
                    </li>
                    <li class="<?php if($this->uri->uri_string() == 'home') { echo 'active'; } ?>">
                        <a href="<?php echo base_url();?>"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></span></a>
                    </li>
                    <li class="<?php if($this->uri->uri_string() == 'home/listFaktur' || $this->uri->uri_string() == 'home/inputFaktur' || $this->uri->uri_string() == 'home/cetakFaktur') { echo 'active';}?>">
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Olah Data Faktur</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="<?php if($this->uri->uri_string() == 'home/listFaktur') { echo 'active'; } ?>"><a href="<?php echo base_url();?>home/listFaktur"><i class="fa fa-list"></i>  Daftar Faktur</a></li>
                            <li class="<?php if($this->uri->uri_string() == 'home/inputFaktur') { echo 'active'; } ?>"><a href="<?php echo base_url();?>home/inputFaktur"><i class="fa fa-edit"></i>  Input Faktur Baru</a></li>
                            <li class="<?php if($this->uri->uri_string() == 'home/cetakFaktur') { echo 'active'; } ?>"><a href="<?php echo base_url();?>home/cetakFaktur"><i class="fa fa-print"></i>  Cetak Faktur</a></li>
                        </ul>
                    </li>
                    <li class="<?php if($this->uri->uri_string() == 'home/suratJalan' || $this->uri->uri_string() == 'home/uploadDataSamsat') { echo 'active'; } ?>">
                        <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Olah Faktur Ke Samsat</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="<?php if($this->uri->uri_string() == 'home/suratJalan') { echo 'active'; } ?>"><a href="<?php echo base_url();?>home/suratJalan"><i class="fa fa-list"></i>  Data Surat Jalan</a></li>
                            <li class="<?php if($this->uri->uri_string() == 'home/uploadDataSamsat') { echo 'active'; } ?>"><a href="<?php echo base_url();?>home/uploadDataSamsat"><i class="fa fa-edit"></i>  Upload Data Samsat</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Verifikasi Tagihan</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li ><a href="#"><i class="fa fa-list"></i>  Cetak Tagihan</a></li>
                            <li ><a href="#"><i class="fa fa-edit"></i>  Upload Bukti Bayar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        
                        <li>
                            <span class="m-r-sm text-muted welcome-message">Halo, <b> <?php echo $username?>! </b></span>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>login/logout">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>


