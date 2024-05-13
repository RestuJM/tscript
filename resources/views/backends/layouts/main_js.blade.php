<!-- BEGIN VENDOR JS-->
<script src="{{ asset('backend/app-assets/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{ asset('backend/app-assets/vendors/js/charts/raphael-min.js') }}"></script>
<script src="{{ asset('backend/app-assets/vendors/js/charts/morris.min.js') }}"></script>
<script src="{{ asset('backend/app-assets/vendors/js/charts/chart.min.js') }}"></script>
<script src="{{ asset('backend/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script src="{{ asset('backend/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js') }}"></script>
<script src="{{ asset('backend/app-assets/vendors/js/extensions/moment.min.js') }}"></script>
<script src="{{ asset('backend/app-assets/vendors/js/extensions/underscore-min.js') }}"></script>
<script src="{{ asset('backend/app-assets/vendors/js/extensions/clndr.min.js') }}"></script>
<script src="{{ asset('backend/app-assets/vendors/js/charts/echarts/echarts.js') }}"></script>
<script src="{{ asset('backend/app-assets/vendors/js/extensions/unslider-min.js') }}"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN JS-->
<script src="{{ asset('backend/app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('backend/app-assets/js/core/app.js') }}"></script>
<!-- END JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{ asset('backend/app-assets/js/scripts/pages/dashboard-ecommerce.js') }}"></script>
<!-- END PAGE LEVEL JS-->
<script src="{{asset('customs/js/custom.js')}}"></script>
<script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
@yield('js')
