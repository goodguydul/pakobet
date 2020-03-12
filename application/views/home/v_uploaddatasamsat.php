
             <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Olah Faktur Ke Samsat</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Upload Data Samsat</strong>
                        </li>
                    </ol>
                </div>

            </div>
            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Cari Data</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="col-lg-9">
                                    <div class="form form-inline" >
                                        <div class="form-group autocomplete">
                                            <input id="nmr_faktur" type="text" class="form-control" name="nmr_faktur" required placeholder="Masukkan Nomor Faktur" style="width: 260px">                                          
                                        </div>
                                        <div class="form-group">                                           
                                            <button id="search" class="btn btn-primary" style="margin-left: 10px">Cari</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                         
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div id="uploadsec" class="ibox" style="display: none;"><!--  -->
                            <div class="ibox-title">
                                <h5>Upload Data Samsat</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="col-lg-12">
                                    <form method="POST" action="#" class="form" role="form">
                                        <div class="form-group  row">
                                            <label class="col-sm-2 col-form-label">Nomor Faktur</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="no_faktur" name="nmr_faktur" class="form-control" disabled value="">
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group  row">
                                            <label class="col-sm-2 col-form-label">Nama Pemilik</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="nama" name="nama" class="form-control" disabled value="">
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group  row">
                                            <label class="col-sm-2 col-form-label">Tanggal Faktur</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="tgl_faktur" name="tgl_faktur" class="form-control" disabled value="">
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group  row">
                                            <label class="col-sm-2 col-form-label">Upload STNK</label>
                                            <div class="col-sm-5 custom-file" style="margin-left: 15px">
                                                <input id="logo" type="file" class="custom-file-input" name="stnk" accept="image/*" required>
                                                <label for="logo" class="custom-file-label">Pilih File (jpg, jpeg, png)...</label>
                                            </div> 
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group  row">
                                            <label class="col-sm-2 col-form-label">Upload BPKB</label>
                                            <div class="col-sm-5 custom-file" style="margin-left: 15px">
                                                <input id="logo" type="file" class="custom-file-input" name="bpkb" accept="image/*" required>
                                                <label for="logo" class="custom-file-label">Pilih File (jpg, jpeg, png)...</label>
                                            </div> 
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group row" >
                                            <div class="col-sm-12 col-sm-offset-2" >
                                                <button class="btn btn-primary btn-sm float-right" type="submit" style="margin-left: 10px">Save changes</button>

                                                <button class="btn btn-white btn-sm float-right" onClick="window.location.reload()" >Cancel</button>
                                            </div>
                                        </div>  
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="modalWarn" class="modal fade">
                            <div class="modal-dialog modal-confirm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body text-center" style="padding: 20px 30px 5px 30px;">
                                    <div style="text-align: center;margin: -20px -50px 5px -50px;background-color: #ff5e5e;padding: 0px 0px 20px 0px;">
                                        <div class="icon-box">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                        <h4 style="padding-top: 13px;font-size: 26px">Data Tidak Ditemukan!</h4> 
                                        <p style="font-size: 13px">Nomor faktur yang Anda masukkan tidak ditemukan di dalam database!</p>
                                        <button class="btn btn-success" data-dismiss="modal"><span>Oke</span></button>
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
    <script type="text/javascript">
        function autocomplete(inp, arr) {
          /*the autocomplete function takes two arguments,
          the text field element and an array of possible autocompleted values:*/
          var currentFocus;
          /*execute a function when someone writes in the text field:*/
          inp.addEventListener("input", function(e) {
              var a, b, i, val = this.value;
              /*close any already open lists of autocompleted values*/
              closeAllLists();
              if (!val) { return false;}
              currentFocus = -1;
              /*create a DIV element that will contain the items (values):*/
              a = document.createElement("DIV");
              a.setAttribute("id", this.id + "autocomplete-list");
              a.setAttribute("class", "autocomplete-items");
              /*append the DIV element as a child of the autocomplete container:*/
              this.parentNode.appendChild(a);
              /*for each item in the array...*/
              for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                  /*create a DIV element for each matching element:*/
                  b = document.createElement("DIV");
                  /*make the matching letters bold:*/
                  b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                  b.innerHTML += arr[i].substr(val.length);
                  /*insert a input field that will hold the current array item's value:*/
                  b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                  /*execute a function when someone clicks on the item value (DIV element):*/
                  b.addEventListener("click", function(e) {
                      /*insert the value for the autocomplete text field:*/
                      inp.value = this.getElementsByTagName("input")[0].value;
                      /*close the list of autocompleted values,
                      (or any other open lists of autocompleted values:*/
                      closeAllLists();
                  });
                  a.appendChild(b);
                }
              }
          });
          /*execute a function presses a key on the keyboard:*/
          inp.addEventListener("keydown", function(e) {
              var x = document.getElementById(this.id + "autocomplete-list");
              if (x) x = x.getElementsByTagName("div");
              if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
              } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
              } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                  /*and simulate a click on the "active" item:*/
                  if (x) x[currentFocus].click();
                }
              }
          });
          function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
          }
          function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
              x[i].classList.remove("autocomplete-active");
            }
          }
          function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
              if (elmnt != x[i] && elmnt != inp) {
                x[i].parentNode.removeChild(x[i]);
              }
            }
          }
          /*execute a function when someone clicks in the document:*/
          document.addEventListener("click", function (e) {
              closeAllLists(e.target);
          });
        }

        var data = ["0SNALP09NM","MK9JGD905E","QVC2UVEG7J","50O9S23QT1","HKZ2RWW1SH","86M2VVB3SZ","CO6BIBQJSN","O01353WIM7","IJFMASA3A0","8YEUSO6RYH","3UIYKA9E1P","OJV60OL9FK","TN6GA96WCC","HAPK2UOUT4","B7U03HHPWA","98Q32FTEIM","SMFDLTLYJN","E9RDB9GIPU","F1VH39M62O","NJETBIUVS2","WA0F6NWA1X","THGCRDP1ZJ","0RI8IKED2V","OSXN7HIYCQ","64E25X1GBN","SS5FOHY3UE","LYV31PSPCZ","7G5ET1YVPT","ZFN598VZWW","NV8UAPTYEM","HSEKUXDETR","U8Z2WQMI7B","B588Y8IYI2","KOPKGMIBJ3","2ZT5CQ48CI","X0JCAL98DN","HZVDJKFXMH","60JNKV651T","97G15POJBK","J76XU3RH6Z","RIJZMKBEXE","5JJR11PACI","HWMF8U78H9","FD1WVCC13S","AKKXC6WGK4","CX6VUF0HSR","URLOEGGXFF","V8V02VKDI1","RWRCJR5FQY","QMI0UWHMDP","AZ4IMWC5FL","434SSV06K1","GMVGQAFQVU","6WE7KFYQWL","9PWAYFRO1G","34C60Z4638","Q3DRNH4Q1M","5I6BZDPMSN","29V3V456CJ","9WAB6PZA7B","LP34B391KG","VN4CGD8MUC","TY2FH5A3MZ","XKYPFZFVF4","ONU9O9GCKO","KZMEYGL2O2","GWPX2ND0Z9","IUKIQSCMKD","9LSYR2IPBM","BLJF16KM47","NKCM3M9LMN","JYIVQOE89B","M7KQ2KS74T","6EOGS2BY19","5HPU5P5KY8","CG57BXVCDM","TV1LDO1Y9J","XAB6SG22LD","1KNQB89PPJ","OZ3BNEIL2G","BNNHR71V88","VN2GRNH4A7","CVECAQWCE1","Q4S57T14HF","2D2SMY4SYN","DYKYXEECG3","WES7FQP7W5","OQ9H3OCYBX","OPG9MI0CNV","PT6RIV7VLV","7F069HOWED","Z9TJ5NEAQ5","4L8JXSX4VD","YAWD3G9NY8","6T0HIIUDCI","ERT0MTO9ZB","C445UWOHPN","HSHGOTY5SD","VLHK2795MW","Z6MMMJPE3P"];

        autocomplete(document.getElementById("nmr_faktur"), data);
    </script>
    <script type="text/javascript">
        $('.custom-file-input').on('change', function() {
           let fileName = $(this).val().split('\\').pop();
           $(this).next('.custom-file-label').addClass("selected").html(fileName);
        }); 
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#search').click(function(){
            var nmr_faktur= $('#nmr_faktur').val();
            if(nmr_faktur != '')
            {
                $.ajax({
                    url:"<?php echo base_url();?>home/cariDataFaktur",
                    method:"POST",
                    data:{nmr_faktur:nmr_faktur},
                    dataType:"JSON",
                    success:function(data)
                    {  
                        if(data==null){
                            $('#uploadsec').css("display", "none");
                            $('#modalWarn').modal('show');
                        }else{
                            $('#uploadsec').fadeIn(700);
                            $('#no_faktur').val(data.nmr_faktur);
                            $('#nama').val(data.nama_pemilik);
                            $('#tgl_faktur').val(data.tgl_faktur);
                        }
                        
                    }
                });

            }
            else
            {
                alert("Nomor Faktur Kosong !");
                $('#uploadsec').css("display", "none");
            }
            });
        });
    </script>
    <script src="<?php echo base_url();?>asset/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>asset/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url();?>asset/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>