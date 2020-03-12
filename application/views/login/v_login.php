
<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">

         <div class="login-panel panel panel-default" style="box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);margin:180px -35px -35px;padding:15px">   
            <div>
                <!-- <h2 class="logo-name">Biro Anu</h2> -->
            </div>
            <h3>Login Page</h3>
            <p>
            </p>
            <p>Silahkan masukkan username dan password Anda!</p>
            <?php 
                $att = "role = 'form' class='m-t'";
                echo form_open('login',$att);
            ?>
            <?php
                // Cetak jika ada notifikasi
                if($this->session->flashdata('sukses')) {
                echo '<p class="warning" style="margin: 10px 20px;" align="center">'.$this->session->flashdata('sukses').'</p>';
                }
            ?>
                <div class="form-group">
                    <input class="form-control" type="text" name="username" placeholder="Username" required="" value="<?php echo set_value('username'); ?>"/>
                </div>
                <p> <?php echo form_error('username'); ?> </p>
                           
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password" required="" value="<?php echo set_value('password'); ?>"/>
                </div>
                <p> <?php echo form_error('password'); ?> </p>
                <button style="float: right;" type="submit" class="btn btn-primary block full-width m-b" name="btnSubmit">Login</button>

            <?php echo form_close();?>

            <p class="m-t"> <small>DulGrammer &copy; 2019</small> </p>
        </div>
    </div>




                           