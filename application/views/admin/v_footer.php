
  

    <!-- Peity -->
    <script src="<?php echo base_url();?>asset/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url();?>asset/js/inspinia.js"></script>
    <script src="<?php echo base_url();?>asset/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?php echo base_url();?>asset/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <script type="text/javascript">
        tday=new Array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
        tmonth=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

        function GetClock(){
            var d=new Date();
            var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
            if(nyear<1000) nyear+=1900;
            var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds();
            if(nmin<=9) nmin="0"+nmin
                if(nsec<=9) nsec="0"+nsec;
            document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+ndate+" "+tmonth[nmonth]+" "+nyear+" "+nhour+":"+nmin+":"+nsec+"";
            }
            window.onload=function(){
                GetClock();
                setInterval(GetClock,1000);
            }
    </script>

    <script src="<?php echo base_url();?>js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>

    
</body>
</html>