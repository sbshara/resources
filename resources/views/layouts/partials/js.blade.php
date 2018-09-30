<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
{{-- <script src="bower_components/jquery/dist/jquery.min.js"></script> --}}

<!-- jQuery UI 1.11.4 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
{{-- <script src="bower_components/jquery-ui/jquery-ui.min.js"></script> --}}

<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
{{-- <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script> --}}

<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js"></script>
{{-- <script src="bower_components/raphael/raphael.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
{{-- <script src="bower_components/morris.js/morris.min.js"></script> --}}

<!-- Sparkline -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
{{-- <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script> --}}

<!-- jvectormap 2.0.4 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.4/jquery-jvectormap.js"></script>
{{-- <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script> --}}
{{-- <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> --}}

<!-- jQuery Knob Chart -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.13/jquery.knob.min.js"></script>
{{-- <script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script> --}}

<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
{{-- <script src="bower_components/moment/min/moment.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.3/daterangepicker.min.js"></script>
{{-- <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script> --}}

<!-- datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
{{-- <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script> --}}

<!-- Bootstrap WYSIHTML5 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-wysiwyg/0.3.3/bootstrap3-wysihtml5.all.min.js"></script>
{{-- <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script> --}}

<!-- Slimscroll -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
{{-- <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script> --}}

<!-- FastClick -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js"></script>
{{-- <script src="bower_components/fastclick/lib/fastclick.js"></script> --}}


<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('js/pages/dashboard.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('js/demo.js') }}"></script>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>$.widget.bridge('uibutton', $.ui.button);</script>

@yield('otherJS')