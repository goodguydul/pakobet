            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Olah Data Faktur</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Input Faktur Baru</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="wrapper wrapper-content">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Form Data Faktur</h5>
                            </div>
                            <div class="ibox-content">
                                <h2>
                                    Form Data Faktur
                                </h2>
                                <p>
                                    Silahkan isi formulir dibawah ini.
                                </p>

                                <form id="form" method="POST" action="#" class="wizard-big">
                                    <h1>IDENTITAS PEMILIK</h1>
                                    <fieldset>
                                        <h2>IDENTITAS PEMILIK</h2>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <label>Nomor Faktur</label>
                                                    <input id="no_faktur" name="no_faktur" type="text" class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal Faktur</label>
                                                    <input id="tgl_faktur" name="tgl_faktur" type="date" class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama Pemilik</label>
                                                    <input id="nama_pemilik" name="nama_pemilik" type="text" class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jenis Identitas</label>
                                                    <select id="jen_id" name="jen_id" type="text" class="form-control required">
                                                        <option value="ktp">KTP</option>
                                                        <option value="sim">SIM</option>
                                                        <option value="paspor">PASPOR</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nomor Identitas</label>
                                                    <input id="no_id" name="no_id" type="text" class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <textarea id="alamat" name="alamat" class="form-control required"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="text-center">
                                                    <div style="margin-top: 20px">
                                                        <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <h1>IDENTITAS KENDARAAN</h1>
                                    <fieldset>
                                        <h2>IDENTITAS KENDARAAN</h2>
                                        <div class="row">  
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <label>Merk</label>
                                                    <input id="merk" name="merk" type="text" class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label>Type</label>
                                                    <input id="type" name="type" type="text" class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jenis</label>
                                                    <input id="jenis_kend" name="jenis_kend" type="text" class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label>Model</label>
                                                    <input id="model" name="model" type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tahun Pembuatan</label>
                                                    <input id="thn_pembuatan" name="thn_pembuatan" type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Isi Silinder</label>
                                                    <input id="isi_silinder" name="isi_silinder" type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Warna</label>
                                                    <input id="warna" name="warna" type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>No. Rangka/NIK/VIN</label>
                                                    <input id="no_rangka" name="no_rangka" type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>No. Mesin</label>
                                                    <input id="no_mesin" name="no_mesin" type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Bahan Bakar</label>
                                                    <input id="bbm" name="bbm" type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Harga</label>
                                                    <input id="harga_kend" name="harga_kend" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <h1>Data Dokumen Pendukung</h1>
                                    <fieldset>
                                        <div class="row">  
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <label>Formula A/B</label>
                                                    NO <input id="form_ab" name="form_ab" type="text" class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label>PIB</label>
                                                    NO <input id="pib" name="pib" type="text" class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label>TPT</label>
                                                    NO <input id="tpt" name="tpt" type="text" class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label>SUT</label>
                                                    NO <input id="sut" name="sut" type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>SRUT</label>
                                                    NO <input id="srut" name="srut" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <h1>Selesai</h1>
                                    <fieldset>
                                        <div class="text-center" style="margin-top: 120px">
                                            <h2>Silahkan cek kembali data-data yang dimasukkan agar tidak terjadi kesalahan data !</h2>
                                        </div>
                                    </fieldset>

                                </form>
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


      <!-- Mainly scripts -->
    <script src="<?php echo base_url();?>asset/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>asset/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url();?>asset/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- Steps -->
    <script src="<?php echo base_url();?>asset/js/plugins/steps/jquery.steps.min.js"></script>

    <!-- Jquery Validate -->
    <script src="<?php echo base_url();?>asset/js/plugins/validate/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Suppress (skip) "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
                    {
                        $(this).steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
            }).validate({
                        errorPlacement: function (error, element)
                        {
                            element.before(error);
                        },
                        rules: {
                            confirm: {
                                equalTo: "#password"
                            }
                        }
                    });
       });
    </script>