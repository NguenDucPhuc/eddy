<!-- basic scripts -->

<!--[if !IE]> -->
<script src="{{asset('admin_assets/js/jquery-2.1.4.min.js')}}"></script>

<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='{{asset('admin_assets/js/jquery.mobile.custom.min.js')}}>"+"<"+"/script>");
</script>
<script src="{{asset('admin_assets/js/bootstrap.min.js')}}"></script>

<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js')}}"></script>
		<![endif]-->
		<script src="{{asset('admin_assets/js/jquery-ui.custom.min.js')}}"></script>
		<script src="{{asset('admin_assets/js/jquery.ui.touch-punch.min.js')}}"></script>
		<script src="{{asset('admin_assets/js/jquery.easypiechart.min.js')}}"></script>
		<script src="{{asset('admin_assets/js/jquery.sparkline.index.min.js')}}"></script>
		<script src="{{asset('admin_assets/js/jquery.flot.min.js')}}"></script>
		<script src="{{asset('admin_assets/js/jquery.flot.pie.min.js')}}"></script>
		<script src="{{asset('admin_assets/js/jquery.flot.resize.min.js')}}"></script>
		<script src="{{asset('admin_assets/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('admin_assets/js/jquery.dataTables.bootstrap.min.js')}}"></script>
		<script src="{{asset('admin_assets/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{asset('admin_assets/js/buttons.flash.min.js')}}"></script>
		<script src="{{asset('admin_assets/js/buttons.html5.min.js')}}"></script>
		<script src="{{asset('admin_assets/js/buttons.print.min.js')}}"></script>
		<script src="{{asset('admin_assets/js/buttons.colVis.min.js')}}"></script>
		<script src="{{asset('admin_assets/js/dataTables.select.min.js')}}"></script>

		<!-- ace scripts -->
		<script src="{{asset('admin_assets/js/ace-elements.min.js')}}"></script>
		<script src="{{asset('admin_assets/js/ace.min.js')}}"></script>
		<script src="{{asset('admin_assets/js/myjs.js')}}"></script>

		<!-- inline scripts related to this page -->
		<!-- chart -->
		<script src="{{ asset('admin_assets/js/Chart.js') }}"></script>
		<!-- //chart -->
		<script src="{{ asset('admin_assets/js/pie-chart.js') }}" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ffc168',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });


        });

    </script>
		

		
		