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

    <link href="<?php echo base_url();?>asset/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/css/style.css" rel="stylesheet">

</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <img alt="image" class="rounded-circle" src="<?php echo base_url();?>asset/img/profile_small.jpg"/>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold"><?php echo $username;?></span>
                                <span class="text-muted text-xs block"><?php echo $userlevel;?></span>
                            </a>

                        </div>
                        <div class="logo-element">
                            >>
                        </div>
                    </li>
                    <li class="<?php if($this->uri->uri_string() == 'admin') { echo 'active'; } ?>">
                        <a href="<?php echo base_url();?>"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></span></a>
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
                            <div id="clockbox" style="margin-right: 30px;font-style: italic;"></div>
                        </li>
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