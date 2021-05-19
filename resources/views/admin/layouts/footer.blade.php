<footer class="main-footer">
    <strong>Copyright &copy; 2020-{{ date('Y') }} <a href=""> <!--AdminLTE.io --></a>.</strong>
   <p>
    This Project has been Developed by Zakhele Khumalo. to get the source code contact me on (+27 793225753).
    <a href="https://web.facebook.com/zakhele.harries" target="_blank">
        <i class="fab fa-facebook-f"></i>

      </a>
      &nbsp; &nbsp;
      <a href="https://www.linkedin.com/in/zakhele-harries-64745b121/" target="_blank">
        <i class="fab fa-linkedin-in"></i>

      </a>



    <div class="float-right d-none d-sm-inline-block">
       <!-- <b>Version</b> 3.1.0-pre -->
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/bind.js') }}" defer></script>
<script src="{{ asset('plugins/jquery/jquery.min.js') }}" defer></script>
<!-- jQuery UI 1.11.4 -->

<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}" defer></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->

<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
<!-- ChartJS -->

<script src="{{ asset('plugins/chart.js/Chart.min.js') }}" defer></script>
<!-- Sparkline -->

<script src="{{ asset('plugins/sparklines/sparkline.js') }}" defer></script>
<!-- JQVMap -->

<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}" defer></script>

<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}" defer></script>
<!-- jQuery Knob Chart -->

<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}" defer></script>
<!-- daterangepicker -->

<script src="{{ asset('plugins/moment/moment.min.js') }}" defer></script>

<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}" defer></script>
<!-- Tempusdominus Bootstrap 4 -->


<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}" defer></script>
<!-- Summernote -->

<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}" defer></script>
<!-- overlayScrollbars -->

<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}" defer></script>
<!-- AdminLTE App -->


<script src="{{ asset('dist/js/adminlte.js') }}" defer></script>
<!-- AdminLTE for demo purposes -->

<script src="{{ asset('dist/js/demo.js') }}" defer></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<script src="{{ asset('dist/js/pages/dashboard.js') }}" defer></script>
<script src="{{ asset('dist/js/demo.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>


@if(Session::has('size_add'))
<script>

swal("Door Added","{!! Session::get('size_add') !!}","success",{
    button:"OK",
})

</script>

@endif



<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>

<script type="text/javascript">
    $('#mail').on('change',function(){

      if(this.value==="1"){
          $('#department').show()
      }else{
          $('#department').hide()
      }
      if(this.value==="2"){
          $('#person').show()
      }else{
          $('#person').hide()
      }

    })
</script>


</body>
</html>
